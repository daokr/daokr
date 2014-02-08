<?php
namespace IKPHP\People;
class Module 
{
        public function registerAutoloaders()
        {
                $loader = new \Phalcon\Loader();

                $loader->registerNamespaces(array(
                        'IKPHP\People\Controllers' => __DIR__ . '/controllers/',
                        'IKPHP\People\Models' => __DIR__ . '/models/',
                ));

                $loader->register();
        }

        public function registerServices($di)
        {
            $config = include __DIR__ . "/../../config/config.php";
            //注册默认控制器
            $di['dispatcher'] = function() {
                        $dispatcher = new \Phalcon\Mvc\Dispatcher();
                        $dispatcher->setDefaultNamespace("IKPHP\People\Controllers");
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
        }

}