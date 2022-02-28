<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizAuditFeedback;
class WaitCustomerFeedbackCmd{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.WaitCustomerFeedbackCmd";
    }
        
    private $sysVersion;
    
    public function setSysVersion($sysVersion){
        $this->params['sysVersion'] = $sysVersion;
    }

    public function getSysVersion(){
        return $this->sysVersion;
    }
            
    private $buId;
    
    public function setBuId($buId){
        $this->params['buId'] = $buId;
    }

    public function getBuId(){
        return $this->buId;
    }
            
    private $callDate;
    
    public function setCallDate($callDate){
        $this->params['callDate'] = $callDate;
    }

    public function getCallDate(){
        return $this->callDate;
    }
            
    private $reserveDateEnd;
    
    public function setReserveDateEnd($reserveDateEnd){
        $this->params['reserveDateEnd'] = $reserveDateEnd;
    }

    public function getReserveDateEnd(){
        return $this->reserveDateEnd;
    }
            
    private $approveNotes;
    
    public function setApproveNotes($approveNotes){
        $this->params['approveNotes'] = $approveNotes;
    }

    public function getApproveNotes(){
        return $this->approveNotes;
    }
            
    private $afsServiceId;
    
    public function setAfsServiceId($afsServiceId){
        $this->params['afsServiceId'] = $afsServiceId;
    }

    public function getAfsServiceId(){
        return $this->afsServiceId;
    }
            
    private $transferFeedbackReason;
    
    public function setTransferFeedbackReason($transferFeedbackReason){
        $this->params['transferFeedbackReason'] = $transferFeedbackReason;
    }

    public function getTransferFeedbackReason(){
        return $this->transferFeedbackReason;
    }
            
    private $reserveDateBegin;
    
    public function setReserveDateBegin($reserveDateBegin){
        $this->params['reserveDateBegin'] = $reserveDateBegin;
    }

    public function getReserveDateBegin(){
        return $this->reserveDateBegin;
    }
            
    private $customerExpect;
    
    public function setCustomerExpect($customerExpect){
        $this->params['customerExpect'] = $customerExpect;
    }

    public function getCustomerExpect(){
        return $this->customerExpect;
    }
            
    private $waitFeedbackLevelOne;
    
    public function setWaitFeedbackLevelOne($waitFeedbackLevelOne){
        $this->params['waitFeedbackLevelOne'] = $waitFeedbackLevelOne;
    }

    public function getWaitFeedbackLevelOne(){
        return $this->waitFeedbackLevelOne;
    }
            
    private $smsContext;
    
    public function setSmsContext($smsContext){
        $this->params['smsContext'] = $smsContext;
    }

    public function getSmsContext(){
        return $this->smsContext;
    }
            
    private $customerPhone;
    
    public function setCustomerPhone($customerPhone){
        $this->params['customerPhone'] = $customerPhone;
    }

    public function getCustomerPhone(){
        return $this->customerPhone;
    }
            
    private $sendSmsFlag;
    
    public function setSendSmsFlag($sendSmsFlag){
        $this->params['sendSmsFlag'] = $sendSmsFlag;
    }

    public function getSendSmsFlag(){
        return $this->sendSmsFlag;
    }
            
    private $promiseDay;
    
    public function setPromiseDay($promiseDay){
        $this->params['promiseDay'] = $promiseDay;
    }

    public function getPromiseDay(){
        return $this->promiseDay;
    }
            
    private $sendType;
    
    public function setSendType($sendType){
        $this->params['sendType'] = $sendType;
    }

    public function getSendType(){
        return $this->sendType;
    }
            
    private $wareDetailInfoList;
                                        
    public function setWareDetailInfoList($wareDetailInfoList){
        $size = count($wareDetailInfoList);
        for ($i=0; $i<$size; $i++){
            $wareDetailInfoList [$i] = $wareDetailInfoList [$i] ->getInstance();
        }
        $this->params['wareDetailInfoList'] = $wareDetailInfoList;
    }
                                    
            
    private $operatorInfoReq;
            
    public function setOperatorInfoReq($operatorInfoReq){
        $this->params['operatorInfoReq'] = $operatorInfoReq ->getInstance();
    }
        
            
    private $questionInfo;
            
    public function setQuestionInfo($questionInfo){
        $this->params['questionInfo'] = $questionInfo ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>