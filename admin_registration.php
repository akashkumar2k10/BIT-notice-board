<?php 
require('connection.php');
extract($_POST);

if(isset($save))
{
if($code=="bit123"){	
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from admins where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This admin already exists</font>";
}
else
{


//encrypt your password
$pass=md5($p);


$query="insert into admins values('','$n','$e','$pass','$mob','$gen')";
mysqli_query($conn,$query);



$err="<font color='blue'>Registration successfull !!</font>";
}
}
else{
	$err="<font color='red'>Registration Code is incorrect</font>";
}

}




?>
<h2>Admin Registration Form</h2>
		<form method="post">
			<table class="table table-bordered">
	<Tr>
		<Td colspan="2"><?php echo @$err;?></Td>
	</Tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input type="email"  class="form-control" name="e" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password"  class="form-control" name="p" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input  class="form-control" type="number" name="mob" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="m" required/>
				Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				<tr>
					<td>Registration Code</td>
					<td><input type="password" name="code" class="form-control"></td>
				</tr>

				
				
				
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>