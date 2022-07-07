<?php
$con=new mysqli("localhost","root","","acc");
$q=$_POST['jessi'];
$z=$_POST['123456'];
$o=$_POST['2ndcse'];
$ab=$_POST['2022'];
$hy=$_POST['date'];
$hp="UPDATE `acc` SET `Barcode`='$z',`Class`='$o',`Academicyear`='$ab',`DOB`='$hy' WHERE `Name`='$q';";
$f=mysqli_query($con,$hp);
?>