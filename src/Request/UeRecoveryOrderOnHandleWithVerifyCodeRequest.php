<?php
namespace Aoxiang\JdJos\Request;
class UeRecoveryOrderOnHandleWithVerifyCodeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.recovery.order.onHandleWithVerifyCode";
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
                                                        		                                    	                   			private $code;
    	                        
	public function setCode($code){
		$this->code = $code;
         $this->apiParas["code"] = $code;
	}

	public function getCode(){
	  return $this->code;
	}

                        	                   			private $appid;
    	                        
	public function setAppid($appid){
		$this->appid = $appid;
         $this->apiParas["appid"] = $appid;
	}

	public function getAppid(){
	  return $this->appid;
	}

                                            		                                    	                   			private $verifyCode;
    	                        
	public function setVerifyCode($verifyCode){
		$this->verifyCode = $verifyCode;
         $this->apiParas["verifyCode"] = $verifyCode;
	}

	public function getVerifyCode(){
	  return $this->verifyCode;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                                                        }





        
 

