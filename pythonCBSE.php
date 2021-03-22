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
	<script type="text/javascript" src="json/review.json"></script>
    <style>
        .enroll-img {
            height: 195px;
            background-size: contain;
            background-position: center;
        }
        .card {
            margin: 40px auto; 
            padding: 0; 
            background-color: white; 
            border-radius: 5px;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }        
        .round-btn {
            border-radius: 18px; 
            margin: 5px auto;            
        }
        .text-light {
            color: white;
        }
        .back-img {
            background-image: url("images/scaled.jpg");
            background-size: cover;
            height: auto;            
            padding-bottom: 30px;
        }
        .pythonicon {
            width: 45px;
            height: 45px;
        }
        .pythonimage {
            width: 100%;
            height: 400px;     
            filter: none;
            border-radius: 5px;
            transition: transform .2s, filter .2s;            
        }
        .pythonimage:hover {
          transform: scale(1.1);
          filter: hue-rotate(30deg);
        }
        .checked{
            color: orange;
        }
        .ratingbox {
            position: absolute;
            bottom: 10px;
            padding: 5px;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }          
        .ratingbox div {
            float: left; 
        }
        table, tr {                                
            border: 1px solid lightgray;            
            border-radius: 5px;
            border-collapse: collapse;                        
        }           
        th {
            font-weight: bold;
        }            
        th, td {
            text-align: center;
            color: black;
        }       
        .btn-back {
            background: linear-gradient(97deg,#f5a623,#f76b1c) !important;
        }
        .btn-back:hover {
            background: linear-gradient(97deg,#f76b1c,#f5a623) !important;
        }
        .btn-large {
            height: 65px;               
            font-size: 20px;
            padding-top: 17px;  
        }
        .ul-font {
            font-size: 20px;
            color: black;
            font-weight: bold;                    
        }
        /*Accordion css*/
        .acordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .acordion-active, .acordion:hover{
            background-color: #ccc;
        }

        .acordion:after {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        .acordion-active:after {
          content: "\2212";
        }

        .acordion-content {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
        /*Accordion css END*/
    </style>
</head>
<body style="background-color: whitesmoke;">
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
        <div class="container card">
            <div class="col-md-6" style="padding:0; overflow: hidden;">
                <img class = "pythonimage" src="images/python-for-class-XII.jpg" alt="Python for class 12th CBSE">
            </div>
            <div class="col-md-6" style="postion: relative; height: 400px; padding-top: 20px;">
                <h4><span class="label label-danger">High Demand</span> Python For Class 12 (XII)</h4><br>
                <p>Students will develop the skills to program in python Understanding the concepts of programming   language. This course will enable the students of computer science to understand this computer programming language and solve the exercises as per the CBSE guidelines.</p>
                <div class="ratingbox">
                    <div style="padding-left: 10px; padding-right: 10px;">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>                    
                    <div style="padding-right: 10px;">
                        <span>1k+ satisfied learners</span>
                    </div>
                    <div style="padding-left: 20px; padding-right: 20px">
                        <a href=# style="color: blue; ">Read Reviews</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container card" style="padding: 20px;">
            <h4>Why should you take Python?</h4><br>
            <div class="col-md-4">
                <div class="col-md-3">
                    <img src="images/creativity.svg" alt="Animated mechanical brain" class="pythonicon">
                </div>
                <div class="col-md-9">
                    <p>Python is the preferred language for new technologies such as Data Science and Machine Learning.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-3">
                    <img src="images/big-data.svg" alt="Animated chemical compound" class="pythonicon">
                </div>
                <div class="col-md-9">
                    <p>Data Scientist has been named the best job in America for 2018 with a median base salary of $242,000 and 4,524 job openings - Forbes</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-3">
                    <img src="images/analytics.svg" alt="Animated presentation icon" class="pythonicon">
                </div>
                <div class="col-md-9">
                    <p>According to the TIOBE index, Python is one of the most popular programming languages in the world.</p>
                </div>
            </div>                
        </div>
        <div class="back-img">
           <div class="container">
               <div class="row">
                     <div class="col-md-8">
                        <h2 class="text-light" style="font-size: 23px; font-weight: 700;">Classroom Training/Instructor led Python Live Online Classes</h2>
                    </div>
                    <div class="col-md-4" style="padding-top: 20px">
                        <span class="text-light">Have Queries? Ask us</span>
                        <strong>
                            <a style="color: yellow; font-size: 16pt" href="tel:18001020418">18001020418</a>
                        </strong>
                    </div>
               </div>
               <div class="row" style="background-color: whitesmoke; padding: 20px; border-radius: 5px;">
                    <div class="col-md-8">
                        <table>
                            <tr>
                                <th>Starts</th>
                                <th>Days</th>                            
                                <th></th>
                            </tr>
                            <tr>
                                <td>18th May</td>
                                <td>Mon-Fri</td>
                                <td><a href=# class="btn btn-success round-btn">Enroll</a></td>
                            </tr>
                            <tr>
                                <td>16th May</td>
                                <td>Sat & Sun</td>
                                <td><a href=# class="btn btn-success round-btn">Enroll</a></td>
                            </tr>
                            <tr>
                                <td>16th May</td>
                                <td>Mon-Fri</td>
                                <td><a href=# class="btn btn-success round-btn">Enroll</a></td>
                            </tr>
                            <tr>
                                <td>6th Jun</td>
                                <td>Sat & Sun</td>
                                <td><a href=# class="btn btn-success round-btn">Enroll</a></td>
                            </tr>
                        </table>
                    </div>                
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 style="text-align: center;">TO KNOW THE FEE STUCTURE</h4>
                                <a style="display: block; margin: 5px auto;" href=# class="btn btn-success">Click Here</a>
                            </div>
                            <div class="col-md-6">
                                <h4 style="text-align: center;">TO DOWNLOAD BROCHURE</h4>
                                <a style="display: block; margin: 5px auto;" href=# class="btn btn-success">Click Here</a>
                            </div>
                        </div>
                        <div class="row">
                            <h3 style="text-align: center;">Kickstart Your Career</h3>
                            <a href=# class="btn btn-block btn-back btn-large">Join Our Upcoming Batch</a>
                        </div>
                    </div>
               </div>
           </div>          
        </div>
        <!--Courses Overview-->
        <section> <!-- data-spy="scroll" data-target=".navbar" style="position: relative;"-->
          <!-- <nav class="navbar navbar-default" style=" border-radius: 0; box-shadow: none;">
                <div class="container-fluid">
                   <div class="container">
                        <ul class="nav navbar-nav" style="padding-top: 7px;">
                            <li><a class="ul-font" href="#overview">Overview</a></li>
                            <li><a class ="ul-font" href="#syllabus">Course Syllabus</a></li>
                            <li><a class="ul-font" href="#outcome">Course Outcome</a></li>
                       </ul>
                   </div>
                </div>
           </nav>-->           
           <div class="container">
                <br><h1 style="text-align: center;">What you will learn?</h1><br>
                <div class="row">
                    <div id="overview">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">                            
                                    <h4 class="panel-title">
                                        <a href="#overview1">Overview</a>
                                    </h4>
                                </div>
                                <div id="overview1">
                                    <div class="panel-body">This course will cover the syllabus laid out by CBSE for class 12th for python. Our trainer will help students to learn and revise the content of Class 11th and then buildup from there. the course will cover interesting exercises and projects with guess exercises for Class 12th board exams.</div>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="syllabus">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">                            
                                    <h4 class="panel-title">
                                        <a href="#syllabus1">Course Syllabus</a>
                                    </h4>
                                </div>
                                <div id="syllabus1">
                                    <div class="panel-body">
                                        <ul>
                                            <li><span class="fa fa-caret-right"></span> Introduction</li>
                                            <li><span class="fa fa-caret-right"></span> Strings in Python</li>
                                            <li><span class="fa fa-caret-right"></span> Lists in Python</li>
                                            <li><span class="fa fa-caret-right"></span> Tuples in Python</li>
                                            <li><span class="fa fa-caret-right"></span> Dictionaries in Python</li>
                                            <li><span class="fa fa-caret-right"></span> Sorting Techniques</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="outcome">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading">                            
                                    <h4 class="panel-title">
                                        <a href="#outcome1">Course Outcome</a>
                                    </h4>
                                </div>
                                <div id="outcome1"  >
                                    <div class="panel-body">
                                        <ul style="list-style-type: square;">
                                            <li><span class="fa fa-caret-right"></span> Students will develop the skills to program in python Understanding the concepts of programming language.</li>
                                            <li><span class="fa fa-caret-right"></span> Data Handling, String Manipulation, Tuples and Dictionaries.</li>
                                            <li><span class="fa fa-caret-right"></span> Sorting, Relational databases and simple queries in SQL.</li>                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                                
            </div>           
        </section>
        <!--Courses Overview END-->
        <!--ENROLL SECTIOn-->
        <div class="container card">
            <div class="col-md-9">
                <h3>Liked the course ? Enroll Now!</h3>
                <h4>Structure your learning and get a certificate to prove it.</h4>
                <form action="#" class="form-inline">
                    <div class="form-group">
                        <input type="email" class="form-control" style="border: 1px solid lightgray; border-radius: 5px; padding: 3px; font-size: 15px; margin: 10px 10px 10px 0;;" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control"  style="border: 1px solid lightgray; border-radius: 5px; padding: 3px; font-size: 15px; margin: 10px 10px 10px 0;" placeholder="Enter Phone no." name="email">                        
                    </div>
                    <button type="submit" class="btn btn-back">Enroll</button>
                </form>               
            </div>
            <div class="col-md-3">
                <img src="images/93-scaled.jpg" alt="Meeting" class="enroll-img">
            </div>        
        </div>
        <!--Enroll Section with Youtube Video-->
        <div class="container"  style="background: linear-gradient(to right,rgba(0,0,0,0.4),#000000); padding:0;">
            <div class="col-md-7" style="padding:0; margin: 0;">
                <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY?control=0" frameborder="0" style="width: 100%; height: 300px;"></iframe>
            </div>
            <div class="col-md-5" style="padding: 30px;"> 
                <p style="color: white;">Enter details to watch this lesson for free</p>
                <form action="#">
                    <div class="form-group">
                        <input type="email" class="form-control" style="color: white; border: 1px solid lightgray; border-radius: 5px; padding: 3px; font-size: 15px; margin: 10px 10px 10px 0;" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control"  style="color: white; border: 1px solid lightgray; border-radius: 5px; padding: 3px; font-size: 15px; margin: 10px 10px 10px 0;" placeholder="Enter Phone no." name="email">                        
                    </div>
                    <button type="submit" class="btn btn-back btn-block btn-large" style="font-size: 24px; padding-top: 7px;">Enroll</button>
                </form> 
            </div>
        </div>
        <!--FAQs Accordion-->
        <div class="container" style="margin: 40px auto;">
            <h3>FAQs</h3>
            <div class="row">
                <button class="acordion">Can this course be learnt without any background in Programming language?</button>
                <div class="acordion-content">
                    <p>The constructs of this Python Language make it easier for a non-technical person to understand and grab it . Python is is definitely one of the easiest programming languages to learn. This is infact the best first language to learn. Even the learners from a non-technical background will start liking the language after a while.</p>
                    <p>Today, while Python becoming the de facto industry standard in financial analysis, e-commerce, retail business, many found the jobs required it as a core competency and charted a learning path with us while learning in classroom or online mode. Students at our institute comes from varied background and learn to not only code fluently but build solutions finding them a space in analytics companies as data analysts. Many have turned to be full-stack developers and business analysts.</p>
                </div>
                <button class="acordion">Is this course available both on weekdays and weekends?</button>
                <div class="acordion-content">
                    <p>Yes, All our courses at Python Training institute are available on both Weekdays as well as on Weekends mode. Infact most of our courses are available in Online mode as well.</p>
                </div>
                <button class="acordion">How many students are there in a batch?</button>
                <div class="acordion-content">
                    <p>There are usually 7-8 students in a batch.</p>
                </div>
                <button class="acordion">What certification will i get at the end of the course?</button>
                <div class="acordion-content">
                    <p>Although you will get an Autonomous certificate from Python Training institute, and additionally students will also get a certification from Microsoft after passing out the exam successfully</p>
                </div>
                <button class="acordion">Will the course be including any Projects and Assignments?</button>
                <div class="acordion-content">
                    <p>All our courses comes with Projects and Assignments at various stages of the course curriculum. You can refer the course syllabus for the same.</p>
                </div>
                <button class="acordion">Are there any Demo and Trial Class available, before i plan to join the course?</button>
                <div class="acordion-content">
                    <p>Yes, at Python Training institute we are pleased to offer you one Demo and Trial Class for better understanding about course flow, teaching style of trainer and to get acquainted with learning atmosphere.</p>
                </div>        
            </div>
        </div>
        <!--FAQs accordion script-->
        <script>
            var acc = document.getElementsByClassName("acordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                this.classList.toggle("acordion-active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
                } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
                } 
            });
            }
        </script>

        <!--Enroll Section after FAQ-->
        <div class="container card">
            <div class="col-md-9">
                <h3>Be future ready. Start learning</h3>
                <h4>Structure your learning and get a certificate to prove it..</h4>
                <form action="#" class="form-inline">
                    <div class="form-group">
                        <input type="email" class="form-control" style="border: 1px solid lightgray; border-radius: 5px; padding: 3px; font-size: 15px; margin: 10px 10px 10px 0;" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control"  style="border: 1px solid lightgray; border-radius: 5px; padding: 3px; font-size: 15px; margin: 10px 10px 10px 0;" placeholder="Enter Phone no." name="email">                        
                    </div>
                    <button type="submit" class="btn btn-back">Enroll</button>
                </form>
            </div>
            <div class="col-md-3">
                <img src="images/93-scaled.jpg" alt="Meeting" class="enroll-img">
            </div>        
        </div>

        <!--Review Section-->
       <div class="container" style="padding: 0;">
            <h3>Reviews</h3>
             <div class = "container" style="background-color: white; padding-top: 10px; padding-bottom: 10px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);">        
                <script>
                    for(i = 0; i < rev.col.length; i++) {
                        document.writeln('<div style="border-bottom: 1px solid lightgray; margin-top: 10px; margin-bottom: 10px;">');
                            document.writeln('<h4>' + rev.col[i].Name + '</h4>');
                            document.writeln('<div>');
                                document.writeln('<span class="fa fa-star checked"></span>');
                                document.writeln('<span class="fa fa-star checked"></span>');
                                document.writeln('<span class="fa fa-star checked"></span>');
                                document.writeln('<span class="fa fa-star checked"></span>');
                                document.writeln('<span class="fa fa-star checked"></span>');
                            document.writeln('</div>');
                            document.writeln('<p>' + rev.col[i].Comment + '</p>');
                        document.writeln('</div>');
                    }                
                </script>
                <div>
                    <a href="#"><h2 class="checked" style="text-align: center;">More Reviews</h2></a>
                </div>
            </div>
       </div>

        <!--Enroll section after review-->
        <div class="container card">
            <div class="col-md-9">
                <h3>Loved reviews? Enroll Now!</h3>
                <h4>Structure your learning and get a certificate to prove it.</h4>
                <form action="#" class="form-inline">
                    <div class="form-group">
                        <input type="email" class="form-control" style="border: 1px solid lightgray; border-radius: 5px; padding: 3px; font-size: 15px; margin: 10px 10px 10px 0;" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control"  style="border: 1px solid lightgray; border-radius: 5px; padding: 3px; font-size: 15px; margin: 10px 10px 10px 0;" placeholder="Enter Phone no." name="email">                        
                    </div>
                    <button type="submit" class="btn btn-back">Enroll</button>
                </form>
            </div>
            <div class="col-md-3">
                <img src="images/93-scaled.jpg" alt="Meeting" class="enroll-img">
            </div>        
        </div>
    <!-- FOOTER -->
<?php include('footer.php') ?>
</body>
</html>