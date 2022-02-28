<?php
namespace Aoxiang\JdJos\Request\Domain\UeNewSaaSSyncSyncEngineerInfo;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pbs.bas.bean.saassync.ExeEngineerInfoParam";
    }
        
    private $appId;
    
    public function setAppId($appId){
        $this->params['appId'] = $appId;
    }

    public function getAppId(){
        return $this->appId;
    }
            
    private $engineerInfoInfoList;
                                        
    public function setEngineerInfoInfoList($engineerInfoInfoList){
        $size = count($engineerInfoInfoList);
        for ($i=0; $i<$size; $i++){
            $engineerInfoInfoList [$i] = $engineerInfoInfoList [$i] ->getInstance();
        }
        $this->params['engineerInfoInfoList'] = $engineerInfoInfoList;
    }
                                    
    
    function getInstance(){
        return $this->params;
    }

}

?>