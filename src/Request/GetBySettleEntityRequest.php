<?php
namespace Aoxiang\JdJos\Request;
class GetBySettleEntityRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.getBySettleEntity";
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
                                                        		                                    	                   			private $authKey;
    	                        
	public function setAuthKey($authKey){
		$this->authKey = $authKey;
         $this->apiParas["authKey"] = $authKey;
	}

	public function getAuthKey(){
	  return $this->authKey;
	}

                        	                                            		                                    	                   			private $settleEntityId;
    	                        
	public function setSettleEntityId($settleEntityId){
		$this->settleEntityId = $settleEntityId;
         $this->apiParas["settleEntityId"] = $settleEntityId;
	}

	public function getSettleEntityId(){
	  return $this->settleEntityId;
	}

                        	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                                                        }





        
 

