<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Domotiikka</title>
  <script type="text/javascript" src="mScript.js"></script>
</head>
<body>

<font size="5">
<p>Hello, this is the basic GPIO function!</p>
<p>Connect the pin 5 from your RaspberryPi to a led to test it!</p>
<p><font color="red">Warning: </font> Remember to use an appropiate resistance while working with leds.</p>
</font>
	
<form id="pin" action="domotiikka.php" method="GET">
    <input type="button" id="sendOn" style="border:2px solid #7DD4FF; font-size:50px;" value="On" onClick="pinOn()"/>
    <input type="button" id="sendOff" style="border:2px solid #7DD4FF; font-size:50px;" value="Off" onClick="pinOff()"/>
	<input type="hidden" name="pin" id="now" value="">
</form>

<?php

	exec("gpio -g mode 5 out");
	$state = $_GET["now"];
	  
	if ($state == "on"){
		exec("gpio -g write 5 1");
	}
	if ($state == "off"){
		exec("gpio -g write 5 0");
	}
	
?>

</body>
