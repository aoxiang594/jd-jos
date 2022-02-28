<?php
namespace Aoxiang\JdJos\Request;
class UeBizNewSettleJsfServiceGetSettleBillDetailListRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.bizNewSettleJsfService.getSettleBillDetailList";
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
                                                        		                                    	                   			private $beginDate;
    	                        
	public function setBeginDate($beginDate){
		$this->beginDate = $beginDate;
         $this->apiParas["beginDate"] = $beginDate;
	}

	public function getBeginDate(){
	  return $this->beginDate;
	}

                        	                   			private $itemCatId;
    	                        
	public function setItemCatId($itemCatId){
		$this->itemCatId = $itemCatId;
         $this->apiParas["itemCatId"] = $itemCatId;
	}

	public function getItemCatId(){
	  return $this->itemCatId;
	}

                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $endDate;
    	                        
	public function setEndDate($endDate){
		$this->endDate = $endDate;
         $this->apiParas["endDate"] = $endDate;
	}

	public function getEndDate(){
	  return $this->endDate;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $pageSize;
    	                        
	public function setPageSize($pageSize){
		$this->pageSize = $pageSize;
         $this->apiParas["pageSize"] = $pageSize;
	}

	public function getPageSize(){
	  return $this->pageSize;
	}

                        	                   			private $serviceTypeId;
    	                        
	public function setServiceTypeId($serviceTypeId){
		$this->serviceTypeId = $serviceTypeId;
         $this->apiParas["serviceTypeId"] = $serviceTypeId;
	}

	public function getServiceTypeId(){
	  return $this->serviceTypeId;
	}

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $settleRule;
    	                        
	public function setSettleRule($settleRule){
		$this->settleRule = $settleRule;
         $this->apiParas["settleRule"] = $settleRule;
	}

	public function getSettleRule(){
	  return $this->settleRule;
	}

                        	                   			private $staging;
    	                        
	public function setStaging($staging){
		$this->staging = $staging;
         $this->apiParas["staging"] = $staging;
	}

	public function getStaging(){
	  return $this->staging;
	}

                            }





        
 

