<?php
include 'DB_functions.php';

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
                $_SESSION['login']=1;
                $_SESSION['id']=$id;
                $_SESSION['name']=$name;
                $_SESSION['email']=$email;
                header("Location: ../home.php");
        }
        else{
            echo "not inserted in session";
        }
    }
    else{
        $_SESSION['error']=1;
        header("Location: ../index.php");
    }
    $sql->close();
}


?>