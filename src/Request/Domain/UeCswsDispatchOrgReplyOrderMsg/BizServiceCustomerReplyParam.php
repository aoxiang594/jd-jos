<?php
namespace Aoxiang\JdJos\Request\Domain\UeCswsDispatchOrgReplyOrderMsg;
class BizServiceCustomerReplyParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pbs.dispatch.bean.BizServiceCustomerReplyParam";
    }
        
    private $replyTime;
    
    public function setReplyTime($replyTime){
        $this->params['replyTime'] = $replyTime;
    }

    public function getReplyTime(){
        return $this->replyTime;
    }
            
    private $createdBy;
    
    public function setCreatedBy($createdBy){
        $this->params['createdBy'] = $createdBy;
    }

    public function getCreatedBy(){
        return $this->createdBy;
    }
            
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
    }
            
    private $cusOrderNo;
    
    public function setCusOrderNo($cusOrderNo){
        $this->params['cusOrderNo'] = $cusOrderNo;
    }

    public function getCusOrderNo(){
        return $this->cusOrderNo;
    }
            
    private $bizServiceCustomerAppendixVoList;
                                        
    public function setBizServiceCustomerAppendixVoList($bizServiceCustomerAppendixVoList){
        $size = count($bizServiceCustomerAppendixVoList);
        for ($i=0; $i<$size; $i++){
            $bizServiceCustomerAppendixVoList [$i] = $bizServiceCustomerAppendixVoList [$i] ->getInstance();
        }
        $this->params['bizServiceCustomerAppendixVoList'] = $bizServiceCustomerAppendixVoList;
    }
                                    
            
    private $content;
    
    public function setContent($content){
        $this->params['content'] = $content;
    }

    public function getContent(){
        return $this->content;
    }
            
    private $vendorCode;
    
    public function setVendorCode($vendorCode){
        $this->params['vendorCode'] = $vendorCode;
    }

    public function getVendorCode(){
        return $this->vendorCode;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>