<?php include'connection.php';
if(!empty($_SESSION["sno"])){
 $sno=$_SESSION["sno"];
$result=mysqli_query($conn,"SELECT * FROM adminsignup WHERE sno=$sno");
$row=mysqli_fetch_assoc($result);
}
else
{
header("Location:login.php");
}
if(isset($_POST['update1'])){
$msgone=$_POST['msgone'];
$sql = "UPDATE admincontact SET address='$msgone' WHERE sno=1";
mysqli_query($conn,$sql);
}
if(isset($_POST['update2'])){
$telephone=$_POST['telephone'];
$sql = "UPDATE admincontact SET telephone=$telephone WHERE sno=1";
mysqli_query($conn,$sql);
}
if(isset($_POST['update3'])){
$genenq=$_POST['genenq'];
$sql = "UPDATE admincontact SET general='$genenq' WHERE sno=1";
mysqli_query($conn,$sql);
}
if(isset($_POST['update4'])){
$resenq=$_POST['resenq'];
$sql = "UPDATE admincontact SET reservation='$resenq' WHERE sno=1";
mysqli_query($conn,$sql);
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
.mainsite{
color:red;
font-size:15px;
position:absolute;
margin-left:1250px;
top:20px;
}
.logout
{
position:absolute;
margin-left:1430px;
top:20px;
}
div1
{
position:absolute;
margin-left:0px;
top:0px;
}
div2
{
position:absolute;
margin-left:10px;
top:10px;
}
div3
{
color:white;
font-size:30px;
position:absolute;
margin-left:590px;
top:20px;
font-family:"lucida handwriting",cursive;
}
div4
{
position:absolute;
margin-left:0px;
top:150px;
}
div5
{
position:absolute;
margin-left:100px;
top:200px;
}
div6
{
position:absolute;
margin-left:130px;
top:230px;
}
div7
{
color:white;
font-size:30px;
position:absolute;
margin-left:590px;
top:240px;
font-family:"lucida handwriting",cursive;
border-bottom:3px solid white;
}
div8
{
position:absolute;
margin-left:300px;
top:350px;
}
div9
{
color:white;
font-size:20px;
position:absolute;
margin-left:400px;
top:360px;
font-family:"lucida handwriting",cursive;
}
div10
{
position:absolute;
margin-left:550px;
top:330px;
}
div11
{
position:absolute;
margin-left:300px;
top:500px;
}
div12
{
color:white;
font-size:20px;
position:absolute;
margin-left:400px;
top:500px;
font-family:"lucida handwriting",cursive;
}
div13
{
position:absolute;
margin-left:550px;
top:500px;
}
div14
{
position:absolute;
margin-left:300px;
top:600px;
}
div15
{
color:white;
font-size:20px;
position:absolute;
margin-left:400px;
top:600px;
font-family:"lucida handwriting",cursive;
}
div16
{
color:white;
font-size:20px;
position:absolute;
margin-left:540px;
top:600px;
font-family:"lucida handwriting",cursive;
}
div17
{
color:white;
font-size:20px;
position:absolute;
margin-left:540px;
top:650px;
font-family:"lucida handwriting",cursive;
}
div18
{
position:absolute;
margin-left:790px;
top:600px;
}
div19
{
position:absolute;
margin-left:790px;
top:650px;
}
.button0 {
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:200px;
top:70px;
}
.button2{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:438px;
top:70px;
}
.button4{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button5 {
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:668px;
top:70px;
}
.button6{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button7{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:818px;
top:70px;
}
.button8{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button9{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:953px;
top:70px;
}
.button10{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button11{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:380px;
}
.button12{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button13{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:490px;
}
.button14{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button15{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:590px;
}
.button16{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button17{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:640px;
}
.button18{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button19{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1102px;
top:70px;
}
.button20{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button21{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1245px;
top:70px;
}
.button31{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button32{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 12px 30px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1395px;
top:75px;
}
</style>
<body>
<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1537"height="150"></img></div1>
<div2><img src="https://seeklogo.com/images/W/wynn-resorts-logo-2F25AD2042-seeklogo.com.png"width="180"height="130"></img></div2>
<div3><p>Welcome Admin!</p></div3>
<!----------------------------------------------button------------------------------------------------------->
<a href="http://localhost:8080/tutor/websitesettings.php"><button class="button0 button1">Website Settings</button></a>
<a href="http://localhost:8080/tutor/adminbookingstatus.php"><button class="button2 button3">Booking Status</button></a>
<a href="http://localhost:8080/tutor/adminenquiry.php"><button class="button4 button5">Enquiry</button></a>
<a href="http://localhost:8080/tutor/adminrooms.php"><button class="button6 button7">Rooms</button></a>
<a href="http://localhost:8080/tutor/admincontact.php"><button class="button8 button9">Contact</button></a>
<a href="http://localhost:8080/tutor/adminpanel.php"><button class="button18 button19">Gallery</button></a>
<a href="http://localhost:8080/tutor/analyse.php"><button class="button20 button21">Analyse</button></a>
<a href="http://localhost:8080/tutor/adminfind.php"><button class="button3 button32">Find</button></a>
<!----------------------------------------------images------------------------------------------------------->
<div4><img src="https://wallpaper.dog/large/10921233.jpg"width="1535"height="700"></img></div4>
<div5><img src="https://t3.ftcdn.net/jpg/04/42/47/52/360_F_442475292_5ouemiiJiArGyNKSWgUpkRR8lmep6jgM.jpg"width="1300"height="600"></img></div5>
<div6><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1240"height="535"></img></div6>
<!----------------------------------------------------------contact details--------------------------------------------->
<div7><p>Contact Details</p></div7>
<form action="#" method="POST">
<div8><img src="https://cdn-icons-png.flaticon.com/128/684/684908.png"width="50"height="40"></img></div8>
<div9>Address:</div9>
<div10><textarea name="msgone" rows="5" cols="40"></textarea></div10>

<div11><img src="https://cdn-icons-png.flaticon.com/128/9840/9840384.png"width="50"height="40"></img></div11>
<div12>Telephone:</div12>
<div13><input type="number" name="telephone"></div13>

<div14><img src="https://cdn-icons-png.flaticon.com/128/2875/2875435.png"width="50"height="40"></img></div14>
<div15>Contact:</div15>
<div16>General Enquires:</div16>
<div17>Reservation Enquires:</div17>
<div18><input type="text"name="genenq"size="20"></div18>
<div19><input type="text"name="resenq"size="20"></div19>
<!--------------------------------------------submit button---------------------------------------------->
<button class="button10 button11"type="submit"name="update1">Update</button>
<button class="button12 button13"type="submit"name="update2">Update</button>
<button class="button14 button15"type="submit"name="update3">Update</button>
<button class="button16 button17"type="submit"name="update4">Update</button>
</form>
<!--------------------------------------------main site link------------------------------------------------->
<a href="http://localhost:8080/tutor/home.php"title="open main site"><p class="mainsite">--->Open Main Site<---</p></a>

<!----------------------------------------------logout button----------------------------------------------->
<a href="http://localhost:8080/tutor/logout.php"title="logout"><img src="https://cdn-icons-png.flaticon.com/128/9692/9692702.png"width="30"height="30"class="logout"></img></a>
</body>
</html>