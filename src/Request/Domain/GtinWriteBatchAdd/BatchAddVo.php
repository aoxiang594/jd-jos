<?php
namespace Aoxiang\JdJos\Request\Domain\GtinWriteBatchAdd;
class BatchAddVo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.gms.upc.rpc.dto.req.BatchAddVo";
    }
        
    private $gtinVos;
                                        
    public function setGtinVos($gtinVos){
        $size = count($gtinVos);
        for ($i=0; $i<$size; $i++){
            $gtinVos [$i] = $gtinVos [$i] ->getInstance();
        }
        $this->params['gtinVos'] = $gtinVos;
    }
                                    
            
    private $appName;
    
    public function setAppName($appName){
        $this->params['appName'] = $appName;
    }

    public function getAppName(){
        return $this->appName;
    }
            
    private $ip;
    
    public function setIp($ip){
        $this->params['ip'] = $ip;
    }

    public function getIp(){
        return $this->ip;
    }
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $uuid;
    
    public function setUuid($uuid){
        $this->params['uuid'] = $uuid;
    }

    public function getUuid(){
        return $this->uuid;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>