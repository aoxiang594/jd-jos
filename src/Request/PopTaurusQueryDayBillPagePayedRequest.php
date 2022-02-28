<?php
namespace Aoxiang\JdJos\Request;
class PopTaurusQueryDayBillPagePayedRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pop.taurus.queryDayBillPagePayed";
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
                                                        		                                    	                   			private $sourceId;
    	                        
	public function setSourceId($sourceId){
		$this->sourceId = $sourceId;
         $this->apiParas["sourceId"] = $sourceId;
	}

	public function getSourceId(){
	  return $this->sourceId;
	}

                        	                   			private $charset;
    	                        
	public function setCharset($charset){
		$this->charset = $charset;
         $this->apiParas["charset"] = $charset;
	}

	public function getCharset(){
	  return $this->charset;
	}

                        	                   			private $dataType;
    	                        
	public function setDataType($dataType){
		$this->dataType = $dataType;
         $this->apiParas["dataType"] = $dataType;
	}

	public function getDataType(){
	  return $this->dataType;
	}

                        	                   			private $secAccountNo;
    	                        
	public function setSecAccountNo($secAccountNo){
		$this->secAccountNo = $secAccountNo;
         $this->apiParas["secAccountNo"] = $secAccountNo;
	}

	public function getSecAccountNo(){
	  return $this->secAccountNo;
	}

                        	                   			private $businessId;
    	                        
	public function setBusinessId($businessId){
		$this->businessId = $businessId;
         $this->apiParas["businessId"] = $businessId;
	}

	public function getBusinessId(){
	  return $this->businessId;
	}

                        	                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $payState;
    	                        
	public function setPayState($payState){
		$this->payState = $payState;
         $this->apiParas["payState"] = $payState;
	}

	public function getPayState(){
	  return $this->payState;
	}

                        	                   			private $version;
    	                        
	public function setVersion($version){
		$this->version = $version;
         $this->apiParas["version"] = $version;
	}

	public function getVersion(){
	  return $this->version;
	}

                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

                        	                   			private $setDateEnd;
    	                        
	public function setSetDateEnd($setDateEnd){
		$this->setDateEnd = $setDateEnd;
         $this->apiParas["setDateEnd"] = $setDateEnd;
	}

	public function getSetDateEnd(){
	  return $this->setDateEnd;
	}

                        	                   			private $accDateEnd;
    	                        
	public function setAccDateEnd($accDateEnd){
		$this->accDateEnd = $accDateEnd;
         $this->apiParas["accDateEnd"] = $accDateEnd;
	}

	public function getAccDateEnd(){
	  return $this->accDateEnd;
	}

                        	                   			private $setDateBegin;
    	                        
	public function setSetDateBegin($setDateBegin){
		$this->setDateBegin = $setDateBegin;
         $this->apiParas["setDateBegin"] = $setDateBegin;
	}

	public function getSetDateBegin(){
	  return $this->setDateBegin;
	}

                        	                   			private $checksum;
    	                        
	public function setChecksum($checksum){
		$this->checksum = $checksum;
         $this->apiParas["checksum"] = $checksum;
	}

	public function getChecksum(){
	  return $this->checksum;
	}

                        	                   			private $accDateBegin;
    	                        
	public function setAccDateBegin($accDateBegin){
		$this->accDateBegin = $accDateBegin;
         $this->apiParas["accDateBegin"] = $accDateBegin;
	}

	public function getAccDateBegin(){
	  return $this->accDateBegin;
	}

                            }





        
 

