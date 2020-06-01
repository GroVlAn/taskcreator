<?

namespace application\models;

use application\core\Model;

class AccountModel extends Model
{

    public function setAccount($account)
    {
        $account['password'] = password_hash($account['password'],PASSWORD_DEFAULT);
        $result = $this->db->query("INSERT INTO account (name,email, password) VALUES (:login, :email, :password)", $account);
        return ['result' => $result];
    }

    public function loginAccount($login)
    {
        $result = $this->db->row('SELECT * FROM account ac LEFT JOIN `groupaccount` gr ON (gr.IdGroup = ac.idGroup)');

        foreach ($result as $key=>$item){
            if(($login['login']==$item['name']||$login['login']==$item['email'])&&password_verify($login['password'],$item['password'])){
                $_SESSION['login'] = $login['login'];
            }
        }
        if($_SESSION) {
            return true;
        }else{
            return false;
        }
    }
    public function exitAccount()
    {
       unset($_SESSION['login']);

    }
}

?>