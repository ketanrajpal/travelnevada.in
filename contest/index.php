<?php
ob_start();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$file = fopen('entries/'.$_POST["full_name"].'('.$_POST["phone"].').txt','w');
	$cvsData="Full Name: ".$_POST["full_name"];
	$cvsData.="\nEmail: ".$_POST["email"];
	$cvsData.="\nPhone: ".$_POST["phone"];
	$cvsData.="\nDate and Time: ".date("Y-m-d H:i:s");
	$cvsData.="\nIP Address: ".$_POST["last_login_ip"];
	$cvsData.="\n".$_POST["question_0"].": ".$_POST["answer_0"];
	$cvsData.="\n".$_POST["question_1"].": ".$_POST["answer_1"];
	$cvsData.="\n".$_POST["question_2"].": ".$_POST["answer_2"];
	$cvsData.="\n".$_POST["question_3"].": ".$_POST["answer_3"];
	$cvsData.="\n".$_POST["question_4"].": ".$_POST["answer_4"];
	fwrite($file, $cvsData);
	fclose($file);
}
$questions=array(
	"Name the capital of Nevada?",
	"Which city in Nevada is also called 'The Biggest Little City in the World'?",
	"Name a national park located in Nevada?",
	"What is the other name for Highway 50? (Hint – 4 words)",
	"Which state park&sbquo; located outside Las Vegas&sbquo; gets its name from the red sandstone formations?",
	"Name one lake in Nevada",
	"Which lake in Nevada&sbquo; when full is the largest reservoir in the United States in terms of maximum water capacity?",
	"Which town is referred to as the 'Gateway to Death Valley'?",
	"Nevada is also known as the?",
	"Name two states that share a border with Nevada?",
	"Which lake lies within the states of Nevada and California?",
	"Which river flows through the city of Reno? Hint - it is possible to do white water rafting in this river!",
	"Which desert does Las Vegas lie within?",
	"Name 2 hotels located along the Las Vegas Strip?",
	"What is the observation wheel on the Las Vegas Strip called?",
	"Name two museums in Nevada?",
	"Where in Las Vegas can one have the Fremont Experience?",
	"Where in Nevada will you find 'The Way it Was' Museum?",
	"Located in Las Vegas&sbquo; which is the tallest freestanding observation tower in the United States?",
	"Located on the border of Nevada and Arizona&sbquo; this is the largest public works project ever undertaken in the US and has a greater structural volume than the largest Egyptian pyramid. Today it is a well-known tourist site."
);
$selected_questions = array_rand($questions, 5);
?>

<!DOCTYPE HTML>
<html>
 <head>
  <title></title>
  <?php if($_SERVER['REQUEST_METHOD'] === 'POST'){ ?>
  <META http-equiv="refresh" content="5;URL=http://www.trade.travelnevada.in">
  <?php } ?>
  <script src="jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="jquery.backstretch.min.js"></script>
  <style>
   label{
	   cursor:pointer;
	   margin-top:20px;
   }
   .container{
	   padding:20px;
	   background-color:rgba(255,255,255,0.9);
	   border-radius:5px;
	   box-shadow:0px 0px 4px #000;
	   margin:20px auto;
   }
   
  </style>
 </head>
 <body>
  
  <section class="container">
  <div class="col-md-12">
   <h1>Travel Nevada Contest</h1>
   </div>
  <?php if($_SERVER['REQUEST_METHOD'] === 'POST'){ ?>
  <p>Thankyou for the answers. We will get back to you shortly. You will be redirected to the website.</p>
  <?php } else { ?>
  <form name="myform" id="myform" method="post" class="">
  <div class="col-md-4">
   <fieldset class="input-group">
    <label for="full_name">Full Name</label>
    <input type="text" id="full_name" name="full_name" class="form-control" autocomplete="off" required>
   </fieldset>
   </div>
   <div class="col-md-4">
   <fieldset class="input-group">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" class="form-control" autocomplete="off" required>
   </fieldset>
   </div>
   <div class="col-md-4">
   <fieldset class="input-group">
    <label for="phone">Phone</label>
    <input type="number" id="phone" name="phone" class="form-control" autocomplete="off" required>
   </fieldset>
   </div>
   
   <?php for($i=0;$i<5;$i++){ ?>
   
   <div class="col-md-12">
   <fieldset class="input-group">
    <label for="answer_<?php echo $i; ?>"><?php echo $questions[$selected_questions[$i]]; ?></label>
    <input type="hidden" id="question_<?php echo $i; ?>" name="question_<?php echo $i; ?>" value="<?php echo $questions[$selected_questions[$i]]; ?>">
    <textarea id="answer_<?php echo $i; ?>" name="answer_<?php echo $i; ?>" class="form-control"></textarea>
   </fieldset>
   </div>
   
   <?php } ?>
   <input type="hidden" id="last_login_ip" name="last_login_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
   <br><br>
   <div class="col-md-12"><br><br>
    <fieldset class="input-group"><input type="submit" class="btn btn-primary"></fieldset>
   </div>
   
  </form>
  <?php } ?>
  </section>
  
  <script>$.backstretch(["slide-1.jpg","slide-2.jpg","slide-3.jpg"], {duration: 5000, fade: 750});</script>
  
 </body>
</html>