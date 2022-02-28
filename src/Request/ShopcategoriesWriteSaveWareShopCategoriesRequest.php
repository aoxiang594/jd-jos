<?php

namespace Aoxiang\JdJos\Request;

class ShopcategoriesWriteSaveWareShopCategoriesRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.shopcategories.write.saveWareShopCategories";
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

    private $wareId;

    public function setWareId($wareId)
    {
        $this->wareId             = $wareId;
        $this->apiParas["wareId"] = $wareId;
    }

    public function getWareId()
    {
        return $this->wareId;
    }

    private $shopCategory;

    public function setShopCategory($shopCategory)
    {
        $this->shopCategory             = $shopCategory;
        $this->apiParas["shopCategory"] = $shopCategory;
    }

    public function getShopCategory()
    {
        return $this->shopCategory;
    }
}








