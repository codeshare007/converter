<?php
/**
 * File contain base QB class and Result class (empty class for Qb reaponse)
 */

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
        $response->clientVersionResult = "";
        return $response;
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
            $this->response->authenticateResult = array("93f91a390fa604207f40e8a94d0d8fd11005de108ec1664234305e17e", "");
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