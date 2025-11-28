<?php
// cannot access the page if there is no session
require_once "../manager.php";

if($authority == "User") {
    header("Location: ../index.php");
    exit();
}

if(!isset($_SESSION["email"])) {
    header("Location: ../index.php");
    exit();
}

$errormsg = '';

if($_POST) {
    $edittitle = $_POST["edittitle"];
    $edittext = $_POST["edittext"];
    $editblogimg = $_POST["editblogimg"];
    $titlenumber = strlen($edittitle);
    
    if($_FILES["blogimg"]["name"]!=null){
     $dest='upload/';
       $uploadOk = 1;
     $target_dir = "uploads/";
    // Path of the uploaded file
    $target_file = $target_dir . basename($_FILES["blogimg"]["name"]);
    // echo $target_file;
    move_uploaded_file($_FILES["blogimg"]["tmp_name"], $target_file);
    $image = basename($_FILES["blogimg"]["name"]);

    if($titlenumber > 80) {
        $errormsg = "Title is too long.";
    } else {
        $query = $db->prepare("UPDATE blog SET blogtitle=?, blogtext=?, blogimg=? WHERE blogid=?");
        $update = $query->execute(array($edittitle, $edittext, $image, $info["blogid"]));
        if($update) {
            $errormsg = "Blog updated successfully.";
            echo "<script>
                setTimeout(function() {
                    window.location.href = '../index.php';
                }, 2000);
            </script>";
        } else {
            $errormsg = "Could not update.";
        }
    } }else{
        
          $query = $db->prepare("UPDATE blog SET blogtitle=?, blogtext=? WHERE blogid=?");
        $update = $query->execute(array($edittitle, $edittext, $info["blogid"]));
        if($update) {
            $errormsg = "Blog updated successfully.";
            echo "<script>
                setTimeout(function() {
                    window.location.href = '../index.php';
                }, 2000);
            </script>";
        } else {
            $errormsg = "Could not update.";
        }
        
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Blog</title>
  </head>
  <body>
    <?php include "../navbar.php"?>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-8">
                <form method="POST"  enctype="multipart/form-data">
                    <input type="text" class="form-control" name="edittitle" value="<?php echo $info["blogtitle"]?>">
                    <textarea class="form-control mt-1" name="edittext" cols="10" rows="10"><?php echo $info["blogtext"]?></textarea>
                    <input class="form-control" type="file" name="blogimg" id="blogimg"  >
                    
                    <img src="uploads/<?php echo $info["blogimg"];?>" width="250">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-warning">Update</button>
                <?php
                if(!empty($errormsg))
                {
                    ?>
                    <div class="alert alert-success mt-1" role="alert">
                    <?php echo $errormsg;?>
                    </div>
                    <?php
                }
                ?>
            </div>
            </form>
        </div>
    </div>
  </body>
</html>
