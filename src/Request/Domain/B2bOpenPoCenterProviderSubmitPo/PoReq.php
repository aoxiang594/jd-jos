<?php
namespace Aoxiang\JdJos\Request\Domain\B2bOpenPoCenterProviderSubmitPo;
class PoReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.po.sdk.dto.req.PoReq";
    }
        
    private $thirdOrderId;
    
    public function setThirdOrderId($thirdOrderId){
        $this->params['thirdOrderId'] = $thirdOrderId;
    }

    public function getThirdOrderId(){
        return $this->thirdOrderId;
    }
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $payment;
            
    public function setPayment($payment){
        $this->params['payment'] = $payment ->getInstance();
    }
        
            
    private $shipments;
                                        
    public function setShipments($shipments){
        $size = count($shipments);
        for ($i=0; $i<$size; $i++){
            $shipments [$i] = $shipments [$i] ->getInstance();
        }
        $this->params['shipments'] = $shipments;
    }
                                    
            
    private $freight;
            
    public function setFreight($freight){
        $this->params['freight'] = $freight ->getInstance();
    }
        
            
    private $invoice;
            
    public function setInvoice($invoice){
        $this->params['invoice'] = $invoice ->getInstance();
    }
        
            
    private $consignee;
            
    public function setConsignee($consignee){
        $this->params['consignee'] = $consignee ->getInstance();
    }
        
            
    private $preOccupyRep;
            
    public function setPreOccupyRep($preOccupyRep){
        $this->params['preOccupyRep'] = $preOccupyRep ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>