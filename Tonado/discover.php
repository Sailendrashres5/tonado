<?php
session_start();
if (isset($_SESSION['user-logged-in'])) {
  header('location:tonado.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Discover
  </title>
  <!-- <link rel="stylesheet" type="text/css" href="discover.css"> -->
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>
  <header class="main-header">
    <a href="index.php" class="brand-logo">
      <div class="main-logo"></div>
    </a>
    <nav class="main-nav">
      <ul>
          <li><div class="discover"><a href="discover.html">Discover</a></div></li>
          <div class="join">
              <li><a href="join.html">Join</a></li>
          </div>
      </ul>
    </nav>
  </header>
   <section class="main-section">
      <div class="call-to-action">
        <h1 class="title">Discover new music</h1>
        <div class="icons">
          <a href="join.html">
            <div class="icon">
              <img src="images/microphone.svg">
              Charts
            </div>
          </a>
          <a href="join.html">
            <div class="icon">
              <img src="images/albums.svg">
              Albums
            </div>
          </a>
          <a href="join.html">
            <div class="icon">
              <img src="images/more.svg">
              More
            </div>
          </a>
        </div>

        <p class="subtitle">
        By joining you can benefit by listening to the latest albums released.
        </p>
        </div>
        
      <img class="covers-image" src="images/covers.png" height="600px" width="600px">
    </section>
  </div>
   <footer class="footer">
        <div class="content">
            <ul class="right-list">
              <a href="https://www.facebook.com/sailendra.shrestha.967/about"><li>About Us</li></a>
              <a href="tel:9849561210"><li>Contact</li></a>
            </ul>
            <ul class="left-list">
            <a href="https://twitter.com/SailendraShres5"><li>Twitter</li></a>
            <a href="https://www.facebook.com/sailendra.shrestha.967"><li>Facebook</li></a>
            </ul>
        </div>
    </footer>

</body>
</html>