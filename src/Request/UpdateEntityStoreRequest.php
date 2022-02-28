<?php
namespace Aoxiang\JdJos\Request;
class UpdateEntityStoreRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.updateEntityStore";
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
                                                        		                                    	                   			private $storeId;
    	                        
	public function setStoreId($storeId){
		$this->storeId = $storeId;
         $this->apiParas["storeId"] = $storeId;
	}

	public function getStoreId(){
	  return $this->storeId;
	}

                        	                        	                   			private $name;
    	                        
	public function setName($name){
		$this->name = $name;
         $this->apiParas["name"] = $name;
	}

	public function getName(){
	  return $this->name;
	}

                        	                   			private $addCode;
    	                        
	public function setAddCode($addCode){
		$this->addCode = $addCode;
         $this->apiParas["addCode"] = $addCode;
	}

	public function getAddCode(){
	  return $this->addCode;
	}

                        	                   			private $addName;
    	                        
	public function setAddName($addName){
		$this->addName = $addName;
         $this->apiParas["addName"] = $addName;
	}

	public function getAddName(){
	  return $this->addName;
	}

                        	                   			private $coordinate;
    	                        
	public function setCoordinate($coordinate){
		$this->coordinate = $coordinate;
         $this->apiParas["coordinate"] = $coordinate;
	}

	public function getCoordinate(){
	  return $this->coordinate;
	}

                        	                   			private $phone;
    	                        
	public function setPhone($phone){
		$this->phone = $phone;
         $this->apiParas["phone"] = $phone;
	}

	public function getPhone(){
	  return $this->phone;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                                               private $groupId;
                              public function setGroupId($groupId ){
                 $this->groupId=$groupId;
                 $this->apiParas["groupId"] = $groupId;
              }

              public function getGroupId(){
              	return $this->groupId;
              }
                                                                                                                                        	                   			private $customerId;
    	                        
	public function setCustomerId($customerId){
		$this->customerId = $customerId;
         $this->apiParas["customerId"] = $customerId;
	}

	public function getCustomerId(){
	  return $this->customerId;
	}

                        	                   			private $categoryName;
    	                        
	public function setCategoryName($categoryName){
		$this->categoryName = $categoryName;
         $this->apiParas["categoryName"] = $categoryName;
	}

	public function getCategoryName(){
	  return $this->categoryName;
	}

                        	                   			private $extendJson;
    	                        
	public function setExtendJson($extendJson){
		$this->extendJson = $extendJson;
         $this->apiParas["extendJson"] = $extendJson;
	}

	public function getExtendJson(){
	  return $this->extendJson;
	}

                        	                   			private $imageFile;
    	                        
	public function setImageFile($imageFile){
		$this->imageFile = $imageFile;
         $this->apiParas["imageFile"] = $imageFile;
	}

	public function getImageFile(){
	  return $this->imageFile;
	}

                        	                   			private $addCode4;
    	                        
	public function setAddCode4($addCode4){
		$this->addCode4 = $addCode4;
         $this->apiParas["addCode4"] = $addCode4;
	}

	public function getAddCode4(){
	  return $this->addCode4;
	}

                        	                   			private $mobile;
    	                        
	public function setMobile($mobile){
		$this->mobile = $mobile;
         $this->apiParas["mobile"] = $mobile;
	}

	public function getMobile(){
	  return $this->mobile;
	}

                        	                   			private $categoryId2;
    	                        
	public function setCategoryId2($categoryId2){
		$this->categoryId2 = $categoryId2;
         $this->apiParas["categoryId2"] = $categoryId2;
	}

	public function getCategoryId2(){
	  return $this->categoryId2;
	}

                        	                   			private $slogan;
    	                        
	public function setSlogan($slogan){
		$this->slogan = $slogan;
         $this->apiParas["slogan"] = $slogan;
	}

	public function getSlogan(){
	  return $this->slogan;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $qualificationId;
                              public function setQualificationId($qualificationId ){
                 $this->qualificationId=$qualificationId;
                 $this->apiParas["qualificationId"] = $qualificationId;
              }

              public function getQualificationId(){
              	return $this->qualificationId;
              }
                                                                                                                                                                                                                                                                                                                       private $startingTime;
                              public function setStartingTime($startingTime ){
                 $this->startingTime=$startingTime;
                 $this->apiParas["startingTime"] = $startingTime;
              }

              public function getStartingTime(){
              	return $this->startingTime;
              }
                                                                                                                                                                                                                                                                                                                       private $endingTime;
                              public function setEndingTime($endingTime ){
                 $this->endingTime=$endingTime;
                 $this->apiParas["endingTime"] = $endingTime;
              }

              public function getEndingTime(){
              	return $this->endingTime;
              }
                                                                                                                                                                                                                                                                                                                       private $imgUrl;
                              public function setImgUrl($imgUrl ){
                 $this->imgUrl=$imgUrl;
                 $this->apiParas["imgUrl"] = $imgUrl;
              }

              public function getImgUrl(){
              	return $this->imgUrl;
              }
                                                                                                                                                                                                                                                                                                                       private $isPermanent;
                              public function setIsPermanent($isPermanent ){
                 $this->isPermanent=$isPermanent;
                 $this->apiParas["isPermanent"] = $isPermanent;
              }

              public function getIsPermanent(){
              	return $this->isPermanent;
              }
                                                                                                                                            }





        
 

