<?php
namespace Aoxiang\JdJos\Request;
class UeOrderNewFeedBackOrderProgressRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.order.new.feedBackOrderProgress";
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
                                                        		                                    	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $operater;
    	                        
	public function setOperater($operater){
		$this->operater = $operater;
         $this->apiParas["operater"] = $operater;
	}

	public function getOperater(){
	  return $this->operater;
	}

                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $operateType;
    	                        
	public function setOperateType($operateType){
		$this->operateType = $operateType;
         $this->apiParas["operateType"] = $operateType;
	}

	public function getOperateType(){
	  return $this->operateType;
	}

                        	                   			private $dealRemark;
    	                        
	public function setDealRemark($dealRemark){
		$this->dealRemark = $dealRemark;
         $this->apiParas["dealRemark"] = $dealRemark;
	}

	public function getDealRemark(){
	  return $this->dealRemark;
	}

                        	                   			private $settleCode;
    	                        
	public function setSettleCode($settleCode){
		$this->settleCode = $settleCode;
         $this->apiParas["settleCode"] = $settleCode;
	}

	public function getSettleCode(){
	  return $this->settleCode;
	}

                            }





        
 

