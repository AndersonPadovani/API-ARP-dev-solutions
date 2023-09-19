<?php

class RespJson{
    private $dataResponse;
    private $httpStatusCode;

    public function __construct(){
        $this->dataResponse["apiName"] = "ARP Dev Solutions";
        $this->dataResponse["apiVersion"] = "1.0.0";
        $this->dataResponse["apiStatusCode"] = 200;
        $this->dataResponse["apiStatus"] = "STATUS OK";   
        $this->dataResponse["apiResp"] = [];  
        
        $this->httpStatusCode = 200;
    }

    public function setApiResp($value){
        $this->dataResponse["apiResp"] = $value;
    }

    public function setKeyValueApi($chave, $value){
        $this->dataResponse[$chave] = $value;
    }

    public function setHttpStatusCode($value){
        $this->httpStatusCode = $value;
    }

    public function sendResponse(){
        http_response_code($this->httpStatusCode);
        echo json_encode($this->dataResponse);
    }
}

?>