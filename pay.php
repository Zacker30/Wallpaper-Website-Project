<?php
include("payme.php");
extract($_POST);
$sql = "INSERT INTO `payment`(`fname`, `email`, `cname`, `address`, `cnumber`, `city`, `exp`, `state`, `zipcode`, `year`, `cvv`) VALUES ('".$fname."','".$email."','".$cname."','".$address."',".$cnumber.",'".$city."','".$exp."','".$state."',".$zipcode.",".$year.",".$cvv.")";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
header("location: thankyou.php");
$mysqli->close();
?>