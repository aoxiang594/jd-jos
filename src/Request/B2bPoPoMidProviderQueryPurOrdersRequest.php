<?php

namespace Aoxiang\JdJos\Request;

class B2bPoPoMidProviderQueryPurOrdersRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.b2b.po.PoMidProvider.queryPurOrders";
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

    private $userName;

    public function setUserName($userName)
    {
        $this->userName             = $userName;
        $this->apiParas["userName"] = $userName;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    private $companyName;

    public function setCompanyName($companyName)
    {
        $this->companyName             = $companyName;
        $this->apiParas["companyName"] = $companyName;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    private $issueInvoice;

    public function setIssueInvoice($issueInvoice)
    {
        $this->issueInvoice             = $issueInvoice;
        $this->apiParas["issueInvoice"] = $issueInvoice;
    }

    public function getIssueInvoice()
    {
        return $this->issueInvoice;
    }

    private $submitPoTimeFrom;

    public function setSubmitPoTimeFrom($submitPoTimeFrom)
    {
        $this->submitPoTimeFrom             = $submitPoTimeFrom;
        $this->apiParas["submitPoTimeFrom"] = $submitPoTimeFrom;
    }

    public function getSubmitPoTimeFrom()
    {
        return $this->submitPoTimeFrom;
    }

    private $submitPoTimeTo;

    public function setSubmitPoTimeTo($submitPoTimeTo)
    {
        $this->submitPoTimeTo             = $submitPoTimeTo;
        $this->apiParas["submitPoTimeTo"] = $submitPoTimeTo;
    }

    public function getSubmitPoTimeTo()
    {
        return $this->submitPoTimeTo;
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

    private $pageIndex;

    public function setPageIndex($pageIndex)
    {
        $this->pageIndex             = $pageIndex;
        $this->apiParas["pageIndex"] = $pageIndex;
    }

    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    private $consProvinceId;

    public function setConsProvinceId($consProvinceId)
    {
        $this->consProvinceId             = $consProvinceId;
        $this->apiParas["consProvinceId"] = $consProvinceId;
    }

    public function getConsProvinceId()
    {
        return $this->consProvinceId;
    }

    private $consCityId;

    public function setConsCityId($consCityId)
    {
        $this->consCityId             = $consCityId;
        $this->apiParas["consCityId"] = $consCityId;
    }

    public function getConsCityId()
    {
        return $this->consCityId;
    }

    private $consCountyId;

    public function setConsCountyId($consCountyId)
    {
        $this->consCountyId             = $consCountyId;
        $this->apiParas["consCountyId"] = $consCountyId;
    }

    public function getConsCountyId()
    {
        return $this->consCountyId;
    }

    private $consTownId;

    public function setConsTownId($consTownId)
    {
        $this->consTownId             = $consTownId;
        $this->apiParas["consTownId"] = $consTownId;
    }

    public function getConsTownId()
    {
        return $this->consTownId;
    }

    private $consName;

    public function setConsName($consName)
    {
        $this->consName             = $consName;
        $this->apiParas["consName"] = $consName;
    }

    public function getConsName()
    {
        return $this->consName;
    }

    private $OrederId;

    public function setOrederId($OrederId)
    {
        $this->OrederId             = $OrederId;
        $this->apiParas["OrederId"] = $OrederId;
    }

    public function getOrederId()
    {
        return $this->OrederId;
    }

    private $id;

    public function setId($id)
    {
        $this->id             = $id;
        $this->apiParas["id"] = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    private $OrederId1;

    public function setOrederId1($OrederId1)
    {
        $this->OrederId1             = $OrederId1;
        $this->apiParas["OrederId1"] = $OrederId1;
    }

    public function getOrederId1()
    {
        return $this->OrederId1;
    }

    private $OrederId2;

    public function setOrederId2($OrederId2)
    {
        $this->OrederId2             = $OrederId2;
        $this->apiParas["OrederId2"] = $OrederId2;
    }

    public function getOrederId2()
    {
        return $this->OrederId2;
    }

    private $OrederId3;

    public function setOrederId3($OrederId3)
    {
        $this->OrederId3             = $OrederId3;
        $this->apiParas["OrederId3"] = $OrederId3;
    }

    public function getOrederId3()
    {
        return $this->OrederId3;
    }

    private $OrederId4;

    public function setOrederId4($OrederId4)
    {
        $this->OrederId4             = $OrederId4;
        $this->apiParas["OrederId4"] = $OrederId4;
    }

    public function getOrederId4()
    {
        return $this->OrederId4;
    }

    private $OrederId5;

    public function setOrederId5($OrederId5)
    {
        $this->OrederId5             = $OrederId5;
        $this->apiParas["OrederId5"] = $OrederId5;
    }

    public function getOrederId5()
    {
        return $this->OrederId5;
    }

    private $OrederId6;

    public function setOrederId6($OrederId6)
    {
        $this->OrederId6             = $OrederId6;
        $this->apiParas["OrederId6"] = $OrederId6;
    }

    public function getOrederId6()
    {
        return $this->OrederId6;
    }

    private $OrederId7;

    public function setOrederId7($OrederId7)
    {
        $this->OrederId7             = $OrederId7;
        $this->apiParas["OrederId7"] = $OrederId7;
    }

    public function getOrederId7()
    {
        return $this->OrederId7;
    }

    private $OrederId8;

    public function setOrederId8($OrederId8)
    {
        $this->OrederId8             = $OrederId8;
        $this->apiParas["OrederId8"] = $OrederId8;
    }

    public function getOrederId8()
    {
        return $this->OrederId8;
    }

    private $OrederId9;

    public function setOrederId9($OrederId9)
    {
        $this->OrederId9             = $OrederId9;
        $this->apiParas["OrederId9"] = $OrederId9;
    }

    public function getOrederId9()
    {
        return $this->OrederId9;
    }

    private $OrederId10;

    public function setOrederId10($OrederId10)
    {
        $this->OrederId10             = $OrederId10;
        $this->apiParas["OrederId10"] = $OrederId10;
    }

    public function getOrederId10()
    {
        return $this->OrederId10;
    }

    private $OrederId11;

    public function setOrederId11($OrederId11)
    {
        $this->OrederId11             = $OrederId11;
        $this->apiParas["OrederId11"] = $OrederId11;
    }

    public function getOrederId11()
    {
        return $this->OrederId11;
    }

    private $OrederId12;

    public function setOrederId12($OrederId12)
    {
        $this->OrederId12             = $OrederId12;
        $this->apiParas["OrederId12"] = $OrederId12;
    }

    public function getOrederId12()
    {
        return $this->OrederId12;
    }

    private $OrederId13;

    public function setOrederId13($OrederId13)
    {
        $this->OrederId13             = $OrederId13;
        $this->apiParas["OrederId13"] = $OrederId13;
    }

    public function getOrederId13()
    {
        return $this->OrederId13;
    }

    private $OrederId14;

    public function setOrederId14($OrederId14)
    {
        $this->OrederId14             = $OrederId14;
        $this->apiParas["OrederId14"] = $OrederId14;
    }

    public function getOrederId14()
    {
        return $this->OrederId14;
    }
}








