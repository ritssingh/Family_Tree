

<!DOCTYPE html>

<html lang="en">
<head>
<title> Family Tree</title>
<link rel="icon" href="images/logo1.png" type="image/icon type">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
 
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
     
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
     
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
<style>
body {font-family: "Lato", sans-serif;
    background-color: transparent; }
.mySlides {display: none}
</style>
</head>
<body>
<div id="home">
<!-- Navbar -->
    <div class="navbar navbar-expand-sm  navbar-light">
            
            
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse_Navbar"><span class="navbar-toggler-icon"></span></button>
        <a class="navbar-brand" href="#"><img src="images/logo1.png" alt="logo" style="width:40px;"></a>
        <div class="collapse navbar-collapse" id="collapse_Navbar">
           <ul class = "navbar-nav">
              <li class = "nav-item"><a href="#home" style="padding: 4px;   font-family: Georgia, 'Times New Roman', Times, serif;" class="nav-link text-dark ">HOME</a></li>   
              <li class = "nav-item"><a href="#contact" style="padding: 4px;   font-family: Georgia, 'Times New Roman', Times, serif;" class="nav-link text-dark">CONTACT</a></li>
              <li class = "nav-item"><a href="#introduction"style="padding: 4px;  font-family: Georgia, 'Times New Roman', Times, serif;" class="nav-link text-dark">ABOUT US</a></li>
              
           </ul>   
        </div>
        <div class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Dashboard</a>
          <a class="dropdown-item" href="editdashboard.php">Edit Profile</a>
          <a class="dropdown-item" href="index2.php">Log Out</a>
        </div>
            </div>
    </div>

 
<!--------------------------------------------------------- Page content------------------------------------------------------------------------------------------------------------------------ -->





<!----------------------------------------------------- The introduction --------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
 


<div class="introduction-container" style="max-width:100%; margin-bottom:0%; padding-bottom:0%;" >
    <h2 style="letter-spacing:4px; text-align: center; margin-bottom:0.5%; font:bold; background-color: darkgray;">THE FAMILY TREE</h2>
    <p style="opacity:0.60;margin-bottom:5%;"><i>we will never forget let you forgot your <b>History .</b></i></p>
    <p style="text-align:justify!important; margin-bottom:5%">A family tree is a visual representation of a person’s lineage, tracing relationships to common ancestors. Visually similar to an org chart, this diagram is usually presented in a tree structure starting with one individual as the root. From the root, lines representing branches terminate in boxes representing leaves. Each leaf represents individual family members with information such as birth, marriage, and death dates. 

        A family tree diagram or genealogy chart makes it easy to record the people, places, and events that make up your family history and then share it with others. Learn how to draw a family tree (or get started faster with a few examples of family trees.</p>
    <div class="intro-row">
      <div class="intro-column">
        <img src="images/banner8.png" class= " introduction-img" alt="Random Name" style="width:100%">
      </div>
    </div>
    <div class="intro-row" >
      <div class="intro-column">
        <img src="images/banner11.png" class= " introduction-img" alt="Random Name" style="width: auto">
      </div>
    </div>
    <div class="intro-row" >
      <div class="intro-column">
        <img src="images/banner10.png" class= " introduction-img" style="padding-bottom: 2%;" alt="Random Name" style="width:100%">
      </div>
    </div>

  </div>
  <div></div>



   
  <!----------------------------------------------Create Tree------------------------------------------------------------------------------------------------------------------------------> 
 
 
  <div  style="text-align: center;" class="tree">
   <h2 class="h2-tree">Lets Create A <i>Tree</i></h2>
   <button class = "btn-tree" type="button"  >Create Tree</button>
 
  </div>
 
  <!-------------------------------------------- The Contact Section ---------------------------------------------------------------------------------------------------------------------->
 
  
  <div class="contact-container"  id="contact">
    <h2 style="letter-spacing:4px; text-align:center; background-color: darkgray;">CONTACT</h2>
    <p style="opacity:0.60; text-align:center;">we love feedbacks</i></p>
    <div class="contact-detail" style="width:100%;">
      <div class="contact-detail-list intro-column" style="width:100%;">
        <i class="fa fa-map-marker" style="width:30px"></i> Madhya Pradesh , India<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91-##########<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: familytree@gmail.com<br>
      </div>
      <div class = "contact-form intro-column" style="width:100%;">
        <form action="/action_page.php" target="_blank">
          <div style="max-width:100%; display:flex; margin: 1%;" >
            <div class=" form-name form-group" >
              <span class="input-icon"><i class="fa fa-user"></i></span>
              <input class="input-text" style="max-width:100% ;" type="text" placeholder="Name" required Email="Name" >
            </div>
            <div class="form-email" style="width:100%; margin-left:1%;" >
              <span class="input-icon"><i class="fa fa-envelope"></i></span>
              <input class="input-text" style="max-width:100%;" type="text" placeholder="Email" required Email="Email" >
            </div>
          </div>
          <span class="input-icon"><i class="fa fa-commenting-o"></i></span>
          <input class="input-text form-message" type="text" placeholder="Message"  required name="Message">
          <button class="btn-submit-contact" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>
  
<!-------------------------------------------------End Page Content --------------------------------------------------------------------------------------------------------------------------------------------->
</div>

<!---------------------------------------------- Image of location/map ----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div style="display:flex">
<img src="images/logo1.png" class="footer-logo" style="width:5%; background-color:darkgreen ;">

<!-------------------------------------------- Footer heloo --------------------------------------------------------------------------------------------------------------------------------------------------->
<footer class="social-footer" style="clear:both ; background-color:darkgreen;">
  <i class="fa fa-facebook-official social-hover-opacity" type="button" href="http//www.google.co.in"></i>
  <i class="fa fa-instagram social-hover-opacity"></i>
  <i class="fa fa-snapchat social-hover-opacity"></i>
  <i class="fa fa-twitter social-hover-opacity"></i>
</footer>

<img src="images/logo1.png" class="footer-logo" style="width:5%; background-color:darkgreen ;">
</div>
<script  src = "js/function.js"></script> 

</body>                               
</html>
