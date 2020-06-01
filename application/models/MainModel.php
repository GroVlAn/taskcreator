<?

namespace application\models;

use application\core\Model;

class MainModel extends Model
{

    public function getTasks()
    {
        $result = $this->db->row('SELECT * FROM task');
        return ['result' => $result];
    }

    public function updateTasks($task)
    {

        $result = $this->db->query("UPDATE `taskcreator`.`task` SET `name`=:taskName, `email`=:taskEmail, `text`=:taskText WHERE `IdTask`=:id", $task);
        return $result;
    }

    public function addTasks($task)
    {
        $result = $this->db->query("INSERT INTO task (name, email, text) VALUES (:taskName, :taskEmail, :taskText)", $task);
        return $result;
    }
}

?>