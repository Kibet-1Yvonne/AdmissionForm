<?php
class Database {
    private $host = 'your_host';
    private $username = 'your_username';
    private $password = 'your_password';
    private $database = 'your_database';

    public $connection;

    public function __construct() {
        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}
?>
