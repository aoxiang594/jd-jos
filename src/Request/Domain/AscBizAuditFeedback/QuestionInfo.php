<?php

namespace Aoxiang\JdJos\Request\Domain\AscBizAuditFeedback;

class QuestionInfo
{

    private $params = array();

    function __construct()
    {
        $this->params["@type"] = "com.jd.afs.biz.center.command.audit.cmd.domainmodel.QuestionInfo";
    }

    private $questionReason1;

    public function setQuestionReason1($questionReason1)
    {
        $this->params['questionReason1'] = $questionReason1;
    }

    public function getQuestionReason1()
    {
        return $this->questionReason1;
    }

    private $questionReason2;

    public function setQuestionReason2($questionReason2)
    {
        $this->params['questionReason2'] = $questionReason2;
    }

    public function getQuestionReason2()
    {
        return $this->questionReason2;
    }

    private $basisId;

    public function setBasisId($basisId)
    {
        $this->params['basisId'] = $basisId;
    }

    public function getBasisId()
    {
        return $this->basisId;
    }

    private $qualitativeId;

    public function setQualitativeId($qualitativeId)
    {
        $this->params['qualitativeId'] = $qualitativeId;
    }

    public function getQualitativeId()
    {
        return $this->qualitativeId;
    }

    function getInstance()
    {
        return $this->params;
    }

}

?>