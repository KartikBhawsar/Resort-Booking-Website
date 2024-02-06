<?php include'connection.php';
if(isset($_POST['submit'])){
 $username=$_POST['username'];
$gmail=$_POST['gmail'];
$password=$_POST['pwd'];
$confirmpassword=$_POST['cpwd'];
$to_email = "$gmail";
$subject = "Wynn Resort";
$body = "Thank You for Sign Up in Wynn Resort,Your Username is $username and Password is $password,Keep this for Future Reference and Do Not Share With Strangers or Any unknown Commodity. Regards Wynn Resort";
$headers = "From: kartikbhawsar2@gmail.com";
$duplicate=mysqli_query($conn,"SELECT * FROM adminsignup WHERE username='$username'");
if(mysqli_num_rows($duplicate)>0)
{
echo "<script>alert('Username Already exist');</script>";
}
else{
   if($password==$confirmpassword){
$sql ="INSERT INTO adminsignup(username,password,confirmpassword,gmail) values ('$username','$password','$confirmpassword','$gmail')";
mysqli_query($conn,$sql);
echo "<script>alert('Signup successfull');</script>";
mail($to_email, $subject, $body, $headers);
}
else{
echo "<script>alert('password does not match');</script>";
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>HOTEL BOOKING SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style>
div1{
position:absolute;
margin-left:0px;
top:0px;
}
div2{
position:absolute;
margin-left:350px;
top:120px;
}
div3{
position:absolute;
margin-left:350px;
top:110px;
}
div4{
position:absolute;
margin-left:350px;
top:122px;
}
div5{
position:absolute;
margin-left:350px;
top:605px;
}
div6{
position:absolute;
margin-left:1150px;
top:122px;
}
div7{
color:white;
font-size:20px;
position:absolute;
margin-left:680px;
top:140px;
font-family:"lucida handwriting",cursive;
border-bottom:1px solid white;
}
div8{
position:absolute;
margin-left:450px;
top:240px;
}
div9{
color:white;
font-size:20px;
position:absolute;
margin-left:780px;
top:220px;
font-family:verdena;
}
div10{
position:absolute;
margin-left:780px;
top:260px;
}
div11{
color:white;
font-size:20px;
position:absolute;
margin-left:780px;
top:380px;
font-family:verdena;
}
div12{
position:absolute;
margin-left:780px;
top:420px;
}
div13{
color:white;
font-size:20px;
position:absolute;
margin-left:780px;
top:460px;
font-family:verdena;
}
div14{
position:absolute;
margin-left:780px;
top:495px;
}
div15{
color:white;
font-size:20px;
position:absolute;
margin-left:780px;
top:300px;
font-family:verdena;
}
div16{
position:absolute;
margin-left:780px;
top:340px;
}
.changepassword{
position:absolute;
margin-left:480px;
top:450px;
}
.button1{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
font-family:verdena;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
margin-left:790px;
top:540px;
}
.button3{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
font-family:verdena;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button4{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
margin-left:920px;
top:540px;
}
</style>
<body>
<div1><img src="https://cdn.wallpapersafari.com/53/31/NblkQC.jpg"width="1520"height="700"></div1>
<div2><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="800"height="500"></div2>
<div3><img src="https://s3.amazonaws.com/cup-images/craftybob/large/cup528884_1519.jpg"width="800"height="6"></img></div3>
<div4><img src="https://s3.amazonaws.com/cup-images/craftybob/large/cup528884_1519.jpg"width="6"height="500"></img></div4>
<div5><img src="https://s3.amazonaws.com/cup-images/craftybob/large/cup528884_1519.jpg"width="800"height="6"></img></div5>
<div6><img src="https://s3.amazonaws.com/cup-images/craftybob/large/cup528884_1519.jpg"width="6"height="500"></img></div6>
<div7><p>Admin Signup</p></div7>

<!----------------------------------------------------------logo------------------------------------------------->
<div8><img src="https://seeklogo.com/images/W/wynn-resorts-logo-2F25AD2042-seeklogo.com.png"width="200"height="150"></img></div8>

<!-----------------------------------------------------------login form------------------------------------------>
<form action="#"method="POST"autocomplete="off">
<div9><p>Enter Username</p></div9>
<div10><input type="text"name="username"size="20"required></div10>
<div11><p>Enter Password</p></div11>
<div12><input type="password"name="pwd"size="20"required></div12>
<div13><p>Enter Confirm Password</p></div13>
<div14><input type="password"name="cpwd"size="20"required></div14>
<div15><p>Enter Gmail</p></div15>
<div16><input type="text"name="gmail"size="20"required></div16>
 <!-----------------------------submit button------------------------>
<button class="button1 button2"type="submit" name="submit"><b><i>Signup</i></b></button>
</form>
<a href="http://localhost:8080/tutor/login.php"><button class="button3 button4"><b>Login</b></button></a>

<!------------------------------------------------------------change password link------------------------------------------------>
<a href="http://localhost:8080/tutor/changepassword.php"title="change password"class="changepassword"><b>Change Password?</b></a>
</body>
</html>