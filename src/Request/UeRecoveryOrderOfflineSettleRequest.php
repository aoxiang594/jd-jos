<?php

namespace Aoxiang\JdJos\Request;

class UeRecoveryOrderOfflineSettleRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.recovery.order.offlineSettle";
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

    private $appid;

    public function setAppid($appid)
    {
        $this->appid             = $appid;
        $this->apiParas["appid"] = $appid;
    }

    public function getAppid()
    {
        return $this->appid;
    }

    private $code;

    public function setCode($code)
    {
        $this->code             = $code;
        $this->apiParas["code"] = $code;
    }

    public function getCode()
    {
        return $this->code;
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

    private $secondPic;

    public function setSecondPic($secondPic)
    {
        $this->secondPic             = $secondPic;
        $this->apiParas["secondPic"] = $secondPic;
    }

    public function getSecondPic()
    {
        return $this->secondPic;
    }

    private $settle;

    public function setSettle($settle)
    {
        $this->settle             = $settle;
        $this->apiParas["settle"] = $settle;
    }

    public function getSettle()
    {
        return $this->settle;
    }

}








