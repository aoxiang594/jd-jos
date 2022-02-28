<?php

namespace Aoxiang\JdJos\Request;

class UeRecoveryOrderRecyclerReconsiderRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.recovery.order.recyclerReconsider";
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

    private $appid;

    public function setAppid($appid)
    {
        $this->appid             = $appid;
        $this->apiParas["appid"] = $appid;
    }

    public function getAppid()
    {
        return $this->appid;
    }

    private $code;

    public function setCode($code)
    {
        $this->code             = $code;
        $this->apiParas["code"] = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    private $settleNo;

    public function setSettleNo($settleNo)
    {
        $this->settleNo             = $settleNo;
        $this->apiParas["settleNo"] = $settleNo;
    }

    public function getSettleNo()
    {
        return $this->settleNo;
    }

    private $dealRemark;

    public function setDealRemark($dealRemark)
    {
        $this->dealRemark             = $dealRemark;
        $this->apiParas["dealRemark"] = $dealRemark;
    }

    public function getDealRemark()
    {
        return $this->dealRemark;
    }

    private $dealType;

    public function setDealType($dealType)
    {
        $this->dealType             = $dealType;
        $this->apiParas["dealType"] = $dealType;
    }

    public function getDealType()
    {
        return $this->dealType;
    }

    private $invoiceNo;

    public function setInvoiceNo($invoiceNo)
    {
        $this->invoiceNo             = $invoiceNo;
        $this->apiParas["invoiceNo"] = $invoiceNo;
    }

    public function getInvoiceNo()
    {
        return $this->invoiceNo;
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

}








