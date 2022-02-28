<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class PreOccupyRep{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.PreOccupyReq";
    }
        
    private $preOccupy;
    
    public function setPreOccupy($preOccupy){
        $this->params['preOccupy'] = $preOccupy;
    }

    public function getPreOccupy(){
        return $this->preOccupy;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>