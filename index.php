<?php
ob_start();
$page="home";
require_once 'config.php';
?>
<!DOCTYPE HTML>
<html>
<head><?php head($page); ?></head>
<body>
<?php myheader($page); ?>
<section class="blockquote">
  <article>
        <h1>A World Within, A State Apart . . .</h1><br>
        <h2>Explore a world of adventure in Nevada and go home with more stories than souvenirs.  Discover Nevada's many things to do, places to go and places to stay.</h2>
  </article>
</section>
<?php foot($page); ?>
<script>$.backstretch(["img/home-1.jpg", "img/home-2.jpg", "img/home-3.jpg", "img/home-4.jpg"],{duration: 3000, fade: 750});</script>
</body>
</html>