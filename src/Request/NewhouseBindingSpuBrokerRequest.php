<?php

namespace Aoxiang\JdJos\Request;

class NewhouseBindingSpuBrokerRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.newhouse.bindingSpuBroker";
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

    private $v1;

    public function setV1($v1)
    {
        $this->v1             = $v1;
        $this->apiParas["v1"] = $v1;
    }

    public function getV1()
    {
        return $this->v1;
    }

    private $channelId;

    public function setChannelId($channelId)
    {
        $this->channelId             = $channelId;
        $this->apiParas["channelId"] = $channelId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    private $spuId;

    public function setSpuId($spuId)
    {
        $this->spuId             = $spuId;
        $this->apiParas["spuId"] = $spuId;
    }

    public function getSpuId()
    {
        return $this->spuId;
    }

}








