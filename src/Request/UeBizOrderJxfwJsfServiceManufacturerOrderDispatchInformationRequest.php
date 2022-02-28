<?php

namespace Aoxiang\JdJos\Request;

class UeBizOrderJxfwJsfServiceManufacturerOrderDispatchInformationRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.bizOrderJxfwJsfService.manufacturerOrderDispatchInformation";
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

    private $deliverNo;

    public function setDeliverNo($deliverNo)
    {
        $this->deliverNo             = $deliverNo;
        $this->apiParas["deliverNo"] = $deliverNo;
    }

    public function getDeliverNo()
    {
        return $this->deliverNo;
    }

    private $deliverCompany;

    public function setDeliverCompany($deliverCompany)
    {
        $this->deliverCompany             = $deliverCompany;
        $this->apiParas["deliverCompany"] = $deliverCompany;
    }

    public function getDeliverCompany()
    {
        return $this->deliverCompany;
    }

    private $type;

    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    private $operateDate;

    public function setOperateDate($operateDate)
    {
        $this->operateDate             = $operateDate;
        $this->apiParas["operateDate"] = $operateDate;
    }

    public function getOperateDate()
    {
        return $this->operateDate;
    }

}








