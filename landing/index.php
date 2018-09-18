<?php
ob_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$file = fopen('lead.csv','a');
	$cvsData="'".htmlspecialchars($_POST["name"])."','".htmlspecialchars($_POST["email"])."','".htmlspecialchars($_POST["phone"])."','".htmlspecialchars($_POST["message"])."','".htmlspecialchars($_SERVER['REMOTE_ADDR'])."'\n";
	fwrite($file,$cvsData);
	fclose($file);
}
?><!DOCTYPE HTML>
<html>
<head>
<title>Nevada, A World Within, A State Apart</title>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script>
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
  
  $(document).ready(function(){
	  $(window).scroll(function(){
		  if ($(this).scrollTop() > 100) {
			  $('.scrollup').fadeIn();
		} else {
                $('.scrollup').fadeOut();
            }
        }); 
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
});
	</script>
</head>
<body>
<header class="header_one">
  <ul class="clear">
    <li><a href="">Nevada, A World Within, A State Apart</a></li>
    <li><a href=""><span class="fa fa-google-plus"></span></a></li>
    <li><a href=""><span class="fa fa-twitter"></span></a></li>
    <li><a href=""><span class="fa fa-facebook"></span></a></li>
    <li><a href=""><span class="fa fa-phone"></span>+91 22 2674 3276</a></li>
    <li><a href=""><span class="fa fa-envelope"></span>info@travelnevada.com</a></li>
  </ul>
</header>
<header class="header_two">
  <section class="clear"> <a href="" id="logo"> <img src="img/logo.png"> </a>
    <nav>
      <ul>
        <li><a href="#tab"><span class="fa fa-angle-down"></span>Getting <strong>There</strong></a></li>
        <li><a href="#distances"><span class="fa fa-angle-down"></span>Regional <strong>Distances</strong></a></li>
        <li><a href="#gallery"><span class="fa fa-angle-down"></span>Photo <strong>Gallery</strong></a></li>
        <li><a href="http://travelnevada.com/google-trekker" target="_blank"><span class="fa fa-angle-down"></span>Google <strong>Trekker</strong></a></li>
        <li><a href="#enquire"><span class="fa fa-angle-down"></span>Enquire <strong>Now</strong></a></li>
      </ul>
    </nav>
  </section>
</header>
<section id="slider">
  <ul>
    <li><img src="img/slide-1.jpg"></li>
    <li><img src="img/slide-2.jpg"></li>
    <li><img src="img/slide-3.jpg"></li>
  </ul>
</section>
<script>$(document).ready(function(){
  $('#slider ul').bxSlider({mode:'fade', pager:false});
});</script> 
<script>
  $(function() {
    $( "#tabs" ).tabs({heightStyle: "content"});
  });
  </script>
<section id="tab">
  <h1>Getting <strong>There</strong></h1>
  <div id="tabs">
    <ul class="clear">
      <li><a href="#us-visa"><span class="fa fa-ticket"></span>US Visa </a></li>
      <li><a href="#by-air"><span class="fa fa-plane"></span>By Air </a></li>
      <li><a href="#by-bus"><span class="fa fa-bus"></span>By Bus </a></li>
      <li><a href="#by-rail"><span class="fa fa-train"></span>By Rail </a></li>
    </ul>
    <div id="us-visa">
      <p>Generally, a citizen of a foreign country who wishes to enter the USA must first obtain a nonimmigrant visa for a temporary stay. The visa allows you to travel to the USA port of entry and request permission of the USA immigration inspector to enter the country. For general information about applying for a visitor visa, including documentation and fee requirements, please visit travel.state.gov. For information on arrival procedures in the USA, including customs requirements, please visit cbp.gov.
Applicants for visitor visas generally should apply at the nearest U.S. embassy or consulate in the country where they live. As part of the visa application process, an interview at the embassy or consulate consular section is required for visa applicants from ages 14-79, with few exceptions.</p>
    </div>
    <div id="by-air">
      <p>The main gateway cities from India to the West Coast of the USA are San Francisco, Los Angeles and Las Vegas. Reno-Tahoe International Airport and McCarran International Airport (Las Vegas) are the largest airports within Nevada, serving multiple destinations. Boulder City, North Las Vegas and Elko are smaller, regional airports with limited service. Las Vegas to Reno is the only nonstop flight instate, with many daily options.</p>
    </div>
    <div id="by-bus">
      <p>Greyhound and Megabus offer many routes across the state. Several other companies service Las Vegas from Southern California, as well.</p>
    </div>
    <div id="by-rail">
      <p>Amtrak operates one long-distance train across Nevada. The railway also crosses the Sierra Nevada Mountains and connects Reno to California by motor coach. Additionally, Amtrak operates special, seasonal trains between the San Francisco Bay Area and Reno.</p>
    </div>
  </div>
