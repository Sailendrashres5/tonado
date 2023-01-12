<?php
session_start();
if (isset($_SESSION['user-logged-in'])) {
  header('location:tonado.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tonado</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="container">
    <header class="main-header">
        <a href="index.php" class="brand-logo">
            <div class="main-logo"></div>
        </a>
        <nav class="main-nav">
            <ul>
                <li><div class="discover"><a href="discover.php">Discover</a></div></li>
                <div class="join">
                    <li><a href="join.php">Join</a></li>
                </div>
            </ul>
        </nav>
    </header>
    <div class="main-text">
        <h1 class="title">Feel the music</h1>
    </div>
        <span class="subtitle">
            Stream your favourite music in just one click.
        </span>
    <a href="join.html">
        <button class="button">Join Now</button>
    </a>
    <div class="blue-circle"></div>
    <div class="yellow-circle"></div>
    <div class="pink-circle"></div>
</body>
</html>