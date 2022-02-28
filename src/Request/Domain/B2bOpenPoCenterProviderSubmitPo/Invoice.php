<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class Invoice{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.InvoiceReq";
    }
        
    private $invoiceType;
    
    public function setInvoiceType($invoiceType){
        $this->params['invoiceType'] = $invoiceType;
    }

    public function getInvoiceType(){
        return $this->invoiceType;
    }
            
    private $putType;
    
    public function setPutType($putType){
        $this->params['putType'] = $putType;
    }

    public function getPutType(){
        return $this->putType;
    }
            
    private $vatInvoice;
            
    public function setVatInvoice($vatInvoice){
        $this->params['vatInvoice'] = $vatInvoice ->getInstance();
    }
        
            
    private $invoiceConsignee;
            
    public function setInvoiceConsignee($invoiceConsignee){
        $this->params['invoiceConsignee'] = $invoiceConsignee ->getInstance();
    }
        
            
    private $electricInvoice;
            
    public function setElectricInvoice($electricInvoice){
        $this->params['electricInvoice'] = $electricInvoice ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>