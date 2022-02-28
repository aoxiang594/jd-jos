<?php
namespace Aoxiang\JdJos\Request;
class SynchSubmitSettlementTradeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.synchSubmitSettlementTrade";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $billingBusinessType;
                              public function setBillingBusinessType($billingBusinessType ){
                 $this->billingBusinessType=$billingBusinessType;
                 $this->apiParas["billingBusinessType"] = $billingBusinessType;
              }

              public function getBillingBusinessType(){
              	return $this->billingBusinessType;
              }
                                                                                                                                                                                                                                                                                                                                              private $systemId;
                              public function setSystemId($systemId ){
                 $this->systemId=$systemId;
                 $this->apiParas["systemId"] = $systemId;
              }

              public function getSystemId(){
              	return $this->systemId;
              }
                                                                                                                                                                                                                                                                                                                                              private $settleEntityType;
                              public function setSettleEntityType($settleEntityType ){
                 $this->settleEntityType=$settleEntityType;
                 $this->apiParas["settleEntityType"] = $settleEntityType;
              }

              public function getSettleEntityType(){
              	return $this->settleEntityType;
              }
                                                                                                                                                                                                                                                                                                                                              private $accountType;
                              public function setAccountType($accountType ){
                 $this->accountType=$accountType;
                 $this->apiParas["accountType"] = $accountType;
              }

              public function getAccountType(){
              	return $this->accountType;
              }
                                                                                                                                                                                                                                                                                                                                              private $extJson;
                              public function setExtJson($extJson ){
                 $this->extJson=$extJson;
                 $this->apiParas["extJson"] = $extJson;
              }

              public function getExtJson(){
              	return $this->extJson;
              }
                                                                                                                                                                                                                                                                                                                                              private $feeType;
                              public function setFeeType($feeType ){
                 $this->feeType=$feeType;
                 $this->apiParas["feeType"] = $feeType;
              }

              public function getFeeType(){
              	return $this->feeType;
              }
                                                                                                                                                                                                                                                                                                                                              private $tradeBillId;
                              public function setTradeBillId($tradeBillId ){
                 $this->tradeBillId=$tradeBillId;
                 $this->apiParas["tradeBillId"] = $tradeBillId;
              }

              public function getTradeBillId(){
              	return $this->tradeBillId;
              }
                                                                                                                                                                                                                                                                                                                                              private $billingBusinessId;
                              public function setBillingBusinessId($billingBusinessId ){
                 $this->billingBusinessId=$billingBusinessId;
                 $this->apiParas["billingBusinessId"] = $billingBusinessId;
              }

              public function getBillingBusinessId(){
              	return $this->billingBusinessId;
              }
                                                                                                                                                                                                                                                                                                                                              private $accountId;
                              public function setAccountId($accountId ){
                 $this->accountId=$accountId;
                 $this->apiParas["accountId"] = $accountId;
              }

              public function getAccountId(){
              	return $this->accountId;
              }
                                                                                                                                                                                                                                                                                                                                              private $createby;
                              public function setCreateby($createby ){
                 $this->createby=$createby;
                 $this->apiParas["createby"] = $createby;
              }

              public function getCreateby(){
              	return $this->createby;
              }
                                                                                                                                                                                                                                                                                                                                              private $settleEntityId;
                              public function setSettleEntityId($settleEntityId ){
                 $this->settleEntityId=$settleEntityId;
                 $this->apiParas["settleEntityId"] = $settleEntityId;
              }

              public function getSettleEntityId(){
              	return $this->settleEntityId;
              }
                                                                                                                                                                                                                                                                                                                                              private $balance;
                              public function setBalance($balance ){
                 $this->balance=$balance;
                 $this->apiParas["balance"] = $balance;
              }

              public function getBalance(){
              	return $this->balance;
              }
                                                                                                                                                                                                                                                                                                                                              private $requestId;
                              public function setRequestId($requestId ){
                 $this->requestId=$requestId;
                 $this->apiParas["requestId"] = $requestId;
              }

              public function getRequestId(){
              	return $this->requestId;
              }
                                                                                                                                                                                                                                                                                                                                              private $tradeBillType;
                              public function setTradeBillType($tradeBillType ){
                 $this->tradeBillType=$tradeBillType;
                 $this->apiParas["tradeBillType"] = $tradeBillType;
              }

              public function getTradeBillType(){
              	return $this->tradeBillType;
              }
                                                                                                                                                                                                                                                                                                                                              private $currency;
                              public function setCurrency($currency ){
                 $this->currency=$currency;
                 $this->apiParas["currency"] = $currency;
              }

              public function getCurrency(){
              	return $this->currency;
              }
                                                                                                                                                                                                                                                                                                                                              private $direction;
                              public function setDirection($direction ){
                 $this->direction=$direction;
                 $this->apiParas["direction"] = $direction;
              }

              public function getDirection(){
              	return $this->direction;
              }
                                                                                                                                        	}





        
 

