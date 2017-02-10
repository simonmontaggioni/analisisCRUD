<?php 
	//echo md5('123');
	//header('Content-Type: text/html; charset=ISO-8859-1');
	ini_set('display_errors', 1);
	
	define('DS', DIRECTORY_SEPARATOR); 
	define('ROOT', realpath(dirname(__FILE__)) . DS ); 
	
	define('APP_PATH', 			ROOT.DS.'protected'.DS.'app'.DS);

	define('CSS_PATH', 			ROOT.'public'.DS. 'css'.DS);
	define('JS_PATH', 			ROOT.'public'.DS.'js'.DS);
	define('FONTS_PATH', 		ROOT.'public'.DS.'fonts'.DS);
	define('IMG_PATH', 			ROOT.'public'.DS.'img'.DS);
	define('UPLOAD_IMG_PATH', 	ROOT.'public'.DS.'img'.DS.'partners'.DS);
	
	try {
		require_once APP_PATH . 'Site.php'; 
		require_once APP_PATH . 'Config.php'; 
		require_once APP_PATH . 'Controller.php'; 
		require_once APP_PATH . 'Model.php'; 
		require_once APP_PATH . 'Request.php'; 
		require_once APP_PATH . 'Views.php'; 
		require_once APP_PATH . 'DataBase.php';
		require_once APP_PATH . 'Session.php'; 
		Session::init();
		Site::run(new Request);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
 
?>
