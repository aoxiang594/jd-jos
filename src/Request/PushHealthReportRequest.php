<?php
namespace Aoxiang\JdJos\Request;
class PushHealthReportRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.pushHealthReport";
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
                                                        		                                    	                   			private $healthReportExtJsonMsg;
    	                        
	public function setHealthReportExtJsonMsg($healthReportExtJsonMsg){
		$this->healthReportExtJsonMsg = $healthReportExtJsonMsg;
         $this->apiParas["healthReportExtJsonMsg"] = $healthReportExtJsonMsg;
	}

	public function getHealthReportExtJsonMsg(){
	  return $this->healthReportExtJsonMsg;
	}

                        	                   			private $healthReportJsonMsg;
    	                        
	public function setHealthReportJsonMsg($healthReportJsonMsg){
		$this->healthReportJsonMsg = $healthReportJsonMsg;
         $this->apiParas["healthReportJsonMsg"] = $healthReportJsonMsg;
	}

	public function getHealthReportJsonMsg(){
	  return $this->healthReportJsonMsg;
	}

                        	                   			private $healthReportChannel;
    	                        
	public function setHealthReportChannel($healthReportChannel){
		$this->healthReportChannel = $healthReportChannel;
         $this->apiParas["healthReportChannel"] = $healthReportChannel;
	}

	public function getHealthReportChannel(){
	  return $this->healthReportChannel;
	}

                        	                            }





        
 

