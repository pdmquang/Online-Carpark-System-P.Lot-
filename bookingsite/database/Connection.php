<!-- Done By: Xian Zhi, Alex, Quang -->

<?php

class Connection {

    private $connection;
    private $db;

    public function __construct() {
        // Get the DB info for access.
        $this->db = parse_ini_file("config.ini.php");
        $this->connect();
    }

    public function __destruct() {
        $this->disconnect();
    }

    function connect() {
         // Create database connection
        $this->connection = new mysqli($this->db['host'], $this->db['username'], $this->db['password'], $this->db['dbname']);
        if (mysqli_connect_error()) {
            return "can not connect to database " . mysqli_connect_error();
        }
    }

    function disconnect() {  // you will need this function later to close connection
        // Disconnect Database (destructor calls this)
        mysqli_close($this->connection);
    }

    public function query($query) {
        // Add query to Database and return result.
        $result = $this->connection->query($query);
        return $result;
    }

    public function fetch($result) {
        // Fetch results and add each row into array.
        if (!$result) {
            echo "Empty";
            return [];
        }
        $rows = array();
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
}

?>
