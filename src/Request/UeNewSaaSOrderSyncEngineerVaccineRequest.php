<?php
namespace Aoxiang\JdJos\Request;
class UeNewSaaSOrderSyncEngineerVaccineRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.newSaaSOrder.syncEngineerVaccine";
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
                                                        		                                    	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $isVaccination;
    	                        
	public function setIsVaccination($isVaccination){
		$this->isVaccination = $isVaccination;
         $this->apiParas["isVaccination"] = $isVaccination;
	}

	public function getIsVaccination(){
	  return $this->isVaccination;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $temperature;
    	                        
	public function setTemperature($temperature){
		$this->temperature = $temperature;
         $this->apiParas["temperature"] = $temperature;
	}

	public function getTemperature(){
	  return $this->temperature;
	}

                        	                   			private $identityCard;
    	                        
	public function setIdentityCard($identityCard){
		$this->identityCard = $identityCard;
         $this->apiParas["identityCard"] = $identityCard;
	}

	public function getIdentityCard(){
	  return $this->identityCard;
	}

                        	                   			private $vaccineFile;
    	                        
	public function setVaccineFile($vaccineFile){
		$this->vaccineFile = $vaccineFile;
         $this->apiParas["vaccineFile"] = $vaccineFile;
	}

	public function getVaccineFile(){
	  return $this->vaccineFile;
	}

                        	                   			private $vaccinationDate;
    	                        
	public function setVaccinationDate($vaccinationDate){
		$this->vaccinationDate = $vaccinationDate;
         $this->apiParas["vaccinationDate"] = $vaccinationDate;
	}

	public function getVaccinationDate(){
	  return $this->vaccinationDate;
	}

                            }





        
 

