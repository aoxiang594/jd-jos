<?php
namespace Aoxiang\JdJos\Request;
class PromotionDirectUpdateSkuPriceRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.promotion.directUpdateSkuPrice";
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
                                                        		                                    	                   			private $site;
    	                        
	public function setSite($site){
		$this->site = $site;
         $this->apiParas["site"] = $site;
	}

	public function getSite(){
	  return $this->site;
	}

                        	                   			private $lpType;
    	                        
	public function setLpType($lpType){
		$this->lpType = $lpType;
         $this->apiParas["lpType"] = $lpType;
	}

	public function getLpType(){
	  return $this->lpType;
	}

                        	                        	                   			private $lineationPrice;
    	                        
	public function setLineationPrice($lineationPrice){
		$this->lineationPrice = $lineationPrice;
         $this->apiParas["lineationPrice"] = $lineationPrice;
	}

	public function getLineationPrice(){
	  return $this->lineationPrice;
	}

                        	                   			private $lpUrl;
    	                        
	public function setLpUrl($lpUrl){
		$this->lpUrl = $lpUrl;
         $this->apiParas["lpUrl"] = $lpUrl;
	}

	public function getLpUrl(){
	  return $this->lpUrl;
	}

                        	                   			private $skuId;
    	                        
	public function setSkuId($skuId){
		$this->skuId = $skuId;
         $this->apiParas["skuId"] = $skuId;
	}

	public function getSkuId(){
	  return $this->skuId;
	}

                        	                   			private $applicant;
    	                        
	public function setApplicant($applicant){
		$this->applicant = $applicant;
         $this->apiParas["applicant"] = $applicant;
	}

	public function getApplicant(){
	  return $this->applicant;
	}

                            }





        
 

