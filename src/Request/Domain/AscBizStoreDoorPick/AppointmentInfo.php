<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizStoreDoorPick;
class AppointmentInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.domainmodel.AppointmentInfo";
    }
        
    private $appointDateBegin;
    
    public function setAppointDateBegin($appointDateBegin){
        $this->params['appointDateBegin'] = $appointDateBegin;
    }

    public function getAppointDateBegin(){
        return $this->appointDateBegin;
    }
            
    private $appointDateEnd;
    
    public function setAppointDateEnd($appointDateEnd){
        $this->params['appointDateEnd'] = $appointDateEnd;
    }

    public function getAppointDateEnd(){
        return $this->appointDateEnd;
    }
            
    private $appointDateStr;
    
    public function setAppointDateStr($appointDateStr){
        $this->params['appointDateStr'] = $appointDateStr;
    }

    public function getAppointDateStr(){
        return $this->appointDateStr;
    }
            
    private $appointDateType;
    
    public function setAppointDateType($appointDateType){
        $this->params['appointDateType'] = $appointDateType;
    }

    public function getAppointDateType(){
        return $this->appointDateType;
    }
            
    private $reserveDate;
    
    public function setReserveDate($reserveDate){
        $this->params['reserveDate'] = $reserveDate;
    }

    public function getReserveDate(){
        return $this->reserveDate;
    }
            
    private $reserveType;
    
    public function setReserveType($reserveType){
        $this->params['reserveType'] = $reserveType;
    }

    public function getReserveType(){
        return $this->reserveType;
    }
            
    private $appointRenewDate;
    
    public function setAppointRenewDate($appointRenewDate){
        $this->params['appointRenewDate'] = $appointRenewDate;
    }

    public function getAppointRenewDate(){
        return $this->appointRenewDate;
    }
            
    private $appointRenewRange;
    
    public function setAppointRenewRange($appointRenewRange){
        $this->params['appointRenewRange'] = $appointRenewRange;
    }

    public function getAppointRenewRange(){
        return $this->appointRenewRange;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>