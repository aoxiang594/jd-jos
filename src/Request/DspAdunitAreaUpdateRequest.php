<?php
namespace Aoxiang\JdJos\Request;
class DspAdunitAreaUpdateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.dsp.adunit.area.update";
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
                                    	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $areaId;
    	                        
	public function setAreaId($areaId){
		$this->areaId = $areaId;
         $this->apiParas["areaId"] = $areaId;
	}

	public function getAreaId(){
	  return $this->areaId;
	}

                        	                        	}





        
 

