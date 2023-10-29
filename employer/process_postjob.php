<?php

include_once('../config.php');
session_start();
$eid=$_SESSION['eid'];
$desig=$_POST['desig'];
$vacno=$_POST['vacno'];
$desc=$_POST['jobdesc'];
$exp=$_POST['exp'];
$money=$_POST['money'];
$salary=$_POST['pay'];
$fnarea=$_POST['fnarea'];
$countryid=$_POST['country'];
$indtype=$_POST['indtype'];
$ug=$_POST['ugcourse'];
$pg=$_POST['pgcourse'];
$profile=$_POST['profile'];
$date=date('d-m-y');
$pay=$money." ".$salary;

mysqli_select_db($db1,"jobportal");

$query4="insert into jobs (eid,title,jobdesc,vacno,experience,basicpay,fnarea,location,industry,ugqual,pgqual,jprofile,postdate )
					VALUES ('$eid','$desig','$desc','$vacno','$exp','$pay','$fnarea','$countryid','$indtype','$ug','$pg','$profile','$date')";

if (!mysqli_query($db1,$query4))
{
 echo("Error description: " . mysqli_error($db1));
}
else{
    header('location:profile.php?msg=jobposted');
}
?>