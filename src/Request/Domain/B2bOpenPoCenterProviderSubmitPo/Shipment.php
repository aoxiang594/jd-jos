<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class Shipment{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.ShipmentReq";
    }
        
    private $shipmentDate;
    
    public function setShipmentDate($shipmentDate){
        $this->params['shipmentDate'] = $shipmentDate;
    }

    public function getShipmentDate(){
        return $this->shipmentDate;
    }
            
    private $shipmentType;
    
    public function setShipmentType($shipmentType){
        $this->params['shipmentType'] = $shipmentType;
    }

    public function getShipmentType(){
        return $this->shipmentType;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>