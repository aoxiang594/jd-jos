<?php
namespace Aoxiang\JdJos\Request;
class UeNewSaaSOrderFinishBizProgressRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.newSaaSOrder.finishBizProgress";
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
                                                        		                                    	                   			private $warrantyCard;
    	                        
	public function setWarrantyCard($warrantyCard){
		$this->warrantyCard = $warrantyCard;
         $this->apiParas["warrantyCard"] = $warrantyCard;
	}

	public function getWarrantyCard(){
	  return $this->warrantyCard;
	}

                        	                   			private $detecResult;
    	                        
	public function setDetecResult($detecResult){
		$this->detecResult = $detecResult;
         $this->apiParas["detecResult"] = $detecResult;
	}

	public function getDetecResult(){
	  return $this->detecResult;
	}

                        	                   			private $usedMaterial;
    	                        
	public function setUsedMaterial($usedMaterial){
		$this->usedMaterial = $usedMaterial;
         $this->apiParas["usedMaterial"] = $usedMaterial;
	}

	public function getUsedMaterial(){
	  return $this->usedMaterial;
	}

                        	                   			private $failureName;
    	                        
	public function setFailureName($failureName){
		$this->failureName = $failureName;
         $this->apiParas["failureName"] = $failureName;
	}

	public function getFailureName(){
	  return $this->failureName;
	}

                        	                   			private $invoiceSituation;
    	                        
	public function setInvoiceSituation($invoiceSituation){
		$this->invoiceSituation = $invoiceSituation;
         $this->apiParas["invoiceSituation"] = $invoiceSituation;
	}

	public function getInvoiceSituation(){
	  return $this->invoiceSituation;
	}

                        	                   			private $pic1;
    	                        
	public function setPic1($pic1){
		$this->pic1 = $pic1;
         $this->apiParas["pic1"] = $pic1;
	}

	public function getPic1(){
	  return $this->pic1;
	}

                        	                   			private $inSkuSn;
    	                        
	public function setInSkuSn($inSkuSn){
		$this->inSkuSn = $inSkuSn;
         $this->apiParas["inSkuSn"] = $inSkuSn;
	}

	public function getInSkuSn(){
	  return $this->inSkuSn;
	}

                        	                   			private $installSituation;
    	                        
	public function setInstallSituation($installSituation){
		$this->installSituation = $installSituation;
         $this->apiParas["installSituation"] = $installSituation;
	}

	public function getInstallSituation(){
	  return $this->installSituation;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $pic6;
    	                        
	public function setPic6($pic6){
		$this->pic6 = $pic6;
         $this->apiParas["pic6"] = $pic6;
	}

	public function getPic6(){
	  return $this->pic6;
	}

                        	                   			private $pic7;
    	                        
	public function setPic7($pic7){
		$this->pic7 = $pic7;
         $this->apiParas["pic7"] = $pic7;
	}

	public function getPic7(){
	  return $this->pic7;
	}

                        	                   			private $pic8;
    	                        
	public function setPic8($pic8){
		$this->pic8 = $pic8;
         $this->apiParas["pic8"] = $pic8;
	}

	public function getPic8(){
	  return $this->pic8;
	}

                        	                   			private $chargeAmount;
    	                        
	public function setChargeAmount($chargeAmount){
		$this->chargeAmount = $chargeAmount;
         $this->apiParas["chargeAmount"] = $chargeAmount;
	}

	public function getChargeAmount(){
	  return $this->chargeAmount;
	}

                        	                   			private $pic9;
    	                        
	public function setPic9($pic9){
		$this->pic9 = $pic9;
         $this->apiParas["pic9"] = $pic9;
	}

	public function getPic9(){
	  return $this->pic9;
	}

                        	                   			private $pic2;
    	                        
	public function setPic2($pic2){
		$this->pic2 = $pic2;
         $this->apiParas["pic2"] = $pic2;
	}

	public function getPic2(){
	  return $this->pic2;
	}

                        	                   			private $pic3;
    	                        
	public function setPic3($pic3){
		$this->pic3 = $pic3;
         $this->apiParas["pic3"] = $pic3;
	}

	public function getPic3(){
	  return $this->pic3;
	}

                        	                   			private $dealRemark;
    	                        
	public function setDealRemark($dealRemark){
		$this->dealRemark = $dealRemark;
         $this->apiParas["dealRemark"] = $dealRemark;
	}

	public function getDealRemark(){
	  return $this->dealRemark;
	}

                        	                   			private $pic4;
    	                        
	public function setPic4($pic4){
		$this->pic4 = $pic4;
         $this->apiParas["pic4"] = $pic4;
	}

	public function getPic4(){
	  return $this->pic4;
	}

                        	                   			private $pic5;
    	                        
	public function setPic5($pic5){
		$this->pic5 = $pic5;
         $this->apiParas["pic5"] = $pic5;
	}

	public function getPic5(){
	  return $this->pic5;
	}

                        	                   			private $fixMethod;
    	                        
	public function setFixMethod($fixMethod){
		$this->fixMethod = $fixMethod;
         $this->apiParas["fixMethod"] = $fixMethod;
	}

	public function getFixMethod(){
	  return $this->fixMethod;
	}

                        	                   			private $detecDetail;
    	                        
	public function setDetecDetail($detecDetail){
		$this->detecDetail = $detecDetail;
         $this->apiParas["detecDetail"] = $detecDetail;
	}

	public function getDetecDetail(){
	  return $this->detecDetail;
	}

                        	                   			private $outRepair;
    	                        
	public function setOutRepair($outRepair){
		$this->outRepair = $outRepair;
         $this->apiParas["outRepair"] = $outRepair;
	}

	public function getOutRepair(){
	  return $this->outRepair;
	}

                        	                   			private $orderNo;
    	                        
	public function setOrderNo($orderNo){
		$this->orderNo = $orderNo;
         $this->apiParas["orderNo"] = $orderNo;
	}

	public function getOrderNo(){
	  return $this->orderNo;
	}

                        	                   			private $barcode2;
    	                        
	public function setBarcode2($barcode2){
		$this->barcode2 = $barcode2;
         $this->apiParas["barcode2"] = $barcode2;
	}

	public function getBarcode2(){
	  return $this->barcode2;
	}

                        	                   			private $barcode1;
    	                        
	public function setBarcode1($barcode1){
		$this->barcode1 = $barcode1;
         $this->apiParas["barcode1"] = $barcode1;
	}

	public function getBarcode1(){
	  return $this->barcode1;
	}

                        	                   			private $createBy;
    	                        
	public function setCreateBy($createBy){
		$this->createBy = $createBy;
         $this->apiParas["createBy"] = $createBy;
	}

	public function getCreateBy(){
	  return $this->createBy;
	}

                        	                   			private $pic10;
    	                        
	public function setPic10($pic10){
		$this->pic10 = $pic10;
         $this->apiParas["pic10"] = $pic10;
	}

	public function getPic10(){
	  return $this->pic10;
	}

                        	                   			private $callSource;
    	                        
	public function setCallSource($callSource){
		$this->callSource = $callSource;
         $this->apiParas["callSource"] = $callSource;
	}

	public function getCallSource(){
	  return $this->callSource;
	}

                        	                   			private $failureReason;
    	                        
	public function setFailureReason($failureReason){
		$this->failureReason = $failureReason;
         $this->apiParas["failureReason"] = $failureReason;
	}

	public function getFailureReason(){
	  return $this->failureReason;
	}

                        	                   			private $outSkuSn;
    	                        
	public function setOutSkuSn($outSkuSn){
		$this->outSkuSn = $outSkuSn;
         $this->apiParas["outSkuSn"] = $outSkuSn;
	}

	public function getOutSkuSn(){
	  return $this->outSkuSn;
	}

                        	                   			private $dealResult;
    	                        
	public function setDealResult($dealResult){
		$this->dealResult = $dealResult;
         $this->apiParas["dealResult"] = $dealResult;
	}

	public function getDealResult(){
	  return $this->dealResult;
	}

                        	                   			private $operateDate;
    	                        
	public function setOperateDate($operateDate){
		$this->operateDate = $operateDate;
         $this->apiParas["operateDate"] = $operateDate;
	}

	public function getOperateDate(){
	  return $this->operateDate;
	}

                        	                   			private $receiveBrand;
    	                        
	public function setReceiveBrand($receiveBrand){
		$this->receiveBrand = $receiveBrand;
         $this->apiParas["receiveBrand"] = $receiveBrand;
	}

	public function getReceiveBrand(){
	  return $this->receiveBrand;
	}

                        	                   			private $buyYear;
    	                        
	public function setBuyYear($buyYear){
		$this->buyYear = $buyYear;
         $this->apiParas["buyYear"] = $buyYear;
	}

	public function getBuyYear(){
	  return $this->buyYear;
	}

                            }





        
 

