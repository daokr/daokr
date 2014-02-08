<?php
namespace IKPHP\Frontend\Controllers;

class AboutController extends ControllerBase
{

    public function initialize()
    {
      
        parent::initialize();
    }

    public function indexAction()
    {
    	echo "hello about";
    }
}