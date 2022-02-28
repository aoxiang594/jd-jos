<?php

namespace Aoxiang\JdJos\Request;

class VopAddressConvertFourAreaByDetailStrRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vop.address.convertFourAreaByDetailStr";
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

    private $addressDetailStr;

    public function setAddressDetailStr($addressDetailStr)
    {
        $this->addressDetailStr             = $addressDetailStr;
        $this->apiParas["addressDetailStr"] = $addressDetailStr;
    }

    public function getAddressDetailStr()
    {
        return $this->addressDetailStr;
    }

}








