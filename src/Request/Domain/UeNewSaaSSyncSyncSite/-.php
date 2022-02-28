<?php
namespace Aoxiang\JdJos\Request\Domain\UeNewSaaSSyncSyncSite;
class -{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pbs.bas.bean.saassync.SiteInfo";
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
            
    private $siteCity;
    
    public function setSiteCity($siteCity){
        $this->params['siteCity'] = $siteCity;
    }

    public function getSiteCity(){
        return $this->siteCity;
    }
            
    private $siteMobile;
    
    public function setSiteMobile($siteMobile){
        $this->params['siteMobile'] = $siteMobile;
    }

    public function getSiteMobile(){
        return $this->siteMobile;
    }
            
    private $siteCounty;
    
    public function setSiteCounty($siteCounty){
        $this->params['siteCounty'] = $siteCounty;
    }

    public function getSiteCounty(){
        return $this->siteCounty;
    }
            
    private $siteProvince;
    
    public function setSiteProvince($siteProvince){
        $this->params['siteProvince'] = $siteProvince;
    }

    public function getSiteProvince(){
        return $this->siteProvince;
    }
            
    private $siteTown;
    
    public function setSiteTown($siteTown){
        $this->params['siteTown'] = $siteTown;
    }

    public function getSiteTown(){
        return $this->siteTown;
    }
            
    private $siteName;
    
    public function setSiteName($siteName){
        $this->params['siteName'] = $siteName;
    }

    public function getSiteName(){
        return $this->siteName;
    }
            
    private $unifiedCode;
    
    public function setUnifiedCode($unifiedCode){
        $this->params['unifiedCode'] = $unifiedCode;
    }

    public function getUnifiedCode(){
        return $this->unifiedCode;
    }
            
    private $contactMan;
    
    public function setContactMan($contactMan){
        $this->params['contactMan'] = $contactMan;
    }

    public function getContactMan(){
        return $this->contactMan;
    }
            
    private $engineerNum;
    
    public function setEngineerNum($engineerNum){
        $this->params['engineerNum'] = $engineerNum;
    }

    public function getEngineerNum(){
        return $this->engineerNum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>