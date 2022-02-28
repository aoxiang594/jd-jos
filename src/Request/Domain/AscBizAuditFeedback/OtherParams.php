<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizAuditFeedback;
class OtherParams{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $value;
    
    public function setValue($value){
        $this->params['value'] = $value;
    }

    public function getValue(){
        return $this->value;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>