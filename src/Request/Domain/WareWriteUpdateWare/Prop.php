<?php
namespace Aoxiang\JdJos\Request\Domain\WareWriteUpdateWare;
class Prop{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.ware.ic.api.domain.Prop";
    }
        
    private $attrId;
    
    public function setAttrId($attrId){
        $this->params['attrId'] = $attrId;
    }

    public function getAttrId(){
        return $this->attrId;
    }
            
    private $attrValues;
    
    public function setAttrValues($attrValues){
        $this->params['attrValues'] = $attrValues;
    }

    public function getAttrValues(){
        return $this->attrValues;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>