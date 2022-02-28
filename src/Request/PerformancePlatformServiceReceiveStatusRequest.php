<?php
namespace Aoxiang\JdJos\Request;
class PerformancePlatformServiceReceiveStatusRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.performancePlatformService.receiveStatus";
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

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                                            		                                    	                   			private $distributorName;
    	                        
	public function setDistributorName($distributorName){
		$this->distributorName = $distributorName;
         $this->apiParas["distributorName"] = $distributorName;
	}

	public function getDistributorName(){
	  return $this->distributorName;
	}

                        	                   			private $distributorPhone;
    	                        
	public function setDistributorPhone($distributorPhone){
		$this->distributorPhone = $distributorPhone;
         $this->apiParas["distributorPhone"] = $distributorPhone;
	}

	public function getDistributorPhone(){
	  return $this->distributorPhone;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $updateTime;
    	                        
	public function setUpdateTime($updateTime){
		$this->updateTime = $updateTime;
         $this->apiParas["updateTime"] = $updateTime;
	}

	public function getUpdateTime(){
	  return $this->updateTime;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                        	                   			private $receiptCode;
    	                        
	public function setReceiptCode($receiptCode){
		$this->receiptCode = $receiptCode;
         $this->apiParas["receiptCode"] = $receiptCode;
	}

	public function getReceiptCode(){
	  return $this->receiptCode;
	}

                        	                   			private $performancer;
    	                        
	public function setPerformancer($performancer){
		$this->performancer = $performancer;
         $this->apiParas["performancer"] = $performancer;
	}

	public function getPerformancer(){
	  return $this->performancer;
	}

                        	                   			private $cancelReason;
    	                        
	public function setCancelReason($cancelReason){
		$this->cancelReason = $cancelReason;
         $this->apiParas["cancelReason"] = $cancelReason;
	}

	public function getCancelReason(){
	  return $this->cancelReason;
	}

                        	                   			private $distributor;
    	                        
	public function setDistributor($distributor){
		$this->distributor = $distributor;
         $this->apiParas["distributor"] = $distributor;
	}

	public function getDistributor(){
	  return $this->distributor;
	}

                        	                   			private $waybillNo;
    	                        
	public function setWaybillNo($waybillNo){
		$this->waybillNo = $waybillNo;
         $this->apiParas["waybillNo"] = $waybillNo;
	}

	public function getWaybillNo(){
	  return $this->waybillNo;
	}

                        	                   			private $status;
    	                        
	public function setStatus($status){
		$this->status = $status;
         $this->apiParas["status"] = $status;
	}

	public function getStatus(){
	  return $this->status;
	}

                                                        }





        
 

