<?php

namespace Aoxiang\JdJos\Request;

class AscBizCustomerSendStoreApplyRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.biz.customerSendStoreApply";
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

    private $CustomerSendStoreApplyCmd;

    public function setCustomerSendStoreApplyCmd($CustomerSendStoreApplyCmd)
    {
        $this->apiParas['CustomerSendStoreApplyCmd'] = $CustomerSendStoreApplyCmd;
    }

    public function getCustomerSendStoreApplyCmd()
    {
        return $this->apiParas['CustomerSendStoreApplyCmd'];
    }
}

?>
