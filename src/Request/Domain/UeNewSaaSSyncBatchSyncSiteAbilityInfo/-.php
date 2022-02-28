<?php
namespace Aoxiang\JdJos\Request\Domain\UeNewSaaSSyncBatchSyncSiteAbilityInfo;
class -{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.pbs.bas.bean.saassync.BatchSiteAbilityInfo";
    }
        
    private $serviceAreaList;
                                        
    public function setServiceAreaList($serviceAreaList){
        $size = count($serviceAreaList);
        for ($i=0; $i<$size; $i++){
            $serviceAreaList [$i] = $serviceAreaList [$i] ->getInstance();
        }
        $this->params['serviceAreaList'] = $serviceAreaList;
    }
                                    
            
    private $serviceCatName;
    
    public function setServiceCatName($serviceCatName){
        $this->params['serviceCatName'] = $serviceCatName;
    }

    public function getServiceCatName(){
        return $this->serviceCatName;
    }
            
    private $serviceTypeId;
    
    public function setServiceTypeId($serviceTypeId){
        $this->params['serviceTypeId'] = $serviceTypeId;
    }

    public function getServiceTypeId(){
        return $this->serviceTypeId;
    }
            
    private $serviceTypeName;
    
    public function setServiceTypeName($serviceTypeName){
        $this->params['serviceTypeName'] = $serviceTypeName;
    }

    public function getServiceTypeName(){
        return $this->serviceTypeName;
    }
            
    private $serviceCatId;
    
    public function setServiceCatId($serviceCatId){
        $this->params['serviceCatId'] = $serviceCatId;
    }

    public function getServiceCatId(){
        return $this->serviceCatId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>