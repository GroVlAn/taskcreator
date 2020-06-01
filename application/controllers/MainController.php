<?

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller{

	public function indexAction(){
	    $var = $this->model->getTasks();
        $this->view->render("Главная страница", $var);
	}

}
?>