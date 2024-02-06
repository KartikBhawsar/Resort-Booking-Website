<?php include'connection.php';?>
<!DOCTYPE html>
<html>
<head>
 <title>HOTEL BOOKING SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
body{
background-image:url("https://images.unsplash.com/photo-1596178060810-72f53ce9a65c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80");
background-repeat:no-repeat;
background-size: 1600px 500px;
position: -webkit-sticky; /* Safari */
  position: sticky;
}
.k{
color:white;
font-size:20px;
position:absolute;
margin-left:0px;
top:520px;
font-family:verdena;
}
div1{
position:absolute;
margin-left:0px;
top:500px;
}
div2{
color:white;
font-size:40px;
position:absolute;
margin-left:100px;
top:550px;
font-family:verdena;
border-bottom: 3px solid white;
}
div3{
position:absolute;
margin-left:30px;
top:650px;
}
div4{
position:absolute;
margin-left:400px;
top:650px;
}
div5{
position:absolute;
margin-left:770px;
top:650px;
}
div6{
position:absolute;
margin-left:1140px;
top:650px;
}
div7{
position:absolute;
margin-left:30px;
top:1010px;
}
div8{
position:absolute;
margin-left:400px;
top:1010px;
}
div9{
position:absolute;
margin-left:770px;
top:1010px;
}
div10{
position:absolute;
margin-left:1140px;
top:1010px;
}
div11{
color:white;
font-size:40px;
position:absolute;
margin-left:100px;
top:1380px;
font-family:verdena;
border-bottom: 3px solid white;
}
div12{
position:absolute;
margin-left:100px;
top:1500px;
}
div13{
position:absolute;
margin-left:100px;
top:1870px;
}
div14{
position:absolute;
margin-left:470px;
top:1500px;
}
div15{
color:white;
font-size:40px;
position:absolute;
margin-left:100px;
top:2250px;
font-family:verdena;
border-bottom: 3px solid white;
}
div16{
position:absolute;
margin-left:100px;
top:2350px;
}
div17{
position:absolute;
margin-left:100px;
top:2720px;
}
div18{
position:absolute;
margin-left:470px;
top:2350px;
}
div19{
color:white;
font-size:40px;
position:absolute;
margin-left:100px;
top:3100px;
font-family:verdena;
border-bottom: 3px solid white;
}
div20{
position:absolute;
margin-left:100px;
top:3150px;
}
div21{
position:absolute;
margin-left:100px;
top:3520px;
}
div22{
position:absolute;
margin-left:470px;
top:3150px;
}
div24{
color:white;
font-size:30px;
position:absolute;
margin-left:510px;
top:3950px;
font-family:verdena;
border-bottom: 3px solid blue;
}
div25{
position:absolute;
margin-left:150px;
top:4000px;
}
div26{
position:absolute;
margin-left:450px;
top:4000px;
}
div27{
position:absolute;
margin-left:750px;
top:4000px;
}
div28{
position:absolute;
margin-left:1050px;
top:4000px;
}
div29{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:500px;
top:4300px;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
font-family:"lucida handwriting", cursive;
  background-color:black;
 position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
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
</head>
<body>

<ul>
  <li><a class="active" href="http://localhost:8080/tutor/home.php">Home</a></li>
  <li><a href="http://localhost:8080/tutor/rooms.php">Accommodations</a></li>
  <li><a href="http://localhost:8080/tutor/meetingandvenue.php">Meetings & Venues</a></li>
 <li><a href="http://localhost:8080/tutor/dinning.php">Dinning</a></li>
 <li><a href="http://localhost:8080/tutor/gallery.php">Gallery</a></li>
 <li><a href="http://localhost:8080/tutor/mybooking.php">My Bookings</a></li>
  <li><a href="http://localhost:8080/tutor/contact.php">Contact us</a></li>
<li style="float:right"><a href="http://localhost:8080/tutor/reservation.php" target="_blank">Book Now</a></li>
  <li style="float:right"><a href="file:///C:/Users/HP/Desktop/contact.html"><img src="https://cdn-icons-png.flaticon.com/128/1384/1384069.png"width="30"height="25"></img></a></li>
<li style="float:right"><a href="file:///C:/Users/HP/Desktop/contact.html"><img src="https://cdn-icons-png.flaticon.com/128/747/747562.png"width="30"height="25"></img></a></li>
<li style="float:right"><a href="file:///C:/Users/HP/Desktop/login.html"><img src="https://cdn-icons-png.flaticon.com/128/747/747622.png"width="30"height="25"></img></a></li>
</ul>
<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1520"height="3880"></img></div1>
<marquee class="k"direction="left"scrollamount="10"><i>BOOK DIRECT TO RECEIVE EXCLUSIVE RATES,SPECIAL PACKAGES AND ADDITIONAL PERKS</i></marquee>
<div2><p><i>ACCOMMODATIONS</i></p></div2>
<?php
$query="SELECT * FROM admingallery";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div3><img src="<?php echo"fetchimage/".$row['firstroom'];?>" width="350px"height="350px" alt="image"></img></div3>
<div4><img src="<?php echo"fetchimage/".$row['secondroom'];?>" width="350px"height="350px" alt="image"></img></div4>
<div5><img src="<?php echo"fetchimage/".$row['thirdroom'];?>" width="350px"height="350px" alt="image"></img></div5>
<div6><img src="<?php echo"fetchimage/".$row['fourthroom'];?>" width="350px"height="350px" alt="image"></img></div6>
<div7><img src="<?php echo"fetchimage/".$row['fifthroom'];?>" width="350px"height="350px" alt="image"></img></div7>
<div8><img src="<?php echo"fetchimage/".$row['sixthroom'];?>" width="350px"height="350px" alt="image"></img></div8>
<div9><img src="<?php echo"fetchimage/".$row['seventhroom'];?>" width="350px"height="350px" alt="image"></img></div9>
<div10><img src="<?php echo"fetchimage/".$row['eigthroom'];?>" width="350px"height="350px" alt="image"></img></div10>
<div11><p><i>MEETINGS</i></p></div11>
<div12><img src="<?php echo"fetchimage/".$row['metfirst'];?>" width="350px"height="350px" alt="image"></img></div12>
<div13><img src="<?php echo"fetchimage/".$row['metsecond'];?>" width="350px"height="350px" alt="image"></img></div13>
<div14><img src="<?php echo"fetchimage/".$row['metthird'];?>" width="1000px"height="750px" alt="image"></img></div14>
<div15><p><i>EVENTS</i></p></div15>
<div16><img src="<?php echo"fetchimage/".$row['eventfirst'];?>" width="350px"height="350px" alt="image"></img></div16>
<div17><img src="<?php echo"fetchimage/".$row['eventsecond'];?>" width="350px"height="350px" alt="image"></img></div17>
<div18><img src="<?php echo"fetchimage/".$row['eventthird'];?>" width="1000px"height="750px" alt="image"></img></div18>
<div19><p><i>WEDDINGS</i></p></div19>
<div20><img src="<?php echo"fetchimage/".$row['wedfirst'];?>" width="350px"height="350px" alt="image"></img></div20>
<div21><img src="<?php echo"fetchimage/".$row['wedsecond'];?>" width="350px"height="350px" alt="image"></img></div21>
<div22><img src="<?php echo"fetchimage/".$row['wedthird'];?>" width="1000px"height="750px" alt="image"></img></div22>
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


<!--------------------------------------------------group brands------------------------------------------------------------------>
<div24><h>KINGSTON HOTELS GROUP BRANDS</h></div24>

<div25><img src="https://cdn.freebiesupply.com/logos/large/2x/w-hotels-1-logo-black-and-white.png"width="300"height="300"></img></div25>

<div26><img src="https://optimise2.assets-servd.host/super-conductor/production/uploads/project/evo-hotel/CS_EVO_532x480_Logo.jpg?w=660&h=595&auto=compress%2Cformat&fit=crop&dm=1658784648&s=22f9e3726a7d6fc595730fa86269b74a"width="300"height="300"></img></div26>

<div27><img src="https://img.myloview.com/posters/minimal-innovative-initial-sp-logo-and-ps-logo-letter-sp-ps-creative-elegant-monogram-premium-business-logo-icon-white-color-on-black-background-400-216885200.jpg"height="300"width="300"></img></div27>

<div28><img src="https://s3.us-east-1.amazonaws.com/cdn.designcrowd.com/blog/60-Hotel-Logos-For-Awesome-Vacation/beach%20hotel%20logos/hotel-royal-by-the-monochromatic-institute-dribbble.png"width="300"height="300"></img></div28>

<div29><p>© 2023 Wynn Resort. All Rights Reserved. Website Design India</p></div29>


</body>
</html>