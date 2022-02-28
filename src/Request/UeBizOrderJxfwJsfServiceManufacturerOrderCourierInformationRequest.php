<?php

namespace Aoxiang\JdJos\Request;

class UeBizOrderJxfwJsfServiceManufacturerOrderCourierInformationRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.bizOrderJxfwJsfService.manufacturerOrderCourierInformation";
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

    private $expressmanCode;

    public function setExpressmanCode($expressmanCode)
    {
        $this->expressmanCode             = $expressmanCode;
        $this->apiParas["expressmanCode"] = $expressmanCode;
    }

    public function getExpressmanCode()
    {
        return $this->expressmanCode;
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

    private $expressmanMobile;

    public function setExpressmanMobile($expressmanMobile)
    {
        $this->expressmanMobile             = $expressmanMobile;
        $this->apiParas["expressmanMobile"] = $expressmanMobile;
    }

    public function getExpressmanMobile()
    {
        return $this->expressmanMobile;
    }

    private $appId;

    public function setAppId($appId)
    {
        $this->appId             = $appId;
        $this->apiParas["appId"] = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
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

    private $expressmanName;

    public function setExpressmanName($expressmanName)
    {
        $this->expressmanName             = $expressmanName;
        $this->apiParas["expressmanName"] = $expressmanName;
    }

    public function getExpressmanName()
    {
        return $this->expressmanName;
    }

}








