<?php

namespace Aoxiang\JdJos\Request;

class CmpUserApplyChannelRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.cmp.user.apply.channel";
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

    private $summary;

    public function setSummary($summary)
    {
        $this->summary             = $summary;
        $this->apiParas["summary"] = $summary;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    private $id;

    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"] = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    private $nickName;

    public function setNickName($nickName)
    {
        $this->nickName             = $nickName;
        $this->apiParas["nickName"] = $nickName;
    }

    public function getNickName()
    {
        return $this->nickName;
    }

    private $headPicUrl;

    public function setHeadPicUrl($headPicUrl)
    {
        $this->headPicUrl             = $headPicUrl;
        $this->apiParas["headPicUrl"] = $headPicUrl;
    }

    public function getHeadPicUrl()
    {
        return $this->headPicUrl;
    }

    private $userSource;

    public function setUserSource($userSource)
    {
        $this->userSource             = $userSource;
        $this->apiParas["userSource"] = $userSource;
    }

    public function getUserSource()
    {
        return $this->userSource;
    }

    private $type;

    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    private $designerType;

    public function setDesignerType($designerType)
    {
        $this->designerType             = $designerType;
        $this->apiParas["designerType"] = $designerType;
    }

    public function getDesignerType()
    {
        return $this->designerType;
    }

}








