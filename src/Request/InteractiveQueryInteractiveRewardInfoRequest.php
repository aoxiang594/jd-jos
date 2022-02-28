<?php

namespace Aoxiang\JdJos\Request;

class InteractiveQueryInteractiveRewardInfoRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.interactive.queryInteractiveRewardInfo";
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

    private $sysParam;

    public function setSysParam($sysParam)
    {
        $this->apiParas['sysParam'] = $sysParam;
    }

    public function getSysParam()
    {
        return $this->apiParas['sysParam'];
    }

    private $interactiveRewardParam;

    public function setInteractiveRewardParam($interactiveRewardParam)
    {
        $this->apiParas['interactiveRewardParam'] = $interactiveRewardParam;
    }

    public function getInteractiveRewardParam()
    {
        return $this->apiParas['interactiveRewardParam'];
    }
}

?>
