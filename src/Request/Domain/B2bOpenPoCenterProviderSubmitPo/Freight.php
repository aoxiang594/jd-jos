<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class Freight{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.FreightReq";
    }
        
    private $freight;
    
    public function setFreight($freight){
        $this->params['freight'] = $freight;
    }

    public function getFreight(){
        return $this->freight;
    }
            
    private $jdFreight;
    
    public function setJdFreight($jdFreight){
        $this->params['jdFreight'] = $jdFreight;
    }

    public function getJdFreight(){
        return $this->jdFreight;
    }
            
    private $needValidate;
    
    public function setNeedValidate($needValidate){
        $this->params['needValidate'] = $needValidate;
    }

    public function getNeedValidate(){
        return $this->needValidate;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>