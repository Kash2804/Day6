<?php
$connection=mysqli_connect("localhost","root","","db_theme1");
if($_POST){
    $name=$_POST['txt1'];
    $gender=$_POST['txt2'];
    $dob=$_POST['txt3'];
    $email=$_POST['txt4'];
    $password=$_POST['txt5'];
    $mobile=$_POST['txt6'];
    $address=$_POST['txt7'];
    $area=$_POST['txt8'];
    $bloodgroup=$_POST['txt9'];
    $q=mysqli_query($connection,
        "insert into tbl_th1(th1_name,th1_gender,th1_dob,th1_email,th1_password,th1_mobile,th1_address,th1_area,th1_bloodgroup) values('{$name}','{$gender}','{$dob}','{$email}','{$password}','{$mobile}','{$address}','{$area}','{$bloodgroup}')") or die("Error".mysqli_error($connection));

        
if($q)
{
    echo"<script>alert('record added');</script>";
}
    
}

?>

