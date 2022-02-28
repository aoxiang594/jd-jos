<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizCustomerSendStoreApply;
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
    
    function getInstance(){
        return $this->params;
    }

}

?>