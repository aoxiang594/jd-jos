<?php
namespace Aoxiang\JdJos\Request\Domain\UeNewSaaSSyncBatchSyncSiteAbilityInfo;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pbs.bas.bean.saassync.BatchSiteAbilityInfoParam";
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
            
    private $siteAbilityInfoList;
                                        
    public function setSiteAbilityInfoList($siteAbilityInfoList){
        $size = count($siteAbilityInfoList);
        for ($i=0; $i<$size; $i++){
            $siteAbilityInfoList [$i] = $siteAbilityInfoList [$i] ->getInstance();
        }
        $this->params['siteAbilityInfoList'] = $siteAbilityInfoList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>