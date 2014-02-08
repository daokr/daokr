<?php
//禁用错误报告
//error_reporting(0);
//报告运行时错误
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
//报告所有错误
error_reporting(E_ALL);
//(new Phalcon\Debug)->listen();
//加载配置
$config = include __DIR__ . "/../config/config.php";
//加载组件
require __DIR__ . "/../config/loader.php";


try{
	$di = new \Phalcon\DI\FactoryDefault();
	//引入服务
	require __DIR__ . "/../config/services.php";

    //注入服务
	$application = new Phalcon\Mvc\Application();
	$application->setDI($di);

	//加入模块
	require __DIR__ . '/../config/modules.php';
	
	echo $application->handle()->getContent();

}catch (Phalcon\Exception $e) {
        echo '对不起，网站配置有问题 Exception:<br/>'.$e->getMessage();
}catch (PDOException $e){
        echo '对不起，网站配置有问题 PDOException:<br/>'.$e->getMessage();
}