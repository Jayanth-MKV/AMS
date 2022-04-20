<?php
include 'connect.php';
session_start();
if(isset($_POST["submit"])&&$_SERVER["REQUEST_METHOD"]=="POST"){
    
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
    }
    $sql=$conn->prepare("SELECT id,name FROM users WHERE email=? AND password=? LIMIT 1");
    $sql->bind_param('ss',$email,$password);
    $sql->execute();
    $sql->bind_result($id,$name);
    $sql->store_result();

    if($sql->num_rows()==1){
        if($res=$sql->fetch()){
                $_SESSION['id']=$id;
                $_SESSION['name']=$name;
        }
    }
    else{
        echo " Unsuccesful login/Invalid Credentials";
    }
    $sql->close();
    $conn->close();
    header("Location: ../home.php");
}

?>