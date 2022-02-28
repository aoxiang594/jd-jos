<?php
namespace Aoxiang\JdJos\Request;
class UeRecoveryOrderBookedRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.recovery.order.booked";
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

                                            		                                    	                   			private $engineerFinalOperate;
    	                        
	public function setEngineerFinalOperate($engineerFinalOperate){
		$this->engineerFinalOperate = $engineerFinalOperate;
         $this->apiParas["engineerFinalOperate"] = $engineerFinalOperate;
	}

	public function getEngineerFinalOperate(){
	  return $this->engineerFinalOperate;
	}

                        	                   			private $userFinalOnsite;
    	                        
	public function setUserFinalOnsite($userFinalOnsite){
		$this->userFinalOnsite = $userFinalOnsite;
         $this->apiParas["userFinalOnsite"] = $userFinalOnsite;
	}

	public function getUserFinalOnsite(){
	  return $this->userFinalOnsite;
	}

                        	                   			private $userFirstOnsite;
    	                        
	public function setUserFirstOnsite($userFirstOnsite){
		$this->userFirstOnsite = $userFirstOnsite;
         $this->apiParas["userFirstOnsite"] = $userFirstOnsite;
	}

	public function getUserFirstOnsite(){
	  return $this->userFirstOnsite;
	}

                        	                   			private $engineerFirstOperate;
    	                        
	public function setEngineerFirstOperate($engineerFirstOperate){
		$this->engineerFirstOperate = $engineerFirstOperate;
         $this->apiParas["engineerFirstOperate"] = $engineerFirstOperate;
	}

	public function getEngineerFirstOperate(){
	  return $this->engineerFirstOperate;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                                                    	                   			private $code;
    	                        
	public function setCode($code){
		$this->code = $code;
         $this->apiParas["code"] = $code;
	}

	public function getCode(){
	  return $this->code;
	}

                            }





        
 

