<?php
namespace Aoxiang\JdJos\Request\Domain\InteractiveQueryInteractiveRewardInfo;
class InteractiveRewardParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.interactive.jsf.InteractiveRewardParam";
    }
        
    private $ext;
            
    public function setExt($ext){
        $this->params['ext'] = $ext ->getInstance();
    }
        
            
    private $encryptProjectPoolId;
    
    public function setEncryptProjectPoolId($encryptProjectPoolId){
        $this->params['encryptProjectPoolId'] = $encryptProjectPoolId;
    }

    public function getEncryptProjectPoolId(){
        return $this->encryptProjectPoolId;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $encryptProjectId;
    
    public function setEncryptProjectId($encryptProjectId){
        $this->params['encryptProjectId'] = $encryptProjectId;
    }

    public function getEncryptProjectId(){
        return $this->encryptProjectId;
    }
            
    private $encryptAssignmentIds;
                        
    public function setEncryptAssignmentIds($encryptAssignmentIds){
        $this->params['encryptAssignmentIds'] = $encryptAssignmentIds;
    }
                    
            
    private $projectFailRewardsFlag;
    
    public function setProjectFailRewardsFlag($projectFailRewardsFlag){
        $this->params['projectFailRewardsFlag'] = $projectFailRewardsFlag;
    }

    public function getProjectFailRewardsFlag(){
        return $this->projectFailRewardsFlag;
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