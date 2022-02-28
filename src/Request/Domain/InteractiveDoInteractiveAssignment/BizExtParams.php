<?php
namespace Aoxiang\JdJos\Request\Domain\InteractiveDoInteractiveAssignment;
class BizExtParams{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $key2;
    
    public function setKey2($key2){
        $this->params['key2'] = $key2;
    }

    public function getKey2(){
        return $this->key2;
    }
            
    private $value2;
    
    public function setValue2($value2){
        $this->params['value2'] = $value2;
    }

    public function getValue2(){
        return $this->value2;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>