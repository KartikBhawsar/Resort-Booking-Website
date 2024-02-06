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
font-size:70px;
position:absolute;
margin-left:120px;
top:760px;
font-family:verdena;
border-bottom: 3px solid white;
}
div3{
color:white;
font-size:20px;
position:absolute;
margin-left:130px;
top:1000px;
font-family:verdena;
}
div4{
position:absolute;
margin-left:1000px;
top:780px;
}
div5{
position:absolute;
margin-left:20px;
top:1100px;
}
div6{
color:white;
font-size:20px;
position:absolute;
margin-left:150px;
top:1650px;
font-family:verdena;
}
div7{
color:white;
font-size:70px;
position:absolute;
margin-left:90px;
top:1900px;
font-family:verdena;
border-bottom: 3px solid white;
}
div8{
position:absolute;
margin-left:50px;
top:2050px;
}
div9{
color:white;
font-size:20px;
position:absolute;
margin-left:770px;
top:2200px;
font-family:verdena;
}
div10{
color:white;
font-size:70px;
position:absolute;
margin-left:270px;
top:2600px;
font-family:verdena;
border-bottom: 3px solid white;
}
div11{
color:white;
font-size:20px;
position:absolute;
margin-left:280px;
top:2720px;
font-family:verdena;
}
div12{
position:absolute;
margin-left:150px;
top:2800px;
}
div13{
color:white;
font-size:20px;
position:absolute;
margin-left:850px;
top:2950px;
font-family:verdena;
}
div14{
color:white;
font-size:70px;
position:absolute;
margin-left:250px;
top:3360px;
font-family:verdena;
border-bottom: 3px solid white;
}
div15{
position:absolute;
margin-left:150px;
top:3500px;
}
div16{
color:white;
font-size:20px;
position:absolute;
margin-left:800px;
top:3600px;
font-family:verdena;
}
div17{
position:absolute;
margin-left:950px;
top:1600px;
}
div50{
color:white;
font-size:30px;
position:absolute;
margin-left:540px;
top:4100px;
font-family:verdena;
border-bottom: 3px solid white;
}
div51{
position:absolute;
margin-left:150px;
top:4200px;
}
div52{
position:absolute;
margin-left:450px;
top:4200px;
}
div53{
position:absolute;
margin-left:750px;
top:4200px;
}
div54{
position:absolute;
margin-left:1050px;
top:4200px;
}
div55{
color:white;
font-size:20px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:500px;
top:4500px;
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
<?php
$query="SELECT * FROM  admindinning";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
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
      <img src="<?php echo"fetchimage/".$row['carousal1'];?>" alt="Los Angeles" class="d-block"width="1540"height="700">
    </div>
    <div class="carousel-item">
      <img src="<?php echo"fetchimage/".$row['carousal2'];?>" alt="Chicago" class="d-block"width="1540"height="700">
    </div>
    <div class="carousel-item">
      <img src="<?php echo"fetchimage/".$row['carousal3'];?>" alt="New York" class="d-block"width="1540"height="700">
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
<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1520"height="3850"></img></div1>
<div2><p>FLORAE RESTAURANT<br>ON SUKHUMVIT 24</p></div2>
<div3><p>Embark on a sensory journey at Florae Restaurant by <?php echo $row["websitename"];?></p></div3>
<div4><img src="https://cdn.logojoy.com/wp-content/uploads/2018/05/30151524/822.png"width="300"height="300"></img></div4>
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
<?php
$query="SELECT * FROM admindinning";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div5>
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
      <img src="<?php echo"fetchimage/".$row['firstimage'];?>" alt="Los Angeles" class="d-block"height="500"width="1480">
    </div>
    <div class="carousel-item">
      <img src="<?php echo"fetchimage/".$row['secondimage'];?>" class="d-block"width="1480"height="500">
    </div>
    <div class="carousel-item">
      <img src="<?php echo"fetchimage/".$row['thirdimage'];?>" alt="New York" class="d-block"width="1480"height="500">
    </div>
  </div>
</div>
</div5>
<div6><p>A 5-star stay wouldn’t be complete without a memorable dining<br> experience. Florae takes you to a garden paradise, surprising yo<br>ur senses with intriguing new flavors and intoxicating aromas.<br> Lush foliage and flowers drape the walls as you sip on organic<br> cocktails and admire the playful decor. More than just a resta-<br>urant, Florae is an exploration of nature through a refreshing<br> new dining concept.</p></div6>
<div7><h>FUELED BY FIRE,INSPIRED BY NATURE</h></div7>
<div8><img src="<?php echo"fetchimage/".$row['fourthimage'];?>"width="600"height="500"></img></div8>
<div9><p>Florae’s inviting interior is the perfect place to ease into evenings.<br> Lounge lovers will revel in the ambient bar featuring an exotic<br> collection of artificial butterflies, organic cocktails and premium<br> wines selections from all around the world. Set along Bangkok’s<br> popular Soi 24, it’s the perfect meeting point for casual bites or<br> an eventful dinner.</p></div9>
<div10><h>THE CUISINE AT FLORAE</h></div10>
<div11><h>A global interpretation on Thai ingredients</h></div11>
<div12><img src="https://www.millerandcarter.co.uk/content/dam/miller-and-carter/images/2022/dn22/homepage/mac-2022-dn22-home-samplemenu-scroller.gif.asset/1674128581331.gif"width="600"height="500"></img></div12>
<div13><p>The flavors of Florae are both delicious and daring, using rare<br> Thai ingredients, international elements and cooking techniques<br> from all over the world. From the open-flame grill you can order<br> a selection of perfectly seasoned hot-off-the-fire dishes served as<br> large sharing plates. Our Cuisine is a combination of global techn<br>iques and the love of our local Thai ingredients sourced from diff<br>erent parts of the country. It’s our mission to highlight and show<br>case them at its best quality.</p></div13>
<div14><p>THE CHEF AT FLORAE</p></div14>
<div15><img src="<?php echo"fetchimage/".$row['fifthimage'];?>"width="600"height="500"></img></div15>
<div16><p>Internationally recognized for knowledge of classical cuisine and "spot-on"<br> pairings with both wine & spirits, Florae’s renowned chef Geoffrey Blythe<br> has over 30 years experience in redefining traditional dishes for the modern<br> palate. His creations are influenced by the many places he’s visited, from Eu-<br>rope and the Americas, to most recently Vietnam, Laos and of course, Thailand.<br> A true gastronomic architect, Blythe will surprise and delight with flavors that effortlessly coalesce to take your taste buds on a fresh and unforgettable journey.</p></div16>
<div17><img src="https://images.pond5.com/chef-thumbs-hot-food-neon-footage-099616341_iconl.jpeg"width="300"height="300"></img></div17>
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