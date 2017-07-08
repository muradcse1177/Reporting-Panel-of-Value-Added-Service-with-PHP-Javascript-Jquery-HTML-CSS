<?php
$imagesDir = 'img/';

$images = glob($imagesDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

$randomImage = $images[array_rand($images)];

?>





<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<style>
		img {
			width: 85%;
			height: 70%;
		}
		</style>
	</head>
	<body>		
		<div style="text-align:center; position:fixed; height: 100%; width: 100%; top:0;left:0;right:0; bottom:0; background-color:black;">
			<p style="color:white;">Free Download 2 contents daily @ 2.44 Tk subscription fee (Autorenew)</p>
			<a href="http://192.168.5.82:8080/SmWapSite/subscribe/serviceid/104650?CpUrl=http://wap.chl-bd.com/campaign_gp.php?reply_kp=">						
				<img src="<?php echo $randomImage;?>" style="height: 60%; width: 70%; max-height: 640px; max-width: 480px; "/>	<br/>		
			</a>
<pre style="color:white; text-align:center">Name: Mixed Models Video.
Price: 0.0 tk.
Category: Video.
Data browsing charge applicable
This cycle will continue till deactivation by user.</pre>
			<p align="center" style="font-size:17px; background-color:black; font-weight:bold;"><a href="index" style="color:white;">Home</a></p>
			 <!-- <p style="background-color:grey; font-color:white;"> <b>To stop send STOP WP to 16437</b></p>		 -->
		</div>
	</body>
</html>

<!--Detect visitor's device and save to visitor counter-->
<script type="text/javascript" src="//wurfl.io/wurfl.js"></script>
<script type="text/javascript">
	var device = WURFL.form_factor + " | " + WURFL.complete_device_name;
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			;
			//document.getElementById("txtHint").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","ajax/savevisitorinfo.php?device="+device+"&msisdn=8801755680869&ip=182.160.118.50&page=/campaign_gp",true);
	xmlhttp.send();



</script>
