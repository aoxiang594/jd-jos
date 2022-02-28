<?php
namespace Aoxiang\JdJos\Request;
class MarketBdpOLShopSumQueryRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.market.bdp.OLShopSum.query";
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
                                    	                                            		                                    	                   			private $tp;
    	                        
	public function setTp($tp){
		$this->tp = $tp;
         $this->apiParas["tp"] = $tp;
	}

	public function getTp(){
	  return $this->tp;
	}

                        	                        	                   			private $dt;
    	                        
	public function setDt($dt){
		$this->dt = $dt;
         $this->apiParas["dt"] = $dt;
	}

	public function getDt(){
	  return $this->dt;
	}

                                                                             	                        	                                                                                                                                                                                                                                                                                                               private $field;
                              public function setField($field ){
                 $this->field=$field;
                 $this->apiParas["field"] = $field;
              }

              public function getField(){
              	return $this->field;
              }
                                                                                                                }





        
 

