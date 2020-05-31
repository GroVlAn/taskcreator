<?

namespace application\core;



class View {

	public $path;
	public $route;
	public $layout = 'default';

	public function __construct($route){
		$this->route = $route;
		$this->path = "".$route['controller']."/".$route['action']."";
	}

	public function render($title, $vars = []){
        extract($vars);
        $path = "application/view/" . $this->path . ".php";
	    if(file_exists($path)) {
            ob_start();
            require  $path;
            $content = ob_get_contents();
            require "application/view/layout/" . $this->layout . ".php";
        }else{
	        echo 'Вид не найден';
        }
    }
    public function redirect($url){
	    header("Location: $url");
	    exit();
    }
	public static function errorCode($code){
        $path = "application/view/" .$code . ".php";
        if(file_exists($path)) {
            http_response_code($code);
            require $path;
            exit;
        }
	}
}
?>