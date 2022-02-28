<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class ElectricInvoice{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.invoice.ElectricInvoiceReq";
    }
        
    private $title;
    
    public function setTitle($title){
        $this->params['title'] = $title;
    }

    public function getTitle(){
        return $this->title;
    }
            
    private $taxpayerIdentity;
    
    public function setTaxpayerIdentity($taxpayerIdentity){
        $this->params['taxpayerIdentity'] = $taxpayerIdentity;
    }

    public function getTaxpayerIdentity(){
        return $this->taxpayerIdentity;
    }
            
    private $companyName;
    
    public function setCompanyName($companyName){
        $this->params['companyName'] = $companyName;
    }

    public function getCompanyName(){
        return $this->companyName;
    }
            
    private $bookInvoiceContent;
    
    public function setBookInvoiceContent($bookInvoiceContent){
        $this->params['bookInvoiceContent'] = $bookInvoiceContent;
    }

    public function getBookInvoiceContent(){
        return $this->bookInvoiceContent;
    }
            
    private $invoiceContent;
    
    public function setInvoiceContent($invoiceContent){
        $this->params['invoiceContent'] = $invoiceContent;
    }

    public function getInvoiceContent(){
        return $this->invoiceContent;
    }
            
    private $phone;
    
    public function setPhone($phone){
        $this->params['phone'] = $phone;
    }

    public function getPhone(){
        return $this->phone;
    }
            
    private $email;
    
    public function setEmail($email){
        $this->params['email'] = $email;
    }

    public function getEmail(){
        return $this->email;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>