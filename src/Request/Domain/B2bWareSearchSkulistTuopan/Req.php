<?php
namespace Aoxiang\JdJos\Request\Domain\B2bWareSearchSkulistTuopan;
class Req{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.b2b.ware.biz.sdk.req.BizSkuSearchReq";
    }
        
    private $jdSkuId;
    
    public function setJdSkuId($jdSkuId){
        $this->params['jdSkuId'] = $jdSkuId;
    }

    public function getJdSkuId(){
        return $this->jdSkuId;
    }
            
    private $b2bPoolId;
    
    public function setB2bPoolId($b2bPoolId){
        $this->params['b2bPoolId'] = $b2bPoolId;
    }

    public function getB2bPoolId(){
        return $this->b2bPoolId;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $returnFieldList;
                        
    public function setReturnFieldList($returnFieldList){
        $this->params['returnFieldList'] = $returnFieldList;
    }
                    
            
    private $operatorErp;
    
    public function setOperatorErp($operatorErp){
        $this->params['operatorErp'] = $operatorErp;
    }

    public function getOperatorErp(){
        return $this->operatorErp;
    }
            
    private $skuName;
    
    public function setSkuName($skuName){
        $this->params['skuName'] = $skuName;
    }

    public function getSkuName(){
        return $this->skuName;
    }
            
    private $yn;
    
    public function setYn($yn){
        $this->params['yn'] = $yn;
    }

    public function getYn(){
        return $this->yn;
    }
            
    private $sortList;
                                        
    public function setSortList($sortList){
        $size = count($sortList);
        for ($i=0; $i<$size; $i++){
            $sortList [$i] = $sortList [$i] ->getInstance();
        }
        $this->params['sortList'] = $sortList;
    }
                                    
            
    private $pageNo;
    
    public function setPageNo($pageNo){
        $this->params['pageNo'] = $pageNo;
    }

    public function getPageNo(){
        return $this->pageNo;
    }
            
    private $supplier;
    
    public function setSupplier($supplier){
        $this->params['supplier'] = $supplier;
    }

    public function getSupplier(){
        return $this->supplier;
    }
            
    private $auditStatus;
    
    public function setAuditStatus($auditStatus){
        $this->params['auditStatus'] = $auditStatus;
    }

    public function getAuditStatus(){
        return $this->auditStatus;
    }
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>