<?php
namespace Aoxiang\JdJos\Request\Domain\UeNewSaaSSyncSyncSite;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pbs.bas.bean.saassync.ExeSiteInfoParam";
    }
        
    private $siteInfoList;
                                        
    public function setSiteInfoList($siteInfoList){
        $size = count($siteInfoList);
        for ($i=0; $i<$size; $i++){
            $siteInfoList [$i] = $siteInfoList [$i] ->getInstance();
        }
        $this->params['siteInfoList'] = $siteInfoList;
    }
                                    
            
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>