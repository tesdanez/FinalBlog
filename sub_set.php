
<!DOCTYPE html>
<html>
<title>Login Page</title>
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
          <a class="dropdown-item" href="main_page.php">HOME</a>  
        </div>
       </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">              
       <li class="nav-item">
        <a class="nav-link" href="signup.php">SIGN UP</a>
      </li>      
     </ul>
     <form class="form-inline" action="validation.php" method="POST">
      <div class="form-group" >
         <label>Username:</label>
         <input type="text" class="form-control" placeholder="username" name="username">
      </div>
      <div class="form-group" style="padding: 5px">
         <label>Password:</label>
         <input type="password" class="form-control" name="password" placeholder="Enter password" >
      </div>
        <button type="submit" name="submit" class="btn btn-light">Log In</button>    
    </form>
  </div>
</nav>

<div class="footer">
  <i class="fab fa-facebook-square"></i>
  <i class="fab fa-twitter-square"></i>
  <i class="fab fa-instagram"></i>
  <i >@Copyright FiAN</i>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

