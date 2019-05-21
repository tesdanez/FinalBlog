<?php
  if(isset($_POST["username"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    // echo $username;
    // echo $password;
    $connection = mysqli_connect("localhost", "root","", "dbuser");    
      if ($connection) {
        echo "";
      }else {
        die ("DB Connection Failed");
      }      
      $query = "INSERT INTO tbluser (username,password) VALUES ('$username', '$password')";
      $result = mysqli_query($connection, $query);
      if(!$result){
        die('DIE Query' .mysqli_error());
      }
    }
?>
<!DOCTYPE html>
<html>
<title>Sign Up Page</title>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="crud.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>MAIN SETTING</title>

   <style type="text/css">
        body {
            padding-top: 5rem;           
                   
        }
        .jumbotron {
            background: none;             
        }
 </style>

</head>
<body background="img/Margo.jpg">

<nav class="navbar navbar fixed-top navbar-expand-lg navbar-transparent bg-light " class="navbar sticky-top " >
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 
      <div>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MENU
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="sub_set.php">BACK</a>  
        </div>
       </div>
    </div>
</nav>


<main role="main" class="container">
        <div class="jumbotron " style="width: 50%;" >
            <form method="POST" action="signup.php">
                <div class="form-group">
                  <h3>Enter only your desire username and password.</h3><br>
                  <label>Put a username :</label>
                  <input type="text" class="form-control" name="username" placeholder="your username here......" autofocus>
                  <small class="form-text text-muted">We'll never share your username and password with anyone else.</small>
                </div>
                <div class="form-group">
                  <label>Put a password</label>
                  <input type="text" class="form-control" name="password" placeholder="your password here...">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>


<div class="footer">
  <i class="fab fa-facebook-square"></i>
  <i class="fab fa-twitter-square"></i>
  <i class="fab fa-instagram"></i>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<