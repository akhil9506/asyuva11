<?php 

$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'andhra samithi');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $q="INSERT INTO `chess`(`name`,`mobile`) VALUES ('$name','$mobile')";
    $query=mysqli_query($con,$q);
}

?>