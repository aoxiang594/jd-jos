<?php

namespace Aoxiang\JdJos\Request;

class DspAdkckeywordKeywordpricesuggestQueryRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkckeyword.keywordpricesuggest.query";
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

    private $key;

    public function setKey($key)
    {
        $this->key             = $key;
        $this->apiParas["key"] = $key;
    }

    public function getKey()
    {
        return $this->key;
    }

    private $mobileType;

    public function setMobileType($mobileType)
    {
        $this->mobileType             = $mobileType;
        $this->apiParas["mobileType"] = $mobileType;
    }

    public function getMobileType()
    {
        return $this->mobileType;
    }

}








