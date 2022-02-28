<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizCustomerSendStoreApply;
class CustomerSendStoreApplyCmd{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.CustomerSendStoreApplyCmd";
    }
        
    private $afsServiceId;
    
    public function setAfsServiceId($afsServiceId){
        $this->params['afsServiceId'] = $afsServiceId;
    }

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }
            
    private $buId;
    
    public function setBuId($buId){
        $this->params['buId'] = $buId;
    }

    public function getBuId(){
        return $this->buId;
    }
            
    private $operatorInfoReq;
            
    public function setOperatorInfoReq($operatorInfoReq){
        $this->params['operatorInfoReq'] = $operatorInfoReq ->getInstance();
    }
        
            
    private $returnWareContactInfo;
            
    public function setReturnWareContactInfo($returnWareContactInfo){
        $this->params['returnWareContactInfo'] = $returnWareContactInfo ->getInstance();
    }
        
            
    private $shopContactInfo;
            
    public function setShopContactInfo($shopContactInfo){
        $this->params['shopContactInfo'] = $shopContactInfo ->getInstance();
    }
        
            
    private $returnWareDetailInfo;
                                        
    public function setReturnWareDetailInfo($returnWareDetailInfo){
        $size = count($returnWareDetailInfo);
        for ($i=0; $i<$size; $i++){
            $returnWareDetailInfo [$i] = $returnWareDetailInfo [$i] ->getInstance();
        }
        $this->params['returnWareDetailInfo'] = $returnWareDetailInfo;
    }
                                    
            
    private $auditAddInfo;
            
    public function setAuditAddInfo($auditAddInfo){
        $this->params['auditAddInfo'] = $auditAddInfo ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>