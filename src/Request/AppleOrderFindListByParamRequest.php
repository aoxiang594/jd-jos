<?php

namespace Aoxiang\JdJos\Request;

class AppleOrderFindListByParamRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.appleOrder.findListByParam";
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

    private $paramMap;

    public function setParamMap($paramMap)
    {
        $this->paramMap             = $paramMap;
        $this->apiParas["paramMap"] = $paramMap;
    }

    public function getParamMap()
    {
        return $this->paramMap;
    }

}








