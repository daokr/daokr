<?php
namespace IKPHP\Frontend\Controllers;

class UserController extends ControllerBase
{

    public function indexAction()
    {
		echo  "用户首页";
    }
    public function showAction(){
    	
    	$id = $this->dispatcher->getParam("id");
    	
    	echo "显示用户".$id;
    }
    public function listAction(){
    	
      	$id = $this->dispatcher->getParam("id");
      	$p = $this->dispatcher->getParam("p");

		echo($id);
    	echo($p);
    	//echo "用户列表页面".$id;
    	//echo "<br>p=".$p;  	
    }
    public function usersAction(){
    	
    }

}