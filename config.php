<?php function head($page){ ?>
<title>Travel Nevada &bull; A World Within, A State Apart</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="../js/jquery.backstretch.min.js"></script>
<script src="../js/jquery.quovolver.min.js"></script>
<script src="../js/jquery.fancybox.js"></script>
<script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
<?php } function myheader($page){ ?>
<header class="header_one <?php if($page!="home"){ echo "else_header"; } ?>">
  <article class="clear"> <a href="../" class="logo"><img src="../img/logo.png"></a>
    <nav>
      <ul>
        <li><a href="../things-to-do"><span class="fa fa-caret-right"></span>Things to do</a></li>
        <li class="trigger">
         <a href="#"><span class="fa fa-caret-right"></span>Maps</a>
         <ul>
          <li><a target="_blank" href="http://www.renotahoe.com/images/pdfs/area_map.pdf">Reno Tahoe</a></li>
          <li><a target="_blank" href="http://www.visitvirginiacitynv.com/images/pdfs/restaurant_map.pdf">Virginia City</a></li>
          <li><a target="_blank" href="http://www.renotahoe.com/images/pdfs/state_map.pdf">Nevada state map</a></li>
          <li><a target="_blank" href="http://ponyexpressnevada.com/wp-content/uploads/2015/08/Territories-Map.pdf">Nevada territory map</a></li>
          <li><a target="_blank" href="http://www.exploreelko.com/recreation/maps/index.php">Elko</a></li>
         </ul>
        </li>
        <li><a href="../itineraries"><span class="fa fa-caret-right"></span>Itineraries</a></li>
        <li class="trigger"> 
         <a href="#"><span class="fa fa-caret-right"></span>Accommodation</a>
         <ul>
          <li><a target="_blank" href="https://www.visitrenotahoe.com/reno-tahoe/accommodations?command=hotel&cities=nlt">Lake Tahoe</a></li>
          <li><a target="_blank" href="https://www.visitrenotahoe.com/reno-tahoe/accommodations?command=aaa&cities=reno">Reno </a></li>
          <li><a target="_blank" href="http://travelnevada.com/places-to-stay?region=northern&city=&lodging-type=hotels-motels%2Chouse-boats">Elko </a></li>
         </ul>
        </li>
        <li class="trigger"><a href="#"><span class="fa fa-caret-right"></span>Outdoors</a>
         <ul>
          <li><a target="_blank" href="http://parks.nv.gov/parks/parks-by-name/">State Parks</a></li>
          <li><a target="_blank" href="http://www.nps.gov/state/nv/index.htm">National Parks </a></li>
          <li><a target="_blank" href="https://issuu.com/nevadamagazine/docs/2015nevada_rides_guide">Rides Guide </a></li>
         </ul>
        </li>
        <li><a href="../gallery"><span class="fa fa-caret-right"></span>Gallery</a></li>
        <li><a href="http://travelnevada.com/google-trekker" target="_blank"><span class="fa fa-caret-right"></span>Google Trekker</a></li>
        <li><a href="../contact"><span class="fa fa-caret-right"></span>Contact</a></li>
      </ul>
    </nav>
  </article>
</header>
<script>
	$(".trigger").hover(function(){
		$(this).children("ul").stop().slideToggle("slow");	
	});	 
</script> 
<?php if($page!="home" && $page!="maps"){ ?>
<section id="slider">
 <ul>
  <li><img src="../img/<?php echo $page; ?>-1.jpg"></li>
  <li><img src="../img/<?php echo $page; ?>-2.jpg"></li>
  <li><img src="../img/<?php echo $page; ?>-3.jpg"></li>
 </ul>
</section>
<script>$(document).ready(function(){
  $('#slider ul').bxSlider({mode:'fade', pager:false});
});</script> 
<?php }if($page!="home" && $page=="maps"){ ?>
<iframe frameborder="0" width="100%" height="400" style="border: 0" src="https://maps.google.com/maps?layer=c&panoid=GRaQwn46app6lciAxD25TQ&ie=UTF8&source=embed&output=svembed&cbp=13%2C106%2C%2C0.08000000000000007%2C-6.4" allowfullscreen=true></iframe>
<?php } ?>
<?php } function foot($page) { ?>
<footer class="<?php if($page=="home"){ echo "home_footer"; }else{ echo "else_footer"; } ?>">
  <article class="clear">
    <div>2016 &copy; Travel Nevada. All rights reserved.</div>
    <ul>
      <li>Follow us on</li>
      <li><a href=""><span class="fa fa-facebook"></span></a></li>
      <li><a href=""><span class="fa fa-twitter"></span></a></li>
      <li><a href=""><span class="fa fa-google-plus"></span></a></li>
    </ul>
  </article>
</footer>
<script>
$(".header_one nav li a").hover(function(){
	$(this).children("span").toggleClass("fa-rotate-90");
});
</script>
<?php } ?>