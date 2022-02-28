<?php

namespace Aoxiang\JdJos\Request;

class ContentWriteContentWriteServiceGetVideoUploadUrlRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.content.write.ContentWriteService.getVideoUploadUrl";
    }

    public function getApiParas()
    {
        if( empty($this->apiParas) ){
            return "{}";
        }

        return json_encode($this->apiParas);
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    private $contentSource;

    public function setContentSource($contentSource)
    {
        $this->contentSource             = $contentSource;
        $this->apiParas["contentSource"] = $contentSource;
    }

    public function getContentSource()
    {
        return $this->contentSource;
    }

    private $fileSize;

    public function setFileSize($fileSize)
    {
        $this->fileSize             = $fileSize;
        $this->apiParas["fileSize"] = $fileSize;
    }

    public function getFileSize()
    {
        return $this->fileSize;
    }

    private $videoName;

    public function setVideoName($videoName)
    {
        $this->videoName             = $videoName;
        $this->apiParas["videoName"] = $videoName;
    }

    public function getVideoName()
    {
        return $this->videoName;
    }

    private $creatorId;

    public function setCreatorId($creatorId)
    {
        $this->creatorId             = $creatorId;
        $this->apiParas["creatorId"] = $creatorId;
    }

    public function getCreatorId()
    {
        return $this->creatorId;
    }

}








