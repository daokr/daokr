<?php
namespace IKPHP\Frontend;
class Module 
{
        public function registerAutoloaders()
        {

                $loader = new \Phalcon\Loader();

                $loader->registerNamespaces(array(
                        'IKPHP\Frontend\Controllers' => __DIR__ . '/controllers/',
                        'IKPHP\Frontend\Models' => __DIR__ . '/models/',
                		'IKPHP\Frontend\Library' => __DIR__ . '/library/',
                ));

	
	
                $loader->register();
        }

        public function registerServices($di)
        {

                $config = include __DIR__ . "/../../config/config.php";

                $di['dispatcher'] = function() {
                        $dispatcher = new \Phalcon\Mvc\Dispatcher();
                        $dispatcher->setDefaultNamespace("IKPHP\Frontend\Controllers");
                        return $dispatcher;
                };
                


                $di->set('view', function() {
                        $view = new \Phalcon\Mvc\View();
                        $view->setViewsDir(__DIR__ . '/views/');
                        //共享布局
                        $view->setLayoutsDir('../../home/views/layouts/');
                        $view->registerEngines(array(
							".html" => 'volt'
						));
                        return $view;
                });

                $di->set('db', function() use ($config) {
                        return new \Phalcon\Db\Adapter\Pdo\Mysql(array(
                                "host" => $config->database->host,
                                "username" => $config->database->username,
                                "password" => $config->database->password,
                                "dbname" => $config->database->name
                        ));
                });

        }

}