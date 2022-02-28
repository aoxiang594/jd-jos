<?php
namespace Aoxiang\JdJos\Request\Domain\UeNewSaaSOrderDispatchOrder2Engineer;
class -{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pcs.order.bean.progress.OrderSendEngineer";
    }
        
    private $orderNo;
    
    public function setOrderNo($orderNo){
        $this->params['orderNo'] = $orderNo;
    }

    public function getOrderNo(){
        return $this->orderNo;
    }
            
    private $headImg;
    
    public function setHeadImg($headImg){
        $this->params['headImg'] = $headImg;
    }

    public function getHeadImg(){
        return $this->headImg;
    }
            
    private $wishBookDate;
    
    public function setWishBookDate($wishBookDate){
        $this->params['wishBookDate'] = $wishBookDate;
    }

    public function getWishBookDate(){
        return $this->wishBookDate;
    }
            
    private $idCard;
    
    public function setIdCard($idCard){
        $this->params['idCard'] = $idCard;
    }

    public function getIdCard(){
        return $this->idCard;
    }
            
    private $nucleicResults;
    
    public function setNucleicResults($nucleicResults){
        $this->params['nucleicResults'] = $nucleicResults;
    }

    public function getNucleicResults(){
        return $this->nucleicResults;
    }
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $sendEngineerDate;
    
    public function setSendEngineerDate($sendEngineerDate){
        $this->params['sendEngineerDate'] = $sendEngineerDate;
    }

    public function getSendEngineerDate(){
        return $this->sendEngineerDate;
    }
            
    private $engineerName;
    
    public function setEngineerName($engineerName){
        $this->params['engineerName'] = $engineerName;
    }

    public function getEngineerName(){
        return $this->engineerName;
    }
            
    private $tempTime;
    
    public function setTempTime($tempTime){
        $this->params['tempTime'] = $tempTime;
    }

    public function getTempTime(){
        return $this->tempTime;
    }
            
    private $appointTimes;
    
    public function setAppointTimes($appointTimes){
        $this->params['appointTimes'] = $appointTimes;
    }

    public function getAppointTimes(){
        return $this->appointTimes;
    }
            
    private $netWorkName;
    
    public function setNetWorkName($netWorkName){
        $this->params['netWorkName'] = $netWorkName;
    }

    public function getNetWorkName(){
        return $this->netWorkName;
    }
            
    private $engineerCode;
    
    public function setEngineerCode($engineerCode){
        $this->params['engineerCode'] = $engineerCode;
    }

    public function getEngineerCode(){
        return $this->engineerCode;
    }
            
    private $nucleicTime;
    
    public function setNucleicTime($nucleicTime){
        $this->params['nucleicTime'] = $nucleicTime;
    }

    public function getNucleicTime(){
        return $this->nucleicTime;
    }
            
    private $temperature;
    
    public function setTemperature($temperature){
        $this->params['temperature'] = $temperature;
    }

    public function getTemperature(){
        return $this->temperature;
    }
            
    private $vaccinationTime;
    
    public function setVaccinationTime($vaccinationTime){
        $this->params['vaccinationTime'] = $vaccinationTime;
    }

    public function getVaccinationTime(){
        return $this->vaccinationTime;
    }
            
    private $netWorkCode;
    
    public function setNetWorkCode($netWorkCode){
        $this->params['netWorkCode'] = $netWorkCode;
    }

    public function getNetWorkCode(){
        return $this->netWorkCode;
    }
            
    private $engineerMobile;
    
    public function setEngineerMobile($engineerMobile){
        $this->params['engineerMobile'] = $engineerMobile;
    }

    public function getEngineerMobile(){
        return $this->engineerMobile;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>