<?php
session_start();
if(!isset($_SESSION['user-logged-in'])){
  header('location:login-page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Music Player</title>
<!--   <link rel="stylesheet" href="index.css">
 -->  <link rel="stylesheet" type="text/css" href="tonado.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
  <div class="sidebar">
	<header class="main-header">
    <a href="" class="brand-logo">
      <div class="main-logo"></div>
    </a>
    <div class="profile">
      <h3 class="button" > <a href="logout.php">Log out</a></h3>
    </div>

 </header>
 <div class="items">
   <ul>
     <li>Your Library</li>
     <li>Liked Songs</li>
     <li>Playlist</li>
     <li>Artists</li>
     <li>Albums</li>
   </ul>
 </div>
</div>
<div class="display">Have <p class="style">Fun</p></div>
  <div class="wrapper">
    <div class="song-bar">
      <div class="img-area">
        <img src="" alt="">
      </div>
      <div class="song-details">
        <p class="name"></p>
        <p class="artist"></p>
      </div>
      <div class="progress-area">
        <div class="progress-bar">
          <audio id="main-audio" src=""></audio>
        </div>
        <div class="song-timer">
          <span class="current-time">0:00</span>
          <span class="max-duration">0:00</span>
        </div>
      </div>
      <div class="controls">
        <i id="repeat-plist" class="material-icons" title="Playlist looped">repeat</i>
        <i id="prev" class="material-icons">skip_previous</i>
        <div class="play-pause">
          <i class="material-icons play">play_arrow</i>
        </div>
        <i id="next" class="material-icons">skip_next</i>
        <i id="more-music" class="material-icons">queue_music</i>
      </div>
      <div class="music-list">
        <div class="header">
          <div class="row">
            <i class= "list material-icons">queue_music</i>
            <span>Music list</span>
          </div>  
          <i id="close" class="material-icons">close</i>
        </div>
        <ul>
          <!-- here li list are coming from js -->
        </ul>
      </div>
    </div>
</div>

  <script src="music-list.js"></script>
  <script src="script.js"></script>

</body>
</html>
