<?php 

include_once "./respJson.php";

class API{
    private $getJsonResp;
    private $respJson;

    public function __construct($value){
        $this->getJsonResp = json_decode($value, true);
        $this->respJson = new RespJson();

        try{
            $this->respJson->setShowApi(true);
            switch ($this->getJsonResp["req_type"]) {
                case 'insertUser':
                    $this->respJson->setApiResp('{"add": "haha"}');
                    $this->respJson->sendResponse();
                    break;
                
                default:
                    $this->respJson->setShowApi(false);
                    $this->respJson->setHttpStatusCode(404);
                    $this->respJson->sendResponse();
                    break;
            }            
        }catch(Exception $e){
            $this->respJson->setKeyValueApi("api_error", $e);
            $this->respJson->setHttpStatusCode(404);
            $this->respJson->sendResponse();
        }

    }
}

new API(file_get_contents("php://input"));

?>