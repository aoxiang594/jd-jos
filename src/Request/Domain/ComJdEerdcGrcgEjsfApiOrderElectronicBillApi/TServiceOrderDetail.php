<?php
namespace Aoxiang\JdJos\Request\Domain\ComJdEerdcGrcgEjsfApiOrderElectronicBillApi;
class TServiceOrderDetail{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.eerdc.grcg.ejsf.vo.TServiceOrderDetail";
    }
        
    private $totalPrice;
    
    public function setTotalPrice($totalPrice){
        $this->params['totalPrice'] = $totalPrice;
    }

    public function getTotalPrice(){
        return $this->totalPrice;
    }
            
    private $skuPrice;
    
    public function setSkuPrice($skuPrice){
        $this->params['skuPrice'] = $skuPrice;
    }

    public function getSkuPrice(){
        return $this->skuPrice;
    }
            
    private $skuDiscount;
    
    public function setSkuDiscount($skuDiscount){
        $this->params['skuDiscount'] = $skuDiscount;
    }

    public function getSkuDiscount(){
        return $this->skuDiscount;
    }
            
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $skuNorms;
    
    public function setSkuNorms($skuNorms){
        $this->params['skuNorms'] = $skuNorms;
    }

    public function getSkuNorms(){
        return $this->skuNorms;
    }
            
    private $skuNum;
    
    public function setSkuNum($skuNum){
        $this->params['skuNum'] = $skuNum;
    }

    public function getSkuNum(){
        return $this->skuNum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>