<?php

namespace Aoxiang\JdJos\Request;

class UeOrderBookInfoBizProgressRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.order.bookInfoBizProgress";
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

    private $bookBy;

    public function setBookBy($bookBy)
    {
        $this->bookBy             = $bookBy;
        $this->apiParas["bookBy"] = $bookBy;
    }

    public function getBookBy()
    {
        return $this->bookBy;
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

    private $remark;

    public function setRemark($remark)
    {
        $this->remark             = $remark;
        $this->apiParas["remark"] = $remark;
    }

    public function getRemark()
    {
        return $this->remark;
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

    private $type;

    public function setType($type)
    {
        $this->type             = $type;
        $this->apiParas["type"] = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    private $bookOperateDate;

    public function setBookOperateDate($bookOperateDate)
    {
        $this->bookOperateDate             = $bookOperateDate;
        $this->apiParas["bookOperateDate"] = $bookOperateDate;
    }

    public function getBookOperateDate()
    {
        return $this->bookOperateDate;
    }

}








