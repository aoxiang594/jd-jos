<?php
namespace Aoxiang\JdJos\Request;
class GtinWriteBatchAddRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.gtin.write.batchAdd";
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
    private  $batchAddVo;

    public function setBatchAddVo($batchAddVo){
        $this->apiParas['batchAddVo'] = $batchAddVo;
    }
    public function getBatchAddVo(){
        return $this->apiParas['batchAddVo'];
    }
}

?>