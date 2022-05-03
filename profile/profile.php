<?php include '../head.php';
include '../Database/login.php'
?>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
   <?php include '../Home/navbar.php';?>
<?php if(isset($_SESSION['name'])){ ?>
   <h1> Hello MR.<?php echo " ".strtoupper($_SESSION['name']) ?> </h1>
   <button  ><a href="profile-edit.php">EDIT</a></button>
   <?php }
   else {?>
   <div class="container justify-content-center align-items-center my-5" style="display:flex; height:500px; background-color:black;" >
       <div class="btn btn-outline-light" style="color:aliceblue">
       <a href="../index.php">LOGIN</a>
        </div>
   </div>
   <?php }?> 

<?php include '../end.php';?>
