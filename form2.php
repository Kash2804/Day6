<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Kishan Group Tuition</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include'./theme1/logo.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="logo.jpg" width="400" height="200" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">ADMISSION FORM </a></h2>
				
				
				<div class="entry">
                                    <form method="POST" action="admission1.php">
                                        <table>
          <tr>
             <td>Name</td>
             <td><input type="text" name="txt1" required/></td>
          </tr>
          <tr>
            <td>gender</td>
            <td><select name="txt2">
                <option>male</option>
                <option>female</option>
                </select>
            </td>
          </tr>
          <tr>
             <td>dob</td>
             <td><input type="date" name="txt3" required/></td>
          </tr>
          <tr>
             <td>email</td>
             <td><input type="email" name="txt4" required/></td>
          </tr>
          <tr>
             <td>password</td>
             <td><input type="password" name="txt5" required/></td>
          </tr>
          <tr>
             <td>mobile</td>
             <td><input type="number" name="txt6" required/></td>
          </tr>
          <tr>
             <td>address</td>
             <td><input type="text" name="txt7" required/></td>
          </tr>
          <tr>
             <td>area</td>
             <td><input type="text" name="txt8" required/></td>
          </tr>
          <tr>
             <td>bloodgroup</td>
             <td><input type="text" name="txt9" required/></td>
          </tr>
          <tr>
            <td><input type="submit"/></td>
          </tr>
       </table>
                                        
                                    </form>
				</div>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		
</div>
</body>
</html>

