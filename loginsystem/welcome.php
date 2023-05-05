
<?php
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
  {
    header("location:login.php");
    exit;
  }

?>

<html lang="en">

<head>
    <title>Webpage Design</title>
    <link rel="stylesheet" href="welcome.css">
</head>

<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">THE VOID</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT US</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">QUIZ</a></li>
                    <li><a href="#">RESOURCES</a></li>
                    <li><a href="#">LOGOUT</a></li>
                </ul>
            </div>

        </div>
        <div class="content">
            <h1> <br><span>Personalised Care for all aspects of Mental Health and Rehab Sciences</span> <br></h1>
            <p class="par">Our mission is simple: to help you feel better, get better and stay better.
                <br> Mental Health is more than a destination. It is a process, and we are here for it
            </p>

            <button class="cn"><a href="#">JOIN US</a></button>

        </div>

    </div>
    </div>
    </div>
    </div>
    </div>
    
<div class="gallery">
  <h2>Our Gallery</h2>
  <div class="gallery-images">
    <img src="1.jpeg" alt="Image 1">
    <img src="2.jpeg" alt="Image 2">
    <img src="3.jpeg" alt="Image 3">
    <img src="4.jpeg" alt="Image 4">
  </div>
</div>

<div class="testimonials">
    <h2>Testimonials Says</h2>
    <div class="testimonial">
      <img src="avtar1.jpeg" alt="Avatar">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod metus mauris, sit amet pretium nibh bibendum non.</p>
      <h3>John Doe</h3>
      <h4>CEO, XYZ Corp</h4>
    </div>
    <div class="testimonial">
      <img src="avtar2.jpeg" alt="Avatar">
      <p>Proin vel mi pulvinar, feugiat eros non, imperdiet felis. Maecenas vestibulum enim vel semper molestie.</p>
      <h3>Jane Doe</h3>
      <h4>CTO, ABC Inc</h4>
    </div>
  </div>
  

<footer>
  <div class="footer-container">
    <div class="footer-column">
      <h3>About Us</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod eros vitae justo volutpat, vel blandit tortor semper.</p>
    </div>
    <div class="footer-column">
      <h3>Useful Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
    
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <div class="footer-column">
      <h3>Contact Us</h3>
      <p>123 Main Street<br>City, State 12345<br>Phone: (123) 456-7890<br>Email: info@example.com</p>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2023 Company Name. All rights reserved.</p>
  </div>
</footer>


    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>