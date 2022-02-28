<?php
namespace Aoxiang\JdJos\Request;
class ComJdEerdcGrcgEjsfApiOrderElectronicBillApiRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.com.jd.eerdc.grcg.ejsf.api.order.ElectronicBillApi";
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
    private  $electronicBillDTO;

    public function setElectronicBillDTO($electronicBillDTO){
        $this->apiParas['electronicBillDTO'] = $electronicBillDTO;
    }
    public function getElectronicBillDTO(){
        return $this->apiParas['electronicBillDTO'];
    }
}

?>