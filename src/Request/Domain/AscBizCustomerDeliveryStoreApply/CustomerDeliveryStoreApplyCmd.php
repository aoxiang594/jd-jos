<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizCustomerDeliveryStoreApply;
class CustomerDeliveryStoreApplyCmd{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.CustomerDeliveryStoreApplyCmd";
    }
        
    private $buId;
    
    public function setBuId($buId){
        $this->params['buId'] = $buId;
    }

    public function getBuId(){
        return $this->buId;
    }
            
    private $afsServiceId;
    
    public function setAfsServiceId($afsServiceId){
        $this->params['afsServiceId'] = $afsServiceId;
    }

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }
            
    private $operatorInfoReq;
            
    public function setOperatorInfoReq($operatorInfoReq){
        $this->params['operatorInfoReq'] = $operatorInfoReq ->getInstance();
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