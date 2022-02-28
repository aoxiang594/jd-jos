<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizAuditFeedback;
class PickVasInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.domainmodel.PickVasInfo";
    }
        
    private $primaryParam;
    
    public function setPrimaryParam($primaryParam){
        $this->params['primaryParam'] = $primaryParam;
    }

    public function getPrimaryParam(){
        return $this->primaryParam;
    }
            
    private $secondaryParam;
    
    public function setSecondaryParam($secondaryParam){
        $this->params['secondaryParam'] = $secondaryParam;
    }

    public function getSecondaryParam(){
        return $this->secondaryParam;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $otherParams;
            
    public function setOtherParams($otherParams){
        $this->params['otherParams'] = $otherParams ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>