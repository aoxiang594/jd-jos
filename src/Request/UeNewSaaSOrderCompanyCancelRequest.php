<?php

namespace Aoxiang\JdJos\Request;

class UeNewSaaSOrderCompanyCancelRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.newSaaSOrder.companyCancel";
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

    private $createBy;

    public function setCreateBy($createBy)
    {
        $this->createBy             = $createBy;
        $this->apiParas["createBy"] = $createBy;
    }

    public function getCreateBy()
    {
        return $this->createBy;
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

    private $cancelType;

    public function setCancelType($cancelType)
    {
        $this->cancelType             = $cancelType;
        $this->apiParas["cancelType"] = $cancelType;
    }

    public function getCancelType()
    {
        return $this->cancelType;
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

    private $cancelReason;

    public function setCancelReason($cancelReason)
    {
        $this->cancelReason             = $cancelReason;
        $this->apiParas["cancelReason"] = $cancelReason;
    }

    public function getCancelReason()
    {
        return $this->cancelReason;
    }

}








