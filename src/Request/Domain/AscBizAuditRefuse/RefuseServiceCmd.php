<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizAuditRefuse;
class RefuseServiceCmd{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.RefuseServiceCmd";
    }
        
    private $buId;
    
    public function setBuId($buId){
        $this->params['buId'] = $buId;
    }

    public function getBuId(){
        return $this->buId;
    }
            
    private $questionTypeCid2;
    
    public function setQuestionTypeCid2($questionTypeCid2){
        $this->params['questionTypeCid2'] = $questionTypeCid2;
    }

    public function getQuestionTypeCid2(){
        return $this->questionTypeCid2;
    }
            
    private $questionTypeCid1;
    
    public function setQuestionTypeCid1($questionTypeCid1){
        $this->params['questionTypeCid1'] = $questionTypeCid1;
    }

    public function getQuestionTypeCid1(){
        return $this->questionTypeCid1;
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
            
    private $remark;
    
    public function setRemark($remark){
        $this->params['remark'] = $remark;
    }

    public function getRemark(){
        return $this->remark;
    }
            
    private $refuseReasonName;
    
    public function setRefuseReasonName($refuseReasonName){
        $this->params['refuseReasonName'] = $refuseReasonName;
    }

    public function getRefuseReasonName(){
        return $this->refuseReasonName;
    }
            
    private $sendSmsFlag;
    
    public function setSendSmsFlag($sendSmsFlag){
        $this->params['sendSmsFlag'] = $sendSmsFlag;
    }

    public function getSendSmsFlag(){
        return $this->sendSmsFlag;
    }
            
    private $auditBasisId;
    
    public function setAuditBasisId($auditBasisId){
        $this->params['auditBasisId'] = $auditBasisId;
    }

    public function getAuditBasisId(){
        return $this->auditBasisId;
    }
            
    private $closeDetailInfo;
                                        
    public function setCloseDetailInfo($closeDetailInfo){
        $size = count($closeDetailInfo);
        for ($i=0; $i<$size; $i++){
            $closeDetailInfo [$i] = $closeDetailInfo [$i] ->getInstance();
        }
        $this->params['closeDetailInfo'] = $closeDetailInfo;
    }
                                    
            
    private $refuseReason;
    
    public function setRefuseReason($refuseReason){
        $this->params['refuseReason'] = $refuseReason;
    }

    public function getRefuseReason(){
        return $this->refuseReason;
    }
            
    private $operatorInfoReq;
            
    public function setOperatorInfoReq($operatorInfoReq){
        $this->params['operatorInfoReq'] = $operatorInfoReq ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>