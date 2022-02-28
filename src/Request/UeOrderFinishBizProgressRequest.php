<?php

namespace Aoxiang\JdJos\Request;

class UeOrderFinishBizProgressRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.ue.order.finishBizProgress";
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

    private $barcode2;

    public function setBarcode2($barcode2)
    {
        $this->barcode2             = $barcode2;
        $this->apiParas["barcode2"] = $barcode2;
    }

    public function getBarcode2()
    {
        return $this->barcode2;
    }

    private $pic10;

    public function setPic10($pic10)
    {
        $this->pic10             = $pic10;
        $this->apiParas["pic10"] = $pic10;
    }

    public function getPic10()
    {
        return $this->pic10;
    }

    private $barcode1;

    public function setBarcode1($barcode1)
    {
        $this->barcode1             = $barcode1;
        $this->apiParas["barcode1"] = $barcode1;
    }

    public function getBarcode1()
    {
        return $this->barcode1;
    }

    private $failureReason;

    public function setFailureReason($failureReason)
    {
        $this->failureReason             = $failureReason;
        $this->apiParas["failureReason"] = $failureReason;
    }

    public function getFailureReason()
    {
        return $this->failureReason;
    }

    private $dealRemark;

    public function setDealRemark($dealRemark)
    {
        $this->dealRemark             = $dealRemark;
        $this->apiParas["dealRemark"] = $dealRemark;
    }

    public function getDealRemark()
    {
        return $this->dealRemark;
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

    private $pic1;

    public function setPic1($pic1)
    {
        $this->pic1             = $pic1;
        $this->apiParas["pic1"] = $pic1;
    }

    public function getPic1()
    {
        return $this->pic1;
    }

    private $failureName;

    public function setFailureName($failureName)
    {
        $this->failureName             = $failureName;
        $this->apiParas["failureName"] = $failureName;
    }

    public function getFailureName()
    {
        return $this->failureName;
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

    private $fixMethod;

    public function setFixMethod($fixMethod)
    {
        $this->fixMethod             = $fixMethod;
        $this->apiParas["fixMethod"] = $fixMethod;
    }

    public function getFixMethod()
    {
        return $this->fixMethod;
    }

    private $pic9;

    public function setPic9($pic9)
    {
        $this->pic9             = $pic9;
        $this->apiParas["pic9"] = $pic9;
    }

    public function getPic9()
    {
        return $this->pic9;
    }

    private $pic8;

    public function setPic8($pic8)
    {
        $this->pic8             = $pic8;
        $this->apiParas["pic8"] = $pic8;
    }

    public function getPic8()
    {
        return $this->pic8;
    }

    private $pic7;

    public function setPic7($pic7)
    {
        $this->pic7             = $pic7;
        $this->apiParas["pic7"] = $pic7;
    }

    public function getPic7()
    {
        return $this->pic7;
    }

    private $pic6;

    public function setPic6($pic6)
    {
        $this->pic6             = $pic6;
        $this->apiParas["pic6"] = $pic6;
    }

    public function getPic6()
    {
        return $this->pic6;
    }

    private $dealResult;

    public function setDealResult($dealResult)
    {
        $this->dealResult             = $dealResult;
        $this->apiParas["dealResult"] = $dealResult;
    }

    public function getDealResult()
    {
        return $this->dealResult;
    }

    private $pic5;

    public function setPic5($pic5)
    {
        $this->pic5             = $pic5;
        $this->apiParas["pic5"] = $pic5;
    }

    public function getPic5()
    {
        return $this->pic5;
    }

    private $pic4;

    public function setPic4($pic4)
    {
        $this->pic4             = $pic4;
        $this->apiParas["pic4"] = $pic4;
    }

    public function getPic4()
    {
        return $this->pic4;
    }

    private $usedMaterial;

    public function setUsedMaterial($usedMaterial)
    {
        $this->usedMaterial             = $usedMaterial;
        $this->apiParas["usedMaterial"] = $usedMaterial;
    }

    public function getUsedMaterial()
    {
        return $this->usedMaterial;
    }

    private $pic3;

    public function setPic3($pic3)
    {
        $this->pic3             = $pic3;
        $this->apiParas["pic3"] = $pic3;
    }

    public function getPic3()
    {
        return $this->pic3;
    }

    private $pic2;

    public function setPic2($pic2)
    {
        $this->pic2             = $pic2;
        $this->apiParas["pic2"] = $pic2;
    }

    public function getPic2()
    {
        return $this->pic2;
    }

}








