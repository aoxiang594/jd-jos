<?php

namespace Aoxiang\JdJos\Request;

class OmnicStaticdataQuerycourierlistRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnic.staticdata.querycourierlist";
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

    private $authKey;

    public function setAuthKey($authKey)
    {
        $this->authKey             = $authKey;
        $this->apiParas["authKey"] = $authKey;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

}








