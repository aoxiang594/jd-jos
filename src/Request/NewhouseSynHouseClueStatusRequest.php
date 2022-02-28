<?php

namespace Aoxiang\JdJos\Request;

class NewhouseSynHouseClueStatusRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.newhouse.synHouseClueStatus";
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

    private $clueId;

    public function setClueId($clueId)
    {
        $this->clueId             = $clueId;
        $this->apiParas["clueId"] = $clueId;
    }

    public function getClueId()
    {
        return $this->clueId;
    }

    private $clueStatus;

    public function setClueStatus($clueStatus)
    {
        $this->clueStatus             = $clueStatus;
        $this->apiParas["clueStatus"] = $clueStatus;
    }

    public function getClueStatus()
    {
        return $this->clueStatus;
    }

    private $brokerId;

    public function setBrokerId($brokerId)
    {
        $this->brokerId             = $brokerId;
        $this->apiParas["brokerId"] = $brokerId;
    }

    public function getBrokerId()
    {
        return $this->brokerId;
    }

    private $updateTimeLong;

    public function setUpdateTimeLong($updateTimeLong)
    {
        $this->updateTimeLong             = $updateTimeLong;
        $this->apiParas["updateTimeLong"] = $updateTimeLong;
    }

    public function getUpdateTimeLong()
    {
        return $this->updateTimeLong;
    }

    private $channelId;

    public function setChannelId($channelId)
    {
        $this->channelId             = $channelId;
        $this->apiParas["channelId"] = $channelId;
    }

    public function getChannelId()
    {
        return $this->channelId;
    }

    private $visitQrCode;

    public function setVisitQrCode($visitQrCode)
    {
        $this->visitQrCode             = $visitQrCode;
        $this->apiParas["visitQrCode"] = $visitQrCode;
    }

    public function getVisitQrCode()
    {
        return $this->visitQrCode;
    }

    private $protectionDeadlineLong;

    public function setProtectionDeadlineLong($protectionDeadlineLong)
    {
        $this->protectionDeadlineLong             = $protectionDeadlineLong;
        $this->apiParas["protectionDeadlineLong"] = $protectionDeadlineLong;
    }

    public function getProtectionDeadlineLong()
    {
        return $this->protectionDeadlineLong;
    }

    private $propertyConsultantName;

    public function setPropertyConsultantName($propertyConsultantName)
    {
        $this->propertyConsultantName             = $propertyConsultantName;
        $this->apiParas["propertyConsultantName"] = $propertyConsultantName;
    }

    public function getPropertyConsultantName()
    {
        return $this->propertyConsultantName;
    }

    private $propertyConsultantPhone;

    public function setPropertyConsultantPhone($propertyConsultantPhone)
    {
        $this->propertyConsultantPhone             = $propertyConsultantPhone;
        $this->apiParas["propertyConsultantPhone"] = $propertyConsultantPhone;
    }

    public function getPropertyConsultantPhone()
    {
        return $this->propertyConsultantPhone;
    }

}








