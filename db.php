<?php
$user = 'root';
$pass = '';
$server = 'localhost';
$dbh = new PDO( "mysql:host=$server", $user, $pass );
$dbs = $dbh->query( 'SHOW DATABASES' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Content House</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="icon" type="image/ico" href="../images/favicon.ico">
  <meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="./assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="./assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="./css/style.min.css" rel="stylesheet" />
<link href="./css/style_responsive.css" rel="stylesheet" />
<link href="./css/style_default.css" rel="stylesheet" id="style_color" />
<link href="./assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="./assets/uniform/css/uniform.default.css" />
<link href="./assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
<link href="./assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  	
</head>

<body class="fixed-top">
    <div id="header" class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="brand" href="./index.php"><img src="./img/logo.png" alt="Admin Lab" /></a>
				<a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="arrow"></span></a>
                <div id="top_menu" class="nav notify-row">
                    <ul class="nav top-menu">
                        <li class="dropdown"><a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Settings"><i class="icon-cog"></i></a></li>
                        <li class="dropdown" id="header_inbox_bar"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-alt"></i><span class="badge badge-important">5</span></a>
                            <ul class="dropdown-menu extended inbox">
                                <li>
                                    <p>You have 5 new messages</p>
                                </li>
                                <li><a href="#"><span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span><span class="subject"><span class="from">Dulal Khan</span><span class="time">Just now</span></span><span class="message"> Hello, this is an example messages please check </span></a></li>
                                <li><a href="#"><span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span><span class="subject"><span class="from">Rafiqul Islam</span><span class="time">10 mins</span></span><span class="message"> Hi, Mosaddek Bhai how are you ? </span></a></li>
                                <li><a href="#"><span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span><span class="subject"><span class="from">Sumon Ahmed</span><span class="time">3 hrs</span></span><span class="message"> This is awesome dashboard templates </span></a></li>
                                <li><a href="#"><span class="photo"><img src="./img/avatar-mini.png" alt="avatar" /></span><span class="subject"><span class="from">Dulal Khan</span><span class="time">Just now</span></span><span class="message"> Hello, this is an example messages please check </span></a></li>
                                <li><a href="#">See all messages</a></li>
                            </ul>
                        </li>                        
                    </ul>
                </div>
                <div class="top-nav ">
                    <ul class="nav pull-right top-menu">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="./img/avatar1_small.jpg" alt="" /><span class="username">Syed Muradul Islam</span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="./logout.php"><i class="icon-key"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>    <div id="container" class="row-fluid">
        <div id="sidebar" class="nav-collapse collapse">
            <div class="sidebar-toggler hidden-phone"></div>
            <div class="navbar-inverse">
                <form class="navbar-search visible-phone" />
                <input type="text" class="search-query" placeholder="Search" />
                </form>
            </div>
            <ul class="sidebar-menu">
                <li class="has-sub active"><a href="javascript:;" class=""><span class="icon-box"><i class="icon-globe"></i></span> Table Data <span class="arrow"></span></a>
                    <ul class="sub">
                        <li class="active"><a class="" href="./dashboard.php"><i class="icon-calendar"></i> Today's report</a></li>
                    </ul>
					<ul class="sub">
                        <li class=""><a class="" href="./dashboard_central.php"><i class="icon-user"></i> Previous Report</a></li>
                    </ul>
                </li>  
				<li class="has-sub"><a href="javascript:;" class=""><span class="icon-box"><i class="icon-envelope"></i></span> Graph <span class="arrow"></span></a>
					<ul class="sub">   
						<li class=""><a class="" href="./subs.php"><i class="icon-calendar"></i>Subscription</a></li>
						<li class=""><a class="" href="./campaign.php"><i class="icon-calendar"></i>Campaign</a></li>
						<li class=""><a class="" href="./revenue.php"><i class="icon-calendar"></i>Revenue</a></li>
						<li class=""><a class="" href="./visitors.php"><i class="icon-calendar"></i>Visitors</a></li>
                    </ul>
                </li>				
            </ul>
        </div>
        <div id="main-content">
            <div class="container-fluid">   
				<div class="row-fluid">
					<div class="span12">
						<div class="widget">
							<div class="widget-title">
								<h4><i class="icon-reorder"></i>Campaign report | Today's report </h4>
								<span class="tools">
												   <a href="javascript:;" class="icon-chevron-down"></a>
												   <a href="javascript:;" class="icon-remove"></a>
												</span>
							</div>
							<div class="widget-body form">
								<form action="" method="POST" enctype="multipart/form-data" class="form-horizontal"> 	
									<div class="control-group">
										<label class="control-label">Campaign partner *</label>
										<div class="controls">
											<select class="span3" id="campaign" name="campaign" tabindex="1" required="" style="width: 220px;">		
											<?php		
												while(( $db = $dbs->fetchColumn( 0 ) )!== false){
													?> <option value="<?php echo $db;?>" > <?php echo $db;?> </option>
													<?php
												}
											
											?>						
												
											</select>
										</div>
									</div>								
									<div class="control-group">
										<label class="control-label">Operator *</label>
										<div class="controls">
											<select class="span3" id="operator" name="operator" tabindex="1" required="" style="width: 220px;">																																															<option value="GrameenPhone" selected >GrameenPhone </option>
																		
												<option value="Banglalink"   >Banglalink </option>
												<option value="Teletalk"   >Teletalk</option>
												<option value="Airtel"   >Airtel</option>
												<option value="Robi"   >Robi </option>
												<option value="Citycell"  >Citycell</option>
											</select>
										</div>
									</div>										
									<div class="controls">
										<input type="submit" value="Check" name="camp_report" class="btn btn-success" tabindex="6">	
										<a href="/report" class="btn btn-default">Cancel</a>
									</div>			
									
								</form>
								<!-- END FORM active subscribers form-->
								
								<!-- Grid view table-->
								<br/>
								<div class="panel-body">

								</div>
								
								<!-- end of Grid view table-->
							</div>
						</div>
					</div>
                </div>

            </div>
        </div>
    </div>

    <div id="footer"> &copy; Content House 2015 - All rights reserved.
        <div class="span pull-right"><span class="go-top"><i class="icon-arrow-up"></i></span></div>
    </div>
    <script src="./js/jquery-1.8.3.min.js"></script>
    <script src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/jquery.blockui.js"></script>
    <!--[if lt IE 9]><script src="./js/excanvas.js"></script><script src="./js/respond.js"></script><![endif]-->
    <script type="text/javascript" src="./assets/uniform/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="./assets/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="./js/jquery.pulsate.min.js"></script>
    <script src="./assets/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="./assets/jslider/js/jshashtable-2.1_src.js"></script>
    <script type="text/javascript" src="./assets/jslider/js/jquery.numberformatter-1.2.3.js"></script>
    <script type="text/javascript" src="./assets/jslider/js/tmpl.js"></script>
    <script type="text/javascript" src="./assets/jslider/js/jquery.dependClass-0.1.js"></script>
    <script type="text/javascript" src="./assets/jslider/js/draggable-0.1.js"></script>
    <script type="text/javascript" src="./assets/jslider/js/jquery.slider.js"></script>
    <script src="./js/scripts.js"></script>
	
	<!--For jquery calander -->
	<script src="./assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="./assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="./assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>    
    
	
    <script>
        jQuery(document).ready(function() {
            App.init()
        });
    </script>
</body>
</html>

<!--Show date-->
<script>     
</script>

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
	xmlhttp.open("GET","ajax/savevisitorinfo.php?device="+device+"&msisdn=<br />
<b>Notice</b>:  Undefined variable: mobile_number in <b>C:\xampp\htdocs\wap\report\dashboard.php</b> on line <b>641</b><br />
&ip=182.160.118.50&page=/report/dashboard.php",true);
	xmlhttp.send();
</script>