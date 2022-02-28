<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOrderListGet;
class SpecSearchInfoReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.mid.sdk.dto.req.SpecSearchInfoReq";
    }
        
    private $companyName;
    
    public function setCompanyName($companyName){
        $this->params['companyName'] = $companyName;
    }

    public function getCompanyName(){
        return $this->companyName;
    }
            
    private $venderShopName;
    
    public function setVenderShopName($venderShopName){
        $this->params['venderShopName'] = $venderShopName;
    }

    public function getVenderShopName(){
        return $this->venderShopName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>