<?php
namespace Aoxiang\JdJos\Request;
class ComJdLdopAlphaWaybillApiOutageQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.com.jd.ldop.alpha.waybill.api.outageQuery";
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

                        	                   			private $providerId;
    	                        
	public function setProviderId($providerId){
		$this->providerId = $providerId;
         $this->apiParas["providerId"] = $providerId;
	}

	public function getProviderId(){
	  return $this->providerId;
	}

                                            		                                    	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                        	                   			private $provinceName;
    	                        
	public function setProvinceName($provinceName){
		$this->provinceName = $provinceName;
         $this->apiParas["provinceName"] = $provinceName;
	}

	public function getProvinceName(){
	  return $this->provinceName;
	}

                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $cityName;
    	                        
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["cityName"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
	}

                        	                   			private $countryId;
    	                        
	public function setCountryId($countryId){
		$this->countryId = $countryId;
         $this->apiParas["countryId"] = $countryId;
	}

	public function getCountryId(){
	  return $this->countryId;
	}

                        	                   			private $countryName;
    	                        
	public function setCountryName($countryName){
		$this->countryName = $countryName;
         $this->apiParas["countryName"] = $countryName;
	}

	public function getCountryName(){
	  return $this->countryName;
	}

                        	                   			private $countrysideId;
    	                        
	public function setCountrysideId($countrysideId){
		$this->countrysideId = $countrysideId;
         $this->apiParas["countrysideId"] = $countrysideId;
	}

	public function getCountrysideId(){
	  return $this->countrysideId;
	}

                        	                   			private $countrysideName;
    	                        
	public function setCountrysideName($countrysideName){
		$this->countrysideName = $countrysideName;
         $this->apiParas["countrysideName"] = $countrysideName;
	}

	public function getCountrysideName(){
	  return $this->countrysideName;
	}

                        	                   			private $address;
    	                        
	public function setAddress($address){
		$this->address = $address;
         $this->apiParas["address"] = $address;
	}

	public function getAddress(){
	  return $this->address;
	}

                                                        }





        
 

