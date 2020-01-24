<?php 


$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'andhra samithi');
if(isset($_POST['submit'])){
    $captian=$_POST['Captian'];
    $teamname=$_POST['teamname'];
    $mobile=$_POST['mobile'];
    $team=$_POST['team'];
    $q="INSERT INTO `football`(`captian`,`teamname`,`mobile`,`team`) VALUES ('$captian','$teamname','$mobile','$team')";
    $query=mysqli_query($con,$q);
}


?>