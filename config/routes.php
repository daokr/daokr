<?php
$router = new Phalcon\Mvc\Router(false);

		//默认首页 public
		$router->setDefaultModule("home");
/*		$router->setDefaultController("index");
		$router->setDefaultAction("index");*/
		$router->removeExtraSlashes(true); //加 斜杠 /

		$router->add('/:module/:controller/:action/:params', array(
			    'module' => 1,
			    'controller' => 2,
			    'action' => 3,
			    'params' => 4
		));
		


		$router->add('/:module/:controller/:action', array(
			    'module' => 1,
			    'controller' => 2,
			    'action' => 3
		));	
		//默认http://www.ikphp.com/group/topic/	直接到index
		$router->add('/:module/:controller', array(
			    'module' => 1,
			    'controller' => 2,
			    'action' => "index",
		));	
		
		//http://www.ikphp.com/group/topic/show/123
		$router->add(
		    "/:module/:controller/:action/:int",
		    array(
		     	'module' => 1,
		        "controller" => 2,
		        "action"     => 3,
		        "id"         => 4,
		    )
		);
		
		$router->add(
		    "/:module/:controller/:action/id/:int/p/:int",
		    array(
		     	'module' => 1,
		        "controller" => 2,
		        "action"     => 3,
		        "id"         => 4,
		    	"p"         => 5,
		    )
		);
		


        
return $router;

