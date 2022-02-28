<?php
namespace Aoxiang\JdJos\Request;
class CheckSkuSettlePriceRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.checkSkuSettlePrice";
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
                                                        		                                                             	                        	                                                                                                                                                                                                                                                                                                               private $rejectedReason;
                              public function setRejectedReason($rejectedReason ){
                 $this->rejectedReason=$rejectedReason;
                 $this->apiParas["rejectedReason"] = $rejectedReason;
              }

              public function getRejectedReason(){
              	return $this->rejectedReason;
              }
                                                                                                                                                                                                                                                                                                                                              private $id;
                              public function setId($id ){
                 $this->id=$id;
                 $this->apiParas["id"] = $id;
              }

              public function getId(){
              	return $this->id;
              }
                                                                                                                                                                                                                                                                                                                                              private $sku;
                              public function setSku($sku ){
                 $this->sku=$sku;
                 $this->apiParas["sku"] = $sku;
              }

              public function getSku(){
              	return $this->sku;
              }
                                                                                                                                                                                                                                                                                                                                              private $checkStat;
                              public function setCheckStat($checkStat ){
                 $this->checkStat=$checkStat;
                 $this->apiParas["checkStat"] = $checkStat;
              }

              public function getCheckStat(){
              	return $this->checkStat;
              }
                                                                                                                                        	                   			private $venderCode;
    	                        
	public function setVenderCode($venderCode){
		$this->venderCode = $venderCode;
         $this->apiParas["venderCode"] = $venderCode;
	}

	public function getVenderCode(){
	  return $this->venderCode;
	}

                        	                   			private $appid;
    	                        
	public function setAppid($appid){
		$this->appid = $appid;
         $this->apiParas["appid"] = $appid;
	}

	public function getAppid(){
	  return $this->appid;
	}

                            }





        
 

