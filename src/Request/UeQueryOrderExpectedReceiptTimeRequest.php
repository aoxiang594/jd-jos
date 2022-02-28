<?php
namespace Aoxiang\JdJos\Request;
class UeQueryOrderExpectedReceiptTimeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.queryOrderExpectedReceiptTime";
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
                                                        		                                    	                   			private $queryDateStart;
    	                        
	public function setQueryDateStart($queryDateStart){
		$this->queryDateStart = $queryDateStart;
         $this->apiParas["queryDateStart"] = $queryDateStart;
	}

	public function getQueryDateStart(){
	  return $this->queryDateStart;
	}

                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
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

                        	                   			private $page;
    	                        
	public function setPage($page){
		$this->page = $page;
         $this->apiParas["page"] = $page;
	}

	public function getPage(){
	  return $this->page;
	}

                        	                   			private $createDateEnd;
    	                        
	public function setCreateDateEnd($createDateEnd){
		$this->createDateEnd = $createDateEnd;
         $this->apiParas["createDateEnd"] = $createDateEnd;
	}

	public function getCreateDateEnd(){
	  return $this->createDateEnd;
	}

                            }





        
 

