<?php

namespace Aoxiang\JdJos\Request;

class DspAdkckeywordKeywordnegativeAddRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.adkckeyword.keywordnegative.add";
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

    private $keywordName;

    public function setKeywordName($keywordName)
    {
        $this->keywordName             = $keywordName;
        $this->apiParas["keywordName"] = $keywordName;
    }

    public function getKeywordName()
    {
        return $this->keywordName;
    }

    private $adGroupId;

    public function setAdGroupId($adGroupId)
    {
        $this->adGroupId             = $adGroupId;
        $this->apiParas["adGroupId"] = $adGroupId;
    }

    public function getAdGroupId()
    {
        return $this->adGroupId;
    }

}








