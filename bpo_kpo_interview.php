<!DOCTYPE html>
<html lang="en">


<head>
    <title>BPO/KPO Interviews</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!--Specifying base url because of url rewriting-->
    <base href="/a1training/">
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
	<link href="css/trainer.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

   <?php include('menu.php') ?>

    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="cor">
                    <div class="col-md-3">
                        <div class="cor-top-deta cor-side-com">
                            <div class="cor-top-deta">
                                <div class="ho-st-login cor-apply field-com">
                                    <div class="col s12">
                                        <form class="col s12">
                                            <div class="cor-left-app-tit">
                                                <h4>Apply This Course</h4>
                                                <p>Nulla at velit convallis lectus.</p>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" class="validate">
                                                    <label>Full Name</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" class="validate">
                                                    <label>Email id</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" class="validate">
                                                    <label>Phone</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select>
									  <option value="" disabled selected>Select Course</option>
									  <option value="1">Option 1</option>
									  <option value="2">Option 2</option>
									  <option value="3">Option 3</option>
									</select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="submit" value="APPLY NOW" class="waves-effect waves-light light-btn">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cor-side-com">
							<div class="ho-ev-latest ho-ev-latest-bg-2">
                                <div class="ho-lat-ev">
                                    <a href="#">
                                        <h4>Fresher Job's</h4>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    </a>
                                </div>
                            </div>
                            <div class="ho-ev-latest in-ev-latest-bg-1">
                                <div class="ho-lat-ev">
                                    <a href="#">
                                        <h4>Experience Interviews</h4>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    </a>
                                </div>
                            </div>
                            <div class="ho-ev-latest in-ev-latest-bg-1">
                                <div class="ho-lat-ev">
                                    <a href="#">
                                        <h4>Walk-In Interviews</h4>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    </a>
                                </div>
                            </div>
							<div class="ho-ev-latest in-ev-latest-bg-1">
                                <div class="ho-lat-ev">
                                    <a href="#">
                                        <h4>BPO/KPO Interviews</h4>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cor-mid-img">
                            <img src="images/bpo-kpo.jpg" alt="" class="img-thumbnail">
                        </div>
                        <div class="cor-con-mid">
                            <div class="cor-p1" style=" border-bottom: 0px; padding-bottom: 0px;margin-bottom: 0px;margin-top: 40px;">
                                <h2>BPO/KPO Interviews</h2>
                                
                                <div class="share-btn">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="cor-p5">
                                <h3>Course Syllabus</h3>
                                <?php
                                require_once('db.php');
                                $result = $conn->prepare("SELECT * FROM interviewjobs WHERE ModeOfJobIntern = 'BPO/KPO'");
                                $result->execute();
                                for($i=0; $row = $result->fetch(); $i++){
                                //$id=$row['ID'];
                            ?>
                                  <div id="syllabus" class="tab-pane fade in active">
                                   <ul class="collapsible" data-collapsible="accordion">
								   
                                    <li>
									
                                        <div class="collapsible-header"><?php echo $row ['profileDescription']; ?></div>
                                        <div class="collapsible-body cor-tim-tab">
                                             
											<h4><?php echo $row ['SkillReq']; ?></h4>
											<h4><?php echo $row ['ModeOfJob']; ?></h4>
											<h4><?php echo $row ['JobDescription']; ?></h4>
											 <h4><?php echo $row ['CompanyName']; ?></h4>
											 <h4><?php echo $row ['Experience']; ?></h4>
											 <h4><?php echo $row ['ModeOfJobIntern']; ?></h4>
											 <h4> <?php echo $row ['Batch']; ?></h4>
											 <h4><?php echo $row ['JobLocation']; ?></h4>
											 <h4><?php echo $row ['Address']; ?></h4>
											 <h4><?php echo $row ['ContactPerson']; ?></h4>
											 <h4><?php echo $row ['MobileNo']; ?></h4>
											 <h4> <?php echo $row ['Location']; ?></h4>
											
                                        </div>
                                    </li>
                                    
                                    
                                </ul>
                                    </div>
                                    <?php } ?>

          
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="cor-side-com">
                            <div class="ho-ev-latest ho-ev-latest-bg-3">
                                <div class="ho-lat-ev">
								<a href="batches.php">
                                    <h4>Upcoming Bathches</h4>
                                    <p>Student area velit convallis venenatis lacus quis, efficitur lectus.</p>
								</a>
                                </div>
                            </div>
                        
                        </div>
                        <div class="cor-side-com">
                            <div class="ho-ev-latest ho-ev-latest-bg-2">
                                <div class="ho-lat-ev">
                                    <a href="#">
                                        <h4>Javascript Interview(Q&A)</h4>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    </a>
                                </div>
                            </div>
                            <div class="ho-ev-latest in-ev-latest-bg-1">
                                <div class="ho-lat-ev">
                                    <a href="#">
                                        <h4>Angular Interview(Q&A)</h4>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    </a>
                                </div>
                            </div>
                            <div class="ho-ev-latest in-ev-latest-bg-1">
                                <div class="ho-lat-ev">
                                    <a href="#">
                                        <h4>React.js(Q&A)</h4>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->

<?php include('footer.php') ?>
</body>


</html>
<script>
//$(document).ready(function () {
            //  $("#menu1").show();
        //});
</script>