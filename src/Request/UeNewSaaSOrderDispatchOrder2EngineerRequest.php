<?php
namespace Aoxiang\JdJos\Request;
class UeNewSaaSOrderDispatchOrder2EngineerRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.newSaaSOrder.dispatchOrder2Engineer";
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
    private  $orderSendEngineerParam;

    public function setOrderSendEngineerParam($orderSendEngineerParam){
        $this->apiParas['orderSendEngineerParam'] = $orderSendEngineerParam;
    }
    public function getOrderSendEngineerParam(){
        return $this->apiParas['orderSendEngineerParam'];
    }
}

?>