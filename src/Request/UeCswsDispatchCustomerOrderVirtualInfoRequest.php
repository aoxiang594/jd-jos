<?php

namespace Aoxiang\JdJos\Request;

class UeCswsDispatchCustomerOrderVirtualInfoRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.csws.dispatch.customerOrderVirtualInfo";
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

    private $cusOrderNo;

    public function setCusOrderNo($cusOrderNo)
    {
        $this->cusOrderNo             = $cusOrderNo;
        $this->apiParas["cusOrderNo"] = $cusOrderNo;
    }

    public function getCusOrderNo()
    {
        return $this->cusOrderNo;
    }

    private $vendorCode;

    public function setVendorCode($vendorCode)
    {
        $this->vendorCode             = $vendorCode;
        $this->apiParas["vendorCode"] = $vendorCode;
    }

    public function getVendorCode()
    {
        return $this->vendorCode;
    }

}








