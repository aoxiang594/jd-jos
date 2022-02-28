<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class Promotion{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.cart.PromotionReq";
    }
        
    private $promotionId;
    
    public function setPromotionId($promotionId){
        $this->params['promotionId'] = $promotionId;
    }

    public function getPromotionId(){
        return $this->promotionId;
    }
            
    private $promotionType;
    
    public function setPromotionType($promotionType){
        $this->params['promotionType'] = $promotionType;
    }

    public function getPromotionType(){
        return $this->promotionType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>