<!--Register the User by sendind data to DataBase-->

<?php  
if (isset($_POST['regSell'])) {
  require '../includes/dbhsell.inc.php';
 $fname = $_POST['name'];
 $email = $_POST['email'];
 $pass1 = $_POST['password'];
 $pass2 = $_POST['cpass'];
 $uname = $_POST['uname'];
 $phone = $_POST['phno'];


  # Handle Empty Fields
 if (empty($fname) || empty($email) || empty($pass1) || empty($pass2) || empty($uname) || empty($phone)) {
   header('Location:RegSeller.php?error=Fields Empty!');
   exit();
 }
 else
 {

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
   echo '<script>alert("Invalid email format!")</script>';
}
else{
  if (strlen($phone) > 10 || strlen($phone)<10) {
   header('Location:RegSeller.php?error=Invalid 10 digit Mobile Number!');
   exit();
  }
  else
  {
    # check for two password incorrect!
  if ($pass1!=$pass2) {
    # code..
    header('Location:RegSeller.php?error=Two Password Not Matched!');
    exit();
  }
  else
  {
    # check for username aviliable or not
    
    $sql = "SELECT * FROM sellers_details WHERE email = '$email'";
    $stmt = mysqli_stmt_init($connection);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
      header('Location:RegSeller.php?error=Error While preparing statement');
    }
    else
    {
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $num_rows = mysqli_num_rows($result);

      if ($num_rows > 0) {
        header('Location:RegSeller.php?error=User Already Registered using this Email!');
        exit();
      }
      else {
            
            // Attempt insert query execution
$sql = "INSERT INTO sellers_details (name, email, uname,password,phone) VALUES ('$fname', '$email', '$uname','$pass1','$phone')";
if(mysqli_query($connection, $sql)){
   header('Location:index.php?success=Account Created!');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
 
// Close connection
mysqli_close($connection);
          }
      }
    }
  }
  
}
}
}
?>

<!DOCTYPE html>
  <html>
    <head>
      <title>Seller SignUp</title>
      <!--Google Fonts-->
      <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <!--Navbar-->
      <div class="navbar-fixed">
      <nav class="orange">
    <div class="nav-wrapper container">
      <a href="../" class="brand-logo">FM</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Login</a></li>
       
        
      </ul>
    </div>
  </nav>
</div>


 <!--Side Nav-->

  <ul class="sidenav" id="mobile-demo">
    <li><a href="#">Login</a></li>
    
    
  </ul>

      <div class="container">
       <!--Regisration start from here-->
       <br><br><br>
       <div class="row">
        <h4 class="center">Create Account For Supplier</h4>
    <form class="col s12" action="" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <input id="fullname" type="text" class="validate" name="name">
          <label for="fullname">Full Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="email">
          <label for="last_name">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input  id="pass" type="password" class="validate" name="password">
          <label for="pass">Password</label>
        </div>
         <div class="input-field col s6">
          <input id="password" type="password" class="validate" name="cpass">
          <label for="password">Confirm Password</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s6">
          <input id="uname" type="text" class="validate" name="uname">
          <label for="uname">Username</label>
        </div>
        <div class="input-field col s6">
          <input id="phno" type="text" class="validate" name="phno">
          <label for="phno">Phone No.</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
         <center><input type="submit" name="regSell" class="btn btn-large orange white-text"></center>
         <?php if (isset($_GET['error'])) {
      $error = $_GET['error'];
       echo '<p style="color:red;text-align:center;font-size:2em;">'.$error.'</p>';
     } ?>
          
        </div>
      </div>
    </form>
  </div>
        




        
      </div>


      


      <!--jquery-->
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="../js/materialize.min.js"></script>

      <!--SweetAlerts-->
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


      <script type="text/javascript">
         $(document).ready(function(){
    $('.sidenav').sidenav();

    
  });
      </script>
    </body>
  </html>