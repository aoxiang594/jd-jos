<?php

namespace Aoxiang\JdJos\Request;

class OmnicOrderSavecourierRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.omnic.order.savecourier";
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

    private $orderId;

    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    private $deliveryId;

    public function setDeliveryId($deliveryId)
    {
        $this->deliveryId             = $deliveryId;
        $this->apiParas["deliveryId"] = $deliveryId;
    }

    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    private $carrierType;

    public function setCarrierType($carrierType)
    {
        $this->carrierType             = $carrierType;
        $this->apiParas["carrierType"] = $carrierType;
    }

    public function getCarrierType()
    {
        return $this->carrierType;
    }

    private $carrierName;

    public function setCarrierName($carrierName)
    {
        $this->carrierName             = $carrierName;
        $this->apiParas["carrierName"] = $carrierName;
    }

    public function getCarrierName()
    {
        return $this->carrierName;
    }

    private $carrierNo;

    public function setCarrierNo($carrierNo)
    {
        $this->carrierNo             = $carrierNo;
        $this->apiParas["carrierNo"] = $carrierNo;
    }

    public function getCarrierNo()
    {
        return $this->carrierNo;
    }

}








