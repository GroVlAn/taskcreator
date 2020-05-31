<?
namespace application\core;

abstract class Controller 
{
	public $route;
	public $view;
	
	public function __construct($route){
		var_dump($this->route);die();
		$this->route = $route;
	}
}


?>