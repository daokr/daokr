<?php
namespace IKPHP\People\Controllers;

class IndexController extends ControllerBase
{
    public function initialize()
    {
 		 parent::initialize();      
    }   
    public function indexAction(){
     	echo 123;
    }
    
    public function showAction(){
    	echo '456';
    }
	
}