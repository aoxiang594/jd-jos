<?php

namespace Aoxiang\JdJos\Request;

class AscBizStoreDoorPickRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.asc.biz.storeDoorPick";
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

    private $StoreDoorPickApplyCmd;

    public function setStoreDoorPickApplyCmd($StoreDoorPickApplyCmd)
    {
        $this->apiParas['StoreDoorPickApplyCmd'] = $StoreDoorPickApplyCmd;
    }

    public function getStoreDoorPickApplyCmd()
    {
        return $this->apiParas['StoreDoorPickApplyCmd'];
    }
}

?>
