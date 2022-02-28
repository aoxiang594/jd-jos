<?php
namespace Aoxiang\JdJos\Request;
class ImgzoneIcImageDeleteByQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.imgzone.ic.image.deleteByQuery";
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
                                                        		                                    	                        	                        	                                                                        		                                    	                   			private $imgId;
    	                        
	public function setImgId($imgId){
		$this->imgId = $imgId;
         $this->apiParas["imgId"] = $imgId;
	}

	public function getImgId(){
	  return $this->imgId;
	}

                        	                   			private $imgJfsKey;
    	                        
	public function setImgJfsKey($imgJfsKey){
		$this->imgJfsKey = $imgJfsKey;
         $this->apiParas["imgJfsKey"] = $imgJfsKey;
	}

	public function getImgJfsKey(){
	  return $this->imgJfsKey;
	}

                        	                        	                   			private $operate;
    	                        
	public function setOperate($operate){
		$this->operate = $operate;
         $this->apiParas["operate"] = $operate;
	}

	public function getOperate(){
	  return $this->operate;
	}

                            }





        
 

