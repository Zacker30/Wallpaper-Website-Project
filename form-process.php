<?php
include("contact.php");
extract($_POST);
$sql = "INSERT INTO `contact-data`(`firstname`, `lastname`, `phone`, `email`, `messages`) VALUES ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$messages."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
header("location: home.php");
$mysqli->close();
?>