<?php
namespace Aoxiang\JdJos\Request;
class CmpArticleSaveOrUpdateRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.cmp.article.saveOrUpdate";
	}
	
	public function getApiParas(){
	    if(empty($this->apiParas)){
            return "{}";
        }
        return json_encode($this->apiParas);
	}
	
	public function check(){
		
	}
	
	public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
                                                        		                                    	                   			private $summary;
    	                        
	public function setSummary($summary){
		$this->summary = $summary;
         $this->apiParas["summary"] = $summary;
	}

	public function getSummary(){
	  return $this->summary;
	}

                        	                   			private $provinceId;
    	                        
	public function setProvinceId($provinceId){
		$this->provinceId = $provinceId;
         $this->apiParas["provinceId"] = $provinceId;
	}

	public function getProvinceId(){
	  return $this->provinceId;
	}

                        	                   			private $houseArea;
    	                        
	public function setHouseArea($houseArea){
		$this->houseArea = $houseArea;
         $this->apiParas["houseArea"] = $houseArea;
	}

	public function getHouseArea(){
	  return $this->houseArea;
	}

                        	                   			private $labelIds;
    	                        
	public function setLabelIds($labelIds){
		$this->labelIds = $labelIds;
         $this->apiParas["labelIds"] = $labelIds;
	}

	public function getLabelIds(){
	  return $this->labelIds;
	}

                        	                        	                   			private $cityId;
    	                        
	public function setCityId($cityId){
		$this->cityId = $cityId;
         $this->apiParas["cityId"] = $cityId;
	}

	public function getCityId(){
	  return $this->cityId;
	}

                        	                   			private $houseBudget;
    	                        
	public function setHouseBudget($houseBudget){
		$this->houseBudget = $houseBudget;
         $this->apiParas["houseBudget"] = $houseBudget;
	}

	public function getHouseBudget(){
	  return $this->houseBudget;
	}

                        	                   			private $submitTime;
    	                        
	public function setSubmitTime($submitTime){
		$this->submitTime = $submitTime;
         $this->apiParas["submitTime"] = $submitTime;
	}

	public function getSubmitTime(){
	  return $this->submitTime;
	}

                        	                   			private $cityName;
    	                        
	public function setCityName($cityName){
		$this->cityName = $cityName;
         $this->apiParas["cityName"] = $cityName;
	}

	public function getCityName(){
	  return $this->cityName;
	}

                        	                   			private $skuList;
    	                        
	public function setSkuList($skuList){
		$this->skuList = $skuList;
         $this->apiParas["skuList"] = $skuList;
	}

	public function getSkuList(){
	  return $this->skuList;
	}

                        	                   			private $provinceName;
    	                        
	public function setProvinceName($provinceName){
		$this->provinceName = $provinceName;
         $this->apiParas["provinceName"] = $provinceName;
	}

	public function getProvinceName(){
	  return $this->provinceName;
	}

                        	                   			private $saveType;
    	                        
	public function setSaveType($saveType){
		$this->saveType = $saveType;
         $this->apiParas["saveType"] = $saveType;
	}

	public function getSaveType(){
	  return $this->saveType;
	}

                        	                   			private $id;
    	                        
	public function setId($id){
		$this->id = $id;
         $this->apiParas["id"] = $id;
	}

	public function getId(){
	  return $this->id;
	}

                        	                   			private $content;
    	                        
	public function setContent($content){
		$this->content = $content;
         $this->apiParas["content"] = $content;
	}

	public function getContent(){
	  return $this->content;
	}

                        	                   			private $districtName;
    	                        
	public function setDistrictName($districtName){
		$this->districtName = $districtName;
         $this->apiParas["districtName"] = $districtName;
	}

	public function getDistrictName(){
	  return $this->districtName;
	}

                        	                   			private $title;
    	                        
	public function setTitle($title){
		$this->title = $title;
         $this->apiParas["title"] = $title;
	}

	public function getTitle(){
	  return $this->title;
	}

                        	                   			private $districtId;
    	                        
	public function setDistrictId($districtId){
		$this->districtId = $districtId;
         $this->apiParas["districtId"] = $districtId;
	}

	public function getDistrictId(){
	  return $this->districtId;
	}

                        	                   			private $source;
    	                        
	public function setSource($source){
		$this->source = $source;
         $this->apiParas["source"] = $source;
	}

	public function getSource(){
	  return $this->source;
	}

                        	                        	                   			private $titlePicUrl;
    	                        
	public function setTitlePicUrl($titlePicUrl){
		$this->titlePicUrl = $titlePicUrl;
         $this->apiParas["titlePicUrl"] = $titlePicUrl;
	}

	public function getTitlePicUrl(){
	  return $this->titlePicUrl;
	}

                        	                        	                   			private $articleType;
    	                        
	public function setArticleType($articleType){
		$this->articleType = $articleType;
         $this->apiParas["articleType"] = $articleType;
	}

	public function getArticleType(){
	  return $this->articleType;
	}

                            }





        
 

