<!DOCTYPE html>
<html lang="en">
<head>
	<!--Specifying base url because of url rewriting-->
    <base href="/a1training/">
	<title>A1Training(PT) - Best Project Training Institute in India | Python | ML | AI | DS  | Web Development | Digital Marketing</title>
    <?php include('metatags.php') ?>
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
	<!--jason script-->
	<script type="text/javascript" src="json/courses.json"></script>	
	<!-- css for cards -->
	<style>		
		/*css for cards*/
		.card{			
			margin: 2vw 0;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			width: 100%;			
			transform: scale(1,1);
  			transition: box-shadow 0.3s, transform 0.1s; 
			border-radius: 5px;			
		}
		.card img {	
			border-radius: 5px;		
			width: 100%;
			height: 15vw;
		}
		.card:hover {
  			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);
			transform: scale(1.01, 1.01);
		}	
		@media screen and (max-width: 768px) {
			.card img {
				height: 40vw;
			}
		}				
	</style>
</head>

<body>
    <?php include('juniorGeeksMenu.php') ?>
    <!--END HEADER SECTION-->
<?php
		if(isset($_GET['mess']) == 'success'){
		echo '<script>
		alert("Thanks for contacting us.We will get back to you soon.");
		</script>';
		}else{
			$_GET['mess'] = '';
		}		?>
    <!-- SLIDER -->
    <section>
        <div class="h2-hero">
			<div class="container">
				<div class="row">
					<div class="h2-hero-inn">
						<div class="h2-hero-left">
						<div class="ed-ban-tit">
						<div class="ed-ban-tit-1">
							<h1>Welcome to Junior Geeks - <br><span>A new way of learning</span></h1>
						</div>
						<div class="ed-ban-tit-2">
							<h4><!--<span class="ed-bann-line"></span><span class="ed-bann-line1"></span>-->Upcoming Workshops</h4>
						</div>
						<div class="ed-ban-tit-3">
							<div class="ed-ban-tit-3-com ed-ban-tit-31">
								<div class="ed-sprit ed-ban-cal-le">
									<span>24</span><span>Oct</span>
								</div>
								<div class="ed-ban-cal-ri">
									<a href="#"><span>Tally</span></a><span>Bangalore</span>
								</div>
							</div>
							<div class="ed-ban-tit-3-com ed-ban-tit-32">
								<div class="ed-sprit ed-ban-cal-le">
									<span>05</span><span>Nov</span>
								</div>
								<div class="ed-ban-cal-ri">
									<a href="#"><span>Robotics(PT)</span></a><span>Bangalore</span>
								</div>
							</div>
							<div class="ed-ban-tit-3-com ed-ban-tit-31">
								<div class="ed-sprit ed-ban-cal-le">
									<span>18</span><span>Nov</span>
								</div>
								<div class="ed-ban-cal-ri">
									<a href="#"><span>Python(PT)</span></a><span>Bangalore</span>
								</div>
							</div>
							<div class="ed-ban-tit-3-com ed-ban-tit-32">
								<div class="ed-sprit ed-ban-cal-le">
									<span>26</span><span>Nov</span>
								</div>
								<div class="ed-ban-cal-ri">
									<a href="#"><span>MS Office(PT)</span></a><span>Bangalore</span>
								</div>
							</div>
						</div>
					</div>
						</div>
						<div class="h2-hero-right">
<div class="ed-ref-form">
						<div class="ed-ref-form-inn">
