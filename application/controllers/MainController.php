<?

namespace application\controllers;

use application\core\Controller;
use application\lib\db;
class MainController extends Controller{

	public function indexAction(){
	   $db = new db();
        $this->view->render("Главная страница");
	}

}
?>