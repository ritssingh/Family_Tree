<!DOCTYPE html>
<html>
<head>
<title> Family Tree</title>
<link rel="icon" href="images/logo1.png" type="image/icon type">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
body {
font-family: "Lato", sans-serif;
background-color: transparent; 
}
 
.error {color: #FF0001;}  
.valid {color:green;
         }
</style>

</head>
<body>
<div class = "cvhome" >
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
<!----------------------------------------------------------- credit card validation---------------------------------------------------------------------------------- -->
<?php 
$nameErr = $cardnumberErr = $ccvErr = $expiryErr = $success = "";  
$name = $cardnumber = $ccv = $expiry = $type = "";
$vname =  $vccv = $vexpiry = $vtype ="";  
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  //owner name validation
  if (empty($_POST["name"])) {  
    $nameErr = "* Name is required"; 
  } else {  
    $name = input_data($_POST["name"]);  
        // check if name only contains letters and whitespace  
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
            $nameErr = "* Only alphabets and white space are allowed";  
        }
        else {  $vname = "✔";}  
} 
 // card Number validation
 if (empty($_POST["cardnumber"])) {  
  $cardnumberErr = "* credit card no is required";  
} else { 
        $cardnumber = input_data($_POST["cardnumber"]);
        $cardtype = array(
                           "VISA"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
                           "MASTERCARD" => "/^5[1-5][0-9]{14}$/",
                           "AMEX"       => "/^3[47][0-9]{13}$/",
                           "DISCOVER"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
                                                                                  );
 
     if (preg_match($cardtype['VISA'],$cardnumber))
     {
        $type= "VISA";
     }
     else if (preg_match($cardtype['MASTERCARD'],$cardnumber))
     {
        $type= "MASTERCARD";
     }
     else if (preg_match($cardtype['AMEX'],$cardnumber))
     {
        $type= "AMEX";
     }
     else if (preg_match($cardtype['DISCOVER'],$cardnumber))
     {
        $type= "DISCOVER";
     }
       else
     {
         $cardnumberErr = "* invalid credit card number";
     } 
       $vtype="✔";
    }
   
  // ccv validation

  if (empty($_POST["ccv"])) {  
    $ccvErr = "* ccv is required";  
     } 
  else { 
        $ccv = input_data($_POST["ccv"]);
        $typ = $type;
        if(isset($ccv) && isset($typ)) {
           $cards = array(
                           'VISA' => 3,
                           'MASTERCARD' => 3,
                           'DISCOVER' => 3,
                           'AMEX' => 4
                                         );
            $typ = strtoupper($typ);
            if(isset($cards[$typ])){
                     if(strlen($ccv) == $cards[$typ])
                                  {
                                     $ccvErr="";
                                     $vccv="✔";
                                  }
                     else {
                             $ccvErr = "* A valid card security code and type is required to run this operation.";
                         } 
            }else
                  {
                    $ccvErr = "* This card not accepted";
                  }
        }else{
               $ccvErr = "* This card not accepted";
                   }  } 
   
  
                  
  // expiry validation;
        
        $m=$_POST['month'];
        $y=$_POST['year'];

     if(strtotime("{$y}-{$m}") < strtotime( date("Y-m")  ))
      {
        $expiryErr = "* card expired";
        
                             }
     else{ $expiryErr="";
           $vexpiry="✔";              }
     }
  function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data; 
  }

?>
 <?php  
    if(isset($_POST['submit'])) {  
     if($nameErr =="" && $cardnumberErr=="" && $ccvErr == "" && $expiryErr=="" && $success ==""){  
        
        echo "<center><br><h3 color = #255406> <b>You have sucessfully registered.</b> </h3><br></center>";  
        
        header("Location:  ");
        
    } else {  
      echo "<center><br><h3 color = green;>You didn't filled up the form correctly.</b> </h3><br></center>";  
        
    }  
    }  
    if(isset($_POST['clear'])) {  
      $name = $cardnumber = $ccv = $expiry = $type = "";
      $vname =  $vccv = $vexpiry = $vtype =""; 
     }
