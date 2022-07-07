<?php
session_start();
$h=$_SESSION['name'];
$con=new mysqli("localhost","root","","acc");
$n="SELECT * FROM `acc` WHERE `Name`='$h';";
$f=mysqli_query($con,$n,);
if($s=$f->fetch_assoc()){
    echo '<html><head><style>
        body{background-color:pink;
        text-align:center;}
        #but{margin-left:500px;
             width:300px;
             background-color:white;
             font: size 50%;
            height:200px;}
    
         #1{
             margin:0;
         }   
        </style><script> function fun(){
           var x= document.getElementById("1");
           if(x.style.display =="none"){
               x.style.display = "block";
           }
           else{
               x.style.display="none";
           }
    }</script>';
    echo '<div id="but"><table><tr><td>Name</td><td>'.$s['Name']."</td></tr>";
    echo "<tr><td>Barcode</td><td>".$s['Barcode']."</td></tr>";
    echo "<tr><td>class</td><td>".$s['Class']."</td></tr>";
    echo "<tr><td>academic year</td><td>".$s['Academicyear']."</td></tr>";
    echo "<tr><td>date of birth</td><td>".$s['DOB']."</td></tr></table>";
    echo '<button onclick="fun()" >edit</button></div>';
    echo '<div id="1" style="display:none;">';
    include 'edit.html';
    echo "</div></body></html>";
}


?>