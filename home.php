<?php 
$posts = [
  [
    "featured" => true,
    "tagUrl" => "#!",
    "tag" => "Photography",
    "postUrl" => "/page",
    "title" => "The Road Ahead",
    "description" => "The road ahead might be paved - it might not be.",
    "photoUrl" => "./static/img/TheRoadAhead.jpg",
    "authorUrl" => "#!",
    "authorPhoto" => "./static/img/persons/2.png",
    "authorName" => "Mat Vogels",
    "date" => "September 25, 2015",
  ],
  [
    "featured" => true,
    "tagUrl" => "#!",
    "tag" => "Adventure",
    "postUrl" => "#!",
    "title" => "From Top Down",
    "description" => "Once a year, go someplace you’ve never been before.",
    "photoUrl" => "./static/img/FromTopDown.jpg",
    "authorUrl" => "#!",
    "authorPhoto" => "./static/img/persons/1.png",
    "authorName" => "William Wong",
    "date" => "September 25, 2015",
  ],
  [
    "featured" => false,
    "postUrl" => "#!",
    "title" => "Still Standing Tall",
    "description" => "Life begins at the end of your comfort zone.",
    "photoUrl" => "./static/img/StillStandingTall.jpg",
    "authorUrl" => "#!",
    "authorPhoto" => "./static/img/persons/1.png",
    "authorName" => "William Wong",
    "date" => "9/25/2015",
  ],
  [
    "featured" => false,
    "postUrl" => "#!",
    "title" => "Sunny Side Up",
    "description" => "Life begins at the end of your comfort zone.",
    "photoUrl" => "./static/img/SunnySideUp.jpg",
    "authorUrl" => "#!",
    "authorPhoto" => "./static/img/persons/2.png",
    "authorName" => "Mat Vogels",
    "date" => "9/25/2015",
  ],
  [
    "featured" => false,
    "postUrl" => "#!",
    "title" => "Water Falls",
    "description" => "We travel not to escape life, but for life not to escape us.",
    "photoUrl" => "./static/img/WaterFalls.jpg",
    "authorUrl" => "#!",
    "authorPhoto" => "./static/img/persons/2.png",
    "authorName" => "Mat Vogels",
    "date" => "9/25/2015",
  ],
  [
    "featured" => false,
    "postUrl" => "#!",
    "title" => "Through the Mist",
    "description" => "Travel makes you see what a tiny place you occupy in the world.",
    "photoUrl" => "./static/img/ThroughtheMist.jpg",
    "authorUrl" => "#!",
    "authorPhoto" => "./static/img/persons/1.png",
    "authorName" => "William Wong",
    "date" => "9/25/2015",
  ],
  [
    "featured" => false,
    "postUrl" => "#!",
    "title" => "Awaken Early",
    "description" => "Not all those who wander are lost.",
    "photoUrl" => "./static/img/AwakenEarly.jpg",
    "authorUrl" => "#!",
    "authorPhoto" => "./static/img/persons/2.png",
    "authorName" => "Mat Vogels",
    "date" => "9/25/2015",
  ],
  [
    "featured" => false,
    "postUrl" => "#!",
    "title" => "Try it Always",
    "description" => "The world is a book, and those who do not travel read only one page.",
    "photoUrl" => "./static/img/TryitAlways.jpg",
    "authorUrl" => "#!",
    "authorPhoto" => "./static/img/persons/2.png",
    "authorName" => "Mat Vogels",
    "date" => "9/25/2015",
  ],
]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Escape | Home</title>
  <link rel="stylesheet" href="https://4ntonyuk.github.io/styles/reset.css">
  <link rel="stylesheet" href="./static/css/font.css">
  <link rel="stylesheet" href="./static/css/style.css">
</head>
<body>
  <header class="header">
    <div class="container wrapper">
      <a href="/home" class="wrapper__logo">
        <img src="./static/img/logo-light.svg" alt="escape logo">
      </a>
        <nav class="wrapper__navigation">
          <a href="/home" class="wrapper__navigation-item">Home</a>
          <a href="#!" class="wrapper__navigation-item">Categoties</a>
          <a href="#!" class="wrapper__navigation-item">About</a>
          <a href="#!" class="wrapper__navigation-item">Contact</a>
        </nav>
    </div>
  </header>
  <div class="start">
    <div class="container">
      <div class="start__wrapper">
        <h1 class="title white-color">
          Let's do it together.
        </h1>
        <p class="start__subtitle description white-color">
          We travel the world in search of stories. Come along for the ride.
        </p>
        <a href="#!" class="start__button accent-button">View Latest Posts</a>
      </div>
    </div>
  </div>
  <div class="tags-menu container wrapper">
    <a href="#!" class="tags-menu__item">Nature</a>
    <a href="#!" class="tags-menu__item">Photography</a>
    <a href="#!" class="tags-menu__item">Relaxation</a>
    <a href="#!" class="tags-menu__item">Vacation</a>
    <a href="#!" class="tags-menu__item">Travel</a>
    <a href="#!" class="tags-menu__item">Adventure</a>
  </div>
  <div class="content">
    <div class="content__wrapper container">
      <h2 class="content__title">Featured Posts</h2>
      <div class="content__featured">
        <?php 
          foreach ($posts as $post) {
            if ($post["featured"]) include "./components/post_preview.php";
          }
        ?>
      </div>
    </div>
    <div class="content__wrapper container">
      <h2 class="content__title">Most Recent</h2>
      <div class="content__recent">
        <?php
          foreach ($posts as $post) {
            if (!$post["featured"]) include "./components/post_preview.php";
          }
        ?>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="container wrapper">
      <a href="/home" class="wrapper__logo">
        <img src="./static/img/logo-light.svg" alt="escape logo">
      </a>
      <nav class="wrapper__navigation">
        <a href="/home" class="wrapper__navigation-item">Home</a>
        <a href="#!" class="wrapper__navigation-item">Categoties</a>
        <a href="#!" class="wrapper__navigation-item">About</a>
        <a href="#!" class="wrapper__navigation-item">Contact</a>
      </nav>
    </div>
  </footer>
</body>
</html> 