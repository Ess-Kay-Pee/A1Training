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

    <!--interior css-->
    <style>
        * {
            box-sizing: border-box;
        }
        .post-img {
            width: 100%;
            height: auto;
        }
        body {
            background-color: whitesmoke;
        }
        .heading {
            font-size: 40px;     
            margin-top: 30px;
            margin-bottom: 40px;
        }
        .center {
            text-align: center;
        }
        .underline {
            border-bottom: 5px solid orange;
        }
        @media screen only (max-width: 768px) {
            .heading {
                font-size: 30px;
                margin-top: 80px;
            }
        }    
        .card {  
            background-color: beige;                      
            box-shadow: 0 4px 8px 0 rgba(51,102,255,0.5);
            padding: 25px;
        }   
        .round-corners {
            border-radius: 5px;
        }         
        .btn-back {
            background: linear-gradient(97deg,#f5a623,#f76b1c);
        }
        .btn-back:hover {
            background: linear-gradient(97deg,#f76b1c,#f5a623);
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
           
        <!--Heading-->
        <br>
        <div class="container heading center"><span class="heading underline">In</span>ternships</div>        
        <!--post-->
        <div class="container card round-corners">            
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <h3>Python Technical Content Engineer ( work from office ) :</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-11">
                                    <h4>Description : <span>Have good knowledge of Python, Excellent writing skills in technical content is must for content writing. You will also be responsible for Reviewing the technical content thoroughly.</span></h4>   
                                    <h4>Duration of Internship : <span>3-12 months</span></h4>
                                    <h4>Stream : <span>Computer Science</span></h4>
                                    <h4>Desired Skills : <span>Python</span></h4>
                                    <h4>Expected Date of Joining : <span>As soon as possible</span></h4>                                                             
                            </div>                        
                        </div>                                
                    </div>
                    <div class="col-md-4">
                        <img src="images/intern/python.jpg" alt="Python Programming Pic" class="round-corners post-img">
                    </div>
                </div><br>
                <div class="row">
                    <a href="#" class="btn btn-back btn-block">Apply Here</a>
                </div>                        
        </div>    
        <!--post-->
        <div class="container card round-corners">                       
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <h3>Technical Content Writer ( work from home ): :</h3>
                        </div>
                        <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                                <h4>Description : <span>Excellent writing skills in technical content is must for content writing. Click here to choose and write from a wide range of topics.</span></h4>   
                                <h4>Duration of Internship : <span>2-12 months</span></h4>
                                <h4>Stream : <span>C/C++/Java/Python/Data Structures and Algorithm</span></h4>
                                <h4>Desired Skills : <span>Python</span></h4>
                                <h4>Expected Date of Joining : <span>As soon as possible</span></h4> 
                        </div>
                        </div>                                
                    </div>
                    <div class="col-md-4">
                        <img src="images/intern/technical-content-writer.jpg" alt="Person is something" class="round-corners post-img">
                    </div>
                </div><br>
                <div class="row">
                    <a href="#" class="btn btn-back btn-block">Apply Here</a>
                </div>            
        </div>
         <!--post-->
         <div class="container card round-corners">                       
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <h3>Technical Content Engineer ( work from office ) :</h3>
                        </div>
                        <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                                <h4>Description : <span>Excellent writing skills in technical content is must for content writing. You will also be responsible for Reviewing the technical content thoroughly.</span></h4>   
                                <h4>Duration of Internship : <span>6-12 months</span></h4>
                                <h4>Stream : <span>C/C++/Java/Python/Data Structures and Algorithm</span></h4>
                                <h4>Desired Skills : <span>Python</span></h4>
                                <h4>Expected Date of Joining : <span>As soon as possible</span></h4> 
                        </div>
                        </div>                                
                    </div>
                    <div class="col-md-4">
                        <img src="images/intern/technical-content-engineer.jpg" alt="Person is typing something while leaning on chair" class="round-corners post-img">
                    </div>
                </div><br>
                <div class="row">
                    <a href="#" class="btn btn-back btn-block">Apply Here</a>
                </div>            
        </div>
         <!--post-->
         <div class="container card round-corners">                       
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <h3>YouTube Video Internship :</h3>
                        </div>
                        <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                                <h4>Description : <span>We are looking for candidates who are interested in contributing their knowledge on screen by making YouTube videos for GeeksforGeeks channel. The candidates who have passion for teaching and have the niche to spread education will be preferred along with good skills in video making.</span></h4>   
                                <h4>Duration of Internship : <span>6-12 months</span></h4>
                                <h4>Stream : <span>Good knowledge of the concept in the field of Computer Science Content, Video Making and Editing, Teaching Skills    </span></h4>
                                <h4>Desired Skills : <span>Python</span></h4>
                                <h4>Expected Date of Joining : <span>As soon as possible</span></h4> 
                                <h4>Stipend per Video : <span>INR 1000-1500 depending on the quality and content of the video</span></h4>    
                        </div>
                        </div>                                
                    </div>
                    <div class="col-md-4">
                        <img src="images/intern/youtube.jpg" alt="Youtube app Pic" class="round-corners post-img">
                    </div>
                </div><br>
                <div class="row">
                    <a href="#" class="btn btn-back btn-block">Apply Here</a>
                </div>            
        </div>
    <!-- FOOTER -->
<?php include('footer.php') ?>
</body>


</html>
