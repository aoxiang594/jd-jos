<?php
namespace Aoxiang\JdJos\Request\Domain\AscBizCustomerSendStoreApply;
class ShopContactInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.afs.biz.center.command.audit.cmd.domainmodel.ContactsInfo";
    }
        
    private $contactsName1;
    
    public function setContactsName1($contactsName1){
        $this->params['contactsName1'] = $contactsName1;
    }

    public function getContactsName1(){
        return $this->contactsName1;
    }
            
    private $contactsTel1;
    
    public function setContactsTel1($contactsTel1){
        $this->params['contactsTel1'] = $contactsTel1;
    }

    public function getContactsTel1(){
        return $this->contactsTel1;
    }
            
    private $contactsZipCode1;
    
    public function setContactsZipCode1($contactsZipCode1){
        $this->params['contactsZipCode1'] = $contactsZipCode1;
    }

    public function getContactsZipCode1(){
        return $this->contactsZipCode1;
    }
            
    private $addressInfo1;
            
    public function setAddressInfo1($addressInfo1){
        $this->params['addressInfo1'] = $addressInfo1 ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>