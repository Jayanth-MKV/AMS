<?php
include "DB_functions.php";
if(isset($_SESSION['login'])&&$_SESSION['login']==1){
  header("Location: /ams/home.php");
}
if(isset($_POST["signup"])&&$_SERVER["REQUEST_METHOD"]=="POST"){
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['type'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $type=$_POST['type'];
    $email=$_POST['email'];
    $year=$_POST['year'];

$check_mail=mysqli_num_rows(mysqli_query($conn,"SELECT id FROM users WHERE email='$email'"));

if($check_mail>0){
  echo '<script>window.alert("The Email Already Exists");</script>'; 

 $check_mail=0;
}else{

$sql=$conn->prepare("INSERT INTO `users`(`name`, `email`, `password`, `type`) VALUES (?,?,?,?)");
    $sql->bind_param('sssi',$name,$email,$password,$type);
    $sql->execute();
    $sql->close();

    $id=mysqli_query($conn,"SELECT id FROM `users` WHERE `email`='$email'");
    $row=$id->fetch_assoc();
    echo $row['id'];
    $idi=$row['id'];
    $sql=$conn->prepare("INSERT INTO `profile`(`aid`, `email`, `name`,`type`,`year`) VALUES (?,?,?,?,?)");
    $sql->bind_param('issii',$idi,$email,$name,$type,$year);
    $sql->execute();
    $sql->close();

// header("Location: /ams/index.php");
echo '<script>window.location="/ams/index.php"</script>'; 
            exit;
}
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../index.css">
  <script src="../index.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
</head>

<body>

  <div class="jumbotron abc">
    <div class="jumbotron ml-5 mr-5 mt-2 mb-0 bg-transparent">
      <div class="row justify-content-center">


        <div class="col-lg-6 col-md-12 pt-4 avatar">
          <h2 id="mua" class=" mb-4">Meet Your Alumini</h2>

          <form action="signup.php" method="POST">
            <div class="form-group mb-4 ">
              <label class="text-col" for="exampleInputEmail1">Display Name</label>
              <input type="text" name="name" class="form-control boxes" aria-describedby="emailHelp" placeholder="Email"
                required>
            </div>
            <div class="form-group mb-4 ">
              <label class="text-col" for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control boxes" aria-describedby="emailHelp"
                placeholder="Email" required>
            </div>
            <div class="form-group mb-4 ">
              <label class="text-col" for="exampleInputPassword1">Password</label>
              <input type="password" id="password" name="password" class="form-control boxes" placeholder="Password"
                onchange="validatePassword()" required>

            </div>

        </div>
        <div class="col lg-6 text-center ">
          <img src="https://cdn-icons-png.flaticon.com/128/3408/3408455.png" />
          <h2>Sign Up</h2>
        </div>
      </div>
    </div>
    <div class="jumbotron ml-5 mr-5 mt-0 bg-transparent">
      <div class="row justify-content-center">

        <div class="col-lg-6 col-md-12 pt-4 avatar">


          <div class="form-group mb-4 ">
            <label class="text-col" for="exampleInputPassword1">confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" class="form-control boxes"
              placeholder="Confirm Password" onchange="validatePassword()" required>
            <p id="message"></p>
          </div>

          <fieldset class="form-group mb-4">
            <div class="row">
              <legend class="col-form-label col-sm-2 pt-0 text-col">Type</legend>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" id="gridRadios1" onchange="is_stu()"
                    value="1" checked>
                  <label class="form-check-label text-col" for="gridRadios1">
                    Teacher
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="type" id="gridRadios2" onchange="is_stu()"
                    value="0">
                  <label class="form-check-label text-col" for="gridRadios2">
                    Student
                  </label>
                </div>

              </div>
            </div>
          </fieldset>

          <div class="form-group mb-4 " id="nft" style="display: none;">
            <label class="text-col" for="exampleInputEmail1">Batch-Year</label>
            <input type="text" name="year" value="0" class="form-control boxes" aria-describedby="emailHelp"
              placeholder="Email" required>
          </div>
          <div class="form-check  mb-4 ">
            <input type="checkbox" id="cb" name="checkbox" class="form-check-input" onchange="dis_sub()">
            <label class="form-check-label text-col" for="exampleCheck1">Are you a Centurian</label>
          </div>
          <br>
          <div class="mb-4">
            <button type="submit" id="sub" name="signup" class="btn btn-outline-light"
              disabled="disabled">Signup</button>
          </div>

          </form>
        </div>
        <div class="text-center col-lg-6 col-md-12 ">
          <h2 id="na">NCS Alumini</h2>
          <img class="im"
            src="https://as2.ftcdn.net/v2/jpg/03/07/28/29/1000_F_307282988_RBgsRynVwJKoLYNzsbls8bysOaAx2VDK.jpg" />
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
</body>

</html>