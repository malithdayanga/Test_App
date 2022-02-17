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
    $Post_sn = "";
    $Post_body = "";
    $Post_create = "";
    

    $query = "SELECT * FROM post WHERE id = {$Post_id}";

    $ShowPost = mysqli_query($conn, $query);

    if($ShowPost){
        if(mysqli_num_rows($ShowPost) > 0){
            $post = mysqli_fetch_assoc($ShowPost);

            $Post_title = $post['title'];
            $Post_sn = $post['srt_nt'];
            $Post_body = $post['body'];
            $Post_create = $post['create_at'];
        }
    }

}

?>

<?php

    if(isset($_POST['submit'])){

    $Post_id = $_GET['Post_id'];
    $Post_title = $_POST['title'];
    $Post_sn = $_POST['srt_nt'];
    $Post_body = $_POST['post-body'];

    $query = "UPDATE post SET
    
    title = '{$Post_title}',
    srt_nt = '{$Post_sn}',
    body = '{$Post_body}' WHERE id = {$Post_id} ";

    $result = mysqli_query($conn,$query);

    if($result){
        $msg = "<div class='alert alert-primary alert-dismissible fade show' role='alert'>
        <strong>Post Update Success ..!!</strong>Your Post is visible now.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
    }else{
        echo mysqli_error($conn);
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
    
    <title>Edit Post</title>
</head>
<body>

    <?php include_once("inc/navbar.php");?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="card mt-4">

                
                    <div class="card-header" id="card-header">
                            <h4>Sign in form</h4>
                    </div>
                    <div class="card-body" id="card-body">

                    <form action="edit.php?Post_id=<?php echo $Post_id;?>" method="POST" autocomplete="off">

                    <?php
                    if(!empty($msg)){
                      echo $msg;
                    }
?>


                        <div class="form-group">
                          <label for="">Title</label>
                          <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $Post_title;?>">
                          <small id="helpId" class="text-muted">Update title here</small>
                        </div>

                        <div class="form-group">
                          <label for="">Short Note</label>
                          <textarea class="form-control" name="srt_nt" id="srt_nt"  rows="5"><?php echo $Post_sn;?></textarea>
                          <small id="helpId" class="text-muted">Update Short note</small>
                        </div>

                        <div class="form-group">
                          <label for=""></label>
                          <script src="plugins/ckeditor/ckeditor.js"></script>
                          <textarea class="form-control" name="post-body" id="post-body"  rows="15" ><?php echo $Post_body;?></textarea>
                             <script>
                              CKEDITOR.replace( 'post-body' );
                             </script>

                          <small id="helpId" class="text-muted">Update post details</small>
                        </div>
                        
                    </div>
                    <div class="card-footer" id="card-footer">
                        
                            <button type="submit" name="submit" class="btn btn-primary">Update Post</button>
                        
                    </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
 
</body>
</html>