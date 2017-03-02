<?php
// functions/core.lib.php
function run_controller ($uri, $lang){
	$routes = include '../config/routes.config.php';
	$uri = $_SERVER['REQUEST_URI'];
	if (strpos($uri, '?') !== false) $uri = substr($uri, 0, strpos($uri, '?'));
	if (isset($routes[$uri])) {
		include '../controllers/' . $routes[$uri] . '.ctrl.php';
		//var_dump($uri);
		call_user_func($routes[$uri] . '_controller', $lang);
	} else {
		echo 'I love "404" !';
	}
}

function GetLang(){
  $langs = include '../config/lang.config.php';

  //from URL
  $ret = strtolower($_GET['lang']);
  if ($langs[$ret] !== null){
    setcookie('lang', $ret,  time()+(60*60*24) * 1);
    return $ret;
  }

  //from last session(cookie)
  $ret = strtolower($_COOKIE['lang']);
  if ($langs[$ret] !== null) return $ret;

  //from browser
  $ret = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
  if ($langs[$ret] !== null) return $ret;

  //default lang
  return array_keys($langs)[0];
}

function msg($value) {
  $v = '';
  $v = @(string)$value;
  echo '<script>alert("' . $v . '");</script>';
}

?>
