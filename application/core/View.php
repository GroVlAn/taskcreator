<?

namespace application\core;

class Router{

	public $path;
	public $layout = 'default';
	public function __construct($route){
		$this->route = $route;
		
	}
	
}
?>