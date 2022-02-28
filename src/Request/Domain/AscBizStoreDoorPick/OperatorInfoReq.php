<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizStoreDoorPick;
class OperatorInfoReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.api.base.OperatorInfoReq";
    }
        
    private $operatorPin;
    
    public function setOperatorPin($operatorPin){
        $this->params['operatorPin'] = $operatorPin;
    }

    public function getOperatorPin(){
        return $this->operatorPin;
    }
            
    private $platformSrc;
    
    public function setPlatformSrc($platformSrc){
        $this->params['platformSrc'] = $platformSrc;
    }

    public function getPlatformSrc(){
        return $this->platformSrc;
    }
            
    private $operatorNick;
    
    public function setOperatorNick($operatorNick){
        $this->params['operatorNick'] = $operatorNick;
    }

    public function getOperatorNick(){
        return $this->operatorNick;
    }
            
    private $operatorRemark;
    
    public function setOperatorRemark($operatorRemark){
        $this->params['operatorRemark'] = $operatorRemark;
    }

    public function getOperatorRemark(){
        return $this->operatorRemark;
    }
            
    private $operatorDate;
    
    public function setOperatorDate($operatorDate){
        $this->params['operatorDate'] = $operatorDate;
    }

    public function getOperatorDate(){
        return $this->operatorDate;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>