<?PHP
namespace App;

use \PDO;

class Database {

    private $db_name;
    private $pdo;

    public function __construct($db_name) {
        $this->db_name = $db_name;
    }

    private function getPDO() {
        if ($this->pdo === NULL) {
            $pdo = new PDO('sqlite:blog.db');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;            
        }
        return $this->pdo;
    }

    public function query($stmt, $class_name, $one = false) {
        $req = $this->getPDO()->query($stmt);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;
    }

    public function prepare($stmt, $attributes, $class_name, $one = false) {
        $req = $this->getPDO()->prepare($stmt);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            $data = $req->fetch();
        } else {
            $data = $req->fetchAll();
        }
        return $data;
    }
}