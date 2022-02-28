<?php
namespace Aoxiang\JdJos\Request;
class ComJdEcoCancelorderGatewayApiOrderAdjustServiceRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.com.jd.eco.cancelorder.gateway.api.OrderAdjustService";
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
                                                        		                                    	                   			private $appName;
    	                        
	public function setAppName($appName){
		$this->appName = $appName;
         $this->apiParas["appName"] = $appName;
	}

	public function getAppName(){
	  return $this->appName;
	}

                        	                   			private $trackId;
    	                        
	public function setTrackId($trackId){
		$this->trackId = $trackId;
         $this->apiParas["trackId"] = $trackId;
	}

	public function getTrackId(){
	  return $this->trackId;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $clientIp;
    	                        
	public function setClientIp($clientIp){
		$this->clientIp = $clientIp;
         $this->apiParas["clientIp"] = $clientIp;
	}

	public function getClientIp(){
	  return $this->clientIp;
	}

                                            		                                    	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $extraParam;
    	                        
	public function setExtraParam($extraParam){
		$this->extraParam = $extraParam;
         $this->apiParas["extraParam"] = $extraParam;
	}

	public function getExtraParam(){
	  return $this->extraParam;
	}

                                                        }





        
 

