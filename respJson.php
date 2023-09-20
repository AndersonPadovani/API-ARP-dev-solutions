<?php
header('Content-Type: application/json');

class RespJson{
    private $dataResponse;
    private $httpStatusCode;
    private $showApiStatus;

    public function __construct(){
        $this->httpStatusCode = 200;  
        $this->showApiStatus = false;    
    }

    public function apiStatus(){
        if($this->showApiStatus){
            $this->dataResponse["apiName"] = "ARP Dev Solutions";
            $this->dataResponse["apiVersion"] = "1.0.0";
            $this->dataResponse["apiStatusCode"] = $this->httpStatusCode;
            $this->dataResponse["apiStatus"] = "STATUS OK";   
            $this->dataResponse["apiResp"] = ["status"]; 
        }
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
    public function setShowApi($value){
        $this->showApiStatus = $value;
    }

    public function sendResponse(){     
        $this->apiStatus();   
        http_response_code($this->httpStatusCode);
        echo json_encode($this->dataResponse);
    }
}

?>