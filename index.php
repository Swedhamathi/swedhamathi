<?php
$host='localhost';
$username='id2436507_root';
$password='madhu';
$db='id2436507_admin';
$conn=mysqli_connect($host,$username,$password)or die("Unable to connect");

mysqli_select_db($conn,$db)or die("Unable to select");

if(isset($_POST['submit']))
{
$username=$_POST['fname'];
$password=$_POST['pwd'];

$sql="SELECT * FROM login WHERE username='$username'
AND password='$password'";
$result=mysqli_query($conn,$sql)or die("Records not found!");
$count=mysqli_num_rows($result);
if($count>0)
  {
     header('location:myres.html');
  }
else
{
echo"Invalid Credentials";
}
}
mysqli_close($conn);
?>
<html>
<head><title>Login Page</title>
<style type="text/css">
fieldset
{
margin-top:150px;
margin-bottom:150px;
margin-right:150px;
margin-left:450px;
border:3px solid #a1a1a1;
padding:9px 35px; 
width:400px;
border-radius:50px;
border-color:black;
}
</style>
</head>
<body background="Ti6qoP7.jpg" size="">
<form action="" method="post">
<fieldset>
<h1><center>Login<center></h1>
<b>Name<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter Username" name="fname" ></br></br><br>
<b>Password</b>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input type="password" placeholder="Enter password" name="pwd" ></br></br>
<button type="submit" name="submit">Login</button>
<button type="button" name="cancel">cancel</button></br>
<input type="checkbox" checked="check">Remember me</input></div><br>
</fieldset>
</form>
</body>
</html>
