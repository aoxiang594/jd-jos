<?php

namespace Aoxiang\JdJos\Request;

class DspRechargeGetRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dsp.recharge.get";
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

    private $pageOffset;

    public function setPageOffset($pageOffset)
    {
        $this->pageOffset             = $pageOffset;
        $this->apiParas["pageOffset"] = $pageOffset;
    }

    public function getPageOffset()
    {
        return $this->pageOffset;
    }

}








