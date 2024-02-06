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
top:550px;
}
div2{
color:white;
font-size:70px;
position:absolute;
margin-left:150px;
top:560px;
font-family:verdena;
border-bottom: 3px solid white;
}
div3{
color:white;
font-size:20px;
position:absolute;
margin-left:150px;
top:760px;
font-family:verdena;
}
div4{
position:absolute;
margin-left:1050px;
top:560px;
}
div5{
color:white;
font-size:30px;
position:absolute;
margin-left:150px;
top:930px;
font-family:verdena;
border-bottom: 3px solid white;
}
div6{
color:white;
font-size:20px;
position:absolute;
margin-left:650px;
top:930px;
font-family:verdena;
border-bottom: 3px solid white;
}
div7{
color:white;
font-size:30px;
position:absolute;
margin-left:150px;
top:1020px;
font-family:verdena;
border-bottom: 3px solid white;
}
div8{
color:white;
font-size:20px;
position:absolute;
margin-left:650px;
top:1020px;
font-family:verdena;
border-bottom: 3px solid white;
}
div9{
color:white;
font-size:30px;
position:absolute;
margin-left:150px;
top:1100px;
font-family:verdena;
border-bottom: 3px solid white;
}
div10{
color:white;
font-size:20px;
position:absolute;
margin-left:650px;
top:1100px;
font-family:verdena;
border-bottom: 3px solid white;
}
div11{
position:absolute;
margin-left:450px;
top:1400px;
}
div12{
color:white;
font-size:70px;
position:absolute;
margin-left:150px;
top:1250px;
font-family:verdena;
border-bottom: 3px solid white;
}
div50{
color:white;
font-size:30px;
position:absolute;
margin-left:540px;
top:1900px;
font-family:verdena;
border-bottom: 3px solid white;
}
div51{
position:absolute;
margin-left:150px;
top:2000px;
}
div52{
position:absolute;
margin-left:450px;
top:2000px;
}
div53{
position:absolute;
margin-left:750px;
top:2000px;
}
div54{
position:absolute;
margin-left:1050px;
top:2000px;
}
div55{
color:white;
font-size:20px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:500px;
top:2300px;
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
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Los Angeles" class="d-block"width="1540"height="500">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1596178060810-72f53ce9a65c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" alt="Chicago" class="d-block"width="1540"height="500">
    </div>
    <div class="carousel-item">
      <img src="https://images.unsplash.com/photo-1571003123771-bd6a099dd83a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80" alt="New York" class="d-block"width="1540"height="500">
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
<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1520"height="1850"></img></div1>
<div2><p><i>CONTACT</i></p></div2>
<div3><p>Located on the ever-popular Sukhumvit Soi 24, <?php echo $row["websitename"];?> is your center for<br> luxury accommodation and all the glitz of India at your fingertips. Get in<br> touch with us to reserve your next 5-star stay, host your next big event or to book<br> a table at one of our exciting venues.</p></div3>
<div4><img src="https://thumbs.dreamstime.com/b/white-contact-us-icon-logo-dark-background-133839860.jpg"width="300"height="300"></img></div4>
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
<div5><p>ADDRESS</p></div5>
<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM admincontact");
?>
<?php foreach($rows as $row):?>
<div6><p><?php echo $row["address"];?></p></div6>
<div7><p>TELEPHONE</p></div7>
<div8><p>+91 <?php echo $row["telephone"];?></p></div8>
<div9><p>CONTACT</p></div9>
<div10><p>General Enquiries:<br><?php echo $row["general"];?><br>Reservations Enquiries:<br> <?php echo $row["reservation"];?></p></div10>
<?php endforeach;?>

<div11><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d179061.1077637934!2d75.91456323710023!3d22.686874790289817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sin!4v1674561228638!5m2!1sen!2sin" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div11>
<div12><h><i>REACH US</i></h></div12>

<div50><h>KINGSTON HOTELS GROUP BRANDS</h></div50>

<div51><img src="https://cdn.freebiesupply.com/logos/large/2x/w-hotels-1-logo-black-and-white.png"width="300"height="300"></img></div51>

<div52><img src="https://optimise2.assets-servd.host/super-conductor/production/uploads/project/evo-hotel/CS_EVO_532x480_Logo.jpg?w=660&h=595&auto=compress%2Cformat&fit=crop&dm=1658784648&s=22f9e3726a7d6fc595730fa86269b74a"width="300"height="300"></img></div52>

<div53><img src="https://img.myloview.com/posters/minimal-innovative-initial-sp-logo-and-ps-logo-letter-sp-ps-creative-elegant-monogram-premium-business-logo-icon-white-color-on-black-background-400-216885200.jpg"height="300"width="300"></img></div53>

<div54><img src="https://s3.us-east-1.amazonaws.com/cdn.designcrowd.com/blog/60-Hotel-Logos-For-Awesome-Vacation/beach%20hotel%20logos/hotel-royal-by-the-monochromatic-institute-dribbble.png"width="300"height="300"></img></div54>
<?php
$query="SELECT * FROM websitesettings";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
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