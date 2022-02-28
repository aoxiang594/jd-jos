<?php
namespace Aoxiang\JdJos\Request\Domain\HealthcarePushGoodsInfo;
class ThirdGoodsParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.health.medical.examination.export.param.ThirdGoodsParam";
    }
        
    private $goodsItemList;
                                        
    public function setGoodsItemList($goodsItemList){
        $size = count($goodsItemList);
        for ($i=0; $i<$size; $i++){
            $goodsItemList [$i] = $goodsItemList [$i] ->getInstance();
        }
        $this->params['goodsItemList'] = $goodsItemList;
    }
                                    
            
    private $goodsId;
    
    public function setGoodsId($goodsId){
        $this->params['goodsId'] = $goodsId;
    }

    public function getGoodsId(){
        return $this->goodsId;
    }
            
    private $goodsPrice;
    
    public function setGoodsPrice($goodsPrice){
        $this->params['goodsPrice'] = $goodsPrice;
    }

    public function getGoodsPrice(){
        return $this->goodsPrice;
    }
            
    private $operateType;
    
    public function setOperateType($operateType){
        $this->params['operateType'] = $operateType;
    }

    public function getOperateType(){
        return $this->operateType;
    }
            
    private $goodsFeature;
    
    public function setGoodsFeature($goodsFeature){
        $this->params['goodsFeature'] = $goodsFeature;
    }

    public function getGoodsFeature(){
        return $this->goodsFeature;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $goodsName;
    
    public function setGoodsName($goodsName){
        $this->params['goodsName'] = $goodsName;
    }

    public function getGoodsName(){
        return $this->goodsName;
    }
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
            
    private $channelType;
    
    public function setChannelType($channelType){
        $this->params['channelType'] = $channelType;
    }

    public function getChannelType(){
        return $this->channelType;
    }
            
    private $goodsSuitable;
    
    public function setGoodsSuitable($goodsSuitable){
        $this->params['goodsSuitable'] = $goodsSuitable;
    }

    public function getGoodsSuitable(){
        return $this->goodsSuitable;
    }
            
    private $goodsMarry;
    
    public function setGoodsMarry($goodsMarry){
        $this->params['goodsMarry'] = $goodsMarry;
    }

    public function getGoodsMarry(){
        return $this->goodsMarry;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>