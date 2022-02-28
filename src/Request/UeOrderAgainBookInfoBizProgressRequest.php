<?php

namespace Aoxiang\JdJos\Request;

class UeOrderAgainBookInfoBizProgressRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.order.againBookInfoBizProgress";
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

    private $operateDate;

    public function setOperateDate($operateDate)
    {
        $this->operateDate             = $operateDate;
        $this->apiParas["operateDate"] = $operateDate;
    }

    public function getOperateDate()
    {
        return $this->operateDate;
    }

    private $orderNo;

    public function setOrderNo($orderNo)
    {
        $this->orderNo             = $orderNo;
        $this->apiParas["orderNo"] = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
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

    private $bookDate;

    public function setBookDate($bookDate)
    {
        $this->bookDate             = $bookDate;
        $this->apiParas["bookDate"] = $bookDate;
    }

    public function getBookDate()
    {
        return $this->bookDate;
    }

    private $createBy;

    public function setCreateBy($createBy)
    {
        $this->createBy             = $createBy;
        $this->apiParas["createBy"] = $createBy;
    }

    public function getCreateBy()
    {
        return $this->createBy;
    }

}








