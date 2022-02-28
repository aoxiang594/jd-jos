<?php

namespace Aoxiang\JdJos\Request;

class PopOrderQueryCouponDetaiRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.queryCouponDetai";
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

    private $queryPromoFlag;

    public function setQueryPromoFlag($queryPromoFlag)
    {
        $this->queryPromoFlag             = $queryPromoFlag;
        $this->apiParas["queryPromoFlag"] = $queryPromoFlag;
    }

    public function getQueryPromoFlag()
    {
        return $this->queryPromoFlag;
    }

}








