<?php
namespace Aoxiang\JdJos\Request;
class DropshipDpsQueryExpressInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dropship.dps.queryExpressInfo";
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
                                                        		                                    	                        	                   	                    		private $customOrderIds;
    	                        
	public function setCustomOrderIds($customOrderIds){
		$this->customOrderIds = $customOrderIds;
         $this->apiParas["customOrderIds"] = $customOrderIds;
	}

	public function getCustomOrderIds(){
	  return $this->customOrderIds;
	}

                            }





        
 

