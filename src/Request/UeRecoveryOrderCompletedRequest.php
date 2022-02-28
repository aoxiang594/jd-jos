<?php
namespace Aoxiang\JdJos\Request;
class UeRecoveryOrderCompletedRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.recovery.order.completed";
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

                                            		                                    	                   			private $nameplatePic;
    	                        
	public function setNameplatePic($nameplatePic){
		$this->nameplatePic = $nameplatePic;
         $this->apiParas["nameplatePic"] = $nameplatePic;
	}

	public function getNameplatePic(){
	  return $this->nameplatePic;
	}

                        	                   			private $realResiduePrice;
    	                        
	public function setRealResiduePrice($realResiduePrice){
		$this->realResiduePrice = $realResiduePrice;
         $this->apiParas["realResiduePrice"] = $realResiduePrice;
	}

	public function getRealResiduePrice(){
	  return $this->realResiduePrice;
	}

                        	                   			private $verifyCode;
    	                        
	public function setVerifyCode($verifyCode){
		$this->verifyCode = $verifyCode;
         $this->apiParas["verifyCode"] = $verifyCode;
	}

	public function getVerifyCode(){
	  return $this->verifyCode;
	}

                        	                   			private $userVerifyPic;
    	                        
	public function setUserVerifyPic($userVerifyPic){
		$this->userVerifyPic = $userVerifyPic;
         $this->apiParas["userVerifyPic"] = $userVerifyPic;
	}

	public function getUserVerifyPic(){
	  return $this->userVerifyPic;
	}

                        	                   			private $finishOrder;
    	                        
	public function setFinishOrder($finishOrder){
		$this->finishOrder = $finishOrder;
         $this->apiParas["finishOrder"] = $finishOrder;
	}

	public function getFinishOrder(){
	  return $this->finishOrder;
	}

                        	                   			private $machinePic;
    	                        
	public function setMachinePic($machinePic){
		$this->machinePic = $machinePic;
         $this->apiParas["machinePic"] = $machinePic;
	}

	public function getMachinePic(){
	  return $this->machinePic;
	}

                        	                   			private $finishOrderRemark;
    	                        
	public function setFinishOrderRemark($finishOrderRemark){
		$this->finishOrderRemark = $finishOrderRemark;
         $this->apiParas["finishOrderRemark"] = $finishOrderRemark;
	}

	public function getFinishOrderRemark(){
	  return $this->finishOrderRemark;
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





        
 

