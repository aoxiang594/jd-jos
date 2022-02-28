<?php

namespace Aoxiang\JdJos\Request;

class UeRecoveryOrderGetRecyclerSettleBillStatRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.recovery.order.getRecyclerSettleBillStat";
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

}








