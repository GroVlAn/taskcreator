<?

namespace application\models;

use application\core\Model;

class AccountModel extends Model
{

    public function setAccount($account)
    {
        $result = $this->db->row('SELECT * FROM account ac JOIN `groupaccount` gr ON (gr.IdGroup = ac.idGroup)');
        if ($account['login'] == $result[0]['name'] && $account['email'] == $result[0]['email']) {
            return ['error1' => 'пользователь c таким именем уже существует', 'error2' => 'пользователь c таким email уже существует'];
        }elseif ($account['login'] == $result[0]['name'] ) {
            return ['error1' => 'пользователь c таким именем уже существует'];
        } elseif ( $account['email'] == $result[0]['email']) {
            return ['error2' => 'пользователь c таким email уже существует'];
        } else {
            $account['password'] = password_hash($account['password'], PASSWORD_DEFAULT);
            $result = $this->db->query("INSERT INTO account (name,email, password) VALUES (:login, :email, :password)", $account);
            return ['result' => $result];
        }
    }

    public function loginAccount($login)
    {
        $result = $this->db->row('SELECT * FROM account ac JOIN `groupaccount` gr ON (gr.IdGroup = ac.idGroup)');

        foreach ($result as $key => $item) {
            if (($login['login'] == $item['name'] || $login['login'] == $item['email']) && password_verify($login['password'], $item['password'])) {
                $_SESSION['login'] = $login['login'];
                $_SESSION['user'] = $item;
            }
        }
        if ($_SESSION) {
            return true;
        } else {
            return false;
        }
    }

    public function exitAccount()
    {
        unset($_SESSION['login']);
        unset($_SESSION['user']);


    }
}

?>