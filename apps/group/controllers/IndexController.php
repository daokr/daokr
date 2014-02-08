<?php
namespace IKPHP\Group\Controllers;

class IndexController extends ControllerBase
{
    public function initialize()
    {
        $this->view->setTemplateAfter('main');
       // Phalcon\Tag::setTitle('Welcome');
        parent::initialize();
    }
    
    public function indexAction()
    {
			echo  "小组首页";
    }
    public function explore_topicAction(){
    	echo "发现话题";
    }

}