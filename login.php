<?php include'connection.php';
if(isset($_POST['submit'])){
 $username=$_POST['username'];
$password=$_POST['pwd'];
$result=mysqli_query($conn,"SELECT * FROM adminsignup WHERE username='$username'");
$row=mysqli_fetch_assoc($result);
if(mysqli_num_rows($result)>0){
  if($password==$row["password"]){
    $_SESSION["login"]=true;
    $_SESSION["sno"]=$row["sno"];
    header("Location:websitesettings.php");
}
else{
  echo "<script>alert('Wrong Password');</script>";
}
}
else{
   echo "<script>alert('User Not Registered');</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>HOTEL BOOKING SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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
top:300px;
font-family:verdena;
}
div12{
position:absolute;
margin-left:780px;
top:340px;
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
margin-left:920px;
top:400px;
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
margin-left:790px;
top:400px;
}
</style>
<body>
<div1><img src="https://cdn.wallpapersafari.com/53/31/NblkQC.jpg"width="1520"height="700"></div1>
<div2><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="800"height="500"></div2>
<div3><img src="https://s3.amazonaws.com/cup-images/craftybob/large/cup528884_1519.jpg"width="800"height="6"></img></div3>
<div4><img src="https://s3.amazonaws.com/cup-images/craftybob/large/cup528884_1519.jpg"width="6"height="500"></img></div4>
<div5><img src="https://s3.amazonaws.com/cup-images/craftybob/large/cup528884_1519.jpg"width="800"height="6"></img></div5>
<div6><img src="https://s3.amazonaws.com/cup-images/craftybob/large/cup528884_1519.jpg"width="6"height="500"></img></div6>
<div7><p>Admin Login</p></div7>

<!----------------------------------------------------------logo------------------------------------------------->
<div8><img src="https://seeklogo.com/images/W/wynn-resorts-logo-2F25AD2042-seeklogo.com.png"width="200"height="150"></img></div8>

<!-----------------------------------------------------------login form------------------------------------------>
<form action="#"method="POST"autocomplete="off">
<div9><p>Enter Username</p></div9>
<div10><input type="text"name="username"size="20"required></div10>
<div11><p>Enter Password</p></div11>
<div12><input type="password"name="pwd"size="20"required></div12>
 <!-----------------------------submit button------------------------>
<button class="button1 button2"type="submit" name="submit"><b><i>Login</i></b></button>
</form>
<a href="http://localhost:8080/tutor/signup.php"><button class="button3 button4"><b>Signup</b></button></a>
</body>
</html>