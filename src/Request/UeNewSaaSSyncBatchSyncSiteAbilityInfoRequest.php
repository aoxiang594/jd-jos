<?php

namespace Aoxiang\JdJos\Request;

class UeNewSaaSSyncBatchSyncSiteAbilityInfoRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.newSaaSSync.batchSyncSiteAbilityInfo";
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

    private $param;

    public function setParam($param)
    {
        $this->apiParas['param'] = $param;
    }

    public function getParam()
    {
        return $this->apiParas['param'];
    }
}

?>
