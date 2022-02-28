<?php

namespace Aoxiang\JdJos\Request;

class DentistryPushGoodsInfoRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.dentistry.pushGoodsInfo";
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

    private $ThirdGoodsParam;

    public function setThirdGoodsParam($ThirdGoodsParam)
    {
        $this->apiParas['ThirdGoodsParam'] = $ThirdGoodsParam;
    }

    public function getThirdGoodsParam()
    {
        return $this->apiParas['ThirdGoodsParam'];
    }
}

?>
