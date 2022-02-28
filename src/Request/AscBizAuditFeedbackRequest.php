<?php

namespace Aoxiang\JdJos\Request;

class AscBizAuditFeedbackRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.biz.audit.feedback";
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

    private $waitCustomerFeedbackCmd;

    public function setWaitCustomerFeedbackCmd($waitCustomerFeedbackCmd)
    {
        $this->apiParas['waitCustomerFeedbackCmd'] = $waitCustomerFeedbackCmd;
    }

    public function getWaitCustomerFeedbackCmd()
    {
        return $this->apiParas['waitCustomerFeedbackCmd'];
    }
}

?>