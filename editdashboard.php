
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
    background-color: transparent; 
}
.mySlides {display: none}
.error{
    color:red;
}
.valid{
    color:green;
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
              <li class = "nav-item"><a href="user.php" style="padding: 4px;   font-family: Georgia, 'Times New Roman', Times, serif;" class="nav-link text-dark ">HOME</a></li>   
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
    <?php
   $fnameErr = $lnameErr= $mobilenoErr = $emailErr= "";  
   $fname = $lname= $mobileno = $email = $address = $postcode =  $city = $state = $country = "";
   $vfname = $vlname= $vmobileno = $vemail="";
   if ($_SERVER["REQUEST_METHOD"] == "POST") { 
     // first name validation
    if (empty($_POST["fname"])) {  
        $fnameErr = "* First Name is required"; 
      } else {  
        $fname = input_data($_POST["fname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {  
                $fnameErr = "* Only alphabets and white space are allowed";  
            }
            else {  $vfname = "✔";}  
    }
    // lastname validation
    if (empty($_POST["lname"])) {  
        $lnameErr = "* Last Name is required"; 
      } else {  
        $lname = input_data($_POST["lname"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {  
                $lnameErr = "* Only alphabets and white space are allowed";  
            }
            else {  $vlname = "✔";}  
    }
     //mobile no validation
     if (empty($_POST["mobileno"])) {  
        $mobilenoErr = "* Mobile no is required"; 
      } else {  
        $mobileno = input_data($_POST["mobileno"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match('/^[0-9]{10}+$/', $mobileno)) {  
                $mobilenoErr = "* Enter 10 digit number.";  
            }
            else {  $vmobileno = "✔";}  
    }

     //email validation
     if (empty($_POST["email"])) {  
        $emailErr = "* Email is required"; 
      } else {  
        $email = input_data($_POST["email"]);  
            // check if name only contains letters and whitespace  
            if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {  
                $emailErr = "* Enter valid email.";  
            }
            else {  $vemail = "✔";}  
    }
}
function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data; 
  }
    ?>
    
<div class="container rounded bg-white mt-5 mb-5" style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);">
    <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
            <span class="font-weight-bold"><?php echo strtoupper($fname)."  ".strtoupper($lname) ; ?></span>
            <span class="text-black-50" style="color:black!important;"><?php echo "Email : ".$email;?></span><span> </span></div>
        </div>
        <div class="col-md-6 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input name="fname" type="text"  class="form-control" placeholder="First Name" value="<?php echo $fname; ?>">
                    <p class="error"><?php echo $fnameErr; ?></p>
                    <p class="valid"><?php echo $vfname; ?> </p></div>
                    <div class="col-md-6"><label class="labels">Last  Name</label><input name="lname" type="text"   class="form-control" placeholder="Last Name" value="<?php echo $lname; ?>">
                    <p class="error"><?php echo $lnameErr; ?></p>
                    <p class="valid"><?php echo $vlname; ?> </p>   
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input  name="mobileno" type="text" class="form-control" placeholder="Enter Phone Number" value="<?php echo $mobileno; ?>">
                    <p class="error"><?php echo $mobilenoErr; ?></p>
                    <p class="valid"><?php echo $vmobileno; ?> </p> 
                    </div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input       name="email" type="text"  class="form-control" placeholder="enter email id" value="<?php echo $email; ?>">
                    <p class="error"><?php echo $emailErr; ?></p>
                    <p class="valid"><?php echo $vemail; ?> </p> 
                    </div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input name="address" type="text" class="form-control" placeholder="enter address Line 1" value="<?php echo $address; ?>"></div>
                    <div class="col-md-6"><label class="labels">Country</label><input         name="country" type="text" class="form-control" placeholder="country" value="<?php echo $country ?>"></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input    name="state"  type="text" class="form-control"  placeholder="state" value="<?php echo $state; ?>"></div>
                </div>
                <div class="row mt-3">
                <div class="col-md-6"><label class="labels">City</label><input            name="city" type="text" class="form-control" placeholder="City" value="<?php echo $city; ?>"></div>
                <div class="col-md-6"><label class="labels">Postcode</label><input        name="postcode" type="text" class="form-control" placeholder="Postcode" value="<?php echo $postcode; ?>"></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button"  name="saveprofile" type="submit">Save Profile</button></div>
                </form>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>
<?php  
    if(isset($_POST['submit'])) {  
     if($fnameErr =="" && $lnameErr=="" && $emailErr == "" && $mobilenoErr=="" ){  
        
        echo "<center><br><h3 color = #255406> <b>You have sucessfully registered.</b> </h3><br></center>";  
           
       
        
    } else {  
      echo "<center><br><h3 color = green;>You didn't filled up the form correctly.</b> </h3><br></center>";  
        
    }  
    }  
   
?>
<!---------------------------------------------------------------------------------------------------- Image of location/map ----------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<div style="display:flex">
<img src="images/logo1.png" class="footer-logo" style="width:5%; background-color:darkgreen ;">

<!------------------------------------------------------------------------------------------------------- Footer heloo --------------------------------------------------------------------------------------------------------------------------------------------------->
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