<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Tasker</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,300,700'>
<link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'><link rel="stylesheet" href="./tasker.css">

</head>
<body>
<div class="mobile-wrap">
	<div class="mobile clearfix">
		<div class="header">
			<span class="ion-ios-navicon pull-left"><i></i></span>
			<span class="title">Home</span>
			<span class="ion-ios-search pull-right"></span>
			<div class="search">
			<form method="post">
				<input type="search" placeholder="Search Here">
			</form>
			</div>
		</div>
		<div class="sidebar">
			<div class="sidebar-overlay"></div>
			<div class="sidebar-content">
				<div class="top-head">
					<div class="name">Morara Dylan</div>
					<div class="email">contact@moraradylan2gmail.com</div>
				</div>
				<div class="nav-left">
					<a href="#home"><span class="ion-ios-home-outline"></span> Home</a>
					<a href="#alarm"><span class="ion-ios-list-outline"></span> Tasks</a>
					<a href="#compose"><span class="ion-ios-compose-outline"></span> Compose</a>
					<a href="#chats"><span class="ion-ios-chatboxes-outline"></span> Chats</a>
					<a href="#profile"><span class="ion-ios-person-outline"></span> Profile</a>
					<a href="#settings"><span class="ion-ios-gear-outline"></span> Settings</a>
					<a href="#credits"><span class="ion-ios-information-outline"></span> Credits</a>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="html search">
				<div class="title bounceInDown animated">Search Result</div>
				<p class="flipInX animated">Sorry,<br>no matches found for <b class="key"></b></p>
			</div>
			<div class="html welcome visible">
				<div class="datetime">
					<div class="day lightSpeedIn animated">Thursday</div>
					<div class="date lightSpeedIn animated">May 18, 2023</div>
					<div class="time lightSpeedIn animated">08:00 AM</div>
				</div>
			</div>
			<div class="html alarm">
				<div class="forecast clearfix">
					<div class="datetime pull-left bounceInLeft animated">
						<div class="day">Thursday</div>
						<div class="date">May 18, 2023</div>
					</div>
					<div class="temperature pull-right bounceInRight animated">
						<div class="unit"><span class="ion-ios-sunny-outline"></span> 34<i>&deg;</i></div>
						<div class="location">Nairobi, Kenya</div>
					</div>
				</div>
				<div class="alarm-list">
					<div class="note clearfix slideInRight animated">
						<div class="time pull-left">
							<div class="hour">9</div>
							<div class="shift">AM</div>
						</div>
						<div class="to-do pull-left">
							<div class="title">Finish HTML Coding</div>
							<div class="subject">Web UI</div>
						</div>
					</div>
					<div class="note clearfix slideInRight animated">
						<div class="time pull-left">
							<div class="hour">1</div>
							<div class="shift">PM</div>
						</div>
						<div class="to-do pull-left">
							<div class="title">Lunch Break</div>
							<div class="subject"></div>
						</div>
					</div>
					<div class="note clearfix slideInRight animated" data-revert="slideOutRight">
						<div class="time pull-left">
							<div class="hour">3</div>
							<div class="shift">PM</div>
						</div>
						<div class="to-do pull-left">
							<div class="title">Design Stand Up</div>
							<div class="subject">Hangouts</div>
						</div>
					</div>
				</div>
			</div>
			<div class="html compose">
                <!--php back end-->

            <!--php back end-->
				<div class="forms">
					<form method= "post" action="tasker.php">
					<div class="group clearfix slideInRight animated">
						<label class="pull-left" for="compose-time"><span class="ion-ios-time-outline"></span> Time</label>
						<input class="pull-right" id="compose-time" type="time" name="list_time">
					</div>
					<div class="group clearfix slideInLeft animated">
						<label class="pull-left" for="compose-date"><span class="ion-ios-calendar-outline"></span> Date</label>
						<input class="pull-right" id="compose-date" type="date" name="list_date">
					</div>
					<div class="group clearfix slideInRight animated">
						<label class="pull-left" for="compose-title"><span class="ion-ios-paper-outline"></span> Title</label>
						<input class="pull-right" id="compose-title" type="text" name="list_name">
					</div>
					<div class="group clearfix slideInLeft animated">
						<label class="visible" for="compose-detail"><span class="ion-ios-list-outline"></span> Task</label>
						<textarea class="visible" id="compose-detail" rows="3" name="list_decription"></textarea>
					</div>
					<div class="action flipInY animated">
						<button class="btn">Compose</button>
					</div>
				</div>
			</div>
			<div class="html chats">
				<div class="tabs-list clearfix">
					<a href="#" class="tab active">Users</a>
					<a href="#" class="tab">Messages</a>
					<a href="#" class="tab">Groups</a>
				</div>
				<div class="active-users">
					<div class="user clearfix rotateInDownLeft animated">
						<div class="photo pull-left">
							<img src="https://s3.amazonaws.com/uifaces/faces/twitter/adhamdannaway/128.jpg">
						</div>
						<div class="desc pull-left">
							<p class="name">Peter waragi</p>
							<p class="position">Web &amp; UI Designer</p>
						</div>
						<div class="idle pull-right"><span class="away"></span></div>
					</div>
					<div class="user clearfix rotateInDownRight animated">
						<div class="photo pull-left">
							<img src="https://s3.amazonaws.com/uifaces/faces/twitter/markmushiva/128.jpg">
						</div>
						<div class="desc pull-left">
							<p class="name">Jane wanje</p>
							<p class="position">Front-End Developer</p>
						</div>
						<div class="idle pull-right"><span class="offline"></span></div>
					</div>
					<div class="user clearfix rotateInDownLeft animated">
						<div class="photo pull-left">
							<img src="https://s3.amazonaws.com/uifaces/faces/twitter/scottohara/128.jpg">
						</div>
						<div class="desc pull-left">
							<p class="name">David mahali</p>
							<p class="position">Developer</p>
						</div>
						<div class="idle pull-right"><span class="away"></span></div>
					</div>
					<div class="user clearfix rotateInDownRight animated">
						<div class="photo pull-left">
							<img src="https://s3.amazonaws.com/uifaces/faces/twitter/shalt0ni/128.jpg">
						</div>
						<div class="desc pull-left">
							<p class="name">Chinku mwindi</p>
							<p class="position">Sales Manager</p>
						</div>
						<div class="idle pull-right"><span class="online"></span></div>
					</div>
					<div class="user clearfix rotateInDownLeft animated">
						<div class="photo pull-left">
							<img src="https://s3.amazonaws.com/uifaces/faces/twitter/sircookieface/128.jpg">
						</div>
						<div class="desc pull-left">
							<p class="name">Trevor Noah</p>
							<p class="position">TV personality</p>
						</div>
						<div class="idle pull-right"><span class="online"></span></div>
					</div>
					<div class="user clearfix rotateInDownRight animated">
						<div class="photo pull-left">
							<img src="https://s3.amazonaws.com/uifaces/faces/twitter/ryanmclaughlin/128.jpg">
						</div>
						<div class="desc pull-left">
							<p class="name">Theodore Clark</p>
							<p class="position">Project Manager</p>
						</div>
						<div class="idle pull-right"><span class="online"></span></div>
					</div>
				</div>
			</div>
			<div class="html settings">
				<div class="setting-list">
					<div class="gear clearfix slideInRight animated">
						<div class="title pull-left">General</div>
						<div class="action pull-right"><span class="ion-ios-arrow-right"></span></div>
					</div>
					<div class="gear clearfix slideInLeft animated">
						<div class="title pull-left"><label for="gear-notice">Notification</label></div>
						<div class="action pull-right"><input id="gear-notice" class="on-off" type="checkbox"><label for="gear-notice"></label></div>
					</div>
					<div class="gear clearfix slideInRight animated">
						<div class="title pull-left"><label for="gear-sound">Sound</label></div>
						<div class="action pull-right"><input id="gear-sound" class="on-off" type="checkbox" checked><label for="gear-sound"></label></div>
					</div>
					<div class="gear clearfix slideInLeft animated">
						<div class="title pull-left">Theme</div>
						<div class="action pull-right">Standard <span class="ion-ios-arrow-right"></span></div>
					</div>
					<div class="gear clearfix slideInRight animated">
						<div class="title pull-left">Support</div>
						<div class="action pull-right"><span class="ion-ios-arrow-right"></span></div>
					</div>
					<div class="gear clearfix slideInLeft animated">
						<div class="title pull-left">Privacy</div>
						<div class="action pull-right"><span class="ion-ios-arrow-right"></span></div>
					</div>
				</div>
			</div>
			<div class="html profile">
				<div class="photo flipInX animated">
					<img src="doom.png">
				</div>
				<div class="details">
					<p class="heading flipInY animated">
						<span class="name">Dylan Morara</span><span class="position">Web/Graphic Desiger</span>
					</p>
					<p class="text fadeInUp animated">Hi, It's me Dylan from Nairobi. I'm a web and graphics designer. Designing is my passion and I am still learning and developing my skills on graphics designing and coding. I have been working on various designing projects.</p>
				</div>
			</div>
			<div class="html credits">
				<div class="title flipInY animated">I have been using the following assets to build this design</div>
				<div class="credit-ol">
					<div class="credit-li lightSpeedIn animated"><a href="https://www.google.com/fonts/specimen/Roboto" target="_blank">roboto</a> <span>for typography</span></div>
					<div class="credit-li lightSpeedIn animated"><a href="https://jquery.com" target="_blank">jquery</a> <span>for design/ui</span></div>
					<div class="credit-li lightSpeedIn animated"><a href="http://ionicons.com/" target="_blank">ionicons</a> <span>for icons</span></div>
					<div class="credit-li lightSpeedIn animated"><a href="http://uifaces.com/authorized" target="_blank">ui faces</a> <span>for avatar</span></div>
					<div class="credit-li lightSpeedIn animated"><a href="https://daneden.github.io/animate.css/" target="_blank">animate.css</a> <span>for animation</span></div>
					<div class="credit-li lightSpeedIn animated"><a href="https://dribbble.com/shots/1928064-Secret-Project" target="_blank">concept of design</a> <span>for layout</span></div>
					<div class="credit-li lightSpeedIn animated"><a href="https://unsplash.com/photos/6asyCyR0K1Q/download" target="_blank">unsplash.com</a> <span>for background</span></div>
				</div>
				<div class="text zoomInUp animated"></div>
			</div>
		</div>
		<div class="nav">
			<a href="#profile" class="nav-item nav-count-1"><i class="ion-ios-person-outline"></i><span class="invisible">Profile</span></a>
			<a href="#compose" class="nav-item nav-count-2"><i class="ion-ios-compose-outline"></i><span class="invisible">Compose</span></a>
			<a href="#chats" class="nav-item nav-count-3"><i class="ion-ios-chatboxes-outline"></i><span class="invisible">Chats</span></a>
			<a href="#alarm" class="nav-item nav-count-4"><i class="ion-ios-alarm-outline"></i><span class="invisible">Alarm</span></a>
			<a href="#toggle" class="mask"><i class="ion-ios-plus-empty"></i></a>
		</div>
	</div>
</div>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js'></script><script  src="./Tasker.js"></script>

</body>
</html>


<?php
if (isset($_POST['list_name']) && isset($_POST['list_decription']) && isset($_POST['list_date']) && isset($_POST['list_time'])) {
	$list_name = $_POST['list_name'];
	$list_decription = $_POST['list_decription'];
	$list_date = $_POST['list_date'];
	$list_time = $_POST['list_time'];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tasker";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "INSERT INTO list (list_name, list_decription, list_date, list_time) VALUES ('$list_name', '$list_decription', '$list_date', '$list_time')";
	$conn->close();
}
