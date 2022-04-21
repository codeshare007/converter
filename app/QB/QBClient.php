<?php
/**
 * File contains class Qb_Clients() extends Qb()
 */

/**
 * Include base class for SOAP SERVER
 */

use Illuminate\Support\Facades\Log;

namespace App\QB;

/**
 * Response class (empty class)
 * 
 * @package QB SOAP
 * @version 2013-10-20
 */
class Response{
}


/**
 * Base class for QuickBooks integration
 * 
 * @package QB SOAP
 * @version 2013-10-20
 */
class Qb
{
    /**
     * Response object
     * @var string
     */
    var $response = '';


    /**
    * Constructor
    *
    * @return   void
    * @access   public
    * @version  2013-10-20
    */
    public function __construct()
    {
        $this->response = new Response();        
        // $this->response->headers->set("Content-Type","text/xml; charset=utf-8");
    }


    /**
     * Function return client version
     *
     * @return  string
     * @param   object $param
     * @access  public
     * @version 2013-10-20
     */
    public function clientVersion($param = '')
    {
        $this->response->clientVersionResult = "";
        return $this->response;
    }


    /**
     * Function return server version
     *
     * @return  string
     * @access  public
     * @version 2013-10-20
     */
    public function serverVersion()
    {
        $this->response->serverVersionResult = "";
        return $this->response;
    }


    /**
     * Function try authenticate user by username/password
     *
     * @return  string
     * @param   object $param
     * @access  public
     * @version 2013-10-20
     */
    public function authenticate($param = '')
    {        
        if(($param->strUserName == "admin") && ($param->strPassword == "admin"))
            $this->response->authenticateResult = array("93f91a390fa11604207f40e8a94d0d8fd11005de108ec1664234305e17e", "");
        else
            $this->response->authenticateResult = array("", "nvu");

        return $this->response;
    }

    /**
     * Function return last error
     *
     * @return  string
     * @param   object $param
     * @access  public
     * @version 2013-10-20
     */
    public function connectionError($param = '')
    {
        $this->response->connectionErrorResult = "connectionError";
        return $this->response;
    }


    /**
     * Function return last error
     *
     * @return  string
     * @param   object $param
     * @access  public
     * @version 2013-10-20
     */
    public function getLastError($param = '')
    {
        $this->response->getLastErrorResult = "getLastError";
        return $this->response;
    }


    /**
     * Function close connection
     *
     * @return  string
     * @param   object $param
     * @access  public
     * @version 2013-10-20
     */
    public function closeConnection($param = '')
    {
        $this->response->closeConnectionResult = "Complete";
        return $this->response;
    }
}

/**
 * Class for import all clients from Qb
 * 
 * @package QB SOAP
 * @version 2013-10-20
 */
class QBClient extends Qb
{    
    /**
     * Function send request for Quickbooks
     *
     * @return  string
     * @param   object $param
     * @access  public
     * @version  2013-10-20
     */
    public function sendRequestXML($param = '')
    {
        \Log::info(print_r($param, true));
        // <!-- ActiveStatus may have one of the following values: ActiveOnly [DEFAULT], InactiveOnly, All -->
        if($param->ticket == "93f91a390fa11604207f40e8a94d0d8fd11005de108ec1664234305e17e"){
            $request = '<?xml version="1.0" encoding="utf-8"?>
                <?qbxml version="2.0"?>
                <QBXML>
                    <QBXMLMsgsRq onError="stopOnError">
                        <CustomerAddRq requestID="1">
                            <CustomerAdd>
                                <Name>Test11 21-4  (' . mt_rand() . ')</Name>
                                <CompanyName>Test11 -4 </CompanyName>
                                <FirstName>Keith</FirstName>
                                <LastName>Palmer</LastName>
                                <BillAddress>
                                    <Addr1>ConsoliBYTE, LLC</Addr1>
                                    <Addr2>134 Stonemill Road</Addr2>
                                    <City>Mansfield</City>
                                    <State>CT</State>
                                    <PostalCode>06268</PostalCode>
                                    <Country>United States</Country>
                                </BillAddress>
                                <Phone>860-634-1602</Phone>
                                <AltPhone>860-429-0021</AltPhone>
                                <Fax>860-429-5183</Fax>
                                <Email>Keith@ConsoliBYTE.com</Email>
                                <Contact>Keith Palmer</Contact>
                            </CustomerAdd>
                        </CustomerAddRq>
                    </QBXMLMsgsRq>
                </QBXML>';
	
            $this->response->sendRequestXMLResult = $request;
        }
        else
            $this->response->sendRequestXMLResult = "E: Invalid ticket.";

        return $this->response;
    }


    /**
     * Function get response from QB
     *
     * @return  string
     * @param   object $param
     * @access  public
     * @version 2013-03-15
     */
    public function receiveResponseXML($param = '')
    {
        $response = simplexml_load_string($param->response);   
        \Log::info(print_r($response, true));
        
        $this->response->receiveResponseXMLResult = '100';

        return $this->response;
        
             

        if( ($param->ticket == "93f91a390fa11604207f40e8a94d0d8fd11005de108ec1664234305e17e") && isset($response->QBXMLMsgsRs->CustomerQueryRs->CustomerRet) ){
            $rows = $response->QBXMLMsgsRs->CustomerQueryRs;
            settype($rows, 'array');

            // if list contain only one item row
            if(isset($rows['CustomerRet']->ListID))
                $rows = array($rows['CustomerRet']);
            else
                $rows = $rows['CustomerRet'];

            $data = array();
            foreach ($rows as $i=>$r) {
                settype($r, 'array');

                $data[] = array(
                    'qb_id' => trim($r['ListID']),
                    'qb_es' => trim($r['EditSequence']),
                    'is_active' => trim($r['IsActive']),
                    'phone' => trim($r['Phone']),
                    'notes' => trim($r['Notes']),
                    'fax'   => trim($r['Fax']),
                    'company_name' => trim($r['Name']),

                    'b_email' => trim($r['Email']),
                    'b_email_other' => trim($r['Cc']),
                    'b_phone' => trim($r['AltPhone']),
                    'b_salutation' => trim($r['Salutation']),
                    'b_fname' => trim($r['FirstName']),
                    'b_lname' => trim($r['LastName']),
                    'b_address' => trim($r['BillAddress']->Addr1),
                    'b_address2' => trim($r['BillAddress']->Addr2),
                    'b_address3' => trim($r['BillAddress']->Addr3),
                    'b_city' => trim($r['BillAddress']->City),
                    'b_state' => trim($r['BillAddress']->State),
                    'b_country' => trim($r['BillAddress']->Country),
                    'b_zip' => trim($r['BillAddress']->PostalCode),
                );
            }          

            $this->response->receiveResponseXMLResult = '30';
        }
        else
            $this->response->receiveResponseXMLResult = '30';

        return $this->response;
    }
}
