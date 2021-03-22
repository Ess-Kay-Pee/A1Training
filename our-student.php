<!DOCTYPE html>
<html lang="en">
<head>
    <!--Specifying base url because of url rewriting-->
    <base href="/a1training/">
    <title>Our Student Gallery</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--gallery--css and js-->
	<link href="test/css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="test/css/glightbox.css">
	<script type="text/javascript" src="json/student.json"></script>
	<!--end-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
* {
  box-sizing: border-box;
}

.row-photo {
  display: flex;
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
}
.text-block {
  position: absolute;
  bottom: 95px;
  right: 85px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
} 
</style>
</head>

<body>
<?php include('menu.php') ?>
	<section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1>Our Students</h1>
                    <p>Fusce id sem at ligula laoreet hendrerit venenatis sed purus. Ut pellentesque maximus lacus, nec pharetra augue.</p>
                    <div class="event-head-sub">
                        <ul>
                            <li>Total Students: 500+</li>
                            <li>Placed: 90-95%</li>
							<li>Total Courses: 100+</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>	
	<section>
<!-- Photo Grid -->

<div class="row-photo">
<div class="column"> 
 <script language = "javascript" >
 for(i = 0;i<books.col1.length;i++){	
  document.writeln('<div class="gallery-grid">');
  document.writeln('<a class="example-image-link glightbox gallery_product" href="images/student/'+ books.col1[i].Images+'" data-lightbox="example-set" data-title="'+ books.col1[i].Name+','+ books.col1[i].City+'">');
    document.writeln('<img src="images/student/'+ books.col1[i].Images+'" style="width:100%">');
  document.writeln('<div class="captn">');
									document.writeln('<h4>'+ books.col1[i].Name+'</h4>');
									document.writeln('<p>'+ books.col1[i].City+'</p>');
								document.writeln('</div>');
							document.writeln('</a>');
	document.writeln('</div>');

 }
  </script>
</div>
<div class="column"> 
 <script language = "javascript" >
 for(i = 0;i<books.col2.length;i++){	
  document.writeln('<div class="gallery-grid">');
  document.writeln('<a class="example-image-link glightbox gallery_product" href="images/student/'+ books.col2[i].Images+'" data-lightbox="example-set" data-title="'+ books.col2[i].Name+','+ books.col2[i].City+'">');
    document.writeln('<img src="images/student/'+ books.col2[i].Images+'" style="width:100%">');
  document.writeln('<div class="captn">');
									document.writeln('<h4>'+ books.col2[i].Name+'</h4>');
									document.writeln('<p>'+ books.col2[i].City+'</p>');
								document.writeln('</div>');
							document.writeln('</a>');
	document.writeln('</div>');

 }
  </script>
</div>
<div class="column"> 
 <script language = "javascript" >
 for(i = 0;i<books.col3.length;i++){	
  document.writeln('<div class="gallery-grid">');
  document.writeln('<a class="example-image-link glightbox gallery_product" href="images/student/'+ books.col3[i].Images+'" data-lightbox="example-set" data-title="'+ books.col3[i].Name+','+ books.col3[i].City+'">');
    document.writeln('<img src="images/student/'+ books.col3[i].Images+'" style="width:100%">');
  document.writeln('<div class="captn">');
									document.writeln('<h4>'+ books.col3[i].Name+'</h4>');
									document.writeln('<p>'+ books.col3[i].City+'</p>');
								document.writeln('</div>');
							document.writeln('</a>');
	document.writeln('</div>');

 }
  </script>
</div>
<div class="column"> 
 <script language = "javascript" >
 for(i = 0;i<books.col4.length;i++){	
  document.writeln('<div class="gallery-grid">');
  document.writeln('<a class="example-image-link glightbox gallery_product" href="images/student/'+ books.col4[i].Images+'" data-lightbox="example-set" data-title="'+ books.col4[i].Name+','+ books.col4[i].City+'">');
    document.writeln('<img src="images/student/'+ books.col4[i].Images+'" style="width:100%">');
  document.writeln('<div class="captn">');
									document.writeln('<h4>'+ books.col4[i].Name+'</h4>');
									document.writeln('<p>'+ books.col4[i].City+'</p>');
								document.writeln('</div>');
							document.writeln('</a>');
	document.writeln('</div>');

 }
  </script>
</div>
</div>
	</section>
   
<?php include('footer.php') ?>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>

  <script src="test/js/glightbox.min.js"></script>
  <script src="test/js/index.js"></script>