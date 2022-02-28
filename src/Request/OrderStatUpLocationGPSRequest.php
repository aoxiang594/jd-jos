<?php

namespace Aoxiang\JdJos\Request;

class OrderStatUpLocationGPSRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.OrderStat.upLocationGPS";
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

    private $nowGPSY;

    public function setNowGPSY($nowGPSY)
    {
        $this->nowGPSY             = $nowGPSY;
        $this->apiParas["nowGPSY"] = $nowGPSY;
    }

    public function getNowGPSY()
    {
        return $this->nowGPSY;
    }

    private $nowGPSX;

    public function setNowGPSX($nowGPSX)
    {
        $this->nowGPSX             = $nowGPSX;
        $this->apiParas["nowGPSX"] = $nowGPSX;
    }

    public function getNowGPSX()
    {
        return $this->nowGPSX;
    }

    private $orderNo;

    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

    private $enginnerId;

    public function setEnginnerId($enginnerId)
    {
        $this->enginnerId             = $enginnerId;
        $this->apiParas["enginnerId"] = $enginnerId;
    }

    public function getEnginnerId()
    {
        return $this->enginnerId;
    }

}








