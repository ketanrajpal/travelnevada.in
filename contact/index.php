<?php
ob_start();
$page="contact";
require_once '../config.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$file = fopen('lead.csv','a');
	$cvsData="'".htmlspecialchars($_POST["name"])."','".htmlspecialchars($_POST["email"])."','".htmlspecialchars($_POST["phone"])."','".htmlspecialchars($_POST["message"])."','".htmlspecialchars($_SERVER['REMOTE_ADDR'])."'\n";
	fwrite($file,$cvsData);
	fclose($file);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<?php head($page); ?>
</head>
<body>
<?php myheader($page); ?>
<section id="content" class="enquiry">
  <h1>Contact</h1>
  <p>You can write to us regarding any queries you may have regarding the services. You are also welcome to provide us with your valuable Feedback. We will respond to you within 24 hours' time. You can also send an email to Varuni Sakhalkar, Account Manager (<a href="mailto:vsakhalkar@sarthaglobal.com">vsakhalkar@sarthaglobal.com</a>) or Sheema Vohra, Managing Director (<a href="mailto:svohra@sarthaglobal.com">svohra@sarthaglobal.com</a>)</p>
  <form name="myform" class="form" method="post" onSubmit="return alert('Thankyou for your enquiry. We will get back to as soon as possible.');">
    <article>
      <fieldset>
        <input type="text" id="name" name="name" required placeholder="Enter your Full Name">
      </fieldset>
    </article>
    <article>
      <fieldset>
        <input type="text" id="email" name="email" required placeholder="Enter your Email Address">
      </fieldset>
    </article>
    <article>
      <fieldset>
        <input type="text" id="phone" name="phone" required placeholder="Enter your Phone Number">
      </fieldset>
    </article>
    <div class="clear"></div>
    <fieldset style="width:95%;">
      <input type="text" id="message" name="message" required placeholder="Enter your message here">
    </fieldset>
    <br>
    <br>
    <fieldset>
      <input type="submit">
    </fieldset>
  </form>
</section>
<?php foot($page); ?>
</body>
</html>