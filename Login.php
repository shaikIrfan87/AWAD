<?php
session_start();
include('connection.php');
?>
<form action=" " method="POST">
Username<input type="text" name="username"><br><br>
Password<input type="text" name="password"><br><br>
<input type="submit" name="submit" value="LOGIN">
</form>
<?php
if (isset($_POST["submit"]))
{
$user=$_POST["username"];
$psd=$_POST["password"];
$query="SELECT*FROM STUDENT WHERE USERNAME='$user' ";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total==1)
{
$_SESSION['user_name']=$user;
echo("login successful");
header('location:welcome.php');
}
else
{
echo("login failed!");
}
}
?>