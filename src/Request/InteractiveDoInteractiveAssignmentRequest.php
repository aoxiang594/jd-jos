<?php

namespace Aoxiang\JdJos\Request;

class InteractiveDoInteractiveAssignmentRequest
{


    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.interactive.doInteractiveAssignment";
    }

    public function getApiParas()
    {
        if( empty($this->apiParas) ){
            return "{}";
        }

        return json_encode($this->apiParas);
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }

    private $version;

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getVersion()
    {
        return $this->version;
    }

    private $sysParam;

    public function setSysParam($sysParam)
    {
        $this->apiParas['sysParam'] = $sysParam;
    }

    public function getSysParam()
    {
        return $this->apiParas['sysParam'];
    }

    private $interactiveAssignmentParam;

    public function setInteractiveAssignmentParam($interactiveAssignmentParam)
    {
        $this->apiParas['interactiveAssignmentParam'] = $interactiveAssignmentParam;
    }

    public function getInteractiveAssignmentParam()
    {
        return $this->apiParas['interactiveAssignmentParam'];
    }
}

?>
