<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizCustomerDeliveryStoreApply;
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
            
    private $operatorNick;
    
    public function setOperatorNick($operatorNick){
        $this->params['operatorNick'] = $operatorNick;
    }

    public function getOperatorNick(){
        return $this->operatorNick;
    }
            
    private $platformSrc;
    
    public function setPlatformSrc($platformSrc){
        $this->params['platformSrc'] = $platformSrc;
    }

    public function getPlatformSrc(){
        return $this->platformSrc;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>