<?php
namespace Aoxiang\JdJos\Request\Domain\UeOrderNewInfo;
class EngineerInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dzwyfw.out.domain.EngineerInfo";
    }
        
    private $pid;
    
    public function setPid($pid){
        $this->params['pid'] = $pid;
    }

    public function getPid(){
        return $this->pid;
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