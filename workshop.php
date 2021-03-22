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
   		
    <!-- FOOTER -->
<?php include('footer.php') ?>
</body>


</html>
