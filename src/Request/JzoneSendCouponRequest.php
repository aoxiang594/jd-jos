<?php
namespace Aoxiang\JdJos\Request;
class JzoneSendCouponRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jzone.sendCoupon";
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
                                                        		                                    	                   			private $channle;
    	                        
	public function setChannle($channle){
		$this->channle = $channle;
         $this->apiParas["channle"] = $channle;
	}

	public function getChannle(){
	  return $this->channle;
	}

                        	                   			private $deployAppName;
    	                        
	public function setDeployAppName($deployAppName){
		$this->deployAppName = $deployAppName;
         $this->apiParas["deployAppName"] = $deployAppName;
	}

	public function getDeployAppName(){
	  return $this->deployAppName;
	}

                        	                   			private $hostName;
    	                        
	public function setHostName($hostName){
		$this->hostName = $hostName;
         $this->apiParas["hostName"] = $hostName;
	}

	public function getHostName(){
	  return $this->hostName;
	}

                        	                   			private $clientIP;
    	                        
	public function setClientIP($clientIP){
		$this->clientIP = $clientIP;
         $this->apiParas["clientIP"] = $clientIP;
	}

	public function getClientIP(){
	  return $this->clientIP;
	}

                        	                   			private $version;
    	                        
	public function setVersion($version){
		$this->version = $version;
         $this->apiParas["version"] = $version;
	}

	public function getVersion(){
	  return $this->version;
	}

                        	                   			private $deployAppId;
    	                        
	public function setDeployAppId($deployAppId){
		$this->deployAppId = $deployAppId;
         $this->apiParas["deployAppId"] = $deployAppId;
	}

	public function getDeployAppId(){
	  return $this->deployAppId;
	}

                                                                        		                                    	                   			private $activityKey;
    	                        
	public function setActivityKey($activityKey){
		$this->activityKey = $activityKey;
         $this->apiParas["activityKey"] = $activityKey;
	}

	public function getActivityKey(){
	  return $this->activityKey;
	}

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                            }





        
 

