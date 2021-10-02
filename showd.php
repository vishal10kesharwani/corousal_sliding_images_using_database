<?php


require('config.php');
if (!$mysqli) {
  die("database: ".$mysqli->error);
}

extract($_POST);


$sql = "INSERT into user (email,phone,name) VALUES('" . $email . "','" . $phone . "','" . $Name . "')";


$success = $mysqli->query($sql);
$sql = "SELECT * FROM user where name='" . $Name . "'";
$result = $mysqli->query($sql);

if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "Thank You For Contacting Us ";


$mysqli->close();


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TASK 1 BY LGM</title>

  <!-- Bootstrap CDN  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
  <!-- Owl-carousel CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">



</head>


<body>
  <!-- Header Section -->
  <header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top mt-3" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">COROUSAL TASK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#home">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#project">PROJECTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#pricing">PRICING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#team">TEAM</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#blog">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">CONTACT</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/p1.jpg" class="d-block w-100" alt="banner1">
          <div class="carousel-caption">
            <h1>One page promising to <br> fill all your needs!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <button ><a href="contact.php" >Learn More</a> </button>
           
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/p2.jpg" class="d-block w-100" alt="banner2">
          <div class="carousel-caption">
            <h1>One page promising to <br> fill all your needs!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <button ><a href="contact.php" >Learn More</a> </button>
         
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/p3.jpg" class="d-block w-100" alt="banner3">
          <div class="carousel-caption">
            <h1>One page promising to <br> fill all your needs!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <button ><a href="contact.php" >Learn More</a> </button>
 
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/p4.jpg" class="d-block w-100" alt="banner4">
          <div class="carousel-caption">
            <h1>One page promising to <br> fill all your needs!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <button ><a href="contact.php" >Learn More</a> </button>
 
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/banner5.jpg" class="d-block w-100" alt="banner5">
          <div class="carousel-caption">
            <h1>One page promising to <br> fill all your needs!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <button ><a href="contact.php" >Learn More</a> </button>
  
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/banner5.jpg" class="d-block w-100" alt="banner6">
          <div class="carousel-caption">
            <h1>One page promising to <br> fill all your needs!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <button ><a href="contact.php" >Learn More</a> </button>
  
          </div>
        </div>
      </div>
    </div>

  </header>
 <table>
            <tr>
                <th>Email</th>
                <th>Phone No</th>
                <th>Name</th>
               
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['name'];?></td>
               
            </tr>
            <?php
                }
             ?>
        </table>
  










  <!-- Bootstrap CDN  -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script>
  <!-- Owl Carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Custom Js -->
  <script src="js/index.js"></script>
</body>

</html>