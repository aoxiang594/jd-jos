<?php
namespace Aoxiang\JdJos\Request;
class LdopAlphaWaybillConfirmOrCancelRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ldop.alpha.waybill.confirmOrCancel";
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
                                                        		                                    	                   			private $providerCode;
    	                        
	public function setProviderCode($providerCode){
		$this->providerCode = $providerCode;
         $this->apiParas["providerCode"] = $providerCode;
	}

	public function getProviderCode(){
	  return $this->providerCode;
	}

                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                        	                   			private $dealType;
    	                        
	public function setDealType($dealType){
		$this->dealType = $dealType;
         $this->apiParas["dealType"] = $dealType;
	}

	public function getDealType(){
	  return $this->dealType;
	}

                        	                   			private $vendorOrderCode;
    	                        
	public function setVendorOrderCode($vendorOrderCode){
		$this->vendorOrderCode = $vendorOrderCode;
         $this->apiParas["vendorOrderCode"] = $vendorOrderCode;
	}

	public function getVendorOrderCode(){
	  return $this->vendorOrderCode;
	}

                        	                   			private $platformOrderNo;
    	                        
	public function setPlatformOrderNo($platformOrderNo){
		$this->platformOrderNo = $platformOrderNo;
         $this->apiParas["platformOrderNo"] = $platformOrderNo;
	}

	public function getPlatformOrderNo(){
	  return $this->platformOrderNo;
	}

                        	                   			private $waybillCode;
    	                        
	public function setWaybillCode($waybillCode){
		$this->waybillCode = $waybillCode;
         $this->apiParas["waybillCode"] = $waybillCode;
	}

	public function getWaybillCode(){
	  return $this->waybillCode;
	}

                            }





        
 

