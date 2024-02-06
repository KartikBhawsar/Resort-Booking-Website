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
margin-left:400px;
top:20px;
font-family:verdena;
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
font-size:25px;
position:absolute;
margin-left:700px;
border-bottom:3px solid white;
top:170px;
font-family:verdena;
}
div6
{
color:white;
font-size:20px;
position:absolute;
margin-left:500px;
top:250px;
font-family:verdena;
}
div7
{
position:absolute;
margin-left:700px;
top:250px;
}
div8{
position:absolute;
margin-left:690px;
top:340px;
}
div9{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:350px;
top:530px;
}
div10{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:680px;
top:530px;
}
div11{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:950px;
top:530px;
}
div12{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:350px;
top:590px;
}
div13{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:680px;
top:590px;
}
div14{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:950px;
top:590px;
}
div15{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:350px;
top:650px;
}
div16{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:680px;
top:650px;
}
div17{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:950px;
top:650px;
}
div18{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:350px;
top:710px;
}
div19{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:680px;
top:710px;
}
div20{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:950px;
top:710px;
}
div21{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:350px;
top:770px;
}
div22{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:680px;
top:770px;
}
div23{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:950px;
top:710px;
}
div24{
color:white;
font-size:25px;
font-family:verdena;
position:absolute;
margin-left:350px;
top:830px;
}
div25{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:1000px;
top:770px;
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
.button17{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button18{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 8px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:930px;
top:235px;
}
</style>
<body>
<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1537"height="150"></img></div1>
<div2><img src="https://seeklogo.com/images/W/wynn-resorts-logo-2F25AD2042-seeklogo.com.png"width="180"height="130"></img></div2>
<div3><p>Welcome <?php echo $row["username"];?>!</p></div3>
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
<div4><img src="https://wallpaper.dog/large/10921233.jpg"width="1535"height="800"></img></div4>
<!--------------------------------------------main site link------------------------------------------------->
<a href="http://localhost:8080/tutor/home.php"title="open main site"><p class="mainsite">--->Open Main Site<---</p></a>

<!----------------------------------------------logout button----------------------------------------------->
<a href="http://localhost:8080/tutor/logout.php"title="logout"><img src="https://cdn-icons-png.flaticon.com/128/9692/9692702.png"width="30"height="30"class="logout"></img></a>
<div5><p>Find Booking</p></div5>

<form action="adminfind.php"autocomplete="off"method="POST">
<div6><p>Enter Booking Number:</p></div6>
<div7><input type="text"name="booking"required></div7>
<button class="button17 button18"type="submit"name="submit">Find</button>
</form>
<?php
if(isset($_POST['submit'])){
 $booking=$_POST['booking'];
$query="SELECT * FROM reservation WHERE bookingno=$booking";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<!----------------------------------------------------------------Details----------------------------------------------------->
<div9><p>First Name :<?php echo $row["fname"];?></p></div9>
<div10><p>Last Name :<?php echo $row["lname"];?></p></div10>
<div11><p>Email Id :<?php echo $row["email"];?></p></div11>
<div12><p>Contact :<?php echo $row["contact"];?></p></div12>
<div13><p>City :<?php echo $row["city"];?></p></div13>
<div14><p>Address :<?php echo $row["address"];?></p></div14>
<div15><p>Adult :<?php echo $row["adult"];?></p></div15>
<div16><p>Childrens :<?php echo $row["childrens"];?></p></div16>
<div17><p>Status :   Booked</p></div17>
<div18><p>Check-in Date :<?php echo $row["checkin"];?></p></div18>
<div19><p>Check-out Date  :<?php echo $row["checkout"];?> </p></div19>
<!<div20><p>Room Type  : <?php echo $row["room"];?></p></div20>>
<div21><p>Booking Number  :<?php echo $row["bookingno"];?> </p></div21>
<div22><p>Card Number :<?php echo $row["cardno"];?></p></div22>
<div23><p>Card Holder Name :<?php echo $row["cardname"];?></p></div23>
<div24><p><strong>Total Amount Paid :INR <?php echo $row["total"];?></strong></p></div24>
<div25><p>Stays For:<?php echo $row["totalstaysdays"];?> Days</p></div25>
<?php
        }
    }else
    {
  ?>
    <tr>
        <td>NO Data Available</td>
    </tr>
<?php
    }
}
   ?>
</body>
</html>