<?php
namespace Aoxiang\JdJos\Request\Domain\B2bPromotionPriceGet;
class UserInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.promotion.engine.sdk.domain.request.UserInfo";
    }
        
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $ip;
    
    public function setIp($ip){
        $this->params['ip'] = $ip;
    }

    public function getIp(){
        return $this->ip;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>