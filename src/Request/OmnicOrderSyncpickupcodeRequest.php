<?php

namespace Aoxiang\JdJos\Request;

class OmnicOrderSyncpickupcodeRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnic.order.syncpickupcode";
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

    private $pickUpCode;

    public function setPickUpCode($pickUpCode)
    {
        $this->pickUpCode             = $pickUpCode;
        $this->apiParas["pickUpCode"] = $pickUpCode;
    }

    public function getPickUpCode()
    {
        return $this->pickUpCode;
    }

    private $salesChannelOrderId;

    public function setSalesChannelOrderId($salesChannelOrderId)
    {
        $this->salesChannelOrderId             = $salesChannelOrderId;
        $this->apiParas["salesChannelOrderId"] = $salesChannelOrderId;
    }

    public function getSalesChannelOrderId()
    {
        return $this->salesChannelOrderId;
    }

}








