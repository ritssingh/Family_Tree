

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
.error{
    color:red;
}
.success{
    color:green;
    font-size: large;
}

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
        <div >
              <a href="login.php" class="nav-link  text-dark" style="position:relative; display:inline;"><button type="button"  class = "btn btn-light btn-sm" data-toggle="modal" data-target="#myModal" >Log In</button></a>
              
            </div>
    </div>

  


<!--------------------------------------------------------- Sign up pop up----------------------------------------------------------------------------------------------------------------------------------- -->
<?php
$iemail = $name = $cpass=$email=$pass=$user= "" ;
$succes="";
if(isset($_POST["submit"])){  
    if(!empty($_POST['email']) && !empty($_POST['pass'])) {  
        $name=$_POST['name']; 
        $user=$_POST['email'];  
        $pass=$_POST['pass'];
        $cpass=$_POST['cpass'];  
        $con=mysqli_connect('localhost','root','') or die(mysqli_error($con));  
        mysqli_select_db($con,'familytree') or die("cannot select DB");  
      
        $query=mysqli_query($con,"SELECT * FROM login WHERE email='".$user."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows==0)  
        {  
        $sql="INSERT INTO login(email,password) VALUES('$user','$pass')";  
      
        $result=mysqli_query($con,$sql);  
            if($result){  
        $succes= "<script>alert('Account Successfully Created')</script>";
        header("Location: login.php "); 
        $iemail = $name = $cpass=$email=$pass=$user= "" ;
        } else {  
        echo "Failure!";  
        }  
      
        } else {  
        $iemail = "That username already exists! Please try again with another.";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    }  
  
     ?>
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <div class="modal-box">
              
              <!-- Modal -->
              <div class="" >
                  <div class="modal-dialog" role="document">
                      <div class="modal-content clearfix">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span><a href="index2.php">×</a></span></button>
                          <div class="modal-body">
                              <img src="images/logo1.png" class="footer-logo" style="width:9%; background-color:transparent ;"> 
                              <h3 class="title">FAMILY TREE</h3>
                              <p class="description">Login here Using Email & Password</p>
                              <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                              <div class="success"><?php echo $succes; ?> </div>
                              <div class="form-group">
                                <span class="input-icon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name = "name" placeholder="Enter Your Full Name" value="<?php echo $name; ?>">
                            </div>
                              <div class="form-group">
                                  <span class="input-icon"><i class="fa fa-user"></i></span>
                                  <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?php echo $user; ?>">
                                  <span class="error"><?php echo $iemail; ?> </span>
                              </div>
                              <div class="form-group">
                                  <span class="input-icon"><i class="fa fa-key"></i></span>
                                  <input type="password" class="form-control" name ="pass" placeholder="Password" value="<?php echo $pass; ?>">
                              </div>
                              <div class="form-group">
                                <span class="input-icon"><i class="fa fa-key"></i></span>
                                <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" value="<?php echo $cpass; ?>">
                                
                              </div>
                              <div class="form-group checkbox row" style="display:flex;" >
                                  <input class="col" type="checkbox" style="float:left;">
                                  <label class= "col">Agree with our term and conditions!  </label>
                              </div>
                              
                              <button class="btn btn-login" type="submit" name="submit" >Register</button>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


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
          <button class="btn-submit-contact" type="submit"><a href="signup.php">SEND</a></button>
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

                                  
</html>
