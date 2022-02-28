<?php

namespace Aoxiang\JdJos\Request;

class UeNewSaaSOrderSyncEngineerServiceAreaRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.newSaaSOrder.syncEngineerServiceArea";
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

    private $engineerServiceAreaIdList;

    public function setEngineerServiceAreaIdList($engineerServiceAreaIdList)
    {
        $this->engineerServiceAreaIdList             = $engineerServiceAreaIdList;
        $this->apiParas["engineerServiceAreaIdList"] = $engineerServiceAreaIdList;
    }

    public function getEngineerServiceAreaIdList()
    {
        return $this->engineerServiceAreaIdList;
    }

    private $engineerId;

    public function setEngineerId($engineerId)
    {
        $this->engineerId             = $engineerId;
        $this->apiParas["engineerId"] = $engineerId;
    }

    public function getEngineerId()
    {
        return $this->engineerId;
    }

    private $appId;

    public function setAppId($appId)
    {
        $this->appId             = $appId;
        $this->apiParas["appId"] = $appId;
    }

    public function getAppId()
    {
        return $this->appId;
    }

    private $siteId;

    public function setSiteId($siteId)
    {
        $this->siteId             = $siteId;
        $this->apiParas["siteId"] = $siteId;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

}








