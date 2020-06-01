<?

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller{

	public function indexAction(){
	    $var = $this->model->getTasks();
        $this->view->render("Главная страница", $var);
	}

	public function updateAction(){
	    if($_POST) {
	        unset($_POST['submit']);
            $this->model->updateTasks($_POST);
            $this->view->redirect('/');
        }

    }

    public function addAction(){
        if($_POST) {
            unset($_POST['submit']);
            $this->model->addTasks($_POST);
            $this->view->redirect('/');
        }

    }
}
?>