<?php

namespace Aoxiang\JdJos\Request;

class LdopAlphaWaybillConfirmRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ldop.alpha.waybill.confirm";
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

    private $totalVolume;

    public function setTotalVolume($totalVolume)
    {
        $this->totalVolume             = $totalVolume;
        $this->apiParas["totalVolume"] = $totalVolume;
    }

    public function getTotalVolume()
    {
        return $this->totalVolume;
    }

    private $volume;

    public function setVolume($volume)
    {
        $this->volume             = $volume;
        $this->apiParas["volume"] = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    private $length;

    public function setLength($length)
    {
        $this->length             = $length;
        $this->apiParas["length"] = $length;
    }

    public function getLength()
    {
        return $this->length;
    }

    private $width;

    public function setWidth($width)
    {
        $this->width             = $width;
        $this->apiParas["width"] = $width;
    }

    public function getWidth()
    {
        return $this->width;
    }

    private $weight;

    public function setWeight($weight)
    {
        $this->weight             = $weight;
        $this->apiParas["weight"] = $weight;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    private $waybillNo;

    public function setWaybillNo($waybillNo)
    {
        $this->waybillNo             = $waybillNo;
        $this->apiParas["waybillNo"] = $waybillNo;
    }

    public function getWaybillNo()
    {
        return $this->waybillNo;
    }

    private $height;

    public function setHeight($height)
    {
        $this->height             = $height;
        $this->apiParas["height"] = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    private $providerCode;

    public function setProviderCode($providerCode)
    {
        $this->providerCode             = $providerCode;
        $this->apiParas["providerCode"] = $providerCode;
    }

    public function getProviderCode()
    {
        return $this->providerCode;
    }

    private $totalWeight;

    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight             = $totalWeight;
        $this->apiParas["totalWeight"] = $totalWeight;
    }

    public function getTotalWeight()
    {
        return $this->totalWeight;
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








