<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class SuiteReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.cart.SuiteReq";
    }
        
    private $suiteId;
    
    public function setSuiteId($suiteId){
        $this->params['suiteId'] = $suiteId;
    }

    public function getSuiteId(){
        return $this->suiteId;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
            
    private $promotion;
            
    public function setPromotion($promotion){
        $this->params['promotion'] = $promotion ->getInstance();
    }
        
            
    private $skuItems;
                        
    public function setSkuItems($skuItems){
        $this->params['skuItems'] = $skuItems;
    }
                    
            
    private $giftItems;
                                        
    public function setGiftItems($giftItems){
        $size = count($giftItems);
        for ($i=0; $i<$size; $i++){
            $giftItems [$i] = $giftItems [$i] ->getInstance();
        }
        $this->params['giftItems'] = $giftItems;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>