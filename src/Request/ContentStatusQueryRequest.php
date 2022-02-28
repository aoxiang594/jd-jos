<?php

namespace Aoxiang\JdJos\Request;

class ContentStatusQueryRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.content.status.query";
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

    private $monitorSource;

    public function setMonitorSource($monitorSource)
    {
        $this->monitorSource             = $monitorSource;
        $this->apiParas["monitorSource"] = $monitorSource;
    }

    public function getMonitorSource()
    {
        return $this->monitorSource;
    }

    private $subPosition;

    public function setSubPosition($subPosition)
    {
        $this->subPosition             = $subPosition;
        $this->apiParas["subPosition"] = $subPosition;
    }

    public function getSubPosition()
    {
        return $this->subPosition;
    }

    private $style;

    public function setStyle($style)
    {
        $this->style             = $style;
        $this->apiParas["style"] = $style;
    }

    public function getStyle()
    {
        return $this->style;
    }

    private $attribute1;

    public function setAttribute1($attribute1)
    {
        $this->attribute1             = $attribute1;
        $this->apiParas["attribute1"] = $attribute1;
    }

    public function getAttribute1()
    {
        return $this->attribute1;
    }

    private $contentType;

    public function setContentType($contentType)
    {
        $this->contentType             = $contentType;
        $this->apiParas["contentType"] = $contentType;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

}








