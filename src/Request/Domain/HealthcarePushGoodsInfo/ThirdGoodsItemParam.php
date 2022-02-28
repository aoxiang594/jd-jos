<?php
namespace Aoxiang\JdJos\Request\Domain\HealthcarePushGoodsInfo;
class ThirdGoodsItemParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.health.medical.examination.export.param.ThirdGoodsItemParam";
    }
        
    private $itemMeans;
    
    public function setItemMeans($itemMeans){
        $this->params['itemMeans'] = $itemMeans;
    }

    public function getItemMeans(){
        return $this->itemMeans;
    }
            
    private $itemName;
    
    public function setItemName($itemName){
        $this->params['itemName'] = $itemName;
    }

    public function getItemName(){
        return $this->itemName;
    }
            
    private $itemTopCategory;
    
    public function setItemTopCategory($itemTopCategory){
        $this->params['itemTopCategory'] = $itemTopCategory;
    }

    public function getItemTopCategory(){
        return $this->itemTopCategory;
    }
            
    private $goodsId2;
    
    public function setGoodsId2($goodsId2){
        $this->params['goodsId2'] = $goodsId2;
    }

    public function getGoodsId2(){
        return $this->goodsId2;
    }
            
    private $itemSuitable2;
                        
    public function setItemSuitable2($itemSuitable2){
        $this->params['itemSuitable2'] = $itemSuitable2;
    }
                    
            
    private $itemSecCategory;
    
    public function setItemSecCategory($itemSecCategory){
        $this->params['itemSecCategory'] = $itemSecCategory;
    }

    public function getItemSecCategory(){
        return $this->itemSecCategory;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>