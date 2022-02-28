<?php
namespace Aoxiang\JdJos\Request\Domain\ContentWriteContentWriteServiceSaveVideoContent;
class VideoContentDto{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.content.write.client.domain.VideoContentDto";
    }
        
    private $ext;
    
    public function setExt($ext){
        $this->params['ext'] = $ext;
    }

    public function getExt(){
        return $this->ext;
    }
            
    private $contentSource;
    
    public function setContentSource($contentSource){
        $this->params['contentSource'] = $contentSource;
    }

    public function getContentSource(){
        return $this->contentSource;
    }
            
    private $indexImages;
                        
    public function setIndexImages($indexImages){
        $this->params['indexImages'] = $indexImages;
    }
                    
            
    private $subTitle;
    
    public function setSubTitle($subTitle){
        $this->params['subTitle'] = $subTitle;
    }

    public function getSubTitle(){
        return $this->subTitle;
    }
            
    private $creatorId;
    
    public function setCreatorId($creatorId){
        $this->params['creatorId'] = $creatorId;
    }

    public function getCreatorId(){
        return $this->creatorId;
    }
            
    private $style;
    
    public function setStyle($style){
        $this->params['style'] = $style;
    }

    public function getStyle(){
        return $this->style;
    }
            
    private $subChannelId;
    
    public function setSubChannelId($subChannelId){
        $this->params['subChannelId'] = $subChannelId;
    }

    public function getSubChannelId(){
        return $this->subChannelId;
    }
            
    private $title;
    
    public function setTitle($title){
        $this->params['title'] = $title;
    }

    public function getTitle(){
        return $this->title;
    }
            
    private $introduction;
    
    public function setIntroduction($introduction){
        $this->params['introduction'] = $introduction;
    }

    public function getIntroduction(){
        return $this->introduction;
    }
            
    private $videoInfo;
            
    public function setVideoInfo($videoInfo){
        $this->params['videoInfo'] = $videoInfo ->getInstance();
    }
        
            
    private $nhTagInfos;
                                        
    public function setNhTagInfos($nhTagInfos){
        $size = count($nhTagInfos);
        for ($i=0; $i<$size; $i++){
            $nhTagInfos [$i] = $nhTagInfos [$i] ->getInstance();
        }
        $this->params['nhTagInfos'] = $nhTagInfos;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>