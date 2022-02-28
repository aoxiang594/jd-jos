<?php
namespace Aoxiang\JdJos\Request\Domain\InteractiveQueryInteractiveRewardInfo;
class SysParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.interactive.jsf.SysParam";
    }
        
    private $sysExt;
            
    public function setSysExt($sysExt){
        $this->params['sysExt'] = $sysExt ->getInstance();
    }
        
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $privateKey;
    
    public function setPrivateKey($privateKey){
        $this->params['privateKey'] = $privateKey;
    }

    public function getPrivateKey(){
        return $this->privateKey;
    }
            
    private $sysCode;
    
    public function setSysCode($sysCode){
        $this->params['sysCode'] = $sysCode;
    }

    public function getSysCode(){
        return $this->sysCode;
    }
            
    private $htCode;
    
    public function setHtCode($htCode){
        $this->params['htCode'] = $htCode;
    }

    public function getHtCode(){
        return $this->htCode;
    }
            
    private $vtCode;
    
    public function setVtCode($vtCode){
        $this->params['vtCode'] = $vtCode;
    }

    public function getVtCode(){
        return $this->vtCode;
    }
            
    private $mcChannel;
    
    public function setMcChannel($mcChannel){
        $this->params['mcChannel'] = $mcChannel;
    }

    public function getMcChannel(){
        return $this->mcChannel;
    }
            
    private $forceBot;
    
    public function setForceBot($forceBot){
        $this->params['forceBot'] = $forceBot;
    }

    public function getForceBot(){
        return $this->forceBot;
    }
            
    private $page;
    
    public function setPage($page){
        $this->params['page'] = $page;
    }

    public function getPage(){
        return $this->page;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>