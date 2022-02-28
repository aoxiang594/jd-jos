<?php
namespace Aoxiang\JdJos\Request;
class JingyiyueVenderapiInputLsnsRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jingyiyue.venderapi.inputLsns";
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
                                                        		                                    	                   			private $sourceKey;
    	                        
	public function setSourceKey($sourceKey){
		$this->sourceKey = $sourceKey;
         $this->apiParas["sourceKey"] = $sourceKey;
	}

	public function getSourceKey(){
	  return $this->sourceKey;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $appointOrderId;
                              public function setAppointOrderId($appointOrderId ){
                 $this->appointOrderId=$appointOrderId;
                 $this->apiParas["appointOrderId"] = $appointOrderId;
              }

              public function getAppointOrderId(){
              	return $this->appointOrderId;
              }
                                                                                                                                                                                                                                                                                                                       private $logisticsNo;
                              public function setLogisticsNo($logisticsNo ){
                 $this->logisticsNo=$logisticsNo;
                 $this->apiParas["logisticsNo"] = $logisticsNo;
              }

              public function getLogisticsNo(){
              	return $this->logisticsNo;
              }
                                                                                                                                                                                                                                                                                                                       private $logisticsSource;
                              public function setLogisticsSource($logisticsSource ){
                 $this->logisticsSource=$logisticsSource;
                 $this->apiParas["logisticsSource"] = $logisticsSource;
              }

              public function getLogisticsSource(){
              	return $this->logisticsSource;
              }
                                                                                                                                        	                        	                   			private $operateUser;
    	                        
	public function setOperateUser($operateUser){
		$this->operateUser = $operateUser;
         $this->apiParas["operateUser"] = $operateUser;
	}

	public function getOperateUser(){
	  return $this->operateUser;
	}

                            }





        
 

