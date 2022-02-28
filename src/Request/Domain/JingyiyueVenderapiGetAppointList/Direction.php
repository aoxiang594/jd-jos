<?php
namespace Aoxiang\JdJos\Request\Domain\JingyiyueVenderapiGetAppointList;
class Direction{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.appoint.vo.page.Direction";
    }
        
    private $description;
    
    public function setDescription($description){
        $this->params['description'] = $description;
    }

    public function getDescription(){
        return $this->description;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>