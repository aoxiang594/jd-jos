<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizAuditRefuse;
class WareDetailInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.domainmodel.WareDetailInfo";
    }
        
    private $wareId;
    
    public function setWareId($wareId){
        $this->params['wareId'] = $wareId;
    }

    public function getWareId(){
        return $this->wareId;
    }
            
    private $wareNum;
    
    public function setWareNum($wareNum){
        $this->params['wareNum'] = $wareNum;
    }

    public function getWareNum(){
        return $this->wareNum;
    }
            
    private $wareName;
    
    public function setWareName($wareName){
        $this->params['wareName'] = $wareName;
    }

    public function getWareName(){
        return $this->wareName;
    }
            
    private $afsApplyDetailId;
    
    public function setAfsApplyDetailId($afsApplyDetailId){
        $this->params['afsApplyDetailId'] = $afsApplyDetailId;
    }

    public function getAfsApplyDetailId(){
        return $this->afsApplyDetailId;
    }
            
    private $wareType;
    
    public function setWareType($wareType){
        $this->params['wareType'] = $wareType;
    }

    public function getWareType(){
        return $this->wareType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>