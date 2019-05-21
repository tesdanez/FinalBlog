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
	<title>Grilled</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="crud.css">
	<link rel="stylesheet" type="text/css" href="db.php">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light" class="navbar sticky-top">
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
        <a class="nav-link" href="setting_page.php">Settings</a>
      </li>      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="jumbotron">
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
					  <a href="#" class="list-group-item list-group-item-action"><i class="fab fa-facebook-square" style="padding:5px;"></i>Facebook</a>
					  <a href="#" class="list-group-item list-group-item-action"><i class="fab fa-twitter-square" style="padding:5px;"></i>Twitter</a>
					  <a href="#" class="list-group-item list-group-item-action"><i class="fab fa-youtube" style="padding:5px;"></i>Youtubes</a>
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
			        	<form method="POST" action="#">				
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

<div class="jumbotron jumbotron-fluid">
  <div class="container">
  	<div class="row">
  		<div class="col-sm-4 d-flex align-items-stretch">
  			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="img/lamb.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Grilled Lamb Chops</h5>
			    <p class="card-text">Robert Wiedmaier adds a little bit of cumin to the garlicky marinade 
			    	on these chops, which highlights the lamb's slightly gamey flavor.
					 He accompanies each serving with half a head of roasted garlic; the sweet 
					 caramelized cloves are delicious on their own or blended into the silky
					 white bean puree he serves as a side dish.</p>
			  </div>
			</div>
  		</div>
  		<!-- ******** -->
  		 <div class="col-sm-8 d-flex align-items-stretch ">
  	  		<div class="accordion" id="accordionExample">
			  <div class="card">
			    <div class="card-header" id="headingOne">
			      <h2 class="mb-10">
			        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			          Ingredients 
			        </button>
			      </h2>
			    </div>

			    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
			      <div class="card-body">
			        <li>1/4 cup extra-virgin olive oil</li>
					<li>plus more for drizzling 4 thyme</li>
					<li>minced garlic</li>
					<li>plus 2 heads of garlic</li>
					<li>chopped rosemary leaves 1/4</li>
					<li>teaspoon ground cumin 8</li>
					<li>lamb loin chops Salt</li>
					<li>freshly ground black pepper</li>
					<li>White Bean Puree</li>
			      </div>
			    </div>
			  </div>
			  <div class="card">
			    <div class="card-header" id="headingTwo">
			      <h2 class="mb-0">
			        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			          Procedure
			        </button>
			      </h2>
			    </div>
			    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
			      <div class="card-body">
			       <h4>How To Make It:</h4>
				     <h5>Step 1</h5>
					<p>In a large, shallow dish, combine the 1/4 cup of olive oil with the thyme, minced garlic, rosemary and cumin. Add the lamb chops and turn to coat with the marinade. Refrigerate overnight.</p>
					<h5>Step 2</h5>
					<p>Preheat the oven to 350°. Set the halved heads of garlic cut side up on a large sheet of foil and drizzle with oil. Wrap the garlic in the foil and roast for 1 hour, until tender.</p>
					<h5>Step 3</h5>    
					<p>Light a grill. Remove the chops from the marinade; discard the thyme and scrape off the garlic. Season the chops with salt and pepper and grill over moderate heat until lightly charred and medium-rare, 5 minutes per side. Serve the chops with the roasted garlic and White Bean Puree.</p>
			      </div>
			    </div>
			  </div>
			</div>
		  </div>	
  	</div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>