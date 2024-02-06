<?php include 'connection.php';?>
<!DOCTYPE html>
<html>
<head>
<title>HOTEL BOOKING SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
div1{
position:absolute;
margin-left:0px;
top:750px;
}
div2{
color:white;
font-size:40px;
position:absolute;
margin-left:550px;
top:760px;
font-family:verdena;
}
div3{
color:white;
font-size:20px;
position:absolute;
margin-left:350px;
top:860px;
font-family:verdena;
}
div4{
position:absolute;
margin-left:0px;
top:1000px;
border-bottom: 3px solid white;
}
div5{
position:absolute;
margin-left:520px;
top:1000px;
border-bottom: 3px solid white;
}
div6{
position:absolute;
margin-left:1050px;
top:1000px;
border-bottom: 3px solid white;
}
div8{
position:absolute;
margin-left:100px;
top:1500px;
}
div9{
color:white;
font-size:20px;
position:absolute;
margin-left:750px;
top:1600px;
font-family:verdena;
}
div10{
color:white;
font-size:20px;
position:absolute;
margin-left:750px;
top:1850px;
font-family:verdena;
}
div11{
position:absolute;
margin-left:830px;
top:2080px;
}
div12{
color:white;
font-size:20px;
position:absolute;
margin-left:90px;
top:2150px;
font-family:verdena;
}
div13{
color:white;
font-size:20px;
position:absolute;
margin-left:90px;
top:2400px;
font-family:verdena;
}
div14{
color:white;
font-size:50px;
position:absolute;
margin-left:550px;
top:2650px;
font-family:verdena;
}
div15{
position:absolute;
margin-left:40px;
top:2780px;
}
div16{
color:white;
font-size:20px;
position:absolute;
margin-left:700px;
top:2850px;
font-family:verdena;
}
div17{
color:white;
font-size:20px;
position:absolute;
margin-left:700px;
top:3100px;
font-family:verdena
}
div18{
color:white;
font-size:50px;
position:absolute;
margin-left:550px;
top:3350px;
font-family:verdena;
}
div19{
position:absolute;
margin-left:40px;
top:3450px;
}
div20{
color:white;
font-size:20px;
position:absolute;
margin-left:700px;
top:3600px;
font-family:verdena;

}
div50{
color:white;
font-size:30px;
position:absolute;
margin-left:510px;
top:3990px;
font-family:verdena;
border-bottom: 3px solid white;
}
div51{
position:absolute;
margin-left:150px;
top:4050px;
}
div52{
position:absolute;
margin-left:450px;
top:4050px;
}
div53{
position:absolute;
margin-left:750px;
top:4050px;
}
div54{
position:absolute;
margin-left:1050px;
top:4050px;
}
div55{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:500px;
top:4350px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow:hidden;
font-family:"lucida handwriting", cursive;
  background-color:black;
 position: -webkit-sticky; /* Safari */
  position:sticky;
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
<?php
$query="SELECT * FROM websitesettings";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
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
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  <?php
$query="SELECT * FROM adminmeetings";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo"fetchimage/".$row['carousalfirst'];?>" alt="image" class="d-block"width="1540"height="700">
    </div>
    <div class="carousel-item">
      <img src="<?php echo"fetchimage/".$row['carousalsecond'];?>" alt="Chicago" class="d-block"width="1540"height="700">
    </div>
    <div class="carousel-item">
      <img src="<?php echo"fetchimage/".$row['carousalthird'];?>" alt="New York" class="d-block"width="1540"height="700">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
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
<?php
$query="SELECT * FROM websitesettings";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1520"height="3650"></img></div1>
<div2><p>MEETINGS & EVENTS</p></div2>
<div3><p><b><?php echo $row["websitename"];?> offers four spacious function rooms with modern facilities, 180 degree Bangkok<br> city views and natural daylight.</b></p></div3>
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
<?php
$query="SELECT * FROM adminmeetings";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div4><img src="<?php echo"fetchimage/".$row['imagefirst'];?>"width="500"height="400"></img></div4>
<div5><img src="<?php echo"fetchimage/".$row['imagesecond'];?>"width="500"height="400"></img></div5>
<div6><img src="<?php echo"fetchimage/".$row['imagethird'];?>"width="500"height="400"></img></div6>
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
<?php
$query="SELECT * FROM websitesettings";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div8><img src="https://images.pexels.com/photos/2291462/pexels-photo-2291462.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"width="600"height="500"></img></div8>
<div9><p><b>From intimate weddings to workshops and everything in between,<br> <?php echo $row["websitename"];?> will exceed your expectations with our range of event<br> spaces and professional 5-star service level. As masters of sophist-<br>ication, we pride ourselves on hosting noteworthy functions that<br> will impress your guests.</b>
</p></div9>
<div10><p><b>Seating arrangements can be tailored to your events needs from<br> boardroom to banquet hall. The <?php echo $row["websitename"];?> Room is also conveniently<br> located on the same floor as two adjoining meeting spaces offering<br> additional space for your function if necessary.</b></p></div10>
<div11><img src="https://images.pexels.com/photos/6130064/pexels-photo-6130064.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"width="600"height="500"></img></div11>
<div12><p><b><?php echo $row["websitename"];?> also offers a wide-range of catering styles and cuisine options to<br> suit your needs. Our dedicated team will work with you to ensure a<br> smooth and satisfying food service is delivered for every type of event.</b></p></div12>
<div13><p><b>Located just steps away from Phromphong BTS Station on the coveted<br> Sukhumvit Soi 24, <?php echo $row["websitename"];?> event spaces are the ideal spot for your function.<br> We invite you to explore our options and contact us for a quote and to<br> schedule a viewing.</p></div13>
<div14><p><b>The <?php echo $row["websitename"];?> Room</b></p></div14>
<div15><img src="https://images.pexels.com/photos/2306281/pexels-photo-2306281.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"width="600"height="500"></img></div15>
<div16><p><b>Let us host an event to go down in the memory books in our prized function hall, The Valia Room. Set high above the city on the 18th floor, The Valia Room offers fantastic skyline views and is brimming with natural daylight through the floor-to-ceiling windows and double-height ceilings</b></p></div16>
<div17><p><b>This 138 square meter assembly room features beautiful glass chandeliers,<br> soft wall-to-wall carpeting and is decorated with subtle yet elegant textures and hues.</b></p></div17>
<div18><p><?php echo $row["websitename"];?> Meeting Rooms</p></div18>
<div19><img src="https://images.pexels.com/photos/8143705/pexels-photo-8143705.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"width="600"height="500"></img></div19>
<div20><p><b><?php echo $row["websitename"];?> gives businesses a variety of options when it comes to hosting an event with us.<br> Our three separate meeting rooms vary in size designed for small gatherings to larger<br> seminars seating up to one hundred guests. Two of the meeting rooms are on the 18th<br> floor alongside The Valia Room, making it convenient for larger events requiring multiple spaces. A third meeting room is set on the 6th floor of the same building</b></p></div20>
<div50><h>KINGSTON HOTELS GROUP BRANDS</h></div50>

<div51><img src="https://cdn.freebiesupply.com/logos/large/2x/w-hotels-1-logo-black-and-white.png"width="300"height="300"></img></div51>

<div52><img src="https://optimise2.assets-servd.host/super-conductor/production/uploads/project/evo-hotel/CS_EVO_532x480_Logo.jpg?w=660&h=595&auto=compress%2Cformat&fit=crop&dm=1658784648&s=22f9e3726a7d6fc595730fa86269b74a"width="300"height="300"></img></div52>

<div53><img src="https://img.myloview.com/posters/minimal-innovative-initial-sp-logo-and-ps-logo-letter-sp-ps-creative-elegant-monogram-premium-business-logo-icon-white-color-on-black-background-400-216885200.jpg"height="300"width="300"></img></div53>

<div54><img src="https://s3.us-east-1.amazonaws.com/cdn.designcrowd.com/blog/60-Hotel-Logos-For-Awesome-Vacation/beach%20hotel%20logos/hotel-royal-by-the-monochromatic-institute-dribbble.png"width="300"height="300"></img></div54>

<div55><p>© 2023 <?php echo $row["websitename"];?>. All Rights Reserved. Website Design India</p></div55>

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
</body>
</html>

