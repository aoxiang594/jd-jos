<?php
namespace Aoxiang\JdJos\Request;
class EclpCoQueryPackageTagByWaybillNosRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.eclp.co.queryPackageTagByWaybillNos";
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
                                                             	                        	                                                                                                                                                                                                                                                                                                               private $lwbNos;
                              public function setLwbNos($lwbNos ){
                 $this->lwbNos=$lwbNos;
                 $this->apiParas["lwbNos"] = $lwbNos;
              }

              public function getLwbNos(){
              	return $this->lwbNos;
              }
                                                                                                                                        	}





        
 
