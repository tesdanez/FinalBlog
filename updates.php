<?php
include 'db.php';?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="crud.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<title>UPDATE</title>
</head>
<body background="img/Margo.jpg">

<nav class="navbar navbar fixed-top navbar-expand-lg navbar-transparent bg-light " class="navbar sticky-top" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MENU
        </a> 
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="main_page.php">HOME</a>
          <a class="dropdown-item" href="setting_page.php">MAIN SETTING</a>
          <a class="dropdown-item" href="delete.php">COMMENT DELETE</a>
          <a class="dropdown-item" href="account_del.php">ACC DELETE</a>
          <a class="dropdown-item" href="account_up.php">ACC UPDATES</a>
        </div>
</nav>                           
<table class="table table-border"><tr>
										<td>
											<h4>ID:</h4>
										</td>

										<td>
											<h4>Comments:</h4>
										</td>
									</tr>
	
	<div id="container">
		<?php
				if ($con->connect_error) {
				    die("Connection failed: " . $con->connect_error);
				} 

				if(isset($_POST['up_id'])){			 		
			 		$com = $_POST['comment'];
			 		$up_id = $_POST['up_id'];	

			 		$upQuery = "UPDATE tbl_setting SET comment ='$com' WHERE id = {$up_id}";
			 		$upResult = mysqli_query($con,$upQuery);

					if(!$upResult){
					die("Query Failed" .mysqli_error());
					}

			 	}
	
				$sql = "SELECT id,comment FROM tbl_setting";
				$result = $con->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
		       
						        $id = $row['id'];
						        $comment = $row['comment']; 
						        echo "<tr>";
						        echo "<td>".$id."</td><td>".$comment."</td><td>"."	        

						        <form method = \"POST\">

						        <button  type=\"text\" type=\"submit\" name=\"comment\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\">
								  Update
								</button>
						        		<input type= \"hidden\" name = \"up_id\" value =\" {$row['id']}\">
						        		<div class=\"form-group\">
									    
									    <textarea type=\"text\" type=\"submit\" name=\"comment\"class=\"form-control\" id=\"exampleFormControlTextarea1\" rows=\"3\" placeholder=\"Write and change comment here....\" autofocus></textarea>
									  </div>
						        </form>
						        	"."</td>
						        	";

						        echo "</tr>";						  					        			
						   		 }
						}	else {	   	

				    echo "0 results";
				}
				$con->close();		
			?> 
		</div>
 </table>

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

