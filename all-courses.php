<!DOCTYPE html>
<html lang="en">


<head>
    <title>All Courses</title>
    <?php include('metatags.php') ?>
    <!--Specifying base url because of url rewriting-->
    <base href="/a1training/">
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
</head>

<body>
<?php include('menu.php') ?>
    <!--END HEADER SECTION-->

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
								document.writeln('<a href="#" data-toggle="modal" data-target="#'+ books.col1[i].syllabus_id+'"><img src="images/icon/download.png" title="Download Syllabus"/></a></span>');
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
								document.writeln('<a href="#" data-toggle="modal" data-target="#'+ books.col2[i].syllabus_id+'"><img src="images/icon/download.png" title="Download Syllabus"/></a></span>');
                                document.writeln('<div class="hom-list-share">');
                                    document.writeln('<ul>');
                                        document.writeln('<li style="width:25%;"><a style="height:auto;" href="'+ books.col2[i].href+'"><i class="fa fa-eye" aria-hidden="true"></i> View Now</a> </li>');
                                        document.writeln('<li style="width:35%;"><a style="height:auot;" href="#" data-toggle="modal" data-target="#'+ books.col2[i].interview_id+'" target="_blank"><i class="fa fa-bar-chart" aria-hidden="true"></i> Interview(Q&A)</a> </li>');
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

<?php include('footer.php') ?>
</body>


</html>
