<?php
class Db{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "session";
    private $conn;

    function __construct() {
        $this->conn = $this->connectDB();
    }

    function connectDB() {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $conn;
    }

    function query($query){
        $result = mysqli_query($this->conn, $query);
        //printf("Error: %s\n", mysqli_error($this->conn));
        while($row = mysqli_fetch_assoc($result)){
            $resultset[] = $row;
        }
        if(!empty($resultset)){
            return $resultset;
        }
    }
    function sql($sql){
        $result = mysqli_query($this->conn, $sql);

        if($result == TRUE){
            return $result;
        }
    }


}
?>