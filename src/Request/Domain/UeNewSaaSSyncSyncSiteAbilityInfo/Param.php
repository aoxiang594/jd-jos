<?php
namespace Aoxiang\JdJos\Request\Domain\UeNewSaaSSyncSyncSiteAbilityInfo;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pbs.bas.bean.saassync.SiteAbilityInfo";
    }
        
    private $siteCode;
    
    public function setSiteCode($siteCode){
        $this->params['siteCode'] = $siteCode;
    }

    public function getSiteCode(){
        return $this->siteCode;
    }
            
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
    }
            
    private $serviceAreaList;
                                        
    public function setServiceAreaList($serviceAreaList){
        $size = count($serviceAreaList);
        for ($i=0; $i<$size; $i++){
            $serviceAreaList [$i] = $serviceAreaList [$i] ->getInstance();
        }
        $this->params['serviceAreaList'] = $serviceAreaList;
    }
                                    
            
    private $unifiedCode;
    
    public function setUnifiedCode($unifiedCode){
        $this->params['unifiedCode'] = $unifiedCode;
    }

    public function getUnifiedCode(){
        return $this->unifiedCode;
    }
            
    private $siteName;
    
    public function setSiteName($siteName){
        $this->params['siteName'] = $siteName;
    }

    public function getSiteName(){
        return $this->siteName;
    }
            
    private $serviceCatName;
    
    public function setServiceCatName($serviceCatName){
        $this->params['serviceCatName'] = $serviceCatName;
    }

    public function getServiceCatName(){
        return $this->serviceCatName;
    }
            
    private $serviceTypeId;
    
    public function setServiceTypeId($serviceTypeId){
        $this->params['serviceTypeId'] = $serviceTypeId;
    }

    public function getServiceTypeId(){
        return $this->serviceTypeId;
    }
            
    private $serviceTypeName;
    
    public function setServiceTypeName($serviceTypeName){
        $this->params['serviceTypeName'] = $serviceTypeName;
    }

    public function getServiceTypeName(){
        return $this->serviceTypeName;
    }
            
    private $serviceCatId;
    
    public function setServiceCatId($serviceCatId){
        $this->params['serviceCatId'] = $serviceCatId;
    }

    public function getServiceCatId(){
        return $this->serviceCatId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>