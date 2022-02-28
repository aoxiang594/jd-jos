<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizCustomerDeliveryStoreApply;
class AuditAddInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.domainmodel.AuditAddInfo";
    }
        
    private $customerExpect;
    
    public function setCustomerExpect($customerExpect){
        $this->params['customerExpect'] = $customerExpect;
    }

    public function getCustomerExpect(){
        return $this->customerExpect;
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
    
    function getInstance(){
        return $this->params;
    }

}

?>