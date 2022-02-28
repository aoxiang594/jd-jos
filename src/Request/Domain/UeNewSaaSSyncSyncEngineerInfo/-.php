<?php
namespace Aoxiang\JdJos\Request\Domain\UeNewSaaSSyncSyncEngineerInfo;
class -{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pbs.bas.bean.saassync.EngineerInfo";
    }
        
    private $headImg;
    
    public function setHeadImg($headImg){
        $this->params['headImg'] = $headImg;
    }

    public function getHeadImg(){
        return $this->headImg;
    }
            
    private $nucleicTime;
    
    public function setNucleicTime($nucleicTime){
        $this->params['nucleicTime'] = $nucleicTime;
    }

    public function getNucleicTime(){
        return $this->nucleicTime;
    }
            
    private $idCard;
    
    public function setIdCard($idCard){
        $this->params['idCard'] = $idCard;
    }

    public function getIdCard(){
        return $this->idCard;
    }
            
    private $nucleicResults;
    
    public function setNucleicResults($nucleicResults){
        $this->params['nucleicResults'] = $nucleicResults;
    }

    public function getNucleicResults(){
        return $this->nucleicResults;
    }
            
    private $siteId;
    
    public function setSiteId($siteId){
        $this->params['siteId'] = $siteId;
    }

    public function getSiteId(){
        return $this->siteId;
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
            
    private $engineerName;
    
    public function setEngineerName($engineerName){
        $this->params['engineerName'] = $engineerName;
    }

    public function getEngineerName(){
        return $this->engineerName;
    }
            
    private $engineerMobile;
    
    public function setEngineerMobile($engineerMobile){
        $this->params['engineerMobile'] = $engineerMobile;
    }

    public function getEngineerMobile(){
        return $this->engineerMobile;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>