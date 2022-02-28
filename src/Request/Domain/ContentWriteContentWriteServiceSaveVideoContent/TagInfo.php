<?php
namespace Aoxiang\JdJos\Request\Domain\ContentWriteContentWriteServiceSaveVideoContent;
class TagInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.content.write.client.domain.TagInfo";
    }
        
    private $tagId;
    
    public function setTagId($tagId){
        $this->params['tagId'] = $tagId;
    }

    public function getTagId(){
        return $this->tagId;
    }
            
    private $tagName;
    
    public function setTagName($tagName){
        $this->params['tagName'] = $tagName;
    }

    public function getTagName(){
        return $this->tagName;
    }
            
    private $thirdClassifyId;
    
    public function setThirdClassifyId($thirdClassifyId){
        $this->params['thirdClassifyId'] = $thirdClassifyId;
    }

    public function getThirdClassifyId(){
        return $this->thirdClassifyId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>