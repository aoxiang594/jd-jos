<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class VatInvoice{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.invoice.VatInvoiceReq";
    }
        
    private $companyName;
    
    public function setCompanyName($companyName){
        $this->params['companyName'] = $companyName;
    }

    public function getCompanyName(){
        return $this->companyName;
    }
            
    private $taxpayerIdentity;
    
    public function setTaxpayerIdentity($taxpayerIdentity){
        $this->params['taxpayerIdentity'] = $taxpayerIdentity;
    }

    public function getTaxpayerIdentity(){
        return $this->taxpayerIdentity;
    }
            
    private $registeredAddress;
    
    public function setRegisteredAddress($registeredAddress){
        $this->params['registeredAddress'] = $registeredAddress;
    }

    public function getRegisteredAddress(){
        return $this->registeredAddress;
    }
            
    private $registeredBank;
    
    public function setRegisteredBank($registeredBank){
        $this->params['registeredBank'] = $registeredBank;
    }

    public function getRegisteredBank(){
        return $this->registeredBank;
    }
            
    private $registeredBankAccount;
    
    public function setRegisteredBankAccount($registeredBankAccount){
        $this->params['registeredBankAccount'] = $registeredBankAccount;
    }

    public function getRegisteredBankAccount(){
        return $this->registeredBankAccount;
    }
            
    private $registeredPhone;
    
    public function setRegisteredPhone($registeredPhone){
        $this->params['registeredPhone'] = $registeredPhone;
    }

    public function getRegisteredPhone(){
        return $this->registeredPhone;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>