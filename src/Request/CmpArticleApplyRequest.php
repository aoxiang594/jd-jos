<?php

namespace Aoxiang\JdJos\Request;

class CmpArticleApplyRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.cmp.article.apply";
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

    private $remark;

    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"] = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
    }

    private $applyType;

    public function setApplyType($applyType)
    {
        $this->applyType             = $applyType;
        $this->apiParas["applyType"] = $applyType;
    }

    public function getApplyType()
    {
        return $this->applyType;
    }

}








