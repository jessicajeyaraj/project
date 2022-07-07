


<?php
session_start();
$l=$_POST['jessi'];
$_SESSION['name']=$l;
$b=$_POST['123456'];
$con=new mysqli("localhost","root","","acc");
$n="SELECT * FROM `acc` WHERE `Name`='$l';";
$f=mysqli_query($con,$n);
if($s=$f->fetch_assoc()){
    if($s['Barcode']==$b){
        header('Location:ses.php');
    }
    else{
        echo "incorrect barcode/password";
    }
}
else{
    echo "incorrect user";
}
?>