<?php

namespace Aoxiang\JdJos\Request;

class QueryTradeBillStatusRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryTradeBillStatus";
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

    private $requestId;

    public function setRequestId($requestId)
    {
        $this->requestId             = $requestId;
        $this->apiParas["requestId"] = $requestId;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    private $tradeBillType;

    public function setTradeBillType($tradeBillType)
    {
        $this->tradeBillType             = $tradeBillType;
        $this->apiParas["tradeBillType"] = $tradeBillType;
    }

    public function getTradeBillType()
    {
        return $this->tradeBillType;
    }

    private $tradeBillId;

    public function setTradeBillId($tradeBillId)
    {
        $this->tradeBillId             = $tradeBillId;
        $this->apiParas["tradeBillId"] = $tradeBillId;
    }

    public function getTradeBillId()
    {
        return $this->tradeBillId;
    }

}








