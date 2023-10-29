<?php

 include_once('../config.php');
// Data retreived  begins here
$email=$_POST['useremail'];
//echo $email;
$password=$_POST['pass1'];
//echo $password;
$name=$_POST['uname'];
$mobile=$_POST['mobno'];
$experience=$_POST['experience'];
$skills=$_POST['skills'];
$ug=$_POST['ugcourse'];
$pg=$_POST['pgcourse'];
$countryid=$_POST['country'];
$stateid=$_POST['state'];
$cityid=$_POST['city'];
$location="";
$type="jobseeker";
// data retreived ends here

// now wants to fetch data from location db


mysqli_select_db($db1,"jobportal");

$query4="INSERT INTO login (name,phone,location,experience,skills,basic_edu,master_edu,email,password,usertype,status) 
							VALUES ('$name','$mobile','$location','$experience','$skills','$ug','$pg','$email','$password','$type',1)";
    $result1 = mysqli_query($db1,$query4) or die("Cant Register , The user email may be already existing");

 //$result2 = mysqli_query($db1,$query5);
if (!mysqli_query($db1,$query4))
{
 echo("Error description: " . mysqli_error($db1));
}
else{
    header('location:../login.php?msg=registered');
}

?>