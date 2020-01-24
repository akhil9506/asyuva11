<?php 

$conn=mysqli_connect('localhot','root');
mysqli_select_db($con,'andhra samithi');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $secondname=$_POST['name'];

    $mobile=$_POST['mobile'];
    $q="INSERT INTO `carrom`(`player1`,`player2`,`mobile`) VALUES ('$name','$secondname','$mobile')";
    $query=mysqli_query($con,$q);
}


?>