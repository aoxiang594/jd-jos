<?php
namespace Aoxiang\JdJos\Request;
class JlMemberUserextQueryByUserCodeRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.jl.member.userext.queryByUserCode";
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
                                                        		                                    	                   			private $platformId;
    	                        
	public function setPlatformId($platformId){
		$this->platformId = $platformId;
         $this->apiParas["platformId"] = $platformId;
	}

	public function getPlatformId(){
	  return $this->platformId;
	}

                        	                   			private $userCode;
    	                        
	public function setUserCode($userCode){
		$this->userCode = $userCode;
         $this->apiParas["userCode"] = $userCode;
	}

	public function getUserCode(){
	  return $this->userCode;
	}

                            }





        
 

