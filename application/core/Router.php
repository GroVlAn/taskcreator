<?

namespace application\core;

class Router{
	protected $routes = [];
	protected $params = [];
	public function __construct(){
		$this->loadRoutes();

	}
	function loadRoutes(){
		$arr = require 'application/config/routes.php';
		foreach ($arr as $key => $value) {
			$this->add($key,$value);
		}
	}
	public	function add($route, $params){
		$route = "#^$route$#";
		$this->routes[$route]=$params;
	}

	public function match(){
		$url = trim($_SERVER['REQUEST_URI'],'/');
	
		foreach ($this->routes as $route => $params) {
				if(preg_match($route, $url,$matches)){
							$this->params = $params;
							return true;
				}
		}
		return false;
	}

	public function run(){
		if($this->match()){
			$path = "application\controllers\\".ucfirst($this->params['controller'])."Controller";
			var_dump($path);
			if(class_exists($path)){
				echo 'succes';
				$action = "".$this->params['action']."Action";
				if(method_exists($path,	$action)){
					$controller = new $path;
					$controller->$action();

				}else{
					echo "Метод $action не найден";
				}
			}else{
				echo "Класс $path несуществует";
			}
		}else{
			echo '<h1>404</h1>';
		}
	}
}
?>