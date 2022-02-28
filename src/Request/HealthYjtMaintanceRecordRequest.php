<?php
namespace Aoxiang\JdJos\Request;
class HealthYjtMaintanceRecordRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.health.yjt.maintance.record";
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
                                    	                        	                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $appKey;
    	                        
	public function setAppKey($appKey){
		$this->appKey = $appKey;
         $this->apiParas["appKey"] = $appKey;
	}

	public function getAppKey(){
	  return $this->appKey;
	}

                        	                   			private $jsonArrayDetails;
    	                                                            
	public function setJsonArrayDetails($jsonArrayDetails){
		$this->jsonArrayDetails = $jsonArrayDetails;
         $this->apiParas["jsonArray_details"] = $jsonArrayDetails;
	}

	public function getJsonArrayDetails(){
	  return $this->jsonArrayDetails;
	}

                        	                   			private $enterpriseId;
    	                        
	public function setEnterpriseId($enterpriseId){
		$this->enterpriseId = $enterpriseId;
         $this->apiParas["enterpriseId"] = $enterpriseId;
	}

	public function getEnterpriseId(){
	  return $this->enterpriseId;
	}

                        	                   			private $forceRegisterFlag;
    	                        
	public function setForceRegisterFlag($forceRegisterFlag){
		$this->forceRegisterFlag = $forceRegisterFlag;
         $this->apiParas["forceRegisterFlag"] = $forceRegisterFlag;
	}

	public function getForceRegisterFlag(){
	  return $this->forceRegisterFlag;
	}

                        	                   			private $goodsType;
    	                        
	public function setGoodsType($goodsType){
		$this->goodsType = $goodsType;
         $this->apiParas["goodsType"] = $goodsType;
	}

	public function getGoodsType(){
	  return $this->goodsType;
	}

                        	                   			private $maintanceDate;
    	                        
	public function setMaintanceDate($maintanceDate){
		$this->maintanceDate = $maintanceDate;
         $this->apiParas["maintanceDate"] = $maintanceDate;
	}

	public function getMaintanceDate(){
	  return $this->maintanceDate;
	}

                        	                   			private $maintanceManId;
    	                        
	public function setMaintanceManId($maintanceManId){
		$this->maintanceManId = $maintanceManId;
         $this->apiParas["maintanceManId"] = $maintanceManId;
	}

	public function getMaintanceManId(){
	  return $this->maintanceManId;
	}

                        	                   			private $maintanceType;
    	                        
	public function setMaintanceType($maintanceType){
		$this->maintanceType = $maintanceType;
         $this->apiParas["maintanceType"] = $maintanceType;
	}

	public function getMaintanceType(){
	  return $this->maintanceType;
	}

                        	                   			private $otcType;
    	                        
	public function setOtcType($otcType){
		$this->otcType = $otcType;
         $this->apiParas["otcType"] = $otcType;
	}

	public function getOtcType(){
	  return $this->otcType;
	}

                        	                   			private $prescriptionDrug;
    	                        
	public function setPrescriptionDrug($prescriptionDrug){
		$this->prescriptionDrug = $prescriptionDrug;
         $this->apiParas["prescriptionDrug"] = $prescriptionDrug;
	}

	public function getPrescriptionDrug(){
	  return $this->prescriptionDrug;
	}

                        	                   			private $remark;
    	                        
	public function setRemark($remark){
		$this->remark = $remark;
         $this->apiParas["remark"] = $remark;
	}

	public function getRemark(){
	  return $this->remark;
	}

                        	}





        
 

