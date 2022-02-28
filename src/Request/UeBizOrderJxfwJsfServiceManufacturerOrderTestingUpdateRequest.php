<?php

namespace Aoxiang\JdJos\Request;

class UeBizOrderJxfwJsfServiceManufacturerOrderTestingUpdateRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.bizOrderJxfwJsfService.manufacturerOrderTestingUpdate";
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

    private $expectPrice;

    public function setExpectPrice($expectPrice)
    {
        $this->expectPrice             = $expectPrice;
        $this->apiParas["expectPrice"] = $expectPrice;
    }

    public function getExpectPrice()
    {
        return $this->expectPrice;
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

    private $checkReportUrl;

    public function setCheckReportUrl($checkReportUrl)
    {
        $this->checkReportUrl             = $checkReportUrl;
        $this->apiParas["checkReportUrl"] = $checkReportUrl;
    }

    public function getCheckReportUrl()
    {
        return $this->checkReportUrl;
    }

    private $checkMan;

    public function setCheckMan($checkMan)
    {
        $this->checkMan             = $checkMan;
        $this->apiParas["checkMan"] = $checkMan;
    }

    public function getCheckMan()
    {
        return $this->checkMan;
    }

    private $checkDate;

    public function setCheckDate($checkDate)
    {
        $this->checkDate             = $checkDate;
        $this->apiParas["checkDate"] = $checkDate;
    }

    public function getCheckDate()
    {
        return $this->checkDate;
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

    private $checkResult;

    public function setCheckResult($checkResult)
    {
        $this->checkResult             = $checkResult;
        $this->apiParas["checkResult"] = $checkResult;
    }

    public function getCheckResult()
    {
        return $this->checkResult;
    }

}








