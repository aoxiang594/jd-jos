<?php
namespace Aoxiang\JdJos\Request;
class ScfInvoiceDetailGetInvoiceDetailListByDailyIdOrApplyIdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.scf.invoice.detail.getInvoiceDetailListByDailyIdOrApplyId";
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
                                                        		                                    	                   			private $applyId;
    	                        
	public function setApplyId($applyId){
		$this->applyId = $applyId;
         $this->apiParas["applyId"] = $applyId;
	}

	public function getApplyId(){
	  return $this->applyId;
	}

                        	                   			private $dailyId;
    	                        
	public function setDailyId($dailyId){
		$this->dailyId = $dailyId;
         $this->apiParas["dailyId"] = $dailyId;
	}

	public function getDailyId(){
	  return $this->dailyId;
	}

                        	                        	                   			private $pageNum;
    	                        
	public function setPageNum($pageNum){
		$this->pageNum = $pageNum;
         $this->apiParas["pageNum"] = $pageNum;
	}

	public function getPageNum(){
	  return $this->pageNum;
	}

                        	                   			private $settleEntityId;
    	                        
	public function setSettleEntityId($settleEntityId){
		$this->settleEntityId = $settleEntityId;
         $this->apiParas["settleEntityId"] = $settleEntityId;
	}

	public function getSettleEntityId(){
	  return $this->settleEntityId;
	}

                            }





        
 

