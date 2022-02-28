<?php
namespace Aoxiang\JdJos\Request;
class SubmitRefundRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.submitRefund";
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
                                                        		                                    	                   			private $freightFeeFlag;
    	                        
	public function setFreightFeeFlag($freightFeeFlag){
		$this->freightFeeFlag = $freightFeeFlag;
         $this->apiParas["freightFeeFlag"] = $freightFeeFlag;
	}

	public function getFreightFeeFlag(){
	  return $this->freightFeeFlag;
	}

                        	                   			private $vendorPin;
    	                        
	public function setVendorPin($vendorPin){
		$this->vendorPin = $vendorPin;
         $this->apiParas["vendorPin"] = $vendorPin;
	}

	public function getVendorPin(){
	  return $this->vendorPin;
	}

                        	                   			private $afsServiceId;
    	                        
	public function setAfsServiceId($afsServiceId){
		$this->afsServiceId = $afsServiceId;
         $this->apiParas["afsServiceId"] = $afsServiceId;
	}

	public function getAfsServiceId(){
	  return $this->afsServiceId;
	}

                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                                                                        		                                    	                   			private $businessUnit;
    	                        
	public function setBusinessUnit($businessUnit){
		$this->businessUnit = $businessUnit;
         $this->apiParas["businessUnit"] = $businessUnit;
	}

	public function getBusinessUnit(){
	  return $this->businessUnit;
	}

                            }





        
 

