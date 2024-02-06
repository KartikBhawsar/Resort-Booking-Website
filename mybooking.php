<?php include 'connection.php';?>
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
margin-left:0px;
top:0px;
opacity:0.5;
}
div3{
position:absolute;
color:white;
font-size:30px;
font-family:"lucida handwriting", cursive;
margin-left:530px;
top:80px;
}
div4{
position:absolute;
margin-left:420px; 
top:150px;
opacity:0.5;
}
div5{
position:absolute;
color:white;
font-size:25px;
font-family:"lucida handwriting", cursive;
margin-left:500px;
top:180px;
}
div6{
position:absolute;
color:white;
font-size:15px;
font-family:"lucida handwriting", cursive;
margin-left:450px;
top:220px;
}
div7{
position:absolute;
color:white;
font-size:20px;
font-family:"lucida handwriting", cursive;
margin-left:750px;
top:290px;
}
div8{
position:absolute;
color:white;
font-size:15px;
font-family:"lucida handwriting", cursive;
margin-left:450px;
top:340px;
}
div9{
position:absolute;
margin-left:620px;
top:340px;
}
div10{
position:absolute;
color:white;
font-size:15px;
font-family:"lucida handwriting", cursive;
margin-left:450px;
top:380px;
}
div11{
position:absolute;
margin-left:600px;
top:380px;
}
div12{
position:absolute;
margin-left:260px;
top:570px;
}
div13{
position:absolute;
margin-left:260px;
top:583px;
}
div14{
position:absolute;
margin-left:1260px;
top:583px;
}
div15{
position:absolute;
margin-left:260px;
top:1167px;
}
div16{
position:absolute;
margin-left:300px;
top:620px;
}
div17{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:300px;
top:660px;
}
div18{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:650px;
top:660px;
}
div19{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:930px;
top:660px;
}
div20{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:300px;
top:750px;
}
div21{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:700px;
top:750px;
}
div22{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:930px;
top:750px;
}
div23{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:300px;
top:850px;
}
div24{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:700px;
top:850px;
}
div25{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:930px;
top:850px;
}
div26{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:300px;
top:950px;
}
div27{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:640px;
top:950px;
}
div28{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:930px;
top:950px;
}
div29{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:930px;
top:950px;
}
div30{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:300px;
top:1050px;
}
div31{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:650px;
top:1050px;
}
div32{
color:white;
font-size:25px;
font-family:verdena;
position:absolute;
margin-left:620px;
top:1110px;
}
div33{
color:white;
font-size:30px;
font-family:verdena;
position:absolute;
margin-left:700px;
top:600px;
}
.button1{
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
.button2{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
margin-left:450px;
top:430px;
font-family:"lucida handwriting", cursive;
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
.button4{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
margin-left:760px;
font-family:"lucida handwriting",cursive;
top:430px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
font-family:"lucida handwriting", cursive;
  background-color:black;
 position: -webkit-sticky;
  position: sticky;
  top:10px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
border-bottom: 3px solid white;
}


</style>
<body>
<?php
$query="SELECT * FROM websitesettings";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<!---------------------------------------images------------------------------------------------------->
<div1><img src="https://images7.alphacoders.com/362/362619.jpg"width="1536"height="1200"></img></div1>
<div2><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1536"height="1200"></img></div2>
<div3><p>See Your Booking Status</p></div3>
<div4><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="700"height="400"></img></div4>
<div5><p>Manage my Booking</p></div5>
<div6><p>Need to make changes to your check-in,check-out date,special request or<br> cancel a reservation?You've come to the right place! </p></div6>
<div7><p><?php echo $row["websitename"];?></p></div7>
<ul>
  <li><a class="active" href="http://localhost:8080/tutor/home.php">Home</a></li>
  <li><a href="http://localhost:8080/tutor/rooms.php">Accommodations</a></li>
  <li><a href="http://localhost:8080/tutor/meetingandvenue.php">Meetings & Venues</a></li>
 <li><a href="http://localhost:8080/tutor/dinning.php">Dinning</a></li>
 <li><a href="http://localhost:8080/tutor/gallery.php">Gallery</a></li>
 <li><a href="http://localhost:8080/tutor/mybooking.php">My Bookings</a></li>
  <li><a href="http://localhost:8080/tutor/contact.php">Contact us</a></li>
<li style="float:right"><a href="http://localhost:8080/tutor/reservation.php" target="_blank">Book Now</a></li>
  <li style="float:right"><a href="<?php echo $row["facebooklink"];?>"><img src="https://cdn-icons-png.flaticon.com/128/1384/1384069.png"width="30"height="25"></img></a></li>
<li style="float:right"><a href="<?php echo $row["instalink"];?>"><img src="https://cdn-icons-png.flaticon.com/128/747/747562.png"width="30"height="25"></img></a></li>
<li style="float:right"><a href="<?php echo $row["twitterlink"];?>"><img src="https://cdn-icons-png.flaticon.com/128/747/747622.png"width="30"height="25"></img></a></li>

</ul>
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

   ?>

<!--------------------------------------status form------------------------------------->
<form action="mybooking.php"autocomplete="off"method="POST">
 <div8><label for="bno"><b><i>Booking Number:</i></b></label></div8>
 <div9><input type="text" id="bno" name="bno"size="20"required></div9>
 <div10><label for="email"><b><i>Email Address:</i></b></label></div10>
 <div11><input type="text" id="email" name="email"size="25"required></div11>
<button class="button1 button2"type="submit" name="submit">View this Reservation</button>
</form>
<a href="http://localhost:8080/tutor/cancellation.php"><button class="button3 button4"id="myButton"><i>Cancel Reservation</i></button></a>
<?php
if(isset($_POST['submit'])){
 $bno=$_POST['bno'];
 $email=$_POST['email'];
$query="SELECT * FROM reservation WHERE bookingno=$bno && email='$email'";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div12><img src="https://t3.ftcdn.net/jpg/01/91/95/30/360_F_191953033_gehQATeDoh5z6PyRDbeKyBZuS83CjMEF.jpg"width="1000"height="3"></img></div12>
<div13><img src="https://t3.ftcdn.net/jpg/01/91/95/30/360_F_191953033_gehQATeDoh5z6PyRDbeKyBZuS83CjMEF.jpg"width="3"height="600"></img></div13>
<div14><img src="https://t3.ftcdn.net/jpg/01/91/95/30/360_F_191953033_gehQATeDoh5z6PyRDbeKyBZuS83CjMEF.jpg"width="3"height="600"></img></div14>
<div15><img src="https://t3.ftcdn.net/jpg/01/91/95/30/360_F_191953033_gehQATeDoh5z6PyRDbeKyBZuS83CjMEF.jpg"width="1000"height="3"></img></div15>
<!----------------------------------------------------------------Details----------------------------------------------------->
<div17><p><b>First Name :<?php echo $row["fname"];?></b></p></div17>
<div18><p><b>Last Name :<?php echo $row["lname"];?></b></p></div18>
<div19><p><b>Email Id :<?php echo $row["email"];?></b></p></div19>
<div20><p><b>Contact :<?php echo $row["contact"];?></b></p></div20>
<div21><p><b>City :<?php echo $row["city"];?></b></p></div21>
<div22><p><b>Address :<?php echo $row["address"];?></b></p></div22>
<div23><p><b>Adult :<?php echo $row["adult"];?></b></p></div23>
<div24><p><b>Childrens :<?php echo $row["childrens"];?></b></p></div24>
<div25><p><b>Status :   Booked</b></p></div25>
<div26><p><b>Check-in Date :<?php echo $row["checkin"];?></b></p></div26>
<div27><p><b>Check-out Date  :<?php echo $row["checkout"];?></b> </p></div27>
<!<div28><p><b>Room Type  : <?php echo $row["room"];?></b></p></div28>>
<div29><p><b>Booking Number  :<?php echo $row["bookingno"];?></b> </p></div29>
<div30><p><b>Booked For :<?php echo $row["totalstaysdays"];?> Days</b></p></div30>
<div31><p><b>Time of Booking :<?php echo $row["timeofbooking"];?></b></p></div31>
<div32><p><strong>Total Amount Paid:INR <?php echo $row["total"];?></strong></p></div32>
<div33><p><b>Your Reservation</b></p></div33>
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
<script>
	// Set the timestamp when the button was created
	var buttonCreationTime = new Date().getTime();

	// Set the time in minutes after which the button should be removed
	var removalTimeInMinutes = 1;

	// Convert the removal time from minutes to milliseconds
	var removalTimeInMilliseconds = removalTimeInMinutes * 60 * 1000;

	// Calculate the time difference between now and the removal time
	var timeDifference = buttonCreationTime + removalTimeInMilliseconds - new Date().getTime();

	// Use JavaScript to remove the button after the specified time
	setTimeout(function() {
		document.getElementById("myButton").remove();
		// Use AJAX to notify the server that the button has been removed
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.open("GET", "removeButton.php", true);
		xmlhttp.send();
	}, timeDifference);
	</script>

</body>
</html>