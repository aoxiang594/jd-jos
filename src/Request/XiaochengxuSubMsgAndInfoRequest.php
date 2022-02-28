<?php
namespace Aoxiang\JdJos\Request;
class XiaochengxuSubMsgAndInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.xiaochengxu.subMsgAndInfo";
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
                                                        		                                    	                   			private $userPin;
    	                        
	public function setUserPin($userPin){
		$this->userPin = $userPin;
         $this->apiParas["userPin"] = $userPin;
	}

	public function getUserPin(){
	  return $this->userPin;
	}

                        	                        	                   			private $modelId;
    	                        
	public function setModelId($modelId){
		$this->modelId = $modelId;
         $this->apiParas["modelId"] = $modelId;
	}

	public function getModelId(){
	  return $this->modelId;
	}

                        	                   			private $pushType;
    	                        
	public function setPushType($pushType){
		$this->pushType = $pushType;
         $this->apiParas["pushType"] = $pushType;
	}

	public function getPushType(){
	  return $this->pushType;
	}

                        	                   			private $onOff;
    	                        
	public function setOnOff($onOff){
		$this->onOff = $onOff;
         $this->apiParas["onOff"] = $onOff;
	}

	public function getOnOff(){
	  return $this->onOff;
	}

                            }





        
 

