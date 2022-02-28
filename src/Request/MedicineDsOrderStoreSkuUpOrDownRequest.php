<?php

namespace Aoxiang\JdJos\Request;

class MedicineDsOrderStoreSkuUpOrDownRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.medicine.ds.order.storeSkuUpOrDown";
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

    private $exStoreId;

    public function setExStoreId($exStoreId)
    {
        $this->exStoreId             = $exStoreId;
        $this->apiParas["exStoreId"] = $exStoreId;
    }

    public function getExStoreId()
    {
        return $this->exStoreId;
    }

    private $skuId;

    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    private $storeSkuStatus;

    public function setStoreSkuStatus($storeSkuStatus)
    {
        $this->storeSkuStatus             = $storeSkuStatus;
        $this->apiParas["storeSkuStatus"] = $storeSkuStatus;
    }

    public function getStoreSkuStatus()
    {
        return $this->storeSkuStatus;
    }

    private $storeId;

    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"] = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

    private $outerId;

    public function setOuterId($outerId)
    {
        $this->outerId             = $outerId;
        $this->apiParas["outerId"] = $outerId;
    }

    public function getOuterId()
    {
        return $this->outerId;
    }

}