</section>
<section id="tagline" style="background-image:url(../img/tagline.jpg);">
  <article>
    <h1>Things <strong>to Do</strong></h1>
    <ul class="clear">
     <li>
      <a href="http://travelnevada.com/things-to-do?region=&city=&start-date=&end-date=&category=outdoor-recreation" target="_blank">
       <img src="img/outdoor-recreation.jpg">
       <h2>Outdoor Recreation</h2>
      </a>
     </li>
     <li>
      <a href="http://travelnevada.com/things-to-do?region=&city=&start-date=&end-date=&category=unique-nevada" target="_blank">
       <img src="img/nevada-originals.jpg">
       <h2>Nevada Originals</h2>
      </a>
     </li>
     <li>
      <a href="http://travelnevada.com/things-to-do?region=northwestern&city=&start-date=&end-date=&category" target="_blank">
       <img src="img/reno-tahoe-region.jpg">
       <h2>Reno-Tahoe Region</h2>
      </a>
     </li>
     <li>
      <a href="http://travelnevada.com/things-to-do?region=north-central&city=&start-date=&end-date=&category" target="_blank">
       <img src="img/pony-express-territory.jpg">
       <h2>Pony Express Territory</h2>
      </a>
     </li>
    </ul>
  </article>
</section>
<section id="distances">
 <h1>Regional <strong>Distances</strong></h1>
 <table class="rwd-table">
   <tr>
     <th>From</th>
     <th>To</th>
     <th>Drive Time (Hours)</thd>
     <th>Miles/Km</th>
   </tr>
   <tr>
     <td data-th="From">Grand Canyon</td>
     <td data-th="To">Las Vegas</td>
     <td data-th="Drive Time (Hours)">4.5</td>
     <td data-th="Miles/Km">275/443</td>
   </tr>
   <tr>
     <td data-th="From">Los Angeles</td>
     <td data-th="To">Las Vegas</td>
     <td data-th="Drive Time (Hours)">4</td>
     <td data-th="Miles/Km">270/435</td>
   </tr>
   <tr>
     <td data-th="From">San Diego</td>
     <td data-th="To">Las Vegas</td>
     <td data-th="Drive Time (Hours)">5</td>
     <td data-th="Miles/Km">332/534</td>
   </tr>
   <tr>
     <td data-th="From">Portland</td>
     <td data-th="To">Reno</td>
     <td data-th="Drive Time (Hours)">9.75</td>
     <td data-th="Miles/Km">578/930</td>
   </tr>
   <tr>
     <td data-th="From">Salt Lake City</td>
     <td data-th="To">Reno</td>
     <td data-th="Drive Time (Hours)">7.25</td>
     <td data-th="Miles/Km">519/835</td>
   </tr>
   <tr>
     <td data-th="From">San Francisco</td>
     <td data-th="To">Reno</td>
     <td data-th="Drive Time (Hours)">3.75</td>
     <td data-th="Miles/Km">218/351</td>
   </tr>
   <tr>
     <td data-th="From">Yosemite</td>
     <td data-th="To">Reno</td>
     <td data-th="Drive Time (Hours)">5</td>
     <td data-th="Miles/Km">218/351</td>
   </tr>
   <tr>
     <td data-th="From">Las Vegas</td>
     <td data-th="To">Reno</td>
     <td data-th="Drive Time (Hours)">7.5</td>
     <td data-th="Miles/Km">449/723</td>
   </tr>
   <tr>
     <td data-th="From">Reno</td>
     <td data-th="To">Elko</td>
     <td data-th="Drive Time (Hours)">4</td>
     <td data-th="Miles/Km">289/465</td>
   </tr>
   <tr>
     <td data-th="From">Reno</td>
     <td data-th="To">Ely</td>
     <td data-th="Drive Time (Hours)">5</td>
     <td data-th="Miles/Km">320/514</td>
   </tr>
 </table>
</section>
<section id="gallery" style="background-image:url(../img/gallery.jpg);">
 <article>
 <h1>Photo <strong>Gallery</strong></h1>
 <ul class="clear">
  <?php for($i=1;$i<=16;$i++){ ?>
   <li><a class="fancybox" rel="gallery1" href="img/gallery/thumb_<?php echo $i; ?>.jpg"><img src="img/gallery/thumb_<?php echo $i; ?>.jpg"></a></li>
  <?php } ?>
 </ul>
 <script>$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});</script></article>
</section>

<section id="enquire">
 <h1>Enquire <strong>Now</strong></h1>
 <p>You can write to us regarding any queries you may have regarding the services. You are also welcome to provide us with your valuable Feedback. We will respond to you within 24 hours' time.</p>

<form name="myform" id="myform" class="form" method="post" onSubmit="return alert('Thankyou for your enquiry. We will get back to as soon as possible.');">
<article><fieldset>
      <input type="text" id="name" name="name" required placeholder="Enter your Full Name">
          <label for="name"> Name</label>
	</fieldset></article>
    <article><fieldset>
      <input type="text" id="email" name="email" required placeholder="Enter your Email Address">
	   <label for="email">Email</label>
    </fieldset></article>
    <article><fieldset>
      <input type="text" id="phone" name="phone" required placeholder="Enter your Phone Number">
	        <label for="phone">Phone</label>
    </fieldset></article>
    <div class="clear"></div>
    <fieldset style="width:95%;">
      <input type="text" id="message" name="message" required placeholder="Enter your message here">
	      <label for="title">Message</label>
    </fieldset>
    <br><br>
    <fieldset>
    <input type="submit">
  </fieldset>
   </form>
</section>
<a href="#" class="scrollup"><span class="fa fa-chevron-up"></span></a>
</body>
</html>