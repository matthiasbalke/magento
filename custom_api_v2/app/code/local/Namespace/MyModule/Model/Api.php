<?php
class Namespace_MyModule_Model_Api extends Mage_Api_Model_Resource_Abstract {


    public function helloWorld(){
	return "acl protected: hello World from Magento custom API";
    }

    public function info(){
	return "unprotected method call";
    }
}