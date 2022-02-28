<?php
namespace Aoxiang\JdJos\Request;
class CategoryReadFindValuesByAttrIdRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.category.read.findValuesByAttrId";
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
                                                        		                                    	                        	                        	                                                    	                        	                   			private $categoryAttrId;
    	                        
	public function setCategoryAttrId($categoryAttrId){
		$this->categoryAttrId = $categoryAttrId;
         $this->apiParas["categoryAttrId"] = $categoryAttrId;
	}

	public function getCategoryAttrId(){
	  return $this->categoryAttrId;
	}

                        	                   	                    		private $field;
    	                        
	public function setField($field){
		$this->field = $field;
         $this->apiParas["field"] = $field;
	}

	public function getField(){
	  return $this->field;
	}

}





        
 
