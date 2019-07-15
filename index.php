
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "cdc_images");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.5.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<script src="https://kit.fontawesome.com/7ce5ae0a99.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="cdc.css" rel="stylesheet" type="text/css">
<style type="text/css">
   #content{
	   padding-top:70px;
	   width: 100%;
	   height:100%;
   	margin: 20px auto;
   }
   form{
   	width: 90%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 10px;
   }
   #img_div{
	   width: 80%;
	   height:600px;
   	padding: 5px;
   	margin: 15px auto;
	   border-radius:10px;
	   background-size:contain;;
   }
   #img_div:after{
   	content: "";
   	display: inline;
   	clear: both;
   }
   img{
	   background-size:cover;
   	float: left;
   	margin: px;
   	width: 80%;
	   height: 100%;
	   border-radius:10px;
   }
   button{
	   width:100px;
	   height:40px;
	   border-radius:5px;
	   background-color:skyblue;
   }
</style>
</head>
<body>
</br></br>
<div class="logo">
<ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="indexb.php"><i class="fas fa-home"></i>home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html"><i class="fas fa-id-badge"></i>contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.toyotaforklift.com/blog/selecting-the-best-forklift-attachment-for-added-use"><i class="fab fa-hire-a-helper"></i>hire/<i class="fas fa-wrench"></i>service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="fas fa-upload"></i>upload</a>
            </li>
		</ul>
</div>

<div id="content">
  <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      	echo "<p>".$row['image_text']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="index.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="10000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="comment about the image"></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload"><i class="fas fa-upload"></i></button>
  	</div>
  </form>
</div>
</body>
</html>