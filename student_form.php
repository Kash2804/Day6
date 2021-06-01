<?php
$host="localhost";
$username="root";
$passwd="";
$dbname="db_form";
$connection=mysqli_connect($host, $username, $passwd, $dbname);
$q=mysqli_query($connection,
        "insert into tbl_student(st_name,st_gender,st_dob,st_email,st_password,st_mobile,st_address,st_area,st_bloodgroup) values('ajay','male','28may2001','abc@gmail.com','12345678','9876054231','a-23 nilay apartment','ahmedabad','o positive')") or die("Error".mysqli_error($connection));

        
if($q)
{
    echo"<script>alert('record added');</script>";
}
?>

