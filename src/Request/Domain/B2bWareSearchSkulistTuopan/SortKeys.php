<?php
namespace Aoxiang\JdJos\Request\Domain\B2bWareSearchSkulistTuopan;
class SortKeys{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.ware.biz.sdk.req.Sort";
    }
        
    private $field;
    
    public function setField($field){
        $this->params['field'] = $field;
    }

    public function getField(){
        return $this->field;
    }
            
    private $sortType;
    
    public function setSortType($sortType){
        $this->params['sortType'] = $sortType;
    }

    public function getSortType(){
        return $this->sortType;
    }
            
    private $missing;
    
    public function setMissing($missing){
        $this->params['missing'] = $missing;
    }

    public function getMissing(){
        return $this->missing;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>