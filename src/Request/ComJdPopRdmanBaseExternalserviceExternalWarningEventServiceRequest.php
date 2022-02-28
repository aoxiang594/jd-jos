<?php

namespace Aoxiang\JdJos\Request;

class ComJdPopRdmanBaseExternalserviceExternalWarningEventServiceRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.com.jd.pop.rdman.base.externalservice.ExternalWarningEventService";
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

    private $orderCreateStartTime;

    public function setOrderCreateStartTime($orderCreateStartTime)
    {
        $this->orderCreateStartTime             = $orderCreateStartTime;
        $this->apiParas["orderCreateStartTime"] = $orderCreateStartTime;
    }

    public function getOrderCreateStartTime()
    {
        return $this->orderCreateStartTime;
    }

    private $orderCreateEndTime;

    public function setOrderCreateEndTime($orderCreateEndTime)
    {
        $this->orderCreateEndTime             = $orderCreateEndTime;
        $this->apiParas["orderCreateEndTime"] = $orderCreateEndTime;
    }

    public function getOrderCreateEndTime()
    {
        return $this->orderCreateEndTime;
    }

    private $orderId;

    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    private $modifiedStartTime;

    public function setModifiedStartTime($modifiedStartTime)
    {
        $this->modifiedStartTime             = $modifiedStartTime;
        $this->apiParas["modifiedStartTime"] = $modifiedStartTime;
    }

    public function getModifiedStartTime()
    {
        return $this->modifiedStartTime;
    }

    private $pageSize;

    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    private $eventType;

    public function setEventType($eventType)
    {
        $this->eventType             = $eventType;
        $this->apiParas["eventType"] = $eventType;
    }

    public function getEventType()
    {
        return $this->eventType;
    }

    private $page;

    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"] = $page;
    }

    public function getPage()
    {
        return $this->page;
    }

    private $modifiedEndTime;

    public function setModifiedEndTime($modifiedEndTime)
    {
        $this->modifiedEndTime             = $modifiedEndTime;
        $this->apiParas["modifiedEndTime"] = $modifiedEndTime;
    }

    public function getModifiedEndTime()
    {
        return $this->modifiedEndTime;
    }

}








