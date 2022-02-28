<?php

namespace Aoxiang\JdJos\Request;

class UeBizOrderJxfwJsfServiceExpressReturnResultRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.bizOrderJxfwJsfService.expressReturnResult";
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

    private $remark;

    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"] = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
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

    private $deliveredResult;

    public function setDeliveredResult($deliveredResult)
    {
        $this->deliveredResult             = $deliveredResult;
        $this->apiParas["deliveredResult"] = $deliveredResult;
    }

    public function getDeliveredResult()
    {
        return $this->deliveredResult;
    }

}








