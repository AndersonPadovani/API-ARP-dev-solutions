<?php
header('Content-Type: application/json');

class RespJson{
    private $dataResponse;
    private $httpStatusCode;

    public function __construct(){
        $this->httpStatusCode = 200;

        $this->dataResponse["apiName"] = "ARP Dev Solutions";
        $this->dataResponse["apiVersion"] = "1.0.0";
        $this->dataResponse["apiStatusCode"] = $this->httpStatusCode;
        $this->dataResponse["apiStatus"] = "STATUS OK";   
        $this->dataResponse["apiResp"] = ["status"];       
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