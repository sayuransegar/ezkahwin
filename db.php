<?php
class DB {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'emunakahat';
    private $connection;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        try {
            $this->connection = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->dbname,
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function query($query, $params = array()) {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            echo 'Query execution failed: ' . $e->getMessage();
            return false;
        }
    }

    public function fetch($statement) {
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
}
?>
