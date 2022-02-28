<?php
namespace Aoxiang\JdJos\Request\Domain\GtinWriteBatchAdd;
class GtinVo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.gms.upc.rpc.dto.req.GtinVo";
    }
        
    private $importer;
    
    public function setImporter($importer){
        $this->params['importer'] = $importer;
    }

    public function getImporter(){
        return $this->importer;
    }
            
    private $gtin;
    
    public function setGtin($gtin){
        $this->params['gtin'] = $gtin;
    }

    public function getGtin(){
        return $this->gtin;
    }
            
    private $brandName;
    
    public function setBrandName($brandName){
        $this->params['brandName'] = $brandName;
    }

    public function getBrandName(){
        return $this->brandName;
    }
            
    private $certificateCode;
    
    public function setCertificateCode($certificateCode){
        $this->params['certificateCode'] = $certificateCode;
    }

    public function getCertificateCode(){
        return $this->certificateCode;
    }
            
    private $address;
    
    public function setAddress($address){
        $this->params['address'] = $address;
    }

    public function getAddress(){
        return $this->address;
    }
            
    private $origin;
    
    public function setOrigin($origin){
        $this->params['origin'] = $origin;
    }

    public function getOrigin(){
        return $this->origin;
    }
            
    private $specification;
    
    public function setSpecification($specification){
        $this->params['specification'] = $specification;
    }

    public function getSpecification(){
        return $this->specification;
    }
            
    private $serialNo;
    
    public function setSerialNo($serialNo){
        $this->params['serialNo'] = $serialNo;
    }

    public function getSerialNo(){
        return $this->serialNo;
    }
            
    private $productDesc;
    
    public function setProductDesc($productDesc){
        $this->params['productDesc'] = $productDesc;
    }

    public function getProductDesc(){
        return $this->productDesc;
    }
            
    private $productImageUrls;
    
    public function setProductImageUrls($productImageUrls){
        $this->params['productImageUrls'] = $productImageUrls;
    }

    public function getProductImageUrls(){
        return $this->productImageUrls;
    }
            
    private $tcCode;
    
    public function setTcCode($tcCode){
        $this->params['tcCode'] = $tcCode;
    }

    public function getTcCode(){
        return $this->tcCode;
    }
            
    private $firmName;
    
    public function setFirmName($firmName){
        $this->params['firmName'] = $firmName;
    }

    public function getFirmName(){
        return $this->firmName;
    }
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
            
    private $baseCreateTime;
    
    public function setBaseCreateTime($baseCreateTime){
        $this->params['baseCreateTime'] = $baseCreateTime;
    }

    public function getBaseCreateTime(){
        return $this->baseCreateTime;
    }
            
    private $baseLastUpdated;
    
    public function setBaseLastUpdated($baseLastUpdated){
        $this->params['baseLastUpdated'] = $baseLastUpdated;
    }

    public function getBaseLastUpdated(){
        return $this->baseLastUpdated;
    }
            
    private $saleDate;
    
    public function setSaleDate($saleDate){
        $this->params['saleDate'] = $saleDate;
    }

    public function getSaleDate(){
        return $this->saleDate;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>