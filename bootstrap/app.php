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
function view($path, $data = null, $layout='app') 
{
    if (is_array($data)) {
        extract( $data );
    }

	$path .= '.php';
	return require VIEWS."/layouts/${layout}.php";
}

function getURI()
{
    if (isset($_SERVER['REQUEST_URI']) and !empty($_SERVER['REQUEST_URI']))
        return trim($_SERVER['REQUEST_URI'], '/');
}

require_once dirname(__DIR__).'/config/app.php';

switch (getURI()) {
    case '':
        # code...
        require_once CONTROLLERS.'/HomeController.php';
        break;
    case 'about':
        # code...
        require_once CONTROLLERS.'/AboutController.php';
        break;
    case 'blog':
        # code...
        require_once CONTROLLERS.'/BlogController.php';
        break;
    case 'contact':
        # code...
        require_once CONTROLLERS.'/ContactController.php';
        break;
    default:
        # code...
        require_once VIEWS.'/errors/404.php';
}
