<?php
namespace Aoxiang\JdJos\Request;
class ContentWriteContentWriteServiceSaveVideoContentRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.content.write.ContentWriteService.saveVideoContent";
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
    private  $videoContentDto;

    public function setVideoContentDto($videoContentDto){
        $this->apiParas['videoContentDto'] = $videoContentDto;
    }
    public function getVideoContentDto(){
        return $this->apiParas['videoContentDto'];
    }
}

?>