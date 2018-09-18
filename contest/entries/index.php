<!DOCTYPE HTML>
<html>
 <head>
  <title></title>
 </head>
 <body onLoad="ask()">
  <ul>
<?php
if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {	
			
			if($entry=="index.php"){
			}else{
			
			?><li><a href="http://trade.travelnevada.in/contest/entries/<?php echo $entry; ?>"><?php echo $entry; ?></a></li><?php
			}
        }
    }
    closedir($handle);
}
?>
</ul>
 </body>
</html>