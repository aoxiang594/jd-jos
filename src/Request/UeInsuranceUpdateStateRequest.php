<?php

namespace Aoxiang\JdJos\Request;

class UeInsuranceUpdateStateRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.insurance.updateState";
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

    private $extensionEndDate;

    public function setExtensionEndDate($extensionEndDate)
    {
        $this->extensionEndDate             = $extensionEndDate;
        $this->apiParas["extensionEndDate"] = $extensionEndDate;
    }

    public function getExtensionEndDate()
    {
        return $this->extensionEndDate;
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

    private $handleType;

    public function setHandleType($handleType)
    {
        $this->handleType             = $handleType;
        $this->apiParas["handleType"] = $handleType;
    }

    public function getHandleType()
    {
        return $this->handleType;
    }

    private $extensionBeginDate;

    public function setExtensionBeginDate($extensionBeginDate)
    {
        $this->extensionBeginDate             = $extensionBeginDate;
        $this->apiParas["extensionBeginDate"] = $extensionBeginDate;
    }

    public function getExtensionBeginDate()
    {
        return $this->extensionBeginDate;
    }

    private $agreementNo;

    public function setAgreementNo($agreementNo)
    {
        $this->agreementNo             = $agreementNo;
        $this->apiParas["agreementNo"] = $agreementNo;
    }

    public function getAgreementNo()
    {
        return $this->agreementNo;
    }

    private $failCause;

    public function setFailCause($failCause)
    {
        $this->failCause             = $failCause;
        $this->apiParas["failCause"] = $failCause;
    }

    public function getFailCause()
    {
        return $this->failCause;
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

}








