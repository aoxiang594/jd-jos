<?php
namespace Aoxiang\JdJos\Request\Domain\DentistryPushGoodsInfo;
class ThirdGoodsParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.health.dentistry.man.export.outer.param.ThirdGoodsParam";
    }
        
    private $goodsId;
    
    public function setGoodsId($goodsId){
        $this->params['goodsId'] = $goodsId;
    }

    public function getGoodsId(){
        return $this->goodsId;
    }
            
    private $channelType;
    
    public function setChannelType($channelType){
        $this->params['channelType'] = $channelType;
    }

    public function getChannelType(){
        return $this->channelType;
    }
            
    private $operateType;
    
    public function setOperateType($operateType){
        $this->params['operateType'] = $operateType;
    }

    public function getOperateType(){
        return $this->operateType;
    }
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
            
    private $goodsSuitable;
    
    public function setGoodsSuitable($goodsSuitable){
        $this->params['goodsSuitable'] = $goodsSuitable;
    }

    public function getGoodsSuitable(){
        return $this->goodsSuitable;
    }
            
    private $goodsPrice;
    
    public function setGoodsPrice($goodsPrice){
        $this->params['goodsPrice'] = $goodsPrice;
    }

    public function getGoodsPrice(){
        return $this->goodsPrice;
    }
            
    private $goodsFeature;
    
    public function setGoodsFeature($goodsFeature){
        $this->params['goodsFeature'] = $goodsFeature;
    }

    public function getGoodsFeature(){
        return $this->goodsFeature;
    }
            
    private $goodsName;
    
    public function setGoodsName($goodsName){
        $this->params['goodsName'] = $goodsName;
    }

    public function getGoodsName(){
        return $this->goodsName;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $goodsItemList;
                                        
    public function setGoodsItemList($goodsItemList){
        $size = count($goodsItemList);
        for ($i=0; $i<$size; $i++){
            $goodsItemList [$i] = $goodsItemList [$i] ->getInstance();
        }
        $this->params['goodsItemList'] = $goodsItemList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>