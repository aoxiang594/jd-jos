<?php

namespace Aoxiang\JdJos\Request;

class AllinplateYphOrderQueryPriceInfosBySopOrderIdRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.allinplate.yphOrder.queryPriceInfosBySopOrderId";
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

    private $systermName;

    public function setSystermName($systermName)
    {
        $this->systermName             = $systermName;
        $this->apiParas["systermName"] = $systermName;
    }

    public function getSystermName()
    {
        return $this->systermName;
    }

    private $queryCondition;

    public function setQueryCondition($queryCondition)
    {
        $this->queryCondition             = $queryCondition;
        $this->apiParas["queryCondition"] = $queryCondition;
    }

    public function getQueryCondition()
    {
        return $this->queryCondition;
    }

    private $extendStr;

    public function setExtendStr($extendStr)
    {
        $this->extendStr             = $extendStr;
        $this->apiParas["extendStr"] = $extendStr;
    }

    public function getExtendStr()
    {
        return $this->extendStr;
    }

}








