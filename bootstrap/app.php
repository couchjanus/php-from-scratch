<?php
date_default_timezone_set('Europe/Kiev');    
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL | E_NOTICE | E_STRICT | E_DEPRECATED);
// ============================================

/**
 * Simple PHP Templating function
 *
 * @param $path  - string Template names
 * @param $data   - Associative array of variables to pass to the template file.
 * @return string - Output of the template file. Likely HTML.
 */
function render($path, $data = null, $layout='app') 
{
    if (is_array($data)) {
        extract( $data );
    }

	$path .= '.php';
	return require VIEWS."/layouts/${layout}.php";
}

require_once dirname(__DIR__).'/config/app.php';

require_once VENDOR.('/Connection.php');

// $conf = require_once CONFIG.('/database.php');

// try {
// 	$db = Connection::getInstance(require_once CONFIG.('/database.php'));
// 	$sql = 'SELECT * FROM users';
// 	$stm = $db->prepare($sql);
// 	$stm->execute();
// 	var_dump($stm->fetchAll(PDO::FETCH_ASSOC));
  
// } catch (Exception $e) {
// 	print $e->getMessage();
// }

require_once VENDOR.('/Router.php');