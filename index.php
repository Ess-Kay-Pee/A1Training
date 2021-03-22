<!DOCTYPE html>
<html lang="en">
<head>
    <!--Specifying base url because of url rewriting-->
    <base href="/a1training/">
	<title>A1Training(PT) - Best Project Training Institute in India | Python | ML | AI | DS  | Web Development | Digital Marketing</title>
    <?php include('metatags.php') ?>
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="    images/fav.ico" type="image/x-icon">
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
	<!--callout css-->
	<style>
	.callout1 {
  position: fixed;
  bottom: 35px;
  left: 20px;
  margin-left: 20px;
  max-width: 300px;
  z-index: 99;
}
.callout {
  position: fixed;
  bottom: 35px;
  right: 20px;
  margin-left: 20px;
  max-width: 300px;
  z-index: 99;
}

.callout-header {
  padding: 25px 15px;
  background: #337ab7;
  font-size: 25px;
  color: white;
}

.callout-container {
  padding: 15px;
  background-color: #ccc;
  color: black
}

.closebtn {
  position: absolute;
  top: 5px;
  right: 15px;
  color: white;
  font-size: 30px;
  cursor: pointer;
}

.closebtn:hover {
  color: lightgrey;
}
</style>
</head>

<body>
    <?php include('menu.php') ?>
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
							<h1>Welcome to A1Training - <br><span>A new way of learning</span></h1>
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
									<a href="#"><span>Andriod(PT)</span></a><span>Bangalore</span>
								</div>
							</div>
							<div class="ed-ban-tit-3-com ed-ban-tit-32">
								<div class="ed-sprit ed-ban-cal-le">
									<span>05</span><span>Nov</span>
								</div>
								<div class="ed-ban-cal-ri">
									<a href="#"><span>Node.js(PT)</span></a><span>Bangalore</span>
								</div>
							</div>
							<div class="ed-ban-tit-3-com ed-ban-tit-31">
								<div class="ed-sprit ed-ban-cal-le">
									<span>18</span><span>Nov</span>
								</div>
								<div class="ed-ban-cal-ri">
									<a href="#"><span>Data Science(PT)</span></a><span>Bangalore</span>
								</div>
							</div>
							<div class="ed-ban-tit-3-com ed-ban-tit-32">
								<div class="ed-sprit ed-ban-cal-le">
									<span>26</span><span>Nov</span>
								</div>
								<div class="ed-ban-cal-ri">
									<a href="#"><span>Python(PT)</span></a><span>Bangalore</span>
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
	    <!-- About A1Training -->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="con-title">
                    <h2>Welcome, A1Training Project Training Institute</h2>
                    <p><q>Programming is a skill best acquired by practice and example rather than from books</q> - Alan Turing</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp">
                        <h4>A1Training(PT)</h4>
                        <!--<iframe src="https://www.youtube.com/embed/2WqFtiR4-F4?autoplay=0&amp;showinfo=0&amp;controls=0" allowfullscreen></iframe>-->
						<iframe src="https://www.youtube.com/embed/F9GujgK0y2M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <p text-align="justify">A1Training(PT) is tied-up with 300 + MNC's and domestic IT companies where we provide placements. We Provide 100% Placement Assistance and Better Salary Packages in IT Industries. A1Training(PT) is a center of project training, we provide training for core java training, advanced java training ,Android training, IOS training, Web designing training, UI Development training, Web Development training, PHP training ,Python training, Manual Testing, Automation Testing, Selenium training, machine learning training, selenium and python training, angularjs training, nodejs training, reactjs training as online and offline in all over india. </p>
						</div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-blog ho-event">
                        <h4>Our Achievement's</h4>
                        <div class="ho-event">
                            <ul>
                                <li>
                                    <div class="ho-ev-date"><span>2+</span><span>Years</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="#">
                                            <h4>2+ years of existence</h4>
                                        </a>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>500+</span><span>Students</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="#">
                                            <h4>500+ students mentored</h4>
                                        </a>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>300+</span><span>Companies</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="#">
                                            <h4>Tie up with 300+ companies</h4>
                                        </a>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>400+</span><span>Placements</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="#">
                                            <h4>400+ students got job</h4>
                                        </a>
                                        
                                    </div>
                                </li>
								<li>
                                    <div class="ho-ev-date"><span>8+</span><span>Experienced Trainer</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="#">
                                            <h4>8+ years experienced <br>developer+trainer</h4>
                                        </a>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
				               <div class="col-md-4">
                    <!--<div class="ho-ex-title">
                            <h4>Upcoming Event</h4>
                        </div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-3">
                        <div class="ho-lat-ev">
                            <h4 text-align="center">Register</h4>
               
                        </div>
                    </div>
                    <div class="ho-st-login">
                        <ul class="tabs tabs-hom-reg">
                            <li class="tab col s6"><a href="#hom-vijay">Work As a <br>Trainer</a>
                            </li>
                            <li class="tab col s6"><a href="#hom_log">Book for demo <br>Class</a>
                            </li>
                        </ul>
                        <div id="hom-vijay" class="col s12">
                            <form method="POST" action="trainer_mail.php" id="contactForm" class="col s12" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate"  name="name" placeholder="Your Name">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="email" class="validate" title="type valid email" name="email" placeholder="Email Id">
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="number" class="validate"  pattern="[0-9]{10}" title="type valid number"  name="mobile" placeholder="Contact No">
                                        
                                    </div>
                                </div>
								<div class="row">
                                    <div class="input-field col s12">
                                        <input type="number" class="validate"  pattern="[0-9]{10}" title="type valid number"  name="pincode" placeholder="Pin Code">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!--<input type="text" class="validate autocomplete"id="myInput">
                                        <label>Enter Your Skill</label>-->
                                        <input list="skill" name="skill" class="validate" placeholder="Select Your Skill">
  <datalist id="skill">
    <option value="core java trainer">
    <option value="advanced java trainer">
    <option value="Android trainer">
    <option value="IOS trainer">
    <option value="Web designing trainer">
    <option value="UI Development trainer">
    <option value="Web Development trainer">
    <option value="PHP trainer">
     <option value="Python trainer">
    <option value="Manual Testing trainer">
    <option value="Automation Testing trainer">
    <option value="Selenium trainer">
    <option value="machine learning trainer">
    <option value="selenium and python trainer">
    <option value="angular trainer">
    <option value="nodejs trainer">
        <option value="reactjs trainer">
    <option value="full stack trainer">
    <option value="mean stack trainer">
    <option value="data science trainer">
    <option value="dot net trainer">
    <option value="excel and advance excel trainer">
    <option value="digital-marketing trainer">
    <option value="SAP trainer">
     <option value="Oracle trainer">
    <option value="MySql trainer">
    <option value="SQL trainer">
    <option value="Graphic Designer trainer">
    <option value="Photoshop trainer">
    <option value="React Native trainer">
    <option value="Aptitude trainer">
    <option value="C/C++ trainer">
  </datalist>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                    <input list="mode1" class="validate" name="training_mode" placeholder="Select Mode of Training">
  <datalist id="mode1">
    <option value="Part Time">
    <option value="Full Time">
    <option value="Freelancer">
  </datalist>
                                     
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="number" class="validate"  pattern="[0-9]{2}" title="Enter valid year of experience" name="experience" placeholder="Total years of experience">
                                        
                                    </div>
                                </div>
                                 <input type="file" class="input-field col s12" name="attach1" style="height:25px; padding-left:0px;">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Register" name="trainer_register" id="reg" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="hom_log" class="col s12">
                                                        <form name="myForm" class="col s12" autocomplete="off"  onsubmit="return validateForm1()">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate" name="fname" pattern="^[a-z\d\.]{5,}$"  title="only Alphabets and minimum 5 letters" placeholder="Your Name">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate" name="fname" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="type valid email" placeholder="Email Id">
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="number" class="validate"  pattern="[0-9]{10}" title="enter valid number" name="fname" placeholder="Contact No">
                                        
                                    </div>
                                </div>
								<div class="row">
                                    <div class="input-field col s12">
                                        <input type="number" class="validate"  pattern="[0-9]{10}" title="enter valid pincode" name="fname" placeholder="Pin Code">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!--<input type="text" class="validate autocomplete"id="myInput">
                                        <label>Enter Your Skill</label>-->
                                        <input list="course" name="browser" name="fname" placeholder="Select Course">
  <datalist id="course">
    <option value="core java">
    <option value="advanced java">
    <option value="Android">
    <option value="IOS">
    <option value="Web designing">
    <option value="UI Development">
    <option value="Web Development">
    <option value="PHP">
     <option value="Python">
    <option value="Manual Testing">
    <option value="Automation Testing">
    <option value="Selenium">
    <option value="machine learning">
    <option value="selenium and python">
    <option value="angular">
    <option value="nodejs">
        <option value="reactjs">
    <option value="full stack">
    <option value="mean stack">
    <option value="data science">
    <option value="dot net">
    <option value="excel and advance excel">
    <option value="digital-marketing">
    <option value="SAP">
     <option value="Oracle">
    <option value="MySql">
    <option value="SQL">
    <option value="Graphic Designing">
    <option value="Photoshop">
    <option value="React Native">
    <option value="Aptitude">
    <option value="C/C++">
  </datalist>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                    <input list="class_mode" name="browser" name="fname" placeholder="Select Mode of Training">
  <datalist id="class_mode">
    <option value="Weekend(Online)">
    <option value="Weekdays(Online)">
    <option value="Weekend(Offline)">
    <option value="Weekdays(Offline)">
  </datalist>
                                     
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Register" id="reg" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Roadmaps MORE -->
    <script src="myscript.js"></script>
    </section>
	    

    <!-- POPULAR COURSES -->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2> <span>All Project Training(PT) Courses</span></h2>
                    <p>Don't Learn Simply.Learn with project.Learn how to implement concept through project.Learn from industry experts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
						<script language = "javascript" >
						for(i = 0;i<books.col1.length;i++){
                        document.writeln('<div class="home-top-cour">');
                            <!--POPULAR COURSES IMAGE-->
                            document.writeln('<div class="col-md-3"> <img src="images/course/'+ books.col1[i].Images+'" alt="'+ books.col1[i].alt+'"> </div>');
                            <!--POPULAR COURSES: CONTENT-->
                            document.writeln('<div class="col-md-9 home-top-cour-desc">');
                                document.writeln('<a href="'+ books.col1[i].href+'">');
                                    document.writeln('<h3>'+ books.col1[i].Name+'</h3>');
                                document.writeln('</a>');
                                document.writeln('<h4>'+ books.col1[i].sub_heading+'</h4>');
                                 document.writeln('<span class="home-top-cour-rat" style="background:white;">');
								document.writeln('<a href="#" data-toggle="modal" data-target="#'+ books.col1[i].syllabus_id+'"><img src="images/icon/download.png"/></a></span>');
                                document.writeln('<div class="hom-list-share">');
                                    document.writeln('<ul>');
                                        document.writeln('<li style="width:25%;"><a style="height:auto;" href="'+ books.col1[i].href+'"><i class="fa fa-eye" aria-hidden="true"></i> View Now</a> </li>');
                                        document.writeln('<li style="width:35%;"><a style="height:auto;" href="#" data-toggle="modal" data-target="#'+ books.col1[i].interview_id+'" target="_blank"><i class="fa fa-bar-chart" aria-hidden="true"></i> Interview(Q&A)</a> </li>');
										document.writeln('<li style="width:30%;"><a style="height:auto;" href="#!"  data-toggle="modal" data-target="#modal2"><i class="fa fa-share-alt" aria-hidden="true"></i>Get Quotes</a> </li>');
                                    document.writeln('</ul>');
                                document.writeln('</div>');
							document.writeln('</div>');
							document.writeln('</div>');
							}
						</script>
						
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
						<!--POPULAR COURSES-->
						<script language = "javascript" >
						for(i = 0;i<books.col2.length;i++){
                        document.writeln('<div class="home-top-cour">');
                            <!--POPULAR COURSES IMAGE-->
                            document.writeln('<div class="col-md-3"> <img src="images/course/'+ books.col2[i].Images+'" alt="'+ books.col2[i].alt+'"> </div>');
                            <!--POPULAR COURSES: CONTENT-->
                            document.writeln('<div class="col-md-9 home-top-cour-desc">');
                                document.writeln('<a href="'+ books.col2[i].href+'">');
                                    document.writeln('<h3>'+ books.col2[i].Name+'</h3>');
                                document.writeln('</a>');
                                document.writeln('<h4>'+ books.col2[i].sub_heading+'</h4>');
                                 document.writeln('<span class="home-top-cour-rat" style="background:white;">');
								document.writeln('<a href="#" data-toggle="modal" data-target="#'+ books.col2[i].syllabus_id+'"><img src="images/icon/download.png"/></a></span>');
                                document.writeln('<div class="hom-list-share">');
                                    document.writeln('<ul>');
                                        document.writeln('<li style="width:25%;"><a style="height:auto;" href="'+ books.col2[i].href+'"><i class="fa fa-eye" aria-hidden="true"></i> View Now</a> </li>');
                                        document.writeln('<li style="width:35%;"><a style="height:auto;" href="#" data-toggle="modal" data-target="#'+ books.col2[i].interview_id+'" target="_blank"><i class="fa fa-bar-chart" aria-hidden="true"></i> Interview(Q&A)</a> </li>');
										document.writeln('<li style="width:30%;"><a style="height:auto;" href="#!"  data-toggle="modal" data-target="#modal2"><i class="fa fa-share-alt" aria-hidden="true"></i>Get Quotes</a> </li>');
                                    document.writeln('</ul>');
                                document.writeln('</div>');
							document.writeln('</div>');
							document.writeln('</div>');
							}
						</script>
						
						
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	<!-- Roadmaps MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Web Development <span>Roadmaps</span></h2>
                    <p><b>Front-End/Back-End Roadmap</b></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-3">
                        <div class="ho-lat-ev" style="text-align:center;">
                            <h4>Step1</h4>
                            <p>Learn the Basics</p>
                        </div>
                    </div>
                    <div class="ho-st-login">
                        <ul class="tabs tabs-hom-reg">
                            <li class="tab col s3"><a href="#html"><b>HTML</b></a>
                            </li>
                            <li class="tab col s3"><a href="#css"><b>CSS</b></a>
                            </li>
							<li class="tab col s6"><a href="#js"><b>Javascript</b></a>
                            </li>
                        </ul>
						<div id="html">
                        <div class="col s6">
                            <p>HTML Tags</p>
							<p>HTML Forms</p>
							<p>HTML Table</p>
							<p>Block Elements</p>
                        </div>
						<div class="col s6">
                            <p>HTML Classes</p>
							<p>HTML Id</p>
							<p>HTML List</p>
							<p>HTML Layouts</p>
                        </div>
						</div>
                        <div id="css">
                        <div class="col s6">
                            <p>CSS Margin</p>
							<p>CSS Padding</p>
							<p>CSS Types</p>
							<p>CSS Overflow</p>
							<p>CSS Box Model</p>
							<p>CSS Pseudo-class/elements</p>
                        </div>
						<div class="col s6">
                            <p>CSS Outline</p>
							<p>CSS Display</p>
							<p>CSS Combinators</p>
							<p>CSS Max-Width</p>
							<p>CSS Position</p>
							<p>CSS Forms/Nav/Units</p>
							<p>CSS Website Layout</p>
                        </div>
						</div>
						<div id="js">
                        <div class="col s6">
                            <p>HTML Tags</p>
							<p>HTML Forms</p>
							<p>HTML Table</p>
							<p>Block Elements</p>
                        </div>
						<div class="col s6">
                            <p>HTML Classes</p>
							<p>HTML Id</p>
							<p>HTML List</p>
							<p>HTML Layouts</p>
                        </div>
						</div>
                    </div>
                </div>
				<div class="col-md-4">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-3">
                        <div class="ho-lat-ev" style="text-align:center;">
                            <h4>Step2</h4>
                            <p>Let's Go Deep</p>
                        </div>
                    </div>
                    <div class="ho-st-login">
                        <ul class="tabs tabs-hom-reg">
                            <li class="tab col s4"><a href="#html5"><b>HTML5</b></a>
                            </li>
                            <li class="tab col s3"><a href="#css3"><b>CSS3</b></a>
                            </li>
							<li class="tab col s5"><a href="#ajs"><b>Advanced JS</b></a>
                            </li>
                        </ul>
						<div id="html5">
                        <div class="col s6">
                            <p>HTML5 Semantic</p>
							<p>HTML5 Forms</p>
							<p>HTML5 Types</p>
							<p>HTML5 Attributes</p>
                        </div>
						<div class="col s6">
                            <p>HTML5 APIs</p>
							<p>HTML5 Media</p>
							<p>HTML5 Graphics</p>
							<p>HTML5 Form Elements</p>
                        </div>
						</div>
                        <div id="css3">
                        <div class="col s6">
                            <p>CSS Margin</p>
							<p>CSS Padding</p>
							<p>CSS Types</p>
							<p>CSS Overflow</p>
							<p>CSS Box Model</p>
							<p>CSS Pseudo-class/elements</p>
                        </div>
						<div class="col s6">
                            <p>CSS Outline</p>
							<p>CSS Display</p>
							<p>CSS Combinators</p>
							<p>CSS Max-Width</p>
							<p>CSS Position</p>
							<p>CSS Forms/Nav/Units</p>
							<p>CSS Website Layout</p>
                        </div>
						</div>
						<div id="ajs">
                        <div class="col s6">
                            <p>ES6</p>
							<p>ES7</p>
							<p>Angular</p>
							<p>React.js</p>
                        </div>
						<div class="col s6">
                            <p>Vue.js</p>
							<p>Node.js</p>
							<p>TypeScript.js</p>
							<p>jQuery</p>
                        </div>
						</div>
                    </div>
                </div>
								<div class="col-md-4">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-3">
                        <div class="ho-lat-ev" style="text-align:center;">
                            <h4>Step3</h4>
                            <p> Back-End Roadmaps(Fullstack)</p>
                        </div>
                    </div>
                    <div class="ho-st-login">
                        <ul class="tabs tabs-hom-reg">
                         <li class="tab col s6"><a href="#cssf"><b>Server Side Languge</b></a>
                            </li>
							<li class="tab col s6"><a href="#ajsf"><b>Database</b></a>
                            </li>
                        </ul>
						
                        <div id="cssf">
                        <div class="col s6">
                            <p>asp.net(C#)</p>
							<p>Java</p>
							<p>Angular</p>
							<p>Node.js</p>
                        </div>
						<div class="col s6">
                            <p>PHP5</p>
							<p>PHP7</p>
							<p>Python</p>
                        </div>
						</div>
						<div id="ajsf">
                        <div class="col s6">
                            <p>SQL</p>
							<p>Oracle</p>
							
                        </div>
						<div class="col s6">
                            <p>Mongodb</p>
							<p>MySql</p>
							
                        </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
				<img src="images/img_frontend.jpg" class="img-responsive img-thumbnail materialboxed" data-caption="Front-End Roadmap"/>
				</div>
				<div class="col-md-6">
				<img src="images/img_backend.jpg" class="img-responsive img-thumbnail materialboxed" data-caption="Back-End Roadmap"/>
				</div>
			</div>
		</div>
    </section>

    <!-- FOOTER COURSE BOOKING -->
<section>
<div class="callout">
<a class="callout-header" style="display:block;" href="pythonCBSE.php">Python for CBSE</a>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
  <div class="callout-container">
    <p>Top in Python Exam with the Latest CBSE syllabus covered by our Trainers at A1Training(PT).</p>
	<p>Call Us: <a href="tel:+916380486914">+91-8368 979712, 63804 86914</a></p>
  </div>
</div>
<div class="callout1">
  <a class="callout-header" style="display:block;" href="juniorGeeks.php">Coding 4 Junior Geeks</a>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
  <div class="callout-container">
    <img src="images/a22.png" class="img-responsive"/>
	<p>Call Us: <a href="tel:+916380486914">+91-8368 979712, 63804 86914</a></p>
  </div>
</div>

</section>
    <!-- FOOTER -->
<?php include('footer.php') ?>
</body>


</html>
