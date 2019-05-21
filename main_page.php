<?php
include 'db.php';
?>
<?php
	if(isset($_POST['submit'])){
		$comment = $_POST['comment'];
		$query = "INSERT INTO tbl_setting (comment) VALUES ('$comment')";
		$result = mysqli_query($con,$query);
		if(!$result){
			die('Failed' .mysqli_error());
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Main</title>

	<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Baloo+Bhai|Pacifico&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="crud.css">
	<link rel="stylesheet" type="text/css" href="db.php">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar fixed-top navbar-expand-lg navbar-transparent bg-light " class="navbar sticky-top " >
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main_page.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="sub_set.php">Settings</a>
      </li>      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn navbar-dark btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="jumbotron" id="jamb0">
  <div class="container">
  	<div class="row">
  		<div class="col-sm-6">

		<h1 class="display-4">FiAN Steaks Recipes</h1>
			<br>
		    <p class="lead">Grills gone wild. We have the best taste in your mouth. </p>
		    <br>
		    
		    <p class="lead">Relax… it’s just heat & meat. </p>
		    <br>
		    <p class="lead">Better meat than down the street. </p>   
  		</div>
  		<div class="col-sm-6">
  			<iframe width="560" height="315" src="https://www.youtube.com/embed/JZVWkjFGCBI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  		</div>
  	</div>
  </div>
</div>

<div class="jumbotron jumbotron-fluid" id="jamb1">
  <div class="container">
  	<div class="row">
  		<div class="col-sm-6">
  			<iframe width="560" height="315" src="https://www.youtube.com/embed/6DOgPETTyoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  		</div>
  		<div class="col-sm-6" align="right">
  			<h1 class="display-4">Fian Steaks Recipes</h1>
			<br>
		    <p class="lead">Treat your party guests to a classic Southern spread with deviled eggs, spiced pecans, ham, cheese and fresh fruit with this festive party board. We've included a combination of homemade and store-bought ingredients for an abundant board that doesn't take too long to assemble. A note on nutrition: This board is hearty enough to stand in for dinner or lunch, but if you're planning on serving it as an appetizer before the main meal, go light on things like nuts, crackers and cheese dip to keep sodium and calories in check. </p>
		    <br>
  		</div>
  	</div>
  </div>
</div>

<div class="jumbotron jumbotron-fluid"id="jamb2" >
  <div class="container">
  	<div class="row">
  		<div class="col-sm-3 d-flex align-items-stretch">
  			<div class="card" style="width: 18rem;">
			    <img class="card-img-top" src="img/lamb.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Grilled Lamb Chops</h5>
			    <p class="card-text">Grilled lamb chops served with caramelized roasted garlic</p>
			    <a href="first_card.php" class="btn btn-primary">View Recipes</a>
			  </div>
			</div>
  		</div>
  		<div class="col-sm-3 d-flex align-items-stretch" >
  			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="img/pro4.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Ancho-Chile Chicken</h5>
			    <p class="card-text">Grilled chicken fillet rubbed with ancho chile puree and spices.</p>
			    <a href="second_card.php" class="btn btn-primary">View Recipes</a>
			  </div>
			</div>		    
  		</div>
  		<div class="col-sm-3 d-flex align-items-stretch">
  			 <div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="img/pro3.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Grilled Margarita Chicken</h5>
			    <p class="card-text">Grilled margarita marinated chicken .</p>
			    <a href="third_card.php" class="btn btn-primary">View Recipes</a>
			  </div>
			</div>
  		</div>
  		<div class="col-sm-3 d-flex align-items-stretch" >
 			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="img/skirt.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Grilled Skirt Steak</h5>
			    <p class="card-text">Nice and Skirt steak grilled to perfection meat and vegies.</p>
			    <a href="fourth_card.php" class="btn btn-primary">View Recipes</a>
			  </div>
			</div>
  		</div>

  		<div class="col-sm-3 d-flex align-items-stretch" >
 			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="img/pro1.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Grilled Angus Beef Burger</h5>
			    <p class="card-text">Grilled juicy Angus Beef Burger patty.</p>
			    <a href="fifth_card.php" class="btn btn-primary">View Recipes</a>
			  </div>
			</div>
  		</div>

  		<div class="col-sm-3 d-flex align-items-stretch" >
 			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="img/caro1.jpeg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Barbecue Ribs</h5>
			    <p class="card-text">Country style grilled barbecue ribs</p>
			    <a href="sixth_card.php" class="btn btn-primary">View Recipes</a>
			  </div>
			</div>
  		</div>

  		<div class="col-sm-3 d-flex align-items-stretch" >
 			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="img/caro3.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Roasted Pork Belly</h5>
			    <p class="card-text">Nicely roasted pork belly seasoned with spices.</p>
			    <a href="seventh_card.php" class="btn btn-primary">View Recipes</a>
			  </div>
			</div>
  		</div>

  		<div class="col-sm-3 d-flex align-items-stretch" >
 			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="img/salmon.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Grilled Salmon Steak</h5>
			    <p class="card-text">Lemon Garlic Herb Salmon</p>
			    <a href="eighth_card.php" class="btn btn-primary">View Recipes</a>
			  </div>
			</div>
  		</div>


  	</div>
  </div>
</div>

<div class="jumbotron" id="jamb1">
  <div class="container">
  	<div class="row">
  		<div class="col-sm-6">
  			<div id="accordion">
			  <div class="card">
			    <div class="card-header" id="headingOne">
			      <h5 class="mb-0">
			        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          Subscribe Us :
			        </button>
			      </h5>
			    </div>

			    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
			      <div class="card-body">
			       	<div class="list-group">
					  </a>
					  <a href="https://www.facebook.com/BakitMahalAngBigas" class="list-group-item list-group-item-action"><i class="fab fa-facebook-square" style="padding:5px;"></i>Facebook</a>
					  <a href="#" class="list-group-item list-group-item-action"><i class="fab fa-twitter-square" style="padding:5px;"></i>Twitter</a>
					  <a href="https://www.youtube.com/watch?v=AnP43TONiX0" class="list-group-item list-group-item-action"><i class="fab fa-youtube" style="padding:5px;"></i>Youtubes</a>
					</div>
			      </div>
			    </div>
			  </div>
			  <div class="card">
			    <div class="card-header" id="headingTwo">
			      <h5 class="mb-0">
			        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			          Comments
			        </button>
			      </h5>
			    </div>
			    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
			      <div class="card-body">
			        	<form method="POST" action="main_page.php">				
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
								 Add Comment
							</button>
								<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								  <div class="modal-dialog modal-dialog-centered" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalCenterTitle">Add Comment Here</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								        <textarea type="text" name="comment" rows="15" cols="60" placeholder="Add comments here..." autofocus></textarea>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								        <button type="submit" name="submit" class="btn btn-primary">Send</button>
								      </div>
								    </div>
								  </div>
								</div>
						</form>
			      </div>
			    </div>
			  </div>
			  <div class="card">
			    <div class="card-header" id="headingThree">
			      <h5 class="mb-0">
			        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			          About Us
			        </button>
			      </h5>
			    </div>
			    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
			      <div class="card-body">
			        	
			      </div>
			    </div>
			  </div>
			</div>
  		</div>
  		<div class="col-sm-6">
 
  	<table class="table table-border">
  		<h1>Updated Comments</h1>
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

				if (isset($_POST["delete_id"])) {
					$deleteSql = "DELETE FROM tbl_setting where id = {$_POST["delete_id"]}";
					$con->query($deleteSql);
				}

	
				$sql = "SELECT id,comment FROM tbl_setting";
				$result = $con->query($sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
		       
						        $id = $row['id'];
						        $comment = $row['comment']; 
						        echo "<tr>";
						        echo "<td>".$comment."</td><td>"."
						        
						        	"."</td>
						        	";

						        echo "</tr>";				  	
						   	 }
						}else {	   	
				    echo "0 results";
				}
				$con->close();		
			  ?> 
		
	 </table>
		</div>
  	</div>
  </div>
</div>

<div class="footer">
	<div>
	  <i class="fab fa-facebook-square"></i>
	  <i class="fab fa-twitter-square"></i>
	  <i class="fab fa-instagram"></i>
	  <i >@Copyright FiAN</i>
	</div>  
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<script>
	
</script>

</body>
</html>