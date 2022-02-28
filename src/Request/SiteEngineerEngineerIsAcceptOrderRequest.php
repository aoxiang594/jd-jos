<?php
namespace Aoxiang\JdJos\Request;
class SiteEngineerEngineerIsAcceptOrderRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.siteEngineer.engineerIsAcceptOrder";
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
                                                        		                                    	                   			private $appid;
    	                        
	public function setAppid($appid){
		$this->appid = $appid;
         $this->apiParas["appid"] = $appid;
	}

	public function getAppid(){
	  return $this->appid;
	}

                        	                   			private $engineerId;
    	                        
	public function setEngineerId($engineerId){
		$this->engineerId = $engineerId;
         $this->apiParas["engineerId"] = $engineerId;
	}

	public function getEngineerId(){
	  return $this->engineerId;
	}

                        	                   			private $isAcceptOrder;
    	                        
	public function setIsAcceptOrder($isAcceptOrder){
		$this->isAcceptOrder = $isAcceptOrder;
         $this->apiParas["isAcceptOrder"] = $isAcceptOrder;
	}

	public function getIsAcceptOrder(){
	  return $this->isAcceptOrder;
	}

                        	                   			private $siteId;
    	                        
	public function setSiteId($siteId){
		$this->siteId = $siteId;
         $this->apiParas["siteId"] = $siteId;
	}

	public function getSiteId(){
	  return $this->siteId;
	}

                            }





        
 

