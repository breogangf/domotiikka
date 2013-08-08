window.onload = function(){
	buttonOn = document.getElementById('sendOn');
	buttonOn.onClick = relayOn;
	
	buttonOff = document.getElementById('sendOff');
	buttonOff.onClick = relayOff;
}

function pinOn(){
	
	hidden = document.getElementById("now");
	hidden.value = "on";
	
	form = document.getElementById("pin");
	form.method = "GET";
	form.action = "domotiikka.php";
	form.submit();
}

function pinOff(){
	
	hidden = document.getElementById("now");
	hidden.value = "off";
	
	form = document.getElementById("pin");
	form.method = "GET";
	form.action = "domotiikka.php";
	form.submit();
}































































