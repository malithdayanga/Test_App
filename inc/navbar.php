<style>
#create{
  border: 1px solid #0066ff;
  color: #0066ff;
}
#create:hover{
  border: 1px solid #0066ff;
  color: #fff;
  background-color: #0066ff;
}
#signout{
  border: 1px solid #ff0000;
  color: #ff0000;
}
#signout:hover{
  border: 1px solid #ff0000;
  color: #fff;
  background-color: #ff0000;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="./index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>

    </ul>

    <ul class="navbar-nav">


<?php
      if(isset($_SESSION['user_Fname'])){
        echo
        "
        <li class='nav-item mr-2'>
        <a id='create' class='nav-link' href='createPost.php' >Create</a>
      </li>

      <li class='nav-item'>
        <a id='signout' class='nav-link' href='signout.php'>Sign Out</a>
      </li>"

        ;
    }
    else{
      echo
      "
      <li class='nav-item'>
      <a class='nav-link' href='signin.php'>Sign In</a>
    </li>

    <li class='nav-item'>
      <a class='nav-link' href='signup.php'>Sign Up</a>
    </li>"

      ;

    }
?>

    </ul>
  </div>
</nav>