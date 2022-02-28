<?php
namespace Aoxiang\JdJos\Request\Domain\UeOrderNewInfo;
class ServiceArea{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dzwyfw.out.domain.ServiceArea";
    }
        
    private $province;
    
    public function setProvince($province){
        $this->params['province'] = $province;
    }

    public function getProvince(){
        return $this->province;
    }
            
    private $town;
    
    public function setTown($town){
        $this->params['town'] = $town;
    }

    public function getTown(){
        return $this->town;
    }
            
    private $city;
    
    public function setCity($city){
        $this->params['city'] = $city;
    }

    public function getCity(){
        return $this->city;
    }
            
    private $county;
    
    public function setCounty($county){
        $this->params['county'] = $county;
    }

    public function getCounty(){
        return $this->county;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>