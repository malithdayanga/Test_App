<?php
session_start(); 
?>

<?php
  require_once("inc/conn.php");
?>

<?php

if(isset($_GET['Post_id'])){
    $Post_id = $_GET['Post_id'];
    $Post_title = "";
    $Post_body = "";
    $Post_create = "";
    

    $query = "SELECT * FROM post WHERE id = {$Post_id}";

    $ShowPost = mysqli_query($conn, $query);

    if($ShowPost){
        if(mysqli_num_rows($ShowPost) > 0){
            $post = mysqli_fetch_assoc($ShowPost);

            $Post_title = $post['title'];
            $Post_body = $post['body'];
            $Post_create = $post['create_at'];
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
    <link rel="stylesheet" href="plugins/bootstrap.min.css">
    <script src="plugins/jquery.min.js"></script>
    <script src="plugins/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/signup.css">
    
    <title>Show Post</title>
</head>
<body>

    <?php include_once("inc/navbar.php");?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="card">
                    <div class="card-header">
                        <?php
                            echo $Post_title;
                        ?>
                    </div>
                    <div class="card-body">
                         <?php
                            echo $Post_body;
                        ?>
                    </div>

                    <div class="card-footer">
                         <small>
                             <?php
                            echo $Post_create;
                        ?>
                        </small>
                    </div>

                    <div>
                        <?php
                            if(isset($_SESSION['user_Fname'])){
                                echo "<a class='btn btn-primary' href='edit.php?Post_id={$Post_id}'>Edit</a>";
                            }
                        ?>
                    </div>

                </div>

            </div>
        </div>

    </div>
 
</body>
</html>