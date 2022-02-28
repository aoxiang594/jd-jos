<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizCustomerSendStoreApply;
class ReturnWareContactInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.domainmodel.ContactsInfo";
    }
        
    private $contactsName;
    
    public function setContactsName($contactsName){
        $this->params['contactsName'] = $contactsName;
    }

    public function getContactsName(){
        return $this->contactsName;
    }
            
    private $contactsTel;
    
    public function setContactsTel($contactsTel){
        $this->params['contactsTel'] = $contactsTel;
    }

    public function getContactsTel(){
        return $this->contactsTel;
    }
            
    private $contactsZipCode;
    
    public function setContactsZipCode($contactsZipCode){
        $this->params['contactsZipCode'] = $contactsZipCode;
    }

    public function getContactsZipCode(){
        return $this->contactsZipCode;
    }
            
    private $addressInfo;
            
    public function setAddressInfo($addressInfo){
        $this->params['addressInfo'] = $addressInfo ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>