<?php
namespace IKPHP\Frontend\Controllers;

class SessionController extends ControllerBase
{

    public function loginAction()
    {
		
    }
    public function registerAction(){
    	 $request = $this->request;
    	  if ($request->isPost()) {
    	  	
    	  	return $this->forward('people/index');
    	  }
    }
    

}