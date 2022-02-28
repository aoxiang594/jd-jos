<?php

namespace Aoxiang\JdJos\Request;

class UeNewSaaSOrderDispatchOrder2SiteRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.newSaaSOrder.dispatchOrder2Site";
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

    private $orderSendSiteParam;

    public function setOrderSendSiteParam($orderSendSiteParam)
    {
        $this->apiParas['orderSendSiteParam'] = $orderSendSiteParam;
    }

    public function getOrderSendSiteParam()
    {
        return $this->apiParas['orderSendSiteParam'];
    }
}

?>
