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
	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
                <li class="has-sub active"><a href="javascript:;" class=""><span class="icon-box"><i class="icon-globe"></i></span> WAP <span class="arrow"></span></a>
                    <ul class="sub">
                        <li class="active"><a class="" href="./dashboard.php"><i class="icon-user"></i> Subscription</a></li>
                    </ul>
					<ul class="sub">
                        <li class=""><a class="" href="./dashboard_charge.php"><i class="icon-calendar"></i> Charging</a></li>
                    </ul>
                </li>  
				<li class="has-sub"><a href="javascript:;" class=""><span class="icon-box"><i class="icon-envelope"></i></span> GRAPH <span class="arrow"></span></a>
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
								<h4><i class="icon-reorder"></i>WAP Subscription</h4>
								<span class="tools">
								   <a href="javascript:;" class="icon-chevron-down"></a>
								   <a href="javascript:;" class="icon-remove"></a>
								</span>
							</div>
								
								<?php include 'header.php'; ?>
								<div class="container" align="center">
									<div style="border-style: solid; border-color: green; width:900px;">
									<h3 >Please Select a Your Option. </h3>
									<form action="" method="POST">
											Campaign Grameenphone<div style="border-style: solid; border-color: green; width:300px;">
												<input  align="left" type="submit" class="<?php if(isset($_POST['gpkm'])) echo "btn btn-success"; else echo "btn btn-info"?>"  name="gpkm" value="KM">
												<input type="submit" class="<?php if(isset($_POST['gpmad'])) echo "btn btn-success"; else echo "btn btn-info"?>"  name="gpmad" value="MAD">
												<input type="submit" class="<?php if(isset($_POST['gpmsu'])) echo "btn btn-success"; else echo "btn btn-info"?>" name="gpmsu" value="MSU">
											</div></br>
											Campaign Banglalink<div style="border-style: solid; border-color: green; width:300px;">
												<input  align="left" type="submit" class="<?php if(isset($_POST['blkm'])) echo "btn btn-success"; else echo "btn btn-info"?>" name="blkm" value="KM">
												<input type="submit" class="<?php if(isset($_POST['blmad'])) echo "btn btn-success"; else echo "btn btn-info"?>" name="blmad" value="MAD">
												<input type="submit" class="<?php if(isset($_POST['blmsu'])) echo "btn btn-success"; else echo "btn btn-info"?>" name="blmsu" value="MSU">
											</div>
									</form>	
									</div>
									
								</div>

								<div id="chartContainer"></div>
								<?php
									if(isset($_POST['gpkm'])){
										function datapoints1(){
											$conn = new mysqli("localhost", "root", "", "report");
											$sql="SELECT substr(date,-5) as date,chl from gpcamp where partner='KM'";
											$result = mysqli_query($conn,$sql);
											if ($result->num_rows > 0) {
											   while($row = $result->fetch_assoc()) {
													$x[]=$row['date'];
													$y[]=$row['chl'];
												} 
											}
											return array($x,$y);
										}
										$datapoints=datapoints1();
										$x=$datapoints[0];
										$y=$datapoints[1];
										for($i=0;$i<=2;$i++){
											$dataPoints[] = array("label" => $x[$i], "y" => $y[$i]);
										}
										
										function datapoints2(){
											$conn = new mysqli("localhost", "root", "", "report");
											$sql="SELECT substr(date,-5) as date,camp from gpcamp where partner='KM'";
											$result = mysqli_query($conn,$sql);
											if ($result->num_rows > 0) {
											   while($row = $result->fetch_assoc()) {
													$x[]=$row['date'];
													$y[]=$row['camp'];
												} 
											}
											return array($x,$y);
										}
										$datapoints=datapoints2();
										$x=$datapoints[0];
										$y=$datapoints[1];
										for($i=0;$i<=2;$i++){
											$dataPoints1[] = array("label" => $x[$i], "y" => $y[$i]);
										}
										$partner="Grameenphone KM";
									}
									if(isset($_POST['gpmad'])){
										function datapoints1(){
											$conn = new mysqli("localhost", "root", "", "report");
											$sql="SELECT substr(date,-5) as date,chl from gpcamp where partner='MAD'";
											$result = mysqli_query($conn,$sql);
											if ($result->num_rows > 0) {
											   while($row = $result->fetch_assoc()) {
													$x[]=$row['date'];
													$y[]=$row['chl'];
												} 
											}
											return array($x,$y);
										}
										$datapoints=datapoints1();
										$x=$datapoints[0];
										$y=$datapoints[1];
										for($i=0;$i<=2;$i++){
											$dataPoints[] = array("label" => $x[$i], "y" => $y[$i]);
										}
										
										function datapoints2(){
											$conn = new mysqli("localhost", "root", "", "report");
											$sql="SELECT substr(date,-5) as date,camp from gpcamp where partner='MAD'";
											$result = mysqli_query($conn,$sql);
											if ($result->num_rows > 0) {
											   while($row = $result->fetch_assoc()) {
													$x[]=$row['date'];
													$y[]=$row['camp'];
												} 
											}
											return array($x,$y);
										}
										$datapoints=datapoints2();
										$x=$datapoints[0];
										$y=$datapoints[1];
										for($i=0;$i<=2;$i++){
											$dataPoints1[] = array("label" => $x[$i], "y" => $y[$i]);
										}
										$partner="Grameenphone MAD";
									}
									if(isset($_POST['gpmsu'])){
										function datapoints1(){
											$conn = new mysqli("localhost", "root", "", "report");
											$sql="SELECT substr(date,-5) as date,chl from gpcamp where partner='msu'";
											$result = mysqli_query($conn,$sql);
											if ($result->num_rows > 0) {
											   while($row = $result->fetch_assoc()) {
													$x[]=$row['date'];
													$y[]=$row['chl'];
												} 
											}
											return array($x,$y);
										}
										$datapoints=datapoints1();
										$x=$datapoints[0];
										$y=$datapoints[1];
										for($i=0;$i<=2;$i++){
											$dataPoints[] = array("label" => $x[$i], "y" => $y[$i]);
										}
										
										function datapoints2(){
											$conn = new mysqli("localhost", "root", "", "report");
											$sql="SELECT substr(date,-5) as date,camp from gpcamp where partner='msu'";
											$result = mysqli_query($conn,$sql);
											if ($result->num_rows > 0) {
											   while($row = $result->fetch_assoc()) {
													$x[]=$row['date'];
													$y[]=$row['camp'];
												} 
											}
											return array($x,$y);
										}
										$datapoints=datapoints2();
										$x=$datapoints[0];
										$y=$datapoints[1];
										for($i=0;$i<=2;$i++){
											$dataPoints1[] = array("label" => $x[$i], "y" => $y[$i]);
										}
										$partner="Grameenphone MSU";
									}
									if(isset($_POST['blkm'])){
										function datapoints1(){
											$conn = new mysqli("localhost", "root", "", "report");
											$sql="SELECT substr(date,-5) as date,chl from blcamp where partner='KM'";
											$result = mysqli_query($conn,$sql);
											if ($result->num_rows > 0) {
											   while($row = $result->fetch_assoc()) {
													$x[]=$row['date'];
													$y[]=$row['chl'];
												} 
											}
											return array($x,$y);
										}
										$datapoints=datapoints1();
										$x=$datapoints[0];
										$y=$datapoints[1];
										for($i=0;$i<=2;$i++){
											$dataPoints[] = array("label" => $x[$i], "y" => $y[$i]);
										}
										
										function datapoints2(){
											$conn = new mysqli("localhost", "root", "", "report");
											$sql="SELECT substr(date,-5) as date,camp from blcamp where partner='KM'";
											$result = mysqli_query($conn,$sql);
											if ($result->num_rows > 0) {
											   while($row = $result->fetch_assoc()) {
													$x[]=$row['date'];
													$y[]=$row['camp'];
												} 
											}
											return array($x,$y);
										}
										$datapoints=datapoints2();
										$x=$datapoints[0];
										$y=$datapoints[1];
										for($i=0;$i<=2;$i++){
											$dataPoints1[] = array("label" => $x[$i], "y" => $y[$i]);
										}
										$partner="Banglalink KM";
									}
									if(isset($_POST['blmad'])){
										function datapoints1(){
											$conn = new mysqli("localhost", "root", "", "report");
											$sql="SELECT substr(date,-5) as date,chl from blcamp where partner='MAD'";
											$result = mysqli_query($conn,$sql);
											if ($result->num_rows > 0) {
											   while($row = $result->fetch_assoc()) {
													$x[]=$row['date'];
													$y[]=$row['chl'];
												} 
											}
											return array($x,$y);
										}
										$datapoints=datapoints1();
										$x=$datapoints[0];
										$y=$datapoints[1];
										for($i=0;$i<=2;$i++){
											$dataPoints[] = array("label" => $x[$i], "y" => $y[$i]);
										}
										
										function datapoints2(){
											$conn = new mysqli("localhost", "root", "", "report");
											$sql="SELECT substr(date,-5) as date,camp from blcamp where partner='MAD'";
											$result = mysqli_query($conn,$sql);
											if ($result->num_rows > 0) {
											   while($row = $result->fetch_assoc()) {
													$x[]=$row['date'];
													$y[]=$row['camp'];
												} 
											}
											return array($x,$y);
										}
										$datapoints=datapoints2();
										$x=$datapoints[0];
										$y=$datapoints[1];
										for($i=0;$i<=2;$i++){
											$dataPoints1[] = array("label" => $x[$i], "y" => $y[$i]);
										}
										$partner="Banglalink MAD";
									}
									if(isset($_POST['blmsu'])){
										function datapoints1(){
											$conn = new mysqli("localhost", "root", "", "report");
											$sql="SELECT substr(date,-5) as date,chl from blcamp where partner='msu'";
											$result = mysqli_query($conn,$sql);
											if ($result->num_rows > 0) {
											   while($row = $result->fetch_assoc()) {
													$x[]=$row['date'];
													$y[]=$row['chl'];
												} 
											}
											return array($x,$y);
										}
										$datapoints=datapoints1();
										$x=$datapoints[0];
										$y=$datapoints[1];
										for($i=0;$i<=2;$i++){
											$dataPoints[] = array("label" => $x[$i], "y" => $y[$i]);
										}
										
										function datapoints2(){
											$conn = new mysqli("localhost", "root", "", "report");
											$sql="SELECT substr(date,-5) as date,camp from blcamp where partner='msu'";
											$result = mysqli_query($conn,$sql);
											if ($result->num_rows > 0) {
											   while($row = $result->fetch_assoc()) {
													$x[]=$row['date'];
													$y[]=$row['camp'];
												} 
											}
											return array($x,$y);
										}
										$datapoints=datapoints2();
										$x=$datapoints[0];
										$y=$datapoints[1];
										for($i=0;$i<=2;$i++){
											$dataPoints1[] = array("label" => $x[$i], "y" => $y[$i]);
										}
										$partner="Banglalink MSU";
									}
								?>
									
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
<script type="text/javascript">

    $(function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Campaign  Report of <?php echo $partner;?>."
            },
            animationEnabled: true,
			zoomEnabled: true,
            toolTip: {
                shared: true,
                content: function (e) {
                    var body;
                    var head;
                    head = "<span style = 'color:DodgerBlue; '><strong>" + (e.entries[0].dataPoint.x) + " </strong></span><br/>";

                    body = "<span style= 'color:" + e.entries[0].dataSeries.color + "'> " + e.entries[0].dataSeries.name + "</span>: <strong>" + e.entries[0].dataPoint.y + "</strong>  <br/> <span style= 'color:" + e.entries[1].dataSeries.color + "'> " + e.entries[1].dataSeries.name + "</span>: <strong>" + e.entries[1].dataPoint.y + "</strong>  ";

                    return (head.concat(body)); 
                }
            },
            axisY: {
                title: "CHL",
                includeZero: false,
                lineColor: "#369EAD"
            },
            axisY2: {
                title: "Campaign",
                includeZero: false,
                lineColor: "#C24642"
            },
            axisX: {
                title: "Date",
            },
            data: [
            {
                type: "spline",
                name: "CHL",
				showInLegend: true,
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            },
            {
                type: "spline",
                name: "Campaign",
				showInLegend: true,
                dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
            }
            ]
        });

        chart.render();
    });
</script>
