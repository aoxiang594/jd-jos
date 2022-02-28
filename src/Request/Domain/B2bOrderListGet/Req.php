<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOrderListGet;
class Req{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.mid.sdk.dto.req.OrderPaginationReq";
    }
        
    private $pageIndex;
    
    public function setPageIndex($pageIndex){
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex(){
        return $this->pageIndex;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $orderTier;
    
    public function setOrderTier($orderTier){
        $this->params['orderTier'] = $orderTier;
    }

    public function getOrderTier(){
        return $this->orderTier;
    }
            
    private $sortType;
    
    public function setSortType($sortType){
        $this->params['sortType'] = $sortType;
    }

    public function getSortType(){
        return $this->sortType;
    }
            
    private $submitOrderTimeFrom;
    
    public function setSubmitOrderTimeFrom($submitOrderTimeFrom){
        $this->params['submitOrderTimeFrom'] = $submitOrderTimeFrom;
    }

    public function getSubmitOrderTimeFrom(){
        return $this->submitOrderTimeFrom;
    }
            
    private $submitOrderTimeTo;
    
    public function setSubmitOrderTimeTo($submitOrderTimeTo){
        $this->params['submitOrderTimeTo'] = $submitOrderTimeTo;
    }

    public function getSubmitOrderTimeTo(){
        return $this->submitOrderTimeTo;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $jdOrderState;
    
    public function setJdOrderState($jdOrderState){
        $this->params['jdOrderState'] = $jdOrderState;
    }

    public function getJdOrderState(){
        return $this->jdOrderState;
    }
            
    private $deliverState;
    
    public function setDeliverState($deliverState){
        $this->params['deliverState'] = $deliverState;
    }

    public function getDeliverState(){
        return $this->deliverState;
    }
            
    private $extInfo;
            
    public function setExtInfo($extInfo){
        $this->params['extInfo'] = $extInfo ->getInstance();
    }
        
            
    private $orderPlatform;
    
    public function setOrderPlatform($orderPlatform){
        $this->params['orderPlatform'] = $orderPlatform;
    }

    public function getOrderPlatform(){
        return $this->orderPlatform;
    }
            
    private $orderSource;
                        
    public function setOrderSource($orderSource){
        $this->params['orderSource'] = $orderSource;
    }
                    
            
    private $specSearchInfoReq;
            
    public function setSpecSearchInfoReq($specSearchInfoReq){
        $this->params['specSearchInfoReq'] = $specSearchInfoReq ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>