<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizStoreDoorPick;
class AddressInfo1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.domainmodel.AddressInfo";
    }
        
    private $province1;
    
    public function setProvince1($province1){
        $this->params['province1'] = $province1;
    }

    public function getProvince1(){
        return $this->province1;
    }
            
    private $city1;
    
    public function setCity1($city1){
        $this->params['city1'] = $city1;
    }

    public function getCity1(){
        return $this->city1;
    }
            
    private $county1;
    
    public function setCounty1($county1){
        $this->params['county1'] = $county1;
    }

    public function getCounty1(){
        return $this->county1;
    }
            
    private $village1;
    
    public function setVillage1($village1){
        $this->params['village1'] = $village1;
    }

    public function getVillage1(){
        return $this->village1;
    }
            
    private $detailAddress1;
    
    public function setDetailAddress1($detailAddress1){
        $this->params['detailAddress1'] = $detailAddress1;
    }

    public function getDetailAddress1(){
        return $this->detailAddress1;
    }
            
    private $lng1;
    
    public function setLng1($lng1){
        $this->params['lng1'] = $lng1;
    }

    public function getLng1(){
        return $this->lng1;
    }
            
    private $lat1;
    
    public function setLat1($lat1){
        $this->params['lat1'] = $lat1;
    }

    public function getLat1(){
        return $this->lat1;
    }
            
    private $returnAddressType1;
    
    public function setReturnAddressType1($returnAddressType1){
        $this->params['returnAddressType1'] = $returnAddressType1;
    }

    public function getReturnAddressType1(){
        return $this->returnAddressType1;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>