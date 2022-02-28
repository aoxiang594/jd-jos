<?php
namespace Aoxiang\JdJos\Request\Domain\UeCswsDispatchOrgReplyOrderMsg;
class -{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pbs.customer.bean.BizServiceCustomerAppendixVo";
    }
        
    private $size;
    
    public function setSize($size){
        $this->params['size'] = $size;
    }

    public function getSize(){
        return $this->size;
    }
            
    private $title;
    
    public function setTitle($title){
        $this->params['title'] = $title;
    }

    public function getTitle(){
        return $this->title;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $url;
    
    public function setUrl($url){
        $this->params['url'] = $url;
    }

    public function getUrl(){
        return $this->url;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>