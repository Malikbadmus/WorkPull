<?php
include_once('../config.php');
$email=$_POST['email'];
$password=$_POST['pass1'];

$name=$_POST['compname'];
$type=$_POST['comtype'];
//echo $type;
$industry=$_POST['indtype'];
//echo $industry;
$addr=$_POST['addr'];
$pin=$_POST['pin_code'];
$person=$_POST['person'];
$phone=$_POST['phone'];
$countryid=$_POST['country'];
$stateid=$_POST['state'];
$profile=$_POST['profile'];

$query4="INSERT INTO employer (email,password,usertype,status,ename,phone,location,etype,address,pincode,executive,industry,profile)
					VALUES ('$email','$password','employer',0,'$name','$phone','$countryid','$type','$addr','$pin','$person','$industry','$profile')";
    $result1 = mysqli_query($db1,$query4) or die("Cant Register , The user email may be already existing");


 //$result2 = mysqli_query($db1,$query5);
if (!mysqli_query($db1,$query4))
{
    echo("Error description: " . mysqli_error($db1));
}
else{
    header('location: ../elogin.php?msg=registered');
}
?>