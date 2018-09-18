<?php
ob_start();
$page="gallery";
require_once '../config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<?php head($page); ?>
</head>
<body>
<?php myheader($page); ?>
<section id="content">
 <h1>Gallery</h1>
 <ul id="gallery" class="clear">
  <?php for($i=1;$i<=16;$i++){ ?>
   <li><a class="fancybox" rel="gallery1" href="../img/gallery/thumb_<?php echo $i; ?>.jpg"><img src="../img/gallery/thumb_<?php echo $i; ?>.jpg"></a></li>
  <?php } ?>
 </ul>
 <script>$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});</script>
</section>
<?php foot($page); ?>
</body>
</html>