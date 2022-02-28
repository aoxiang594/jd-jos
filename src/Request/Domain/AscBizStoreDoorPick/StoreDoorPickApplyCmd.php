<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizStoreDoorPick;
class StoreDoorPickApplyCmd{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.StoreDoorPickApplyCmd";
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
            
    private $returnWareDetailInfo;
                                        
    public function setReturnWareDetailInfo($returnWareDetailInfo){
        $size = count($returnWareDetailInfo);
        for ($i=0; $i<$size; $i++){
            $returnWareDetailInfo [$i] = $returnWareDetailInfo [$i] ->getInstance();
        }
        $this->params['returnWareDetailInfo'] = $returnWareDetailInfo;
    }
                                    
            
    private $operatorInfoReq;
            
    public function setOperatorInfoReq($operatorInfoReq){
        $this->params['operatorInfoReq'] = $operatorInfoReq ->getInstance();
    }
        
            
    private $pickWareContactInfo;
            
    public function setPickWareContactInfo($pickWareContactInfo){
        $this->params['pickWareContactInfo'] = $pickWareContactInfo ->getInstance();
    }
        
            
    private $auditAddInfo;
            
    public function setAuditAddInfo($auditAddInfo){
        $this->params['auditAddInfo'] = $auditAddInfo ->getInstance();
    }
        
            
    private $appointmentInfo;
            
    public function setAppointmentInfo($appointmentInfo){
        $this->params['appointmentInfo'] = $appointmentInfo ->getInstance();
    }
        
            
    private $shopContactInfo;
            
    public function setShopContactInfo($shopContactInfo){
        $this->params['shopContactInfo'] = $shopContactInfo ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>