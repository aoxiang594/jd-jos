<?php

namespace Aoxiang\JdJos\Request;

class ScfInvoiceDailybillQueryDailyBillListRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.scf.invoice.dailybill.queryDailyBillList";
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

    private $applyId;

    public function setApplyId($applyId)
    {
        $this->applyId             = $applyId;
        $this->apiParas["applyId"] = $applyId;
    }

    public function getApplyId()
    {
        return $this->applyId;
    }

    private $rfBillType;

    public function setRfBillType($rfBillType)
    {
        $this->rfBillType             = $rfBillType;
        $this->apiParas["rfBillType"] = $rfBillType;
    }

    public function getRfBillType()
    {
        return $this->rfBillType;
    }

    private $endDate;

    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["endDate"] = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    private $beginDate;

    public function setBeginDate($beginDate)
    {
        $this->beginDate             = $beginDate;
        $this->apiParas["beginDate"] = $beginDate;
    }

    public function getBeginDate()
    {
        return $this->beginDate;
    }

    private $pageNum;

    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"] = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
    }

    private $settleEntityId;

    public function setSettleEntityId($settleEntityId)
    {
        $this->settleEntityId             = $settleEntityId;
        $this->apiParas["settleEntityId"] = $settleEntityId;
    }

    public function getSettleEntityId()
    {
        return $this->settleEntityId;
    }

}








