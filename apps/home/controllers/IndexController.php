<?php
namespace IKPHP\Frontend\Controllers;

use IKPHP\Frontend\Models\Companies;
use Phalcon\Paginator\Adapter\Model;

class IndexController extends ControllerBase
{
    public function initialize()
    {
       
       // Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
    }
    
/*    public function indexAction()
    {
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
		//$this->view->setVar("companies", $companies);
    }*/
    
    public function indexAction(){
       if (!$this->request->isPost()) {
            $this->flash->notice('This is a sample application of the Phalcon PHP Framework.
                Please don\'t provide us any personal information. Thanks');
        }
    }
	
}