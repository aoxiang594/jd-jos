<?php
namespace Aoxiang\JdJos\Request;
class MedicineDsOrderVendorSelfDeliveryThirdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.medicine.ds.order.vendorSelfDeliveryThird";
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
                                                        		                                    	                   			private $deliveryPhone;
    	                        
	public function setDeliveryPhone($deliveryPhone){
		$this->deliveryPhone = $deliveryPhone;
         $this->apiParas["deliveryPhone"] = $deliveryPhone;
	}

	public function getDeliveryPhone(){
	  return $this->deliveryPhone;
	}

                        	                   			private $operatePerson;
    	                        
	public function setOperatePerson($operatePerson){
		$this->operatePerson = $operatePerson;
         $this->apiParas["operatePerson"] = $operatePerson;
	}

	public function getOperatePerson(){
	  return $this->operatePerson;
	}

                        	                   			private $deliveryPerson;
    	                        
	public function setDeliveryPerson($deliveryPerson){
		$this->deliveryPerson = $deliveryPerson;
         $this->apiParas["deliveryPerson"] = $deliveryPerson;
	}

	public function getDeliveryPerson(){
	  return $this->deliveryPerson;
	}

                        	                   			private $reqTimestamp;
    	                        
	public function setReqTimestamp($reqTimestamp){
		$this->reqTimestamp = $reqTimestamp;
         $this->apiParas["reqTimestamp"] = $reqTimestamp;
	}

	public function getReqTimestamp(){
	  return $this->reqTimestamp;
	}

                        	                   			private $orderId;
    	                        
	public function setOrderId($orderId){
		$this->orderId = $orderId;
         $this->apiParas["orderId"] = $orderId;
	}

	public function getOrderId(){
	  return $this->orderId;
	}

                        	                   			private $latitude;
    	                        
	public function setLatitude($latitude){
		$this->latitude = $latitude;
         $this->apiParas["latitude"] = $latitude;
	}

	public function getLatitude(){
	  return $this->latitude;
	}

                        	                        	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                   			private $deliveryPlatform;
    	                        
	public function setDeliveryPlatform($deliveryPlatform){
		$this->deliveryPlatform = $deliveryPlatform;
         $this->apiParas["deliveryPlatform"] = $deliveryPlatform;
	}

	public function getDeliveryPlatform(){
	  return $this->deliveryPlatform;
	}

                        	                   			private $deliveryStatus;
    	                        
	public function setDeliveryStatus($deliveryStatus){
		$this->deliveryStatus = $deliveryStatus;
         $this->apiParas["deliveryStatus"] = $deliveryStatus;
	}

	public function getDeliveryStatus(){
	  return $this->deliveryStatus;
	}

                        	                   			private $longitude;
    	                        
	public function setLongitude($longitude){
		$this->longitude = $longitude;
         $this->apiParas["longitude"] = $longitude;
	}

	public function getLongitude(){
	  return $this->longitude;
	}

                            }





        
 

