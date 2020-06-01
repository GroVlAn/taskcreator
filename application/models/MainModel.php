<?

namespace application\models;

use application\core\Model;

class MainModel extends Model {

  public function getTasks(){

    $result = $this->db->row('SELECT * FROM task');
    return ['result'=>$result];
  }
}

?>