<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Calendar | Famiday - Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Famiday - Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/main.css" rel="stylesheet" type="text/css">
	<link href="assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">
	<!--[if lte IE 9]>
		<link href="assets/css/main-ie.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	
	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/kingadmin-favicon144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/kingadmin-favicon114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/kingadmin-favicon72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/ico/kingadmin-favicon57x57.png">
	<link rel="shortcut icon" href="assets/ico/favicon.png">
</head>

<body class="sidebar-fixed topnav-fixed fullcalendar">
	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
		
		<?php include("top_bar.php"); ?>
		<?php include("left_bar.php"); ?>
		
		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">

			<!-- main -->
			<div class="content">
				<div class="main-content">
					<!-- WIDGET CALENDAR -->
					<div class="widget">
						<div class="widget-header">
							<h3><i class="fa fa-calendar"></i> Calendar</h3></div>
						<div class="widget-content">
							<!-- external events -->
							<div id="external-events">
								<div class="row">
									<div class="col-md-6">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h3 class="panel-title">Create Quick Event</h3></div>
											<div class="panel-body">
												<input type="text" class="form-control" id="quick-event-name" placeholder="new event title">
												<select name="colorpicker-picker-longlist">
													<option value="#ac725e">#ac725e</option>
													<option value="#d06b64">#d06b64</option>
													<option value="#f83a22">#f83a22</option>
													<option value="#fa573c">#fa573c</option>
													<option value="#ff7537">#ff7537</option>
													<option value="#ffad46" selected="selected">#ffad46</option>
													<option value="#42d692">#42d692</option>
													<option value="#16a765">#16a765</option>
													<option value="#7bd148">#7bd148</option>
													<option value="#b3dc6c">#b3dc6c</option>
													<option value="#fbe983">#fbe983</option>
													<option value="#fad165">#fad165</option>
													<option value="#92e1c0">#92e1c0</option>
												</select>
												<button type="button" id="btn-quick-event" class="btn btn-custom-primary btn-block"><i class="fa fa-plus-square"></i> Create</button>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="panel panel-default">
											<div class="panel-heading">
												<h3 class="panel-title">Draggable Events</h3></div>
											<div class="panel-body">
												<div id="event1" class="external-event">Seminar</div>
												<div id="event2" class="external-event">Jane's Birthday</div>
												<div id="event3" class="external-event">Coffee Break</div>
												<div id="event4" class="external-event">Fitness</div>
												<div id="event5" class="external-event">Buy Some Foods</div>
												<div id="event6" class="external-event">Weekly Meeting</div>
												<div id="event7" class="external-event">Monthly Meeting</div>
												<br />
												<label class="control-inline fancy-checkbox">
													<input type="checkbox" id="drop-remove">
													<span>Remove event after drop</span>
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- end external events -->
							<div class="calendar"></div>
						</div>
					</div>
					<!-- END WIDGET CALENDAR -->
				</div>
			</div>
			<!-- /main -->
			<!-- FOOTER -->
			<footer class="footer">
				&copy; 2016 The Develovers
			</footer>
			<!-- END FOOTER -->
		</div>
		<!-- END CONTENT WRAPPER -->
	</div>
	<!-- END WRAPPER -->
	
	<!-- Javascript -->
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.js"></script>
	<script src="assets/js/plugins/modernizr/modernizr.js"></script>
	<script src="assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js"></script>
	<script src="assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/king-common.js"></script>
	<script src="demo-style-switcher/assets/js/deliswitch.js"></script>
	<script src="assets/js/jquery-ui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="assets/js/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
	<script src="assets/js/king-components.js"></script>
</body>

</html>
