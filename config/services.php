<?php
//注册路由
$di->set('router', function() {
	return include __DIR__ . "/routes.php";
}, true);


$di->set('volt', function($view, $di) use ($config){
    $volt = new \Phalcon\Mvc\View\Engine\Volt($view, $di);

    $volt->setOptions(array(
        "compiledPath" => $config->application->cachevoltUri,
        "compiledExtension" => ".compiled",
    	"compiledSeparator" => "_",
    	"compileAlways" => true,//功能：是否开启编译 上线时候可以去掉
    ));

    return $volt;
});


$di->set('flash', function(){
	return new Phalcon\Flash\Direct(array(
		'error' => 'alert alert-error',
		'success' => 'alert alert-success',
		'notice' => 'alert alert-info',
	));
});


$di->set('elements', function(){
	return new IKPHP\Frontend\Library\Elements();
});
