<?php
namespace Aoxiang\JdJos\Request;
class UeCswsDispatchOrgReplyOrderRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ue.csws.dispatch.orgReplyOrder";
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
                                                        		                                    	                   			private $replyTime;
    	                        
	public function setReplyTime($replyTime){
		$this->replyTime = $replyTime;
         $this->apiParas["replyTime"] = $replyTime;
	}

	public function getReplyTime(){
	  return $this->replyTime;
	}

                        	                   			private $createdBy;
    	                        
	public function setCreatedBy($createdBy){
		$this->createdBy = $createdBy;
         $this->apiParas["createdBy"] = $createdBy;
	}

	public function getCreatedBy(){
	  return $this->createdBy;
	}

                        	                   			private $appId;
    	                        
	public function setAppId($appId){
		$this->appId = $appId;
         $this->apiParas["appId"] = $appId;
	}

	public function getAppId(){
	  return $this->appId;
	}

                        	                   			private $cusOrderNo;
    	                        
	public function setCusOrderNo($cusOrderNo){
		$this->cusOrderNo = $cusOrderNo;
         $this->apiParas["cusOrderNo"] = $cusOrderNo;
	}

	public function getCusOrderNo(){
	  return $this->cusOrderNo;
	}

                                                 	                        	                                                                                                                                                                                                                                                                                        private $size;
                              public function setSize($size ){
                 $this->size=$size;
                 $this->apiParas["size"] = $size;
              }

              public function getSize(){
              	return $this->size;
              }
                                                                                                                                                                                                                                                                                                                       private $title;
                              public function setTitle($title ){
                 $this->title=$title;
                 $this->apiParas["title"] = $title;
              }

              public function getTitle(){
              	return $this->title;
              }
                                                                                                                                                                                                                                                                                                                       private $type;
                              public function setType($type ){
                 $this->type=$type;
                 $this->apiParas["type"] = $type;
              }

              public function getType(){
              	return $this->type;
              }
                                                                                                                                                                                                                                                                                                                       private $url;
                              public function setUrl($url ){
                 $this->url=$url;
                 $this->apiParas["url"] = $url;
              }

              public function getUrl(){
              	return $this->url;
              }
                                                                                                                                        	                   			private $content;
    	                        
	public function setContent($content){
		$this->content = $content;
         $this->apiParas["content"] = $content;
	}

	public function getContent(){
	  return $this->content;
	}

                        	                   			private $vendorCode;
    	                        
	public function setVendorCode($vendorCode){
		$this->vendorCode = $vendorCode;
         $this->apiParas["vendorCode"] = $vendorCode;
	}

	public function getVendorCode(){
	  return $this->vendorCode;
	}

                            }





        
 

