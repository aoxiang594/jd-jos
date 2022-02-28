<?php
namespace Aoxiang\JdJos\Request;
class AscBizAuditRefuseRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.biz.audit.refuse";
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
    private  $RefuseServiceCmd;

    public function setRefuseServiceCmd($RefuseServiceCmd){
        $this->apiParas['RefuseServiceCmd'] = $RefuseServiceCmd;
    }
    public function getRefuseServiceCmd(){
        return $this->apiParas['RefuseServiceCmd'];
    }
}

?>