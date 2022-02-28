<?php
namespace Aoxiang\JdJos\Request\Domain\ComJdEerdcGrcgEjsfApiOrderElectronicBillApi;
class ElectronicBillDTO{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.eerdc.grcg.ejsf.vo.ElectronicBillDTO";
    }
        
    private $flag;
    
    public function setFlag($flag){
        $this->params['flag'] = $flag;
    }

    public function getFlag(){
        return $this->flag;
    }
            
    private $payTime;
    
    public function setPayTime($payTime){
        $this->params['payTime'] = $payTime;
    }

    public function getPayTime(){
        return $this->payTime;
    }
            
    private $preferentialList;
                                        
    public function setPreferentialList($preferentialList){
        $size = count($preferentialList);
        for ($i=0; $i<$size; $i++){
            $preferentialList [$i] = $preferentialList [$i] ->getInstance();
        }
        $this->params['preferentialList'] = $preferentialList;
    }
                                    
            
    private $orderState;
    
    public function setOrderState($orderState){
        $this->params['orderState'] = $orderState;
    }

    public function getOrderState(){
        return $this->orderState;
    }
            
    private $orderTime;
    
    public function setOrderTime($orderTime){
        $this->params['orderTime'] = $orderTime;
    }

    public function getOrderTime(){
        return $this->orderTime;
    }
            
    private $price;
    
    public function setPrice($price){
        $this->params['price'] = $price;
    }

    public function getPrice(){
        return $this->price;
    }
            
    private $subtotalPrice;
    
    public function setSubtotalPrice($subtotalPrice){
        $this->params['subtotalPrice'] = $subtotalPrice;
    }

    public function getSubtotalPrice(){
        return $this->subtotalPrice;
    }
            
    private $orderDetailList;
                                        
    public function setOrderDetailList($orderDetailList){
        $size = count($orderDetailList);
        for ($i=0; $i<$size; $i++){
            $orderDetailList [$i] = $orderDetailList [$i] ->getInstance();
        }
        $this->params['orderDetailList'] = $orderDetailList;
    }
                                    
            
    private $workOrderId;
    
    public function setWorkOrderId($workOrderId){
        $this->params['workOrderId'] = $workOrderId;
    }

    public function getWorkOrderId(){
        return $this->workOrderId;
    }
            
    private $preferentialPrice;
    
    public function setPreferentialPrice($preferentialPrice){
        $this->params['preferentialPrice'] = $preferentialPrice;
    }

    public function getPreferentialPrice(){
        return $this->preferentialPrice;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>