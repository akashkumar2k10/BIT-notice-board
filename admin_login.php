<?php 
extract($_POST);
if(isset($save))
{

  if($e=="" || $p=="")
  {
  $err="<font color='red'>fill all the fileds first</font>";  
  }
  else
  {
$pass=md5($p);  

$sql=mysqli_query($conn,"select * from admins where email='$e' and pass='$pass'");

$r=mysqli_num_rows($sql);

if($r==True)
{
$_SESSION['admin']=$e;
header('location:admin');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<h2>Admin Login Form</h2>
<form method="post">
  
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><?php echo @$err;?></div>
  </div>
  
  
  
  <div class="row">
    <div class="col-sm-4">Enter YOur Email</div>
    <div class="col-sm-5">
    <input type="email" name="e" class="form-control"/></div>
  </div>
  
  <div class="row">
    <div class="col-sm-4">Enter YOur Password</div>
    <div class="col-sm-5">
    <input type="password" name="p" class="form-control"/></div>
  </div>
  <div class="row" style="margin-top:10px">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <br>
    <input type="submit" value="Login" name="save" class="btn btn-success"/>
    <input type="reset" name="reset" class="btn">
    
    </div>
  </div>
</form> 