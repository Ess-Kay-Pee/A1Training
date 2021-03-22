<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Books - A1Training(PT)</title>
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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!--e-books filter from web-development-->
	
<script LANGUAGE="JavaScript">
function getParams(){
var idx = document.URL.indexOf('?');
var params = new Array();
if (idx != -1) {
var pairs = document.URL.substring(idx+1, document.URL.length).split('&');
for (var i=0; i<pairs.length; i++){
nameVal = pairs[i].split('=');
params[nameVal[0]] = nameVal[1];
}
}
return params;
}
params = getParams();
firstname = unescape(params["firstname"]);
</script>
	
	<style>
						#ebooks:hover{
							overflow: auto;
						}
					</style>
</head>

<body>

    <!-- MOBILE MENU -->
    <?php include('menu.php') ?>
    <!--END HEADER SECTION-->
<script type="text/javascript" src="json/e-books.json"></script>
    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
				<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for e-books.." title="Type name..." style="margin-left:20px;">
                    <h2>Discover <span>More</span></h2>
                    <p>The easiest way to open your mind to new ideas and concepts is to open a book and read. </p>
                </div>
            </div>
            <div class="row">
                <div class="ed-course" id="products1">
					 <script language = "javascript" >
 for(i = 0;i<books.col1.length;i++){	
  document.writeln('<div class="col-md-3 col-sm-4 col-xs-12">');
  document.writeln('<div class="ed-course-in">');
  document.writeln('<a class="course-overlay" href="#!" data-toggle="modal" data-target="#'+ books.col1[i].id+'">');
    document.writeln('<img src="images/e-books/sharath/'+ books.col1[i].Images+'" alt="'+ books.col1[i].id+'" class="img-thumbnail" style="height:165px;">');

									document.writeln('<h4 align="center" style="text-transform: uppercase;">'+ books.col1[i].name+'</h4>');
									
								
							document.writeln('</a>');
	document.writeln('</div>');
	document.writeln('</div>');
 }
  </script>
                    
					
                </div>
            </div>
        </div>
    </section>
<!-- <script>
function showhide(){
	document.getElementById('modal1').style.display='block';
}
</script>-->

<?php include('footer.php') ?>
</body>
</html>
<script>
window.onload = function() {
var input, filter, ul, li, a, i, x, y ,z;
    input = firstname;
	if(firstname != "undefined"){
	filter = input.toUpperCase();
    ul = document.getElementById("products1");
	li = ul.getElementsByTagName("h4");
    for (i = 0; i < li.length; i++) {
        a = li[i];
		if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            console.log(li[i]);
			x = li[i].parentNode;
			y = x.parentNode;
			y.parentNode.style.display = "block";
			y.parentNode.style.float = "left";
			console.log(y);
        } else {
            console.log(li[i]);
			x = li[i].parentNode;
			y = x.parentNode;
			y.parentNode.style.display = "none";
        }
    }
}else{
	
}
};

function myFunction() {
    var input, filter, ul, li, a, i, x, y ,z;
    input = document.getElementById("myInput");
	filter = input.value.toUpperCase();
    ul = document.getElementById("products1");
	li = ul.getElementsByTagName("h4");
    for (i = 0; i < li.length; i++) {
        a = li[i];
		if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            console.log(li[i]);
			x = li[i].parentNode;
			y = x.parentNode;
			y.parentNode.style.display = "block";
			y.parentNode.style.float = "left";
			console.log(y);
        } else {
            console.log(li[i]);
			x = li[i].parentNode;
			y = x.parentNode;
			y.parentNode.style.display = "none";
        }
    }
}
</script>

