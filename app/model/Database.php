<?php
class Database {
    private $conn;

    private function connect() {
        $host = DB_HOST;
        $dbname = DB_NAME;
        $user = DB_USER;
        $password = DB_PASSWORD;

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

        try {
            $this->conn = new PDO($dsn, $user, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        if (!$this->conn) {
            $this->connect();
        }
        return $this->conn;
    }
}
