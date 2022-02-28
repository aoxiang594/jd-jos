<?php
namespace Aoxiang\JdJos\Request\Domain\UeOrderNewInfo;
class ServiceCat{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dzwyfw.out.domain.ServiceCat";
    }
        
    private $serviceQty;
    
    public function setServiceQty($serviceQty){
        $this->params['serviceQty'] = $serviceQty;
    }

    public function getServiceQty(){
        return $this->serviceQty;
    }
            
    private $secondLevelCat;
    
    public function setSecondLevelCat($secondLevelCat){
        $this->params['secondLevelCat'] = $secondLevelCat;
    }

    public function getSecondLevelCat(){
        return $this->secondLevelCat;
    }
            
    private $firstLevelCat;
    
    public function setFirstLevelCat($firstLevelCat){
        $this->params['firstLevelCat'] = $firstLevelCat;
    }

    public function getFirstLevelCat(){
        return $this->firstLevelCat;
    }
            
    private $thirdLevelCat;
    
    public function setThirdLevelCat($thirdLevelCat){
        $this->params['thirdLevelCat'] = $thirdLevelCat;
    }

    public function getThirdLevelCat(){
        return $this->thirdLevelCat;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>