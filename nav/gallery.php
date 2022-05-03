<?php
    include '../Database/DB_functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="../assets/default.css" />
    <link rel="stylesheet" href="../assets/component.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <script src="../assets/modernizr.custom.js"></script>

</head>

<body>
    <?php include '../Home/navbar.php' ?> 
    <div class="container">
        <header class="clearfix">
            <h1>Gallery</h1>
        </header>
        <?php if(!isset($_SESSION['name'])){ ?>
        <div class="container justify-content-center align-items-center my-5" style=" display:flex;
    height:500px;
    background-color:black;">
            <div class="btn btn-outline-light" style="color:aliceblue">
                <a href="/ams/index.php">LOGIN</a>
            </div>
        </div> <?php }
   else {?>
        <div class="main">
            <ul id="og-grid" class="og-grid">
                <?php
                    $sql = "SELECT * FROM gallery";
                    $result = $conn->prepare($sql);
                    $result->execute();
                    $res=$result->get_result();
                    while ($row = $res->fetch_assoc()) {
                    ?>
                <li>
                    <a href="javascript:void(0);" data-largesrc="/ams/uploads/<?php echo $row['path']; ?>"
                        data-title="<?php echo $row['name']; ?>" data-description="<?php echo $row['description'] ." -- ". $row['uploadby']; ?>">
                        <img src="/ams/uploads/<?php echo $row['path']; ?>" style="width: 250px; height: 250px;"
                            class="img-responsive" alt="img01" />
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <?php }?>
    <!-- /container -->
    <script src="../assets/jquery-1.11.3.min.js"></script>
    <script src="../assets/grid.js"></script>
    <script>
        $(function () {
            Grid.init();
        });
    </script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/c31a64773a.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
</body>

</html>