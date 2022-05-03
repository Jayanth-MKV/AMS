<?php

class DB_connect{

    private $username="root";
    private $password="";
    private $host="127.0.0.2:3307";
    private $db="ams";

    public $conn=null;
    public function __construct()
    {
        $this->conn =mysqli_connect($this->host,$this->username,$this->password,$this->db);
        if($this->conn->connect_errno){
            die("Connection failed :".$this->conn->connect_errno);
        }
        else{
            session_start();
            // echo "Connection Successful";
        }
    }


    public function open_conn(){
        return $this->conn;
    }

    public function __destruct(){
        $this->close_conn();
    }

    public function close_conn(){
        if($this->conn!=null){
            $this->conn->close();
            $this->conn=null;
        }
        
    }


}



?>