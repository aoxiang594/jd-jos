<?php

namespace Aoxiang\JdJos\Request;

class AscSameorderListRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.sameorder.list";
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

    private $buId;

    public function setBuId($buId)
    {
        $this->buId             = $buId;
        $this->apiParas["buId"] = $buId;
    }

    public function getBuId()
    {
        return $this->buId;
    }

    private $operatePin;

    public function setOperatePin($operatePin)
    {
        $this->operatePin             = $operatePin;
        $this->apiParas["operatePin"] = $operatePin;
    }

    public function getOperatePin()
    {
        return $this->operatePin;
    }

    private $operateNick;

    public function setOperateNick($operateNick)
    {
        $this->operateNick             = $operateNick;
        $this->apiParas["operateNick"] = $operateNick;
    }

    public function getOperateNick()
    {
        return $this->operateNick;
    }

    private $serviceId;

    public function setServiceId($serviceId)
    {
        $this->serviceId             = $serviceId;
        $this->apiParas["serviceId"] = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
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

    private $pageNumber;

    public function setPageNumber($pageNumber)
    {
        $this->pageNumber             = $pageNumber;
        $this->apiParas["pageNumber"] = $pageNumber;
    }

    public function getPageNumber()
    {
        return $this->pageNumber;
    }

    private $pageSize;

    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    private $extJsonStr;

    public function setExtJsonStr($extJsonStr)
    {
        $this->extJsonStr             = $extJsonStr;
        $this->apiParas["extJsonStr"] = $extJsonStr;
    }

    public function getExtJsonStr()
    {
        return $this->extJsonStr;
    }

}







