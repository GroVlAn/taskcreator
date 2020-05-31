<?
namespace application\lib;

use PDO;
class db{

    protected $db;

    public function __construct()
    {
        $config = require 'application/config/db.php';
        $this->db = new PDO("mysql:host=".$config['host'].";dbname=".$config['dbname']."",$config['user'],$config['password']);
    }

    public function query($sql, $params=[]){
    $stmt = $this->db->prepare($sql);
    if(!empty($params)){
        foreach ($params as $key=>$param){
            $stmt->bindValue(':'.$key,$params);
        }
    }
    $stmt->execute();
    return $stmt;
    }

    public function row($sql, $params=[]){
        $row = $this->query($sql, $params);
        return $row->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params=[]){
        $column = $this->query($sql, $params);
        return $column->bindColumn(PDO::FETCH_ASSOC);
    }
}

?>
