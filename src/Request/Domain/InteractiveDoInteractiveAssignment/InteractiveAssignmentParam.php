<?php
namespace Aoxiang\JdJos\Request\Domain\InteractiveDoInteractiveAssignment;
class InteractiveAssignmentParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.interactive.jsf.data.InteractiveAssignmentParam";
    }
        
    private $ext;
            
    public function setExt($ext){
        $this->params['ext'] = $ext ->getInstance();
    }
        
            
    private $itemId;
    
    public function setItemId($itemId){
        $this->params['itemId'] = $itemId;
    }

    public function getItemId(){
        return $this->itemId;
    }
            
    private $actionType;
    
    public function setActionType($actionType){
        $this->params['actionType'] = $actionType;
    }

    public function getActionType(){
        return $this->actionType;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $bizExtParams;
            
    public function setBizExtParams($bizExtParams){
        $this->params['bizExtParams'] = $bizExtParams ->getInstance();
    }
        
            
    private $encryptProjectId;
    
    public function setEncryptProjectId($encryptProjectId){
        $this->params['encryptProjectId'] = $encryptProjectId;
    }

    public function getEncryptProjectId(){
        return $this->encryptProjectId;
    }
            
    private $encryptAssignmentId;
    
    public function setEncryptAssignmentId($encryptAssignmentId){
        $this->params['encryptAssignmentId'] = $encryptAssignmentId;
    }

    public function getEncryptAssignmentId(){
        return $this->encryptAssignmentId;
    }
            
    private $completionFlag;
    
    public function setCompletionFlag($completionFlag){
        $this->params['completionFlag'] = $completionFlag;
    }

    public function getCompletionFlag(){
        return $this->completionFlag;
    }
            
    private $open_id_buyer;
    
    public function setOpen_id_buyer($open_id_buyer){
        $this->params['open_id_buyer'] = $open_id_buyer;
    }

    public function getOpen_id_buyer(){
        return $this->open_id_buyer;
    }
            
    private $xid_buyer;
    
    public function setXid_buyer($xid_buyer){
        $this->params['xid_buyer'] = $xid_buyer;
    }

    public function getXid_buyer(){
        return $this->xid_buyer;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>