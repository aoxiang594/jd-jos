<?php

namespace Aoxiang\JdJos\Request;

class MedicineDsOrderBatchUpdateStockRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.medicine.ds.order.batchUpdateStock";
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

    private $siteId;

    public function setSiteId($siteId)
    {
        $this->siteId             = $siteId;
        $this->apiParas["siteId"] = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    private $num;

    public function setNum($num)
    {
        $this->num             = $num;
        $this->apiParas["num"] = $num;
    }

    public function getNum()
    {
        return $this->num;
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
}








