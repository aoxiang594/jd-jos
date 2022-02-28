<?php
namespace Aoxiang\JdJos\Request\Domain\JingyiyueVenderapiGetAppointList;
class SortField{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.appoint.vo.page.Sort";
    }
        
    private $direction;
            
    public function setDirection($direction){
        $this->params['direction'] = $direction ->getInstance();
    }
        
            
    private $fieldName;
    
    public function setFieldName($fieldName){
        $this->params['fieldName'] = $fieldName;
    }

    public function getFieldName(){
        return $this->fieldName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>