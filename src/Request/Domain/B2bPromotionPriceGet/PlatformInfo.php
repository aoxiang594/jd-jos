<?php
namespace Aoxiang\JdJos\Request\Domain\B2bPromotionPriceGet;
class PlatformInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.promotion.engine.sdk.domain.request.PlatformInfo";
    }
        
    private $platform;
    
    public function setPlatform($platform){
        $this->params['platform'] = $platform;
    }

    public function getPlatform(){
        return $this->platform;
    }
            
    private $channel;
    
    public function setChannel($channel){
        $this->params['channel'] = $channel;
    }

    public function getChannel(){
        return $this->channel;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>