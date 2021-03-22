
<?php
require_once ('db.php');
echo "<h2>PHP </h2>";
if(isset($_POST['Submit'])) {	
$id=$_POST['id'];	
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

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO interviewjobs (profileDescription,SkillReq,ModeOfJob,JobDescription,CompanyName,Experience,ModeOfJobIntern,Batch,JobLocation,Address,ContactPerson,MobileNo,Location)
VALUES('$PD','$SR','$MOJ','$JD','$CN','$Exp','$MOJI','$Bac','$JL','$Add','$CP','$MN','$Loc')";

$conn->exec($sql);
echo "<script>alert('Successfully Added!!!'); window.location='admin-user-add.php'</script>";
// }
}
// }
?>