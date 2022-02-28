<?php
namespace Aoxiang\JdJos\Request\Domain\UeOrderInfo;
class SiteInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dzwyfw.out.domain.SiteInfo";
    }
        
    private $siteCode;
    
    public function setSiteCode($siteCode){
        $this->params['siteCode'] = $siteCode;
    }

    public function getSiteCode(){
        return $this->siteCode;
    }
            
    private $address;
    
    public function setAddress($address){
        $this->params['address'] = $address;
    }

    public function getAddress(){
        return $this->address;
    }
            
    private $town;
    
    public function setTown($town){
        $this->params['town'] = $town;
    }

    public function getTown(){
        return $this->town;
    }
            
    private $city;
    
    public function setCity($city){
        $this->params['city'] = $city;
    }

    public function getCity(){
        return $this->city;
    }
            
    private $serviceAreaList;
                                        
    public function setServiceAreaList($serviceAreaList){
        $size = count($serviceAreaList);
        for ($i=0; $i<$size; $i++){
            $serviceAreaList [$i] = $serviceAreaList [$i] ->getInstance();
        }
        $this->params['serviceAreaList'] = $serviceAreaList;
    }
                                    
            
    private $county;
    
    public function setCounty($county){
        $this->params['county'] = $county;
    }

    public function getCounty(){
        return $this->county;
    }
            
    private $siteName;
    
    public function setSiteName($siteName){
        $this->params['siteName'] = $siteName;
    }

    public function getSiteName(){
        return $this->siteName;
    }
            
    private $serviceCatList;
                                        
    public function setServiceCatList($serviceCatList){
        $size = count($serviceCatList);
        for ($i=0; $i<$size; $i++){
            $serviceCatList [$i] = $serviceCatList [$i] ->getInstance();
        }
        $this->params['serviceCatList'] = $serviceCatList;
    }
                                    
            
    private $contactMan;
    
    public function setContactMan($contactMan){
        $this->params['contactMan'] = $contactMan;
    }

    public function getContactMan(){
        return $this->contactMan;
    }
            
    private $province;
    
    public function setProvince($province){
        $this->params['province'] = $province;
    }

    public function getProvince(){
        return $this->province;
    }
            
    private $siteMobile;
    
    public function setSiteMobile($siteMobile){
        $this->params['siteMobile'] = $siteMobile;
    }

    public function getSiteMobile(){
        return $this->siteMobile;
    }
            
    private $appid;
    
    public function setAppid($appid){
        $this->params['appid'] = $appid;
    }

    public function getAppid(){
        return $this->appid;
    }
            
    private $engineerInfoList;
                                        
    public function setEngineerInfoList($engineerInfoList){
        $size = count($engineerInfoList);
        for ($i=0; $i<$size; $i++){
            $engineerInfoList [$i] = $engineerInfoList [$i] ->getInstance();
        }
        $this->params['engineerInfoList'] = $engineerInfoList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>