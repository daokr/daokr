<?php
class Module 
{
        public function registerAutoloaders()
        {
                $loader = new \Phalcon\Loader();

                $loader->registerNamespaces(array(
                        'IKPHP\People\Controllers' => __DIR__ . '/controllers/',
                        'IKPHP\People\Models' => __DIR__ . '/models/',
                		'IKPHP\People\Models' => __DIR__ . '/../home/models/',
                ));

                $loader->register();
        }

        public function registerServices($di)
        {
            $config = include __DIR__ . "/../../config/config.php";
            //注册默认控制器
         /*   $di['dispatcher'] = function() {
                        $dispatcher = new \Phalcon\Mvc\Dispatcher();
                        $dispatcher->setDefaultNamespace("IKPHP\People\Controllers");
                        return $dispatcher;
            };*/
        }

}