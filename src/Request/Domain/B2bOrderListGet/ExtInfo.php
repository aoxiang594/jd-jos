<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOrderListGet;
class ExtInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $cetusChannel;
    
    public function setCetusChannel($cetusChannel){
        $this->params['cetusChannel'] = $cetusChannel;
    }

    public function getCetusChannel(){
        return $this->cetusChannel;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>