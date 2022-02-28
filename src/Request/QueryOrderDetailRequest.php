<?php

namespace Aoxiang\JdJos\Request;

class QueryOrderDetailRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryOrderDetail";
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

    private $thirdOrderId;

    public function setThirdOrderId($thirdOrderId)
    {
        $this->thirdOrderId             = $thirdOrderId;
        $this->apiParas["thirdOrderId"] = $thirdOrderId;
    }

    public function getThirdOrderId()
    {
        return $this->thirdOrderId;
    }

    private $jdOrderId;

    public function setJdOrderId($jdOrderId)
    {
        $this->jdOrderId             = $jdOrderId;
        $this->apiParas["jdOrderId"] = $jdOrderId;
    }

    public function getJdOrderId()
    {
        return $this->jdOrderId;
    }

}








