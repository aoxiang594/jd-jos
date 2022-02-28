<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizStoreDoorPick;
class AuditAddInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.domainmodel.AuditAddInfo";
    }
        
    private $pickwareType;
    
    public function setPickwareType($pickwareType){
        $this->params['pickwareType'] = $pickwareType;
    }

    public function getPickwareType(){
        return $this->pickwareType;
    }
            
    private $approveNotes;
    
    public function setApproveNotes($approveNotes){
        $this->params['approveNotes'] = $approveNotes;
    }

    public function getApproveNotes(){
        return $this->approveNotes;
    }
            
    private $pickWareNotes;
    
    public function setPickWareNotes($pickWareNotes){
        $this->params['pickWareNotes'] = $pickWareNotes;
    }

    public function getPickWareNotes(){
        return $this->pickWareNotes;
    }
            
    private $companyId;
    
    public function setCompanyId($companyId){
        $this->params['companyId'] = $companyId;
    }

    public function getCompanyId(){
        return $this->companyId;
    }
            
    private $auditType;
    
    public function setAuditType($auditType){
        $this->params['auditType'] = $auditType;
    }

    public function getAuditType(){
        return $this->auditType;
    }
            
    private $pickwareMethod;
    
    public function setPickwareMethod($pickwareMethod){
        $this->params['pickwareMethod'] = $pickwareMethod;
    }

    public function getPickwareMethod(){
        return $this->pickwareMethod;
    }
            
    private $afterServiceType;
    
    public function setAfterServiceType($afterServiceType){
        $this->params['afterServiceType'] = $afterServiceType;
    }

    public function getAfterServiceType(){
        return $this->afterServiceType;
    }
            
    private $customizedSmsType;
    
    public function setCustomizedSmsType($customizedSmsType){
        $this->params['customizedSmsType'] = $customizedSmsType;
    }

    public function getCustomizedSmsType(){
        return $this->customizedSmsType;
    }
            
    private $customerExpect;
    
    public function setCustomerExpect($customerExpect){
        $this->params['customerExpect'] = $customerExpect;
    }

    public function getCustomerExpect(){
        return $this->customerExpect;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>