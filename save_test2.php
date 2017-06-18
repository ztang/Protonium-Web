<?php
$name = isset($_POST['nameinput'])?$_POST['nameinput']:'';
$email = isset($_POST['emailinput'])?$_POST['emailinput']:'';
//$current_url = $_SERVER["QUERY_STRING"];
$current_url = isset($_POST['current_url'])?$_POST['current_url']:'';
$usage_input = isset($_POST['usage_input'])?$_POST['usage_input']:'';
$industry_input = isset($_POST['industry_input'])?$_POST['industry_input']:'';
$text_input = isset($_POST['text_input'])?$_POST['text_input']:'';
$con = mysqli_connect("localhost","root","PASSWORD","protonium");
if (mysqli_connect_errno($con))
{
    echo "Sorry, information submited unsuccessfully";
}
mysqli_query($con,"INSERT INTO userinfo (name,email,current_url,usage_input,industry_input,text_input) VALUES ('$name', '$email', '$current_url', '$usage_input', '$industry_input', '$text_input')");
mysqli_close($con);
echo "Thanks, information submited successfully";
?>
