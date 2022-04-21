<?php

namespace App\Http\Controllers\QB;
use Illuminate\Http\Response;
class ImportController
{
    public function importCustomer()
    {
        try {
            $procClass     = 'App\QB\QBClient';            
            $storagePath   = storage_path();            
            $server = new \SoapServer($storagePath . '/wsdl/qbwebconnectorsvc.wsdl', array('cache_wsdl' => WSDL_CACHE_NONE));
            $server->setClass($procClass);

            $response = new Response();
            $response->headers->set("Content-Type","text/xml; charset=utf-8");

            ob_start();
            $server->handle();

            $response->setContent(ob_get_clean());
            return $response;
        } catch (\Exception $e) {
            
        }
    }
}