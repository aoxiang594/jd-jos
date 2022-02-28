<?php
namespace Aoxiang\JdJos\Request;
class TransformerApiServiceMemberTransformerMemberApiDecryptPaymentCodeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.transformer.api.service.member.TransformerMemberApi.decryptPaymentCode";
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
                                                        		                                    	                   			private $outerSysCode;
    	                        
	public function setOuterSysCode($outerSysCode){
		$this->outerSysCode = $outerSysCode;
         $this->apiParas["outerSysCode"] = $outerSysCode;
	}

	public function getOuterSysCode(){
	  return $this->outerSysCode;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $key;
                              public function setKey($key ){
                 $this->key=$key;
                 $this->apiParas["key"] = $key;
              }

              public function getKey(){
              	return $this->key;
              }
                                                                                                                                                                                                                                                                                                                       private $value;
                              public function setValue($value ){
                 $this->value=$value;
                 $this->apiParas["value"] = $value;
              }

              public function getValue(){
              	return $this->value;
              }
                                                                                                                                        	                   			private $outerStoreId;
    	                        
	public function setOuterStoreId($outerStoreId){
		$this->outerStoreId = $outerStoreId;
         $this->apiParas["outerStoreId"] = $outerStoreId;
	}

	public function getOuterStoreId(){
	  return $this->outerStoreId;
	}

                        	                   			private $outerTenantId;
    	                        
	public function setOuterTenantId($outerTenantId){
		$this->outerTenantId = $outerTenantId;
         $this->apiParas["outerTenantId"] = $outerTenantId;
	}

	public function getOuterTenantId(){
	  return $this->outerTenantId;
	}

                        	                   			private $paymentCode;
    	                        
	public function setPaymentCode($paymentCode){
		$this->paymentCode = $paymentCode;
         $this->apiParas["paymentCode"] = $paymentCode;
	}

	public function getPaymentCode(){
	  return $this->paymentCode;
	}

                        	                            }





        
 

