<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class InvoiceConsignee{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.invoice.InvoiceConsigneeReq";
    }
        
    private $name;
    
    public function setName($name){
        $this->params['name'] = $name;
    }

    public function getName(){
        return $this->name;
    }
            
    private $mobile;
    
    public function setMobile($mobile){
        $this->params['mobile'] = $mobile;
    }

    public function getMobile(){
        return $this->mobile;
    }
            
    private $regAddressId;
    
    public function setRegAddressId($regAddressId){
        $this->params['regAddressId'] = $regAddressId;
    }

    public function getRegAddressId(){
        return $this->regAddressId;
    }
            
    private $provinceId;
    
    public function setProvinceId($provinceId){
        $this->params['provinceId'] = $provinceId;
    }

    public function getProvinceId(){
        return $this->provinceId;
    }
            
    private $provinceName;
    
    public function setProvinceName($provinceName){
        $this->params['provinceName'] = $provinceName;
    }

    public function getProvinceName(){
        return $this->provinceName;
    }
            
    private $cityId;
    
    public function setCityId($cityId){
        $this->params['cityId'] = $cityId;
    }

    public function getCityId(){
        return $this->cityId;
    }
            
    private $cityName;
    
    public function setCityName($cityName){
        $this->params['cityName'] = $cityName;
    }

    public function getCityName(){
        return $this->cityName;
    }
            
    private $countyId;
    
    public function setCountyId($countyId){
        $this->params['countyId'] = $countyId;
    }

    public function getCountyId(){
        return $this->countyId;
    }
            
    private $countyName;
    
    public function setCountyName($countyName){
        $this->params['countyName'] = $countyName;
    }

    public function getCountyName(){
        return $this->countyName;
    }
            
    private $townId;
    
    public function setTownId($townId){
        $this->params['townId'] = $townId;
    }

    public function getTownId(){
        return $this->townId;
    }
            
    private $townName;
    
    public function setTownName($townName){
        $this->params['townName'] = $townName;
    }

    public function getTownName(){
        return $this->townName;
    }
            
    private $address;
    
    public function setAddress($address){
        $this->params['address'] = $address;
    }

    public function getAddress(){
        return $this->address;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>