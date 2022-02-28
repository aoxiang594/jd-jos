<?php
namespace Aoxiang\JdJos\Request\Domain\UpdateStoreStatus;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pop.wxo2o.spi.jos.to.VenderStoresBean";
    }
        
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $storeStatus;
    
    public function setStoreStatus($storeStatus){
        $this->params['storeStatus'] = $storeStatus;
    }

    public function getStoreStatus(){
        return $this->storeStatus;
    }
            
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>