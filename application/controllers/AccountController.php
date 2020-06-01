<?

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{

    public function loginAction()
    {
        if ($_POST['login'] != "" && $_POST['password'] != "") {
            if ($this->model->loginAccount($_POST)) {
                $this->view->redirect("/");
            } else {
                $this->view->render("Страница входа", ['error' => 'Пользователь не найден']);
            }
        } else {
            if ($_POST['login'] == "" && $_POST['password'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница входа", ['error1' => "Поле не заполнено", 'error2' => "Поле не заполнено"]);
            } elseif ($_POST['login'] == "" && $_POST['password'] != "" && $_POST['submit'] != "") {
                $this->view->render("Страница входа", ['error1' => "Поле не заполнено"]);
            } elseif ($_POST['login'] != "" && $_POST['password'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница входа", ['error2' => "Поле не заполнено"]);
            } else {
                $this->view->render("Страница входа");
            }
        }
    }

    public function exitAction()
    {
        $this->model->exitAccount($_POST);
        $this->view->redirect("/");

    }

    public function registerAction()
    {
        if ($_POST['login'] && $_POST['email'] && $_POST['password'] && $_POST['RepeatPassword']) {
            if ($_POST['password'] != $_POST['RepeatPassword']) {
                $this->view->render("Страница регистрации", ['error4' => 'Пароли не совпадают']);
            } else {
                unset($_POST['RepeatPassword']);
                unset($_POST['submit']);
                $account = $this->model->setAccount($_POST);
                if (!empty($account)) {
                    $this->view->render("Страница регистрации",  $account);
                } else {
                    $this->view->redirect('/');
                }
            }

        } else {
            if ($_POST['login'] == "" && $_POST['email'] == "" && $_POST['password'] == "" && $_POST['RepeatPassword'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error1' => 'Заполните поле',
                    'error2' => 'Заполните поле',
                    'error3' => 'Заполните поле',
                    'error4' => 'Заполните поле',
                ]);
            } elseif ($_POST['login'] == "" && $_POST['email'] == "" && $_POST['password'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error1' => 'Заполните поле',
                    'error2' => 'Заполните поле',
                    'error3' => 'Заполните поле',
                ]);
            } elseif ($_POST['login'] == "" && $_POST['email'] == "" && $_POST['RepeatPassword'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error1' => 'Заполните поле',
                    'error2' => 'Заполните поле',
                    'error3' => 'Заполните поле',
                ]);
            } elseif ($_POST['password'] == "" && $_POST['email'] == "" && $_POST['RepeatPassword'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error2' => 'Заполните поле',
                    'error3' => 'Заполните поле',
                    'error4' => 'Заполните поле',
                ]);
            } elseif ($_POST['login'] == "" && $_POST['password'] == "" && $_POST['RepeatPassword'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error1' => 'Заполните поле',
                    'error3' => 'Заполните поле',
                    'error4' => 'Заполните поле',
                ]);
            } elseif ($_POST['login'] == "" && $_POST['password'] == "" && $_POST['email'] != "" && $_POST['RepeatPassword'] != "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error1' => 'Заполните поле',
                    'error3' => 'Заполните поле',
                ]);
            } elseif ($_POST['RepeatPassword'] == "" && $_POST['password'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error3' => 'Заполните поле',
                    'error4' => 'Заполните поле',
                ]);
            } elseif ($_POST['email'] == "" && $_POST['password'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error2' => 'Заполните поле',
                    'error3' => 'Заполните поле',
                ]);
            } elseif ($_POST['RepeatPassword'] == "" && $_POST['login'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error1' => 'Заполните поле',
                    'error4' => 'Заполните поле',
                ]);
            } elseif ($_POST['login'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error1' => 'Заполните поле'
                ]);
            } elseif ($_POST['password'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error2' => 'Заполните поле'
                ]);
            } elseif ($_POST['password'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error3' => 'Заполните поле'
                ]);
            } elseif ($_POST['RepeatPassword'] == "" && $_POST['submit'] != "") {
                $this->view->render("Страница регистрации", [
                    'error4' => 'Заполните поле'
                ]);
            } else {
                $this->view->render("Страница регистрации");
            }

        }

    }
}

?>