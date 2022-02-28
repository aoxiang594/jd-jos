<?php
namespace Aoxiang\JdJos\Request;
class UeOrderSendBizProgressRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.order.sendBizProgress";
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
                                                        		                                    	                   			private $sendDate;
    	                        
	public function setSendDate($sendDate){
		$this->sendDate = $sendDate;
         $this->apiParas["sendDate"] = $sendDate;
	}

	public function getSendDate(){
	  return $this->sendDate;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $engineerName;
                              public function setEngineerName($engineerName ){
                 $this->engineerName=$engineerName;
                 $this->apiParas["engineerName"] = $engineerName;
              }

              public function getEngineerName(){
              	return $this->engineerName;
              }
                                                                                                                                                                                                                                                                                                                       private $netWorkContactMan;
                              public function setNetWorkContactMan($netWorkContactMan ){
                 $this->netWorkContactMan=$netWorkContactMan;
                 $this->apiParas["netWorkContactMan"] = $netWorkContactMan;
              }

              public function getNetWorkContactMan(){
              	return $this->netWorkContactMan;
              }
                                                                                                                                                                                                                                                                                                                       private $engineerCode;
                              public function setEngineerCode($engineerCode ){
                 $this->engineerCode=$engineerCode;
                 $this->apiParas["engineerCode"] = $engineerCode;
              }

              public function getEngineerCode(){
              	return $this->engineerCode;
              }
                                                                                                                                                                                                                                                                                                                       private $netWorkTel;
                              public function setNetWorkTel($netWorkTel ){
                 $this->netWorkTel=$netWorkTel;
                 $this->apiParas["netWorkTel"] = $netWorkTel;
              }

              public function getNetWorkTel(){
              	return $this->netWorkTel;
              }
                                                                                                                                                                                                                                                                                                                       private $netWorkCode;
                              public function setNetWorkCode($netWorkCode ){
                 $this->netWorkCode=$netWorkCode;
                 $this->apiParas["netWorkCode"] = $netWorkCode;
              }

              public function getNetWorkCode(){
              	return $this->netWorkCode;
              }
                                                                                                                                                                                                                                                                                                                       private $netWorkAddress;
                              public function setNetWorkAddress($netWorkAddress ){
                 $this->netWorkAddress=$netWorkAddress;
                 $this->apiParas["netWorkAddress"] = $netWorkAddress;
              }

              public function getNetWorkAddress(){
              	return $this->netWorkAddress;
              }
                                                                                                                                                                                                                                                                                                                       private $sendNetWorkDate;
                              public function setSendNetWorkDate($sendNetWorkDate ){
                 $this->sendNetWorkDate=$sendNetWorkDate;
                 $this->apiParas["sendNetWorkDate"] = $sendNetWorkDate;
              }

              public function getSendNetWorkDate(){
              	return $this->sendNetWorkDate;
              }
                                                                                                                                                                                                                                                                                                                       private $engineerMobile;
                              public function setEngineerMobile($engineerMobile ){
                 $this->engineerMobile=$engineerMobile;
                 $this->apiParas["engineerMobile"] = $engineerMobile;
              }

              public function getEngineerMobile(){
              	return $this->engineerMobile;
              }
                                                                                                                                                                                                                                                                                                                       private $sendEngineeDate;
                              public function setSendEngineeDate($sendEngineeDate ){
                 $this->sendEngineeDate=$sendEngineeDate;
                 $this->apiParas["sendEngineeDate"] = $sendEngineeDate;
              }

              public function getSendEngineeDate(){
              	return $this->sendEngineeDate;
              }
                                                                                                                                                                                                                                                                                                                       private $orderNo;
                              public function setOrderNo($orderNo ){
                 $this->orderNo=$orderNo;
                 $this->apiParas["orderNo"] = $orderNo;
              }

              public function getOrderNo(){
              	return $this->orderNo;
              }
                                                                                                                                                                                                                                                                                                                       private $netWorkName;
                              public function setNetWorkName($netWorkName ){
                 $this->netWorkName=$netWorkName;
                 $this->apiParas["netWorkName"] = $netWorkName;
              }

              public function getNetWorkName(){
              	return $this->netWorkName;
              }
                                                                                                                                        	                   			private $sendBy;
    	                        
	public function setSendBy($sendBy){
		$this->sendBy = $sendBy;
         $this->apiParas["sendBy"] = $sendBy;
	}

	public function getSendBy(){
	  return $this->sendBy;
	}

                        	                   			private $type;
    	                        
	public function setType($type){
		$this->type = $type;
         $this->apiParas["type"] = $type;
	}

	public function getType(){
	  return $this->type;
	}

                            }





        
 

