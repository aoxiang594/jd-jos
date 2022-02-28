<?php
namespace Aoxiang\JdJos\Request\Domain\UeOrderInfo;
class EngineerInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dzwyfw.out.domain.EngineerInfo";
    }
        
    private $engineerCode;
    
    public function setEngineerCode($engineerCode){
        $this->params['engineerCode'] = $engineerCode;
    }

    public function getEngineerCode(){
        return $this->engineerCode;
    }
            
    private $engineerName;
    
    public function setEngineerName($engineerName){
        $this->params['engineerName'] = $engineerName;
    }

    public function getEngineerName(){
        return $this->engineerName;
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