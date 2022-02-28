<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class Payment{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.PaymentReq";
    }
        
    private $paymentType;
    
    public function setPaymentType($paymentType){
        $this->params['paymentType'] = $paymentType;
    }

    public function getPaymentType(){
        return $this->paymentType;
    }
            
    private $delayPay;
    
    public function setDelayPay($delayPay){
        $this->params['delayPay'] = $delayPay;
    }

    public function getDelayPay(){
        return $this->delayPay;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>