<?php
namespace Aoxiang\JdJos\Request;
class UeOrderNewInfoRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.order.new.info";
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
    private  $siteInfoList;

    public function setSiteInfoList($siteInfoList){
        $this->apiParas['siteInfoList'] = $siteInfoList;
    }
    public function getSiteInfoList(){
        return $this->apiParas['siteInfoList'];
    }
}

?>