<?

namespace application\core;

use application\lib\db;

abstract class Model{

    public function __construct()
    {
        $this->db = new db();
    }
}

?>
