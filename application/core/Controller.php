<?
namespace application\core;

use application\core\View;

abstract class Controller 
{
	public $route;
    public $model;
	public $view;

	public function __construct($route){
		$this->route = $route;
        $this->view = new View($route);
        $this->model=$this->loadModels($route['controller']);

	}

    public function loadModels($name){
	    $path = "application\models\\".ucfirst($name)."Model";
	    if(class_exists($path)){
	        return new $path;
        }

    }
}



?>