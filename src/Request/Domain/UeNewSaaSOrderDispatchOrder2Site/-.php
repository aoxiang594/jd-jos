<?php
namespace Aoxiang\JdJos\Request\Domain\UeNewSaaSOrderDispatchOrder2Site;
class -{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pcs.order.bean.progress.OrderSendSite";
    }
        
    private $netWorkName;
    
    public function setNetWorkName($netWorkName){
        $this->params['netWorkName'] = $netWorkName;
    }

    public function getNetWorkName(){
        return $this->netWorkName;
    }
            
    private $appointTimes;
    
    public function setAppointTimes($appointTimes){
        $this->params['appointTimes'] = $appointTimes;
    }

    public function getAppointTimes(){
        return $this->appointTimes;
    }
            
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $netWorkAddress;
    
    public function setNetWorkAddress($netWorkAddress){
        $this->params['netWorkAddress'] = $netWorkAddress;
    }

    public function getNetWorkAddress(){
        return $this->netWorkAddress;
    }
            
    private $sendNetWorkDate;
    
    public function setSendNetWorkDate($sendNetWorkDate){
        $this->params['sendNetWorkDate'] = $sendNetWorkDate;
    }

    public function getSendNetWorkDate(){
        return $this->sendNetWorkDate;
    }
            
    private $netWorkContactMan;
    
    public function setNetWorkContactMan($netWorkContactMan){
        $this->params['netWorkContactMan'] = $netWorkContactMan;
    }

    public function getNetWorkContactMan(){
        return $this->netWorkContactMan;
    }
            
    private $netWorkJdId;
    
    public function setNetWorkJdId($netWorkJdId){
        $this->params['netWorkJdId'] = $netWorkJdId;
    }

    public function getNetWorkJdId(){
        return $this->netWorkJdId;
    }
            
    private $netWorkTel;
    
    public function setNetWorkTel($netWorkTel){
        $this->params['netWorkTel'] = $netWorkTel;
    }

    public function getNetWorkTel(){
        return $this->netWorkTel;
    }
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $netWorkCode;
    
    public function setNetWorkCode($netWorkCode){
        $this->params['netWorkCode'] = $netWorkCode;
    }

    public function getNetWorkCode(){
        return $this->netWorkCode;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>