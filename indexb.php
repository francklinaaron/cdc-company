
<!DOCTYPE html>
<html>

<head>
    <title>cdc company.jet</title>
    <!-- bootstrap stylesheet for css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.5.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://kit.fontawesome.com/7ce5ae0a99.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">


    


    <link href="upload.php" />
    <link href="cdc.css" rel="stylesheet" type="text/css">
</head>
<body>
</br>
    <div class="logo">

        <ul class="nav justify-content-center" background-attachment="fixed-top">
            <li class="nav-item">
                <a class="nav-link active" href="indexb.php"><i class="fas fa-home"></i>home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html"><i class="fas fa-id-badge"></i>contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service.html"><i class="fab fa-hire-a-helper"></i>hire/<i class="fas fa-wrench"></i>service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="fas fa-upload"></i>upload</a>
            </li>
        </ul>
    </div>
</br>
</br>

    <div class="first">
    <p id="demo"></p>

<script>
var day;
switch (new Date().getDay()) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
    day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4:
    day = "Thursday";
    break;
  case 5:
    day = "Friday";
    break;
  case  6:
    day = "Saturday";
}
document.getElementById("demo").innerHTML = "Today is " + day;
</script>
</div>
</br>
</br>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="about.html">About</a>
  <a href="#">Services</a>
  <a href="TIME.html">Clients</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()"><i class="fas fa-bars"></i></button>  
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

<div class="img1">
    <h2>WHAT WE DO?</h2>
    <div class="textblog">cdc is a company for folklift service and hire in johannesburg
</br>
        <button class="button">read more</button>
    </div>
</div>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <svg width="1000" height="250" margin-left="5">
    <rect width="150" height="150" fill="red">
        <animate attributeName="y" from="0" to="1000"
      dur="7s" fill="freeze" repeatCount="5"/> 
    </rect>
</svg>
</br></br>
</br></br>
</br></br>
</br></br>
<h1><i class="fas fa-wrench"></i>WHY CHOOSE CDC </br>for your services<i class="fas fa-wrench"></i></h1>
<div class="container3">
  <img src="images/2.jpg" alt="Notebook" style="width:100%;">
  <div class="content3">
    <h3>Heading</h3>
    <p>Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu recteque expetendis neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei.</p>
  </div>
</div>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>
</br></br>

<div class="container2">
  <img src="images/2.jpg" alt="Avatar" class="image2">
  <div class="overlay2">
    <div class="text">Hello World</div>
  </div>
</div>

<div class="container">
  <img src="images/po.jpg" alt="po" class="image">
  <div class="overlay">
    <div class="text">courage admin at cdc forklift company</div>
  </div>
</div>


</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

</br></br>
</br>
<img id="myImg" src="images/3.jpg" style="width:100%;">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img src="images/2.jpg"class="modal-content" id="img01">
  <img src="images/5.jpg" class="modal-content" id="img02">
  <img src="images/7.jpg" class="modal-content" id="img03">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var modalImg = document.getElementById("img02");
var modalImg = document.getElementById("img03");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</br>
</br></br>
<div class="container4">
  <div class="vertical-center">
  </div>
</div>


</body>
</html>