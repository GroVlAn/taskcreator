<?

use \application\core\Router;

spl_autoload_register(function($class){
$path = str_replace('\\','/',"$class.php");
if(file_exists($path))
{
	require $path;
}
});
session_start();
require('application/view/header.php');
$Router = new Router();
$Router->run();
?>