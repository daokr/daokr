<?php
namespace IKPHP\Group\Controllers;

use IKPHP\Frontend\Models\Companies;
use Phalcon\Paginator\Adapter\Model;

class TopicController extends ControllerBase
{

    public function initialize()
    {

    }
    
    public function indexAction()
    {
		echo  "话题首页";
    }
    public function showAction(){
    	

    	$id = $this->dispatcher->getParam("id");
    	
    	echo "小组话题显示".$id;
    }
    
    public function listAction(){
    	$companies = Companies::find();
		if (count($companies) == 0) {
			$this->flash->notice("The search did not find any companies");
			return $this->forward("companies/index");
		}

		$paginator = new Model(array(
			"data" => $companies,
			"limit" => 10,
			"page" => 30
		));
		$page = $paginator->getPaginate();

		$this->view->setVar("page", $page);
    }
    
    
    
 

}