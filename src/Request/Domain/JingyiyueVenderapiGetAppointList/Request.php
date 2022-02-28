<?php
namespace Aoxiang\JdJos\Request\Domain\JingyiyueVenderapiGetAppointList;
class Request{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.appoint.venderapi.vo.AppointListQueryRequest";
    }
        
    private $customerName;
    
    public function setCustomerName($customerName){
        $this->params['customerName'] = $customerName;
    }

    public function getCustomerName(){
        return $this->customerName;
    }
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $sortList;
                                        
    public function setSortList($sortList){
        $size = count($sortList);
        for ($i=0; $i<$size; $i++){
            $sortList [$i] = $sortList [$i] ->getInstance();
        }
        $this->params['sortList'] = $sortList;
    }
                                    
            
    private $appointStatus;
    
    public function setAppointStatus($appointStatus){
        $this->params['appointStatus'] = $appointStatus;
    }

    public function getAppointStatus(){
        return $this->appointStatus;
    }
            
    private $customerPhone;
    
    public function setCustomerPhone($customerPhone){
        $this->params['customerPhone'] = $customerPhone;
    }

    public function getCustomerPhone(){
        return $this->customerPhone;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
            
    private $serverType;
    
    public function setServerType($serverType){
        $this->params['serverType'] = $serverType;
    }

    public function getServerType(){
        return $this->serverType;
    }
            
    private $cardNo;
    
    public function setCardNo($cardNo){
        $this->params['cardNo'] = $cardNo;
    }

    public function getCardNo(){
        return $this->cardNo;
    }
            
    private $startTime;
    
    public function setStartTime($startTime){
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime(){
        return $this->startTime;
    }
            
    private $sourceKey;
    
    public function setSourceKey($sourceKey){
        $this->params['sourceKey'] = $sourceKey;
    }

    public function getSourceKey(){
        return $this->sourceKey;
    }
            
    private $appointOrderId;
    
    public function setAppointOrderId($appointOrderId){
        $this->params['appointOrderId'] = $appointOrderId;
    }

    public function getAppointOrderId(){
        return $this->appointOrderId;
    }
            
    private $address;
    
    public function setAddress($address){
        $this->params['address'] = $address;
    }

    public function getAddress(){
        return $this->address;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $pageNumber;
    
    public function setPageNumber($pageNumber){
        $this->params['pageNumber'] = $pageNumber;
    }

    public function getPageNumber(){
        return $this->pageNumber;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>