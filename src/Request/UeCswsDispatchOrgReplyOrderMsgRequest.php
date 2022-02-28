<?php

namespace Aoxiang\JdJos\Request;

class UeCswsDispatchOrgReplyOrderMsgRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.csws.dispatch.orgReplyOrderMsg";
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

    private $BizServiceCustomerReplyParam;

    public function setBizServiceCustomerReplyParam($BizServiceCustomerReplyParam)
    {
        $this->apiParas['BizServiceCustomerReplyParam'] = $BizServiceCustomerReplyParam;
    }

    public function getBizServiceCustomerReplyParam()
    {
        return $this->apiParas['BizServiceCustomerReplyParam'];
    }
}

?>
