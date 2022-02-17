<?php
    session_start();
?>

<?php
  require_once("inc/conn.php");

?>

<?php
    $body = "";

    $query = "SELECT * FROM post";

    $ShowPost = mysqli_query($conn, $query);

    if($ShowPost){
        if(mysqli_num_rows($ShowPost) > 0){
            while($post = mysqli_fetch_assoc($ShowPost)){
              

            $body .= "<a Id='post_link' href='Show_Post.php?Post_id={$post['id']}'>";

                $body .= "<div id='main_div'>";

                $body .= "<h1 id='title'>";
                $body .= "{$post['title']}";
                $body .= "</h1>";

                $body .= "<div id='body'>";
                $body .= "{$post['srt_nt']}";
                $body .= "</div>";

                $body .= "<div id='body'>";
                $body .= "<small>";
                $body .= "{$post['create_at']}";
                $body .= "</small>";
                $body .= "</div>";

                $body .= "</div>";


            $body .= "</a>";


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
    <link rel="stylesheet" href="css/index.css">
    
    <title>Home</title>

<style>

    #post_link{
        text-decoration: none;
    }

    #main_div{
        border: 1px solid #fff;
        margin-bottom: 10px;
        padding:10px;
        color: #fff;
    }
</style>
</head>
<body>

    <?php include_once("inc/navbar.php");?>

    <?php
        if(isset($_SESSION['user_Fname'])){
           // echo $_SESSION['user_Fname'];
        }else{
        //    echo "session is not created";
        }

    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron mt-4">
                    <h4 id="jumbo-header">Welcome to MD coders</h4>
                    <h4 id="jumbo-emoji">👾👨‍💻👾</h4>
                </div>   
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <?php

                        echo $body;

                    ?>
                </div> 
            </div>
        </div>
    </div>   

</body>
</html>