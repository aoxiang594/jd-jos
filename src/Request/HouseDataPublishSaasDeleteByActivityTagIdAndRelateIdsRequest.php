<?php
namespace Aoxiang\JdJos\Request;
class HouseDataPublishSaasDeleteByActivityTagIdAndRelateIdsRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.house.data.publish.saas.deleteByActivityTagIdAndRelateIds";
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
                                    	                   			private $relateInfo;
    	                        
	public function setRelateInfo($relateInfo){
		$this->relateInfo = $relateInfo;
         $this->apiParas["relateInfo"] = $relateInfo;
	}

	public function getRelateInfo(){
	  return $this->relateInfo;
	}

                        	}





        
 