?> 

            
               
                        <div class="modal-content"  style="background-color:white;" >
                            
                            <div class="modal-body" >
                                <div style="text-align: center;"><img src="images/logo1.png" class="footer-logo" style="width:9%; background-color:transparent ;"> 
                                <h3 class="title" >FAMILY TREE</h3>
                                <p class="description">Enter Credit Card Information</p></div>
                                
                                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                        
                                <div class="form-group" style="padding: 0px 400px;">
                                  <label for="Owner">Owner Name</label>
                                  <input type="text" class="form-control"  id="name" name="name"  value="<?php echo $name; ?>" >
                                  <span class="error"><?php echo $nameErr; ?></span>
                                  <span class="valid"><?php echo $vname; ?> </span>    
                                  <br>
                                </div>
                                <div class="form-group" style="padding: 0px 400px;">
                                  <label for="cardNumber">Card Number</label> 
                                  <input type="text" class="form-control" id="cardnumber" name="cardnumber" value="<?php echo $cardnumber; ?>"  >
                                   <span class="error"><?php echo $cardnumberErr; ?> </span>
                                   <span class="valid"><?php echo $vtype." ".$type; ?> </span>  
                                   <br><br>
                                   <div class="form-group" style=" padding: 0px 0px; display: grid; grid-template-columns: auto auto auto; gap: 10px;">
                                   
                                    <div class="form-group" style=" grid-row:1\15; padding: 0px 0px;">
                                       <img src="images/visa.png" id="visa" style="width: 50%; "> 
                                       </div>
                                    <div class="form-group" style="padding: 0px 0px;">
                                  <label for="ccv">CCV</label>
                                  <input type="text" class="form-control" id="ccv" name="ccv" value="<?php echo $ccv; ?>" >
                                  <span class="error"><?php echo $ccvErr; ?> </span> 
                                  <span class="valid"><?php echo $vccv; ?> </span>   
                                   </div>
                                
                               
                                   <div class="form-group" style="padding: 0px 20px 0px;">
                                  <label style="padding:0px 0px 15px">Expiry Date :</label>
                                  <br>
                                  <select name="month" id="month"  name ="month" required>
                                  <option value="01">01</option>
                                  <option value="02">02</option>
                                  <option value="03">03</option>
                                  <option value="04">04</option>
                                  <option value="05">05</option>
                                  <option value="06">06</option> 
                                  <option value="07">07</option>
                                  <option value="08">08</option>
                                  <option value="09">09</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option> 
                                  <option value="12">12</option>
                                  </select>
                                  <select name="year" id="year" name ="year"  required>
                                  <option value ="2016">2016</option>
                                  <option value ="2017">2017</option> 
                                  <option value ="2018">2018</option>>
                                  <option value ="2019">2019</option>
                                  <option value ="2020">2020</option>
                                  <option value ="2022">2022</option>
                                  <option value ="2023">2023</option>
                                  <option value ="2024">2024</option>
                                  <option value ="2025">2025</option>
                                  <option value ="2026">2026</option>
                                  </select>
                                  <br>
                                  <span class="error"><?php echo $expiryErr; ?> </span>
                                  <span class="valid"><?php echo $vexpiry; ?> </span>
                                   </div>  
                                  
                                   
                                  
                                  
                                  <div class="form-group  " id="pay"  style="text-align:center;">
                                  <input type="submit" class="btn btn-default"  name="submit" value="Submit" id="submitbutton"></div>
                                  <div class="form-group  " id="pay"  style="text-align:center;">
                                  <input type="submit" class="btn btn-default"   name="clear" value="Clear" id="clearbutton">
                                  
                                 </div> </div> </div>
                                </form>
                             </div>
                        </div>
                        </div>
       
            
<!-------------------------------------------- Footer heloo --------------------------------------------------------------------------------------------------------------------------------------------------->



 

    
  

</body>
</html>