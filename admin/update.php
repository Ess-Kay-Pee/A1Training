<?php
// include database connection file
require_once 'db.php';
if(isset($_POST['Skill']))
{
// Get the userid
$id=intval($_GET['id']);
// Posted Values  
$PD=$_POST['Profile_Description'];
$SR=$_POST['Skill'];
$MOJ=$_POST['Mode_of_Jobs'];
$JD=$_POST['Job_Description'];
$CN=$_POST['Company_name'];
$Exp=$_POST['Experience'];
$MOJI=$_POST['Mode_of_Jobs_Intern'];
$Bac=$_POST['Batch'];
$JL=$_POST['Job_Location'];
$Add=$_POST['Address'];
$CP=$_POST['Contact_Person'];
$MN=$_POST['Mobile_Number'];
$Loc=$_POST['Location'];



// Query for Query for Updation
$sql="update interviewjobs set profileDescription=:pd,SkillReq=:s,ModeOfJob=:moj,JobDescription=:jd,CompanyName=:cn,Experience=:e,ModeOfJobIntern=:moji,Batch=:b,JobLocation=:jl,Address=:a,ContactPerson=:cp,MobileNo=:mn,Location=:l where id=:id";
//Prepare Query for Execution
$query = $conn->prepare($sql);
// Bind the parameters
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->bindParam(':pd',$PD,PDO::PARAM_STR);
$query->bindParam(':s',$SR,PDO::PARAM_STR);
$query->bindParam(':moj',$MOJ,PDO::PARAM_STR);
$query->bindParam(':jd',$JD,PDO::PARAM_STR);
$query->bindParam(':cn',$CN,PDO::PARAM_STR);
$query->bindParam(':e',$Exp,PDO::PARAM_STR);
$query->bindParam(':moji',$MOJI,PDO::PARAM_STR);
$query->bindParam(':b',$Bac,PDO::PARAM_STR);
$query->bindParam(':jl',$JL,PDO::PARAM_STR);
$query->bindParam(':a',$Add,PDO::PARAM_STR);
$query->bindParam(':cp',$CP,PDO::PARAM_STR);
$query->bindParam(':mn',$MN,PDO::PARAM_STR);
$query->bindParam(':l',$Loc,PDO::PARAM_STR);

// Query Execution
$query->execute();
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='all-records.php'</script>"; 
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
    <!--== MAIN CONTRAINER ==-->
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

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
			<?php include('side-menu.php') ?>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add new Job</a>
                        </li>
                        <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Update</h4>
                                   
                                </div>
                                <div class="tab-inn">
                                    <form name="insertrecord" method="post">
									<?php
									// Get the userid
$id=intval($_GET['id']);
$sql= "select * from interviewjobs where id=:id";
//$sql = "SELECT id,profileDescription,SkillReq,ModeOfJob,JobDescription,CompanyName,Experience,ModeOfJobIntern,Batch,JobLocation,Address,ContactPerson,MobileNo,Location from interviewjobs where id=:id";
//Prepare the query:
$query = $conn->prepare($sql);
//Bind the parameters
$query->bindParam(':id',$id,PDO::PARAM_STR);
//Execute the query:
$query->execute();
//Assign the data which you pulled from the database (in the preceding step) to a variable.
$results=$query->fetchAll(PDO::FETCH_OBJ);
// For serial number initialization
$cnt=1;
if($query->rowCount() > 0)
{
//In case that the query returned at least one record, we can echo the records within a foreach loop:
foreach($results as $result)
{               
?>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="Profile_Description" value="<?php echo htmlentities($result->profileDescription);?>" class="form-control" required> 
                                                <label class="">Profile Description</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" name="Skill" value="<?php echo htmlentities($result->SkillReq);?>" class="form-control" required> 
                                                <label class="">Skill Required</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <select name="Mode_of_Jobs">
  <option value="Part_time">Part time</option>
  <option value="Full_time">Full time</option>
  <option value="Work_from_Home">Work from Home</option>
</select>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" name="Job_Description" class="validate" value="<?php echo htmlentities($result->JobDescription);?>" class="form-control" required> 
                                                <label class="">Job Description</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="Company_name" value="<?php echo htmlentities($result->CompanyName);?>" class="form-control" required> 
                                                <label class="">Company Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="Number" name="Experience" value="<?php echo htmlentities($result->Experience);?>" class="form-control" required>
                                                <label class="">Experience</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                             <select name="Mode_of_Jobs_Intern">
  <option value="Fresher">Fresher</option>
  <option value="Experience">Experience</option>
  <option value="BPO/KPO">BPO/KPO</option>
  <option value="Walk-in">Walk-in</option>
</select>
                                            </div>
                                            <div class="input-field col s6">
                                                <select name="Batch">
                                                <option value="Weekdays">Weekdays</option>
                                                <option value="Weekend">Weekend</option>
                                                <option value="both">Both</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="Job_Location" value="<?php echo htmlentities($result->JobLocation);?>" class="form-control" required> 
                                                <label>Job Location</label>
                                            </div>
                                            <div class="input-field col s6">    
                                                 <input type="text" name="Address" value="<?php echo htmlentities($result->Address);?>" class="form-control" required> 
                                                <label>Address</label>
                                             
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" name="Contact_Person" value="<?php echo htmlentities($result->ContactPerson);?>" class="form-control" required> 
                                                <label class="">Contact Person</label>
                                                 
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="Number" name="Mobile_Number" value="<?php echo htmlentities($result->MobileNo);?>" class="form-control" required> 
                                                <label class="">Mobile Number</label>
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                 <input type="text" name="Location" value="<?php echo htmlentities($result->Location);?>" class="form-control" required> 
                                                <label class="">Location</label>
                                               
                                            </div>
                                           
                                        </div>
                                                
                                            </div>
                                            <?php }} ?>

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<i class="waves-effect waves-light btn-large waves-input-wrapper" style=""><input type="submit" name="update" value="update" class="waves-button-input"></i>
</div>
</div> 
                                    </form>
                                </div>
                            </div>
							 
							
							
							
							
							
							
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>

