<?php
namespace Aoxiang\JdJos\Request\Domain\ComJdEerdcGrcgEjsfApiOrderElectronicBillApi;
class TServiceOrderPreferential{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.eerdc.grcg.ejsf.vo.TServiceOrderPreferential";
    }
        
    private $singlePreferentialPrice;
    
    public function setSinglePreferentialPrice($singlePreferentialPrice){
        $this->params['singlePreferentialPrice'] = $singlePreferentialPrice;
    }

    public function getSinglePreferentialPrice(){
        return $this->singlePreferentialPrice;
    }
            
    private $singlePreferentialName;
    
    public function setSinglePreferentialName($singlePreferentialName){
        $this->params['singlePreferentialName'] = $singlePreferentialName;
    }

    public function getSinglePreferentialName(){
        return $this->singlePreferentialName;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>