<?php
namespace Aoxiang\JdJos\Request;
class AscBizCustomerDeliveryStoreApplyRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.asc.biz.customerDeliveryStoreApply";
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
    private  $CustomerDeliveryStoreApplyCmd;

    public function setCustomerDeliveryStoreApplyCmd($CustomerDeliveryStoreApplyCmd){
        $this->apiParas['CustomerDeliveryStoreApplyCmd'] = $CustomerDeliveryStoreApplyCmd;
    }
    public function getCustomerDeliveryStoreApplyCmd(){
        return $this->apiParas['CustomerDeliveryStoreApplyCmd'];
    }
}

?>