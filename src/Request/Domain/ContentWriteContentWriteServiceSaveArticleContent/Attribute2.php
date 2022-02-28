<?php
namespace Aoxiang\JdJos\Request\Domain\ContentWriteContentWriteServiceSaveArticleContent;
class Attribute2{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.content.write.client.domain.DescInfo";
    }
        
    private $ids;
                        
    public function setIds($ids){
        $this->params['ids'] = $ids;
    }
                    
            
    private $id;
    
    public function setId($id){
        $this->params['id'] = $id;
    }

    public function getId(){
        return $this->id;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $content;
    
    public function setContent($content){
        $this->params['content'] = $content;
    }

    public function getContent(){
        return $this->content;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>