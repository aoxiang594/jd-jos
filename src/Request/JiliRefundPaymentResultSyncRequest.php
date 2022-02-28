<?php

namespace Aoxiang\JdJos\Request;

class JiliRefundPaymentResultSyncRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.jili.refund.payment.result.sync";
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

    private $tenantId;

    public function setTenantId($tenantId)
    {
        $this->tenantId             = $tenantId;
        $this->apiParas["tenantId"] = $tenantId;
    }

    public function getTenantId()
    {
        return $this->tenantId;
    }

    private $detailId;

    public function setDetailId($detailId)
    {
        $this->detailId             = $detailId;
        $this->apiParas["detailId"] = $detailId;
    }

    public function getDetailId()
    {
        return $this->detailId;
    }

    private $payChannel;

    public function setPayChannel($payChannel)
    {
        $this->payChannel             = $payChannel;
        $this->apiParas["payChannel"] = $payChannel;
    }

    public function getPayChannel()
    {
        return $this->payChannel;
    }

    private $confirmTime;

    public function setConfirmTime($confirmTime)
    {
        $this->confirmTime             = $confirmTime;
        $this->apiParas["confirmTime"] = $confirmTime;
    }

    public function getConfirmTime()
    {
        return $this->confirmTime;
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

    private $resMsg;

    public function setResMsg($resMsg)
    {
        $this->resMsg             = $resMsg;
        $this->apiParas["resMsg"] = $resMsg;
    }

    public function getResMsg()
    {
        return $this->resMsg;
    }

    private $status;

    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"] = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    private $receiptId;

    public function setReceiptId($receiptId)
    {
        $this->receiptId             = $receiptId;
        $this->apiParas["receiptId"] = $receiptId;
    }

    public function getReceiptId()
    {
        return $this->receiptId;
    }

    private $accountSn;

    public function setAccountSn($accountSn)
    {
        $this->accountSn             = $accountSn;
        $this->apiParas["accountSn"] = $accountSn;
    }

    public function getAccountSn()
    {
        return $this->accountSn;
    }

}








