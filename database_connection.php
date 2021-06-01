<?php
$host="localhost";
$username="root";
$passwd="";
$dbname="db_internship";
$connection=mysqli_connect($host, $username, $passwd, $dbname);
$q=mysqli_query($connection,
        "insert into tbl_user1(	user1_name,user1_gender,user1_mobile) values('ajay','male','5678904321')") or die("Error".mysqli_error($connection));

        
if($q)
{
    echo"<script>alert('record added');</script>";
}
?>