<div class="map-head">
						<p>Register for the</p>
						<h2>Admissions</h2> <span class="footer-ser-re">fill below details</span> </div>
							<form name="sentMessage" method="POST" action="mail.php" id="contactForm" novalidate="">
								<ul>
									<li>
										<input type="text" required="" name="name">
										<span class="floating-label">Name</span>
									</li>
									<li>
										<input type="email" required="" name="email">
										<span class="floating-label">Email ID</span>
									</li>
									<li>
										<input type="number" required="" name="mobile">
										<span class="floating-label">Phone number</span>
									</li>
									<li>
										<input type="text" required="" name="city">
										<span class="floating-label">City</span>
									</li>
									<li>
										<input type="text" required="" name="skill1">
										<span class="floating-label">Course Name</span>
									</li>
									<li>
										<input type="number" required="" name="pincode">
										<span class="floating-label">Pin Code</span>
									</li>									
									<li>
										<input type="submit" value="Register Now" name="admission">
									</li>
								</ul>
							</form>
						</div>
					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
	<!-- course section -->
	<section>
        <div class="container com-sp">
            <div class="row">
                <div class="con-title">
                    <h2>Welcome to Junior Geeks</h2>
                    <p><q>Sometimes it is the people no one imagines anything of who do the things that no one can imagine.</q> - Alan Turing</p>
                </div>
            </div>
			<div class="row">
				<ul class="nav nav-pills nav-justified">
					<li class="active"><a href="#class5-8" data-toggle="tab">Class 5-8</a></li>
					<li><a href="#class9-10" data-toggle="tab">Class 9-10</a></li>
					<li><a href="#class11-12" data-toggle="tab">Class 11-12</a></li>
				</ul>

				<div class="tab-content">
					<div id="class5-8" class="tab-pane fade in active">
						<div class="col-md-4">							
							<div class="card">
								<img src="images/ms-office.jpg" alt="MS Office">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>MS Office</h4>
										<a class="label label-info" style="display:inline-block;" href=#>Word</a>
										<a class="label label-info" style="display:inline-block;" href=#>Powerpoint</a>
										<a class="label label-info" style="display:inline-block;" href=#>Access</a>
										<a class="label label-info" style="display:inline-block;" href=#>Excel</a>
									</div><hr>
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">MORE INFO</h2></a>
								</div>																
							</div>
							<div class="card">
								<img src="images/tally-icon.png" alt="Tally">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>Tally</h4>
										<a class="label label-info" style="display:inline-block;" href=#>Goods and Service Taxs</a>
										<a class="label label-info" style="display:inline-block;" href=#>ERP</a>
										<a class="label label-info" style="display:inline-block;" href=#>Accounting</a>
									</div><hr>															
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">More Info</h2></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="images/typing.jpg" alt="Typing">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>Typing</h4>
										<a class="label label-info" style="display:inline-block;" href=#>Beginner</a>
										<a class="label label-info" style="display:inline-block;" href=#>Intermediate</a>
										<a class="label label-info" style="display:inline-block;" href=#>Expert</a>
									</div><hr>																							
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">MORE INFO</h2></a>
								</div>
							</div>
							<div class="card">
								<img src="images/adobe-photoshop.png" alt="Adobe Photoshop">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>Adobe Photoshop</h4>
										<a class="label label-info" style="display:inline-block;" href=#>Retouching</a>
										<a class="label label-info" style="display:inline-block;" href=#>Graphic Design</a>
										<a class="label label-info" style="display:inline-block;" href=#>After Effects</a>
										<a class="label label-info" style="display:inline-block;" href=#>InDesign</a>									
										<a class="label label-info" style="display:inline-block;" href=#>Video Editing</a>
									</div><hr>										
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">MORE INFO</h2></a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="images/coral-draw.jpg" alt="Coral Draw">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>Coral Draw</h4>
										<a class="label label-info" style="display:inline-block;" href=#>Graphic Design</a>
										<a class="label label-info" style="display:inline-block;" href=#>Logo Design</a>
										<a class="label label-info" style="display:inline-block;" href=#>Vector Graphic</a>
										<a class="label label-info" style="display:inline-block;" href=#>Mug Printing</a>
										<a class="label label-info" style="display:inline-block;" href=#>Icon Design</a>
										<a class="label label-info" style="display:inline-block;" href=#>3ds Max</a>
									</div><hr>									
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">MORE INFO</h2></a>
								</div>
							</div>
							<div class="card">
								<img src="images/illustrator.jpg" alt="Illustrator">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>Illustrator</h4>
										<a class="label label-info" style="display:inline-block;" href=#>Character Design</a>
										<a class="label label-info" style="display:inline-block;" href=#>Lettering</a>
										<a class="label label-info" style="display:inline-block;" href=#>Animation</a>
										<a class="label label-info" style="display:inline-block;" href=#>Game Art</a>
										<a class="label label-info" style="display:inline-block;" href=#>Digital Art</a>
									</div><hr>									
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">MORE INFO</h2></a>
								</div>
							</div>
						</div>
					</div>
					<div id="class9-10" class="tab-pane fade">
						<div class="col-md-4">							
							<div class="card">
								<img src="images/web-development.jpg" alt="Web Development">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>Web Development</h4>
										<a class="label label-info" style="display:inline-block;" href=#>HTML</a>
										<a class="label label-info" style="display:inline-block;" href=#>HTML5</a>
										<a class="label label-info" style="display:inline-block;" href=#>CSS</a>
										<a class="label label-info" style="display:inline-block;" href=#>Javascript</a>
									</div><hr>									
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">MORE INFO</h2></a>
								</div>
							</div>							
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="images/game-development.png" alt="Game Development">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>Game Development</h4>									
										<a class="label label-info" style="display:inline-block;" href=#>Android</a>
									</div><hr>									
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">MORE INFO</h2></a>
								</div>
							</div>							
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="images/robotics.jpg" alt="Robotics">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>Robotics</h4>
										<a class="label label-info" style="display:inline-block;" href=#>Arduino</a>
										<a class="label label-info" style="display:inline-block;" href=#>Fortex</a>
										<a class="label label-info" style="display:inline-block;" href=#>Automation</a>
										<a class="label label-info" style="display:inline-block;" href=#>Structural Engineering</a>
										<a class="label label-info" style="display:inline-block;" href=#>Robot Framework</a>
									</div><hr>									
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">MORE INFO</h2></a>
								</div>
							</div>							
						</div>
					</div>
					<div id="class11-12" class="tab-pane fade">
						<div class="col-md-4">							
							<div class="card">
								<img src="images/python.jpg" alt="Pyhton">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>Python</h4>
										<a class="label label-info" style="display:inline-block;" href=#>Beginner</a>
										<a class="label label-info" style="display:inline-block;" href=#>Intermediate</a>
										<a class="label label-info" style="display:inline-block;" href=#>Expert</a>
									</div><hr>																		
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">MORE INFO</h2></a>
								</div>

							</div>
							<div class="card">
								<img src="images/java.jpg" alt="Java">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>Java</h4>									
										<a class="label label-info" style="display:inline-block;" href=#>Beginner</a>
										<a class="label label-info" style="display:inline-block;" href=#>Intermediate</a>
										<a class="label label-info" style="display:inline-block;" href=#>Expert</a>
									</div><hr>									
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">MORE INFO</h2></a>
								</div>
							</div>							
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="images/c-c++.jpg" alt="C/C++">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>C/C++</h4>
										<a class="label label-info" style="display:inline-block;" href=#>Beginner</a>
										<a class="label label-info" style="display:inline-block;" href=#>Intermediate</a>
										<a class="label label-info" style="display:inline-block;" href=#>Expert</a>
									</div><hr>									
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">MORE INFO</h2></a>
								</div>
							</div>							
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="images/database.jpg" alt="Database">
								<div style="padding: 2vw 2vw;">
									<div style="overflow:auto; height: 75px;">
										<h4>Databse</h4>
										<a class="label label-info" style="display:inline-block;" href=#>MySQL</a>
										<a class="label label-info" style="display:inline-block;" href=#>Oracle</a>
										<a class="label label-info" style="display:inline-block;" href=#>SQL Server</a>
										<a class="label label-info" style="display:inline-block;" href=#>MongoDB</a>
									</div><hr>									
									<p><span class="fa fa-hourglass-half" style="margin-right:15px"></span><strong>12 hours</strong> of LIVE instruction</p>
									<p><span class="fa fa-users"  style="margin-right:15px"></span>Weekdays and Weekends</p><hr>									
									<a href="#"><h2 style="color:rgb(100, 149, 237);text-align:center;">MORE INFO</h2></a>
								</div>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- course section end -->		
    <!-- FOOTER -->
<?php include('footer.php') ?>
</body>


</html>
