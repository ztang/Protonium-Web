<?php
$name = isset($_POST['nameinput'])?$_POST['nameinput']:'';
$email = isset($_POST['emailinput'])?$_POST['emailinput']:'';
//$current_url = $_SERVER["QUERY_STRING"];
$current_url = isset($_POST['current_url'])?$_POST['current_url']:'';
$con = mysqli_connect("localhost","root","tzqmiracle930201","protonium");
if (mysqli_connect_errno($con))
{
    echo "Sorry, information submited unsuccessfully";
}
mysqli_query($con,"INSERT INTO userinfo (name,email,current_url) VALUES ('$name', '$email', '$current_url')");
mysqli_close($con);
echo "Thanks, information submited successfully";
?>
