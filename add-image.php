<?php

require 'Database/DB_functions.php';
    $message = "";
    if (isset($_POST["submit"]))
    {

        $title = mysqli_real_escape_string($conn, $_POST["title"]);
        $description = mysqli_real_escape_string($conn, $_POST["description"]);
        $uploadby = mysqli_real_escape_string($conn, $_POST["uploadby"]);
        $title = htmlentities($title);
        $description = htmlentities($description);
        $uploadby =htmlentities($uploadby);

        $total_image = count($_FILES["image"]["tmp_name"]);
        for ($a = 0; $a < $total_image; $a++)
        {
        	$tmp_name = $_FILES["image"]["tmp_name"][$a];
	    	$file_name = $_FILES["image"]["name"][$a];
	        $file_path = "uploads/" . $file_name;

	        $sql = "INSERT INTO gallery(name, description, path, uploadby) VALUES(?, ?, ?, ?)";
            $s=$conn->prepare($sql);
            $s->bind_param('ssss',$title,$description,$file_name,$uploadby);
            $s->execute();
	        if (move_uploaded_file($tmp_name, $file_path))  {
                $message = "Image uploaded successfully"."Image-$a";
            }else{
                $message = "Failed to upload image"."Image-$a";
          }
	        
        }
        $message = "Image has been uploaded";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Images</title>

    <link rel="stylesheet" href="assets/bootstrap.css" />

        <script src="assets/jquery-1.11.3.min.js"></script>
        <script src="assets/bootstrap.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <h1>Add Image</h1>

                <?php if (!empty($message)) { ?>
                <div class="alert alert-success"><?php echo $message; ?></div>
                <?php } ?>

                <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="This is default value in title"  class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Select file</label>
                        <input type="file" name="image[]" multiple accept="image/*" class="form-control" required />
                        <small>You can upload multiple images at a time</small>
                    </div>
                    <div class="form-group">
                        <label>Uploaded By</label>
                        <input type="text" name="uploadby" value="Hello" class="form-control" />
                    </div>
                    <input type="submit" name="submit" value="Add" class="btn btn-success" />
                </form>
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
  <script src="https://kit.fontawesome.com/c31a64773a.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

</body>

</html>