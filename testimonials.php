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
    <style>         
        .slides{                     
            display: none;
            position: relative;
            animation-name: ani;
            animation-duration: 0.7s;            
        }
        @keyframes ani {
            from {transform: scale(0.2);}
            to {transform: scale(1);}
        }
        .prev, .next {
            padding: 15px;
            position: absolute;
            top: 50%;
            margin: 0;
            background-color: black;
            opacity: 0.4;
            transform: scale(1.3, 1);
            transition: opacity 0.3s, transform 0.3s;             
            border: 0;
            border-radius: 5px;   
            text-align: center;                                  
        }
        .prev span, .next span {
            margin: 0;
            padding: 0;
        }
        .prev{
            left: 0;            
        }
        .next {
            right: 0;
        }
        .prev:hover, .next:hover {
            opacity: 1;
            transform: scale(1.5,1.2);
        }
        .toggle-show {
            display: block;
        }
        .text-silver {
            color: silver;
        }
        .text-light {
            color: white;   
        }
        .slider-back {
            position: relative;
            background-color: purple;
            border-radius: 5px;
            padding: 30px;
            height: 500px;        
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);    
        }                
        .heading {
            font-size: 40px;
        }       
        .underline {
            border-bottom: 5px solid orange;
        }        
        .space-around {
            margin-top: 60px;
            margin-bottom: 40px;
        }
        @media screen and (max-width: 400px) {
            .heading {
                font-size: 30px;
            }
        }
        @media screen and (max-width: 768px) {
            .toggle-show {
                display: none;
            }
        }           
    </style> 
</head>

<body style="background-color: whitesmoke">
    <?php include('juniorGeeksMenu.php') ?>
    <!--END HEADER SECTION-->
    <!-- Testimonial Slider -->
    <div class="container space-around" style="text-align: center;">
        <h2 class="heading"><span class="heading underline">Te</span>stimonial</h2>
    </div>

    <div class="container slider-back">
        <!-- 1st slide -->
        <div class="slides">
            <div class="col-md-4" style="vertical-align: center;">
                <img src="images/student/firangi.jpg" alt="student picture" style="width:100%; height: auto;">
            </div>        
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-1">
                        <span class="heading fa fa-quote-left text-light toggle-show"></span>
                    </div>
                    <div class="col-md-10">
                        <p class="text-silver">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="col-md-1">
                        <span class="heading fa fa-quote-right text-light toggle-show"></span>
                    </div> 
                </div>     
                <div class="row">
                <div class="col-md-3">
                    <h4 class=text-light>John Doe</h4>
                        <h6 class="text-silver">Excellence Engineering College</h6>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3">
                            <h4 class="text-light">Eureka Geeks Pvt. Ltd.</h4>
                            <h6 class="text-silver">5 lacs per annums</h6>
                            <h6 class="text-silver">Software Developer</h6>
                    </div>                    
                </div>               
            </div>
        </div>
        <!--2nd slide-->                  
        <div class="slides">
            <div class="col-md-4" style="vertical-align: center;">
                <img src="images/student/indrajeet kumar.jpg" alt="student picture" style="width:100%; height: auto;">
            </div>        
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-1">
                        <span class="heading fa fa-quote-left text-light toggle-show"></span>
                    </div>
                    <div class="col-md-10">
                        <p class="text-silver">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="col-md-1">
                        <span class="heading fa fa-quote-right text-light toggle-show"></span>
                    </div> 
                </div>     
                <div class="row">
                <div class="col-md-3">
                    <h4 class=text-light>Indrajeet Kumar</h4>
                        <h6 class="text-silver">Excellence Engineering College</h6>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3">
                            <h4 class="text-light">Eureka Geeks Pvt. Ltd.</h4>
                            <h6 class="text-silver">5 lacs per annums</h6>
                            <h6 class="text-silver">Software Developer</h6>
                    </div>                    
                </div>               
            </div>
        </div>
        <!-- 3rd slide -->
        <div class="slides">
            <div class="col-md-4" style="vertical-align: center;">
                <img src="images/student/ayush parikh.jpg" alt="student picture" style="width:100%; height: auto;">
            </div>        
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-1">
                        <span class="heading fa fa-quote-left text-light toggle-show"></span>
                    </div>
                    <div class="col-md-10">
                        <p class="text-silver">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div class="col-md-1">
                        <span class="heading fa fa-quote-right text-light toggle-show"></span>
                    </div> 
                </div>     
                <div class="row">
                <div class="col-md-3">
                    <h4 class=text-light>Ayush Parikh</h4>
                        <h6 class="text-silver">Excellence Engineering College</h6>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-3">
                            <h4 class="text-light">Eureka Geeks Pvt. Ltd.</h4>
                            <h6 class="text-silver">5 lacs per annums</h6>
                            <h6 class="text-silver">Software Developer</h6>
                    </div>                    
                </div>               
            </div>
        </div>

        <!--arrows-->
        <button class="next" onclick="plusSlide(1)"><span class="fa fa-caret-right heading text-light"></span></button>
        <button class="prev" onclick="plusSlide(-1)"><span class="fa fa-caret-left heading text-light"></span></button>
    </div><br><br><br>
    <!-- script for slider-->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlide(n) {
        showSlides(slideIndex += n);
        }
            
        
        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slides");
        
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }      
        slides[slideIndex-1].style.display = "block";  
        
        }
    </script>
    <!-- FOOTER -->    
<?php include('footer.php') ?>
</body>
</html>

