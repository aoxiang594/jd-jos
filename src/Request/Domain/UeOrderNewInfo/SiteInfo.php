<?php
namespace Aoxiang\JdJos\Request\Domain\UeOrderNewInfo;
class SiteInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.dzwyfw.out.domain.SiteInfoDto";
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
            
    private $siteTown;
    
    public function setSiteTown($siteTown){
        $this->params['siteTown'] = $siteTown;
    }

    public function getSiteTown(){
        return $this->siteTown;
    }
            
    private $siteCity;
    
    public function setSiteCity($siteCity){
        $this->params['siteCity'] = $siteCity;
    }

    public function getSiteCity(){
        return $this->siteCity;
    }
            
    private $serviceAreaList;
                                        
    public function setServiceAreaList($serviceAreaList){
        $size = count($serviceAreaList);
        for ($i=0; $i<$size; $i++){
            $serviceAreaList [$i] = $serviceAreaList [$i] ->getInstance();
        }
        $this->params['serviceAreaList'] = $serviceAreaList;
    }
                                    
            
    private $siteCounty;
    
    public function setSiteCounty($siteCounty){
        $this->params['siteCounty'] = $siteCounty;
    }

    public function getSiteCounty(){
        return $this->siteCounty;
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
            
    private $siteProvince;
    
    public function setSiteProvince($siteProvince){
        $this->params['siteProvince'] = $siteProvince;
    }

    public function getSiteProvince(){
        return $this->siteProvince;
    }
            
    private $siteMobile;
    
    public function setSiteMobile($siteMobile){
        $this->params['siteMobile'] = $siteMobile;
    }

    public function getSiteMobile(){
        return $this->siteMobile;
    }
            
    private $venderCode;
    
    public function setVenderCode($venderCode){
        $this->params['venderCode'] = $venderCode;
    }

    public function getVenderCode(){
        return $this->venderCode;
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
                                    
            
    private $unifiedCode;
    
    public function setUnifiedCode($unifiedCode){
        $this->params['unifiedCode'] = $unifiedCode;
    }

    public function getUnifiedCode(){
        return $this->unifiedCode;
    }
            
    private $personName;
    
    public function setPersonName($personName){
        $this->params['personName'] = $personName;
    }

    public function getPersonName(){
        return $this->personName;
    }
            
    private $personMobile;
    
    public function setPersonMobile($personMobile){
        $this->params['personMobile'] = $personMobile;
    }

    public function getPersonMobile(){
        return $this->personMobile;
    }
            
    private $personPib;
    
    public function setPersonPib($personPib){
        $this->params['personPib'] = $personPib;
    }

    public function getPersonPib(){
        return $this->personPib;
    }
            
    private $accountName;
    
    public function setAccountName($accountName){
        $this->params['accountName'] = $accountName;
    }

    public function getAccountName(){
        return $this->accountName;
    }
            
    private $bankCode;
    
    public function setBankCode($bankCode){
        $this->params['bankCode'] = $bankCode;
    }

    public function getBankCode(){
        return $this->bankCode;
    }
            
    private $bankName;
    
    public function setBankName($bankName){
        $this->params['bankName'] = $bankName;
    }

    public function getBankName(){
        return $this->bankName;
    }
            
    private $dutyParagraph;
    
    public function setDutyParagraph($dutyParagraph){
        $this->params['dutyParagraph'] = $dutyParagraph;
    }

    public function getDutyParagraph(){
        return $this->dutyParagraph;
    }
            
    private $bankAccount;
    
    public function setBankAccount($bankAccount){
        $this->params['bankAccount'] = $bankAccount;
    }

    public function getBankAccount(){
        return $this->bankAccount;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>