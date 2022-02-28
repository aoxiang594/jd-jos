<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizStoreDoorPick;
class AddressInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.domainmodel.AddressInfo";
    }
        
    private $province;
    
    public function setProvince($province){
        $this->params['province'] = $province;
    }

    public function getProvince(){
        return $this->province;
    }
            
    private $city;
    
    public function setCity($city){
        $this->params['city'] = $city;
    }

    public function getCity(){
        return $this->city;
    }
            
    private $county;
    
    public function setCounty($county){
        $this->params['county'] = $county;
    }

    public function getCounty(){
        return $this->county;
    }
            
    private $village;
    
    public function setVillage($village){
        $this->params['village'] = $village;
    }

    public function getVillage(){
        return $this->village;
    }
            
    private $detailAddress;
    
    public function setDetailAddress($detailAddress){
        $this->params['detailAddress'] = $detailAddress;
    }

    public function getDetailAddress(){
        return $this->detailAddress;
    }
            
    private $lng;
    
    public function setLng($lng){
        $this->params['lng'] = $lng;
    }

    public function getLng(){
        return $this->lng;
    }
            
    private $lat;
    
    public function setLat($lat){
        $this->params['lat'] = $lat;
    }

    public function getLat(){
        return $this->lat;
    }
            
    private $returnAddressType;
    
    public function setReturnAddressType($returnAddressType){
        $this->params['returnAddressType'] = $returnAddressType;
    }

    public function getReturnAddressType(){
        return $this->returnAddressType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>