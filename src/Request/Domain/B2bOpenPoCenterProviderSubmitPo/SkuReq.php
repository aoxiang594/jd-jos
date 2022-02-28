<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class SkuReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.cart.SkuReq";
    }
        
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
            
    private $jdPrice;
    
    public function setJdPrice($jdPrice){
        $this->params['jdPrice'] = $jdPrice;
    }

    public function getJdPrice(){
        return $this->jdPrice;
    }
            
    private $price;
    
    public function setPrice($price){
        $this->params['price'] = $price;
    }

    public function getPrice(){
        return $this->price;
    }
            
    private $skuType;
    
    public function setSkuType($skuType){
        $this->params['skuType'] = $skuType;
    }

    public function getSkuType(){
        return $this->skuType;
    }
            
    private $promotion;
            
    public function setPromotion($promotion){
        $this->params['promotion'] = $promotion ->getInstance();
    }
        
            
    private $extParam;
            
    public function setExtParam($extParam){
        $this->params['extParam'] = $extParam ->getInstance();
    }
        
            
    private $giftItems;
                        
    public function setGiftItems($giftItems){
        $this->params['giftItems'] = $giftItems;
    }
                    
    
    function getInstance(){
        return $this->params;
    }

}

?>