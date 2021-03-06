
<?php
// include database connection file
require_once 'db.php';

if($_REQUEST['status']=='yes')
{

$yes=intval($_GET['id']);

// Query for Query for Updation
$sql="UPDATE interviewjobs
SET approval = 'yes'
 WHERE  id=:id";
//Prepare Query for Execution
$query = $conn->prepare($sql);
// Bind the parameters
$query-> bindParam(':id',$yes, PDO::PARAM_STR);
// Query Execution
$query -> execute();
// Mesage after updation
echo "<script>alert('Record  successfully');</script>";
// Code for redirection
echo "<script>window.location.href='approval.php'</script>"; 
}
else{
	if($_REQUEST['status']=='no')
{
	$yes=intval($_GET['id']);

// Query for Query for Updation
$sql="UPDATE interviewjobs
SET approval = 'no'
 WHERE  id=:id";
//Prepare Query for Execution
$query = $conn->prepare($sql);
// Bind the parameters
$query-> bindParam(':id',$yes, PDO::PARAM_STR);
// Query Execution
$query -> execute();
// Mesage after updation
echo "<script>alert('Record  successfully');</script>";
// Code for redirection
echo "<script>window.location.href='approval.php'</script>"; 
}	
}
?>


	<!DOCTYPE html>
<html lang="en">


<head>
    <title>EEducation Master Template</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link rel="stylesheet" type="text/css" href="style.css">
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
</head>					
			<body>
 <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="index-2.html" class="logo"><img src="images/logo1.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="admin-all-enquiry.html" title="all enquiry messages"><i class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-course-enquiry.html" title="course booking messages"><i class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-admission-enquiry.html" title="admission enquiry"><i class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="admin-panel-setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

			
 <div class="container-fluid sb2">
        <div class="row">
			<?php include('side-menu.php') ?>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">			
					<h1><center>Approval</center></h1>		
							 <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
							<div class="table-responsive">       
							 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Profile Description</th>
                                    <th style="text-align:center;">Skill Required</th>
                                    <th style="text-align:center;">Mode of Job</th>
                                    <th style="text-align:center;">Job Description</th>
                                     <th style="text-align:center;">Company Name</th>
                                    <th style="text-align:center;">Experience</th>
                                    <th style="text-align:center;">Mode of Job Intern</th>
                                    <th style="text-align:center;">Batch</th>
                                     <th style="text-align:center;">Job Location</th>
                                    <th style="text-align:center;">Address</th>
                                    <th style="text-align:center;">Contact Person</th>
                                    <th style="text-align:center;">Mobile Number</th>
                                    <th style="text-align:center;">Location</th>
									<th style="text-align:center;">Status</th>
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                require_once('db.php');
                                $result = $conn->prepare("SELECT * FROM interviewjobs ORDER BY id ASC");
                                $result->execute();
                                for($i=0; $row = $result->fetch(); $i++){
                                //$id=$row['ID'];
                            ?>
                                <tr>                                                
                                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['profileDescription']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['SkillReq']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['ModeOfJob']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['JobDescription']; ?>
                                </td>
                                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['CompanyName']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['Experience']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['ModeOfJobIntern']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['Batch']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['JobLocation']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['Address']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['ContactPerson']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['MobileNo']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['Location']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['approval']; ?></td>
                                 <td> <a href="approval.php?id=<?php echo $row ['id'];?>&status=yes"><button name="yes" type="submit" class="btn btn-success">Approve</button></a></td>

								<td><a href="approval.php?id=<?php echo $row ['id'];?>&status=no" ><button name="" type="submit"  class="btn btn-danger">Deny</button></a></td>
								
                                </tr>
                                        <!--  -->
                            
                                        <!-- Modal Update Image -->
                            
                                <?php } ?>
                            </tbody>
                        </table>
						</div>	
			   </div>
            </div>

        </div>			
						
						    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>