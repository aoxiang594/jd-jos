<?php
namespace Aoxiang\JdJos\Request;
class ImOutMerchantChatmessageOpenapiGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.im.out.merchant.chatmessage.openapi.get";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                    	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $sid;
    	                        
	public function setSid($sid){
		$this->sid = $sid;
         $this->apiParas["sid"] = $sid;
	}

	public function getSid(){
	  return $this->sid;
	}

}





        
 

