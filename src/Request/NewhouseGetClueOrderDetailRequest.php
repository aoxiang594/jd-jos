<?php
namespace Aoxiang\JdJos\Request;
class NewhouseGetClueOrderDetailRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.newhouse.getClueOrderDetail";
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
                                                        		                                    	                   			private $venderId;
    	                        
	public function setVenderId($venderId){
		$this->venderId = $venderId;
         $this->apiParas["venderId"] = $venderId;
	}

	public function getVenderId(){
	  return $this->venderId;
	}

                        	                   			private $clueId;
    	                        
	public function setClueId($clueId){
		$this->clueId = $clueId;
         $this->apiParas["clueId"] = $clueId;
	}

	public function getClueId(){
	  return $this->clueId;
	}

                        	                   			private $channelId;
    	                        
	public function setChannelId($channelId){
		$this->channelId = $channelId;
         $this->apiParas["channelId"] = $channelId;
	}

	public function getChannelId(){
	  return $this->channelId;
	}

                            }





        
 

