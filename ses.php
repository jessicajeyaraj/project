
<?php
session_start();
$h=$_SESSION['name'];
$con=new mysqli("localhost","root","","acc");
$n="SELECT * FROM `acc` WHERE `Name`='$h';";
$f=mysqli_query($con,$n);

if($s=$f->fetch_assoc()){
    echo "<html><head><style>
    table{margin-left:450px;
    margin-top:50px;
background-color:white;
padding:0;
border-radius:0px;}
td{
    border-color:black;
    border-style:solid;
    border-width:2px;
    padding:10px;
    border-radius:10px;
}
    h1{text-align:center;}
    body{background-color:skyblue;}

    </style></head><body>
    <h1>BEST ENGINEERING COLLEGE ACCOUNT SYSTEM</h1>";
    echo '<h1><a href="pro.php">My Profile</a></h1>';
    echo "<table><tr><td>Name</td><td>".$s['Name']."</td></tr>";
    echo "<tr><td>Barcode</td><td>".$s['Barcode']."</td></tr>";
    echo "<tr><td>class</td><td>".$s['Class']."</td></tr>";
    echo "<tr><td>academic year</td><td>".$s['Academicyear']."</td></tr>";
    echo "<tr><td>date of birth</td><td>".$s['DOB']."</td></tr>";
    echo "<tr><td>application no</td><td>".$s['applicationno']."</td></tr>";
    echo "<tr><td>college name</td><td>".$s['college']."</td></tr>";
    echo "<tr><td>category</td><td>".$s['category']."</td></tr>";
    echo "<tr><td>acadamic fee</td><td>".$s['fullfee']."</td></tr>";
    echo "<tr><td>tution fee</td><td>".$s['tutionfee']."</td></tr>";
    echo "<tr><td>hostel fee</td><td>".$s['hostelfee']."</td></tr>";
    echo "</body></html>";
}
    ?>
