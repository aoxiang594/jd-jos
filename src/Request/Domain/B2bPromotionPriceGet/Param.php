<?php
namespace Aoxiang\JdJos\Request\Domain\B2bPromotionPriceGet;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.sns.biz.api.domain.po.req.PromotionReq";
    }
        
    private $sku;
    
    public function setSku($sku){
        $this->params['sku'] = $sku;
    }

    public function getSku(){
        return $this->sku;
    }
            
    private $platformInfo;
            
    public function setPlatformInfo($platformInfo){
        $this->params['platformInfo'] = $platformInfo ->getInstance();
    }
        
            
    private $userInfo;
            
    public function setUserInfo($userInfo){
        $this->params['userInfo'] = $userInfo ->getInstance();
    }
        
            
    private $num;
    
    public function setNum($num){
        $this->params['num'] = $num;
    }

    public function getNum(){
        return $this->num;
    }
            
    private $areaInfo;
            
    public function setAreaInfo($areaInfo){
        $this->params['areaInfo'] = $areaInfo ->getInstance();
    }
        
            
    private $extParam;
            
    public function setExtParam($extParam){
        $this->params['extParam'] = $extParam ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>