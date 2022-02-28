<?php
namespace Aoxiang\JdJos\Request\Domain\UeNewSaaSOrderDispatchOrder2Engineer;
class OrderSendEngineerParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pcs.order.bean.progress.OrderSendEngineerParam";
    }
        
    private $sendDate;
    
    public function setSendDate($sendDate){
        $this->params['sendDate'] = $sendDate;
    }

    public function getSendDate(){
        return $this->sendDate;
    }
            
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
    }
            
    private $orderSendEngineerList;
                                        
    public function setOrderSendEngineerList($orderSendEngineerList){
        $size = count($orderSendEngineerList);
        for ($i=0; $i<$size; $i++){
            $orderSendEngineerList [$i] = $orderSendEngineerList [$i] ->getInstance();
        }
        $this->params['orderSendEngineerList'] = $orderSendEngineerList;
    }
                                    
            
    private $sendBy;
    
    public function setSendBy($sendBy){
        $this->params['sendBy'] = $sendBy;
    }

    public function getSendBy(){
        return $this->sendBy;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>