<?php include'connection.php';
if(!empty($_SESSION["sno"])){
 $sno=$_SESSION["sno"];
$result=mysqli_query($conn,"SELECT * FROM adminsignup WHERE sno=$sno");
$row=mysqli_fetch_assoc($result);
$query="select * from cancelreservation";
$result=mysqli_query($conn,$query);
}
else
{
header("Location:login.php");
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
color:white;
font-size:30px;
position:absolute;
margin-left:620px;
top:180px;
font-family:"lucida handwriting",cursive;
border-bottom:3px solid white;
}
div6
{
position:absolute;
margin-left:430px;
top:280px;
}
.button1 {
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
.button2 {
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1113px;
top:70px;
}
.button3{
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
.button4 {
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:440px;
top:70px;
}
.button5{
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
.button6 {
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:673px;
top:70px;
}
.button7{
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
.button8{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:823px;
top:70px;
}
.button9{
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
.button10{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:960px;
top:70px;
}
.button11{
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
.button12{
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
.button13{
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
.button14{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1255px;
top:70px;
}
.button15{
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
.button16{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1405px;
top:70px;
}
table, th, td {
  border: 3px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}
th,tr {
  text-align: center;
}
</style>
<body>
<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1537"height="150"></img></div1>
<div2><img src="https://seeklogo.com/images/W/wynn-resorts-logo-2F25AD2042-seeklogo.com.png"width="180"height="130"></img></div2>
<div3><p><b>Welcome Admin!</b></p></div3>
<!----------------------------------------------button------------------------------------------------------->
<a href="http://localhost:8080/tutor/adminpanel.php"><button class="button1 button2">Gallery</button></a>
<a href="http://localhost:8080/tutor/adminbookingstatus.php"><button class="button3 button4">Booking Status</button></a>
<a href="http://localhost:8080/tutor/adminenquiry.php"><button class="button5 button6">Enquiry</button></a>
<a href="http://localhost:8080/tutor/adminrooms.php"><button class="button7 button8">Rooms</button></a>
<a href="http://localhost:8080/tutor/admincontact.php"><button class="button9 button10">Contact</button></a>
<a href="http://localhost:8080/tutor/websitesettings.php"><button class="button11 button12">Website Settings</button></a>
<a href="http://localhost:8080/tutor/analyse.php"><button class="button13 button14">Analyse</button></a>
<a href="http://localhost:8080/tutor/adminfind.php"><button class="button15 button16">Find</button></a>

<!----------------------------------------------image blue--------------------------------------------------->
<div4><img src="https://wallpaper.dog/large/10921233.jpg"width="1535"height="1400"></img></div4>
<div5><h>Cancel Reservation</h></div5>

<!----------------------------------------------Booking status data retrieve table------------------------------------------>
<div6>
 <table style="width:115%">
  <tr>
    <th>Sno</th>
    <th>Booking Number</th>
    <th>Feedback</th>
    <th>First Name</th>
    <th>Message</th>
    <th>Delete</th>
  </tr>
  <tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
?>
    <td><?php echo $row['sno']; ?></td>
    <td><?php echo $row['bookingno']; ?></td>
    <td><?php echo $row['feedback']; ?></td>
    <td><?php echo $row['fname']; ?></td>
    <td><?php echo $row['message']; ?></td>
    <td><a href="#"class="btn btn-danger">Delete</td>
  </tr>
<?php
}
?>
</table>
</div6>
<!--------------------------------------------main site link------------------------------------------------->
<a href="http://localhost:8080/tutor/home.php"title="open main site"><p class="mainsite">--->Open Main Site<---</p></a>

<!----------------------------------------------logout button----------------------------------------------->
<a href="http://localhost:8080/tutor/logout.php"title="logout"><img src="https://cdn-icons-png.flaticon.com/128/9692/9692702.png"width="30"height="30"class="logout"></img></a>
</body>
</html>