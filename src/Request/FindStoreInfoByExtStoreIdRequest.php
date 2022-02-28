<?php
namespace Aoxiang\JdJos\Request;
class FindStoreInfoByExtStoreIdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.findStoreInfoByExtStoreId";
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
                                    	                        	                   			private $extStoreId;
    	                        
	public function setExtStoreId($extStoreId){
		$this->extStoreId = $extStoreId;
         $this->apiParas["extStoreId"] = $extStoreId;
	}

	public function getExtStoreId(){
	  return $this->extStoreId;
	}

}





        
 

