<?php
namespace Aoxiang\JdJos\Request\Domain\UeNewSaaSOrderDispatchOrder2Site;
class OrderSendSiteParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pcs.order.bean.progress.OrderSendSiteParam";
    }
        
    private $sendDate;
    
    public function setSendDate($sendDate){
        $this->params['sendDate'] = $sendDate;
    }

    public function getSendDate(){
        return $this->sendDate;
    }
            
    private $orderSendSiteList;
                                        
    public function setOrderSendSiteList($orderSendSiteList){
        $size = count($orderSendSiteList);
        for ($i=0; $i<$size; $i++){
            $orderSendSiteList [$i] = $orderSendSiteList [$i] ->getInstance();
        }
        $this->params['orderSendSiteList'] = $orderSendSiteList;
    }
                                    
            
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
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