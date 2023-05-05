<?php
  $login = false;
  $showError = false;
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include 'partials/_dbconnect.php';
    
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
      $username = $_POST["username"];
      $password = $_POST["password"];
  
      $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $sql);
  
      if (mysqli_num_rows($result) == 1) {
        $login = true; 
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['user'] = $username;
        header("location:welcome.php");
      } else {
        $showError = "Invalid credentials";
      }
    } else {
      $showError = "Error! Please enter both username and password";
    }
  }
  
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Login</title>
  </head>
  <body>
   
    
<?php
if($login){
echo'
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are now logged in.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if($showError){
  echo '
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong>  ' . $showError. '
   </div>';
  }
?>
<form action="/loginsystem/login.php" method="POST">
<div class="container">
    <h1><center>Login</center></h1>
    <p><center>Not registered yet?<a href="signup.php" style="color:dodgerblue"> Signup Here</a>.</center></p>
   
    <hr>
   
        <label for="name"><b>Username</b></label><br>
        <input type="text" placeholder="Enter your username" name="username" required><br>
        <!-- <label for="email"><b>Email</b></label><br>
        <input type="text" placeholder="Enter Email" name="email" required><br> -->
        <label for="password"><b>Password</b></label><br>
        <input type="password" placeholder="Enter Password" name="password" required><br>


        <!-- <label for="cpassword"><b>Repeat Password</b></label><br>
        <input type="password" placeholder="Repeat Password" name="cpassword" required><br>
         -->
        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me</label>
        
        

    <div class="clearfix">
        
      
      <button type="submit" class="signupbtn">Login</button>
    </div>
  </div>

</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>