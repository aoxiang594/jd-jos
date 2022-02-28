<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class CartReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.CartReq";
    }
        
    private $totalAmount;
    
    public function setTotalAmount($totalAmount){
        $this->params['totalAmount'] = $totalAmount;
    }

    public function getTotalAmount(){
        return $this->totalAmount;
    }
            
    private $totalPurchaseAmount;
    
    public function setTotalPurchaseAmount($totalPurchaseAmount){
        $this->params['totalPurchaseAmount'] = $totalPurchaseAmount;
    }

    public function getTotalPurchaseAmount(){
        return $this->totalPurchaseAmount;
    }
            
    private $skuItems;
                                        
    public function setSkuItems($skuItems){
        $size = count($skuItems);
        for ($i=0; $i<$size; $i++){
            $skuItems [$i] = $skuItems [$i] ->getInstance();
        }
        $this->params['skuItems'] = $skuItems;
    }
                                    
            
    private $suiteItems;
                                        
    public function setSuiteItems($suiteItems){
        $size = count($suiteItems);
        for ($i=0; $i<$size; $i++){
            $suiteItems [$i] = $suiteItems [$i] ->getInstance();
        }
        $this->params['suiteItems'] = $suiteItems;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>