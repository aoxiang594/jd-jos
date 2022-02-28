<?php
namespace Aoxiang\JdJos\Request\Domain\DentistryPushGoodsInfo;
class ThirdGoodsItemParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.health.dentistry.man.export.outer.param.ThirdGoodsItemParam";
    }
        
    private $itemName;
    
    public function setItemName($itemName){
        $this->params['itemName'] = $itemName;
    }

    public function getItemName(){
        return $this->itemName;
    }
            
    private $itemDesc;
    
    public function setItemDesc($itemDesc){
        $this->params['itemDesc'] = $itemDesc;
    }

    public function getItemDesc(){
        return $this->itemDesc;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>