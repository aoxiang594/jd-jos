<?php
namespace Aoxiang\JdJos\Request\Domain\ContentWriteContentWriteServiceSaveVideoContent;
class VideoInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.content.write.client.domain.video.VideoInfo";
    }
        
    private $videoId;
    
    public function setVideoId($videoId){
        $this->params['videoId'] = $videoId;
    }

    public function getVideoId(){
        return $this->videoId;
    }
            
    private $videoImg;
    
    public function setVideoImg($videoImg){
        $this->params['videoImg'] = $videoImg;
    }

    public function getVideoImg(){
        return $this->videoImg;
    }
            
    private $appHomeImg;
    
    public function setAppHomeImg($appHomeImg){
        $this->params['appHomeImg'] = $appHomeImg;
    }

    public function getAppHomeImg(){
        return $this->appHomeImg;
    }
            
    private $videoDuration;
    
    public function setVideoDuration($videoDuration){
        $this->params['videoDuration'] = $videoDuration;
    }

    public function getVideoDuration(){
        return $this->videoDuration;
    }
            
    private $videoSize;
    
    public function setVideoSize($videoSize){
        $this->params['videoSize'] = $videoSize;
    }

    public function getVideoSize(){
        return $this->videoSize;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>