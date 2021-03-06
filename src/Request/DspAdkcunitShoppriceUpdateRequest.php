<?php
namespace Aoxiang\JdJos\Request;
class DspAdkcunitShoppriceUpdateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adkcunit.shopprice.update";
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
                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $feeStr;
    	                        
	public function setFeeStr($feeStr){
		$this->feeStr = $feeStr;
         $this->apiParas["feeStr"] = $feeStr;
	}

	public function getFeeStr(){
	  return $this->feeStr;
	}

                        	                   			private $inSearchFeeStr;
    	                        
	public function setInSearchFeeStr($inSearchFeeStr){
		$this->inSearchFeeStr = $inSearchFeeStr;
         $this->apiParas["inSearchFeeStr"] = $inSearchFeeStr;
	}

	public function getInSearchFeeStr(){
	  return $this->inSearchFeeStr;
	}

                        	                        	                        	                   			private $mobilePriceCoef;
    	                        
	public function setMobilePriceCoef($mobilePriceCoef){
		$this->mobilePriceCoef = $mobilePriceCoef;
         $this->apiParas["mobilePriceCoef"] = $mobilePriceCoef;
	}

	public function getMobilePriceCoef(){
	  return $this->mobilePriceCoef;
	}

}





        
 

