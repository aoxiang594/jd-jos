<?php
namespace Aoxiang\JdJos\Request;
class ScfInvoiceApplySubmitApplyRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.scf.invoice.apply.submitApply";
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
                                                        		                                    	                   			private $invoiceDirection;
    	                        
	public function setInvoiceDirection($invoiceDirection){
		$this->invoiceDirection = $invoiceDirection;
         $this->apiParas["invoiceDirection"] = $invoiceDirection;
	}

	public function getInvoiceDirection(){
	  return $this->invoiceDirection;
	}

                        	                   			private $invoiceOrg;
    	                        
	public function setInvoiceOrg($invoiceOrg){
		$this->invoiceOrg = $invoiceOrg;
         $this->apiParas["invoiceOrg"] = $invoiceOrg;
	}

	public function getInvoiceOrg(){
	  return $this->invoiceOrg;
	}

                        	                   			private $pin;
    	                        
	public function setPin($pin){
		$this->pin = $pin;
         $this->apiParas["pin"] = $pin;
	}

	public function getPin(){
	  return $this->pin;
	}

                        	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                        	                   			private $rfBillType;
    	                        
	public function setRfBillType($rfBillType){
		$this->rfBillType = $rfBillType;
         $this->apiParas["rfBillType"] = $rfBillType;
	}

	public function getRfBillType(){
	  return $this->rfBillType;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $dailyBillId;
                              public function setDailyBillId($dailyBillId ){
                 $this->dailyBillId=$dailyBillId;
                 $this->apiParas["dailyBillId"] = $dailyBillId;
              }

              public function getDailyBillId(){
              	return $this->dailyBillId;
              }
                                                                                                                                            }





        
 

