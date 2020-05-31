<?

namespace application\controllers;

use application\core\Controller;

class MainController extends Controller{

	public function indexAction(){
	    $var = [
	        'V1'=>'text1',
            'V2'=>'text2'
        ];
        $this->view->render("Главная страница",$var);
	}

}
?>