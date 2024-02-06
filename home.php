<?php include'connection.php';
if(isset($_POST['submit'])){
 $fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$to_email = "$email";
$subject = "Wynn Resort";
$body = "Thank You for filling Enquiry Form.Our Team will contact You within 24 hours for Resolve Your query,Regards Wynn Resort.";
$headers = "From: kartikbhawsar2@gmail.com";
 mail($to_email, $subject, $body, $headers);
$sql ="INSERT INTO stayconnected(fname,lname,phone,email,msg) values ('$fname','$lname','$phone','$email','$msg')";
mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Wynn Resort</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
div1
{
position:absolute;
margin-left:0px;
top:650px;
}
div50
{
position:absolute;
margin-left:600px;
top:700px;
}
div2{
color:white;
font-size:80px;
position:absolute;
margin-left:400px;
top:940px;
font-family:verdena;
}
div3{
color:white;
font-size:30px;
position:absolute;
margin-left:450px;
top:1290px;
font-family:verdena;
}
div4{
position:absolute;
margin-left:50px;
top:920px;
}
div111{
position:absolute;
margin-left:50px;
top:920px;
opacity:0.4;
}
div112{
color:white;
font-size:70px;
position:absolute;
margin-left:470px;
top:1000px;
font-family:verdena;
}
div5{
position:absolute;
margin-left:0px;
top:1800px;
}
div6{
position:absolute;
margin-left:100px;
top:1600px;
}
div7{
color:white;
font-size:70px;
position:absolute;
margin-left:830px;
top:1600px;
font-family:verdena;
}
div8{
color:white;
font-size:20px;
position:absolute;
margin-left:830px;
top:1920px;
font-family:verdena;
}
div9{
position:absolute;
margin-left:0px;
top:2400px;
}
div10{
position:absolute;
margin-left:750px;
top:2150px;
}
div11{
color:white;
font-size:35px;
position:absolute;
margin-left:50px;
top:2150px;
font-family:verdena;
}
div12{
color:white;
font-size:20px;
position:absolute;
margin-left:20px;
top:2350px;
font-family:verdena;
}
div13{
position:absolute;
margin-left:20px;
top:2550px;
}
div14{
color:white;
font-size:25px;
position:absolute;
margin-left:850px;
top:2600px;
font-family:verdena;
}
div15{
position:absolute;
margin-left:0px;
top:2950px;
}
div16{
color:white;
font-size:70px;
position:absolute;
margin-left:40px;
top:3120px;
font-family:verdena;
}
div17{
position:absolute;
margin-left:0px;
top:3800px;
}
div18{
color:white;
font-size:50px;
position:absolute;
margin-left:550px;
top:3450px;
font-family:verdena;
}
div19{
position:absolute;
margin-left:10px;
top:3550px;
}
div20{
position:absolute;
margin-left:520px;
top:3550px;
}
div21{
position:absolute;
margin-left:1030px;
top:3550px;
}
div22{
color:white;
font-size:30px;
position:absolute;
margin-left:200px;
top:3960px;
font-family:"lucida handwriting",cursive;
}
div23{
color:white;
font-size:20px;
position:absolute;
margin-left:380px;
top:4040px;
font-family:"lucida handwriting",cursive;
}
div24{
position:absolute;
margin-left:0px;
top:4700px;
}
div25{
color:white;
font-size:50px;
position:absolute;
margin-left:450px;
top:4750px;
font-family:verdena;
}
div26{
color:white;
font-size:30px;
position:absolute;
margin-left:150px;
top:4850px;
font-family:verdena;
}
div27{
color:white;
font-size:20px;
position:absolute;
margin-left:40px;
top:4900px;
font-family:verdena;
border-bottom: 3px solid white;
}
div28{
color:white;
font-size:30px;
position:absolute;
margin-left:900px;
top:4850px;
font-family:verdena;
}
div29{
color:white;
font-size:20px;
position:absolute;
margin-left:850px;
top:4900px;
font-family:verdena;
border-bottom: 3px solid white;
}

div30{
color:white;
font-size:30px;
position:absolute;
margin-left:190px;
top:5100px;
font-family:verdena;
}
div31{
color:white;
font-size:20px;
position:absolute;
margin-left:40px;
top:5150px;
font-family:verdena;
border-bottom: 3px solid white;
}
div32{
color:white;
font-size:30px;
position:absolute;
margin-left:900px;
top:5100px;
font-family:verdena;
}
div33{
color:white;
font-size:20px;
position:absolute;
margin-left:850px;
top:5150px;
font-family:verdena;
border-bottom: 3px solid white;
}
div34{
color:white;
font-size:20px;
position:absolute;
margin-left:130px;
top:5340px;
font-family:verdena;
}
div35{
position:absolute;
margin-left:0px;
top:5400px;
}
div36{
position:absolute;
margin-left:0px;
top:5410px;
opacity:1.0;
}
div37{
position:absolute;
margin-left:510px;
top:5410px;
}
div38{
position:absolute;
margin-left:1020px;
top:5410px;
}
div39{
position:absolute;
margin-left:0px;
top:5720px;
}
div40
{
position:absolute;
margin-left:510px;
top:5720px;
}
div41{
position:absolute;
margin-left:1020px;
top:5720px;
}
div42{
color:white;
font-size:40px;
position:absolute;
margin-left:180px;
top:5470px;
font-family:verdena;
}
div43{
color:white;
font-size:40px;
position:absolute;
margin-left:700px;
top:5470px;
font-family:verdena;
}
div44{
color:white;
font-size:40px;
position:absolute;
margin-left:1100px;
top:5470px;
font-family:verdena;
}
div45{
color:white;
font-size:40px;
position:absolute;
margin-left:180px;
top:5800px;
font-family:verdena;
}
div46{
color:white;
font-size:40px;
position:absolute;
margin-left:640px;
top:5800px;
font-family:verdena;
}
div47{
color:white;
font-size:40px;
position:absolute;
margin-left:1120px;
top:5800px;
font-family:verdena;
}
div48{
position:absolute;
margin-left:0px;
top:6030px;
}
div49{
color:white;
font-size:50px;
position:absolute;
margin-left:180px;
top:6100px;
font-family:verdena;
}
div51{
color:white;
font-size:30px;
position:absolute;
margin-left:200px;
top:6200px;
font-family:verdena;
}
div52{
position:absolute;
margin-left:30px;
top:6300px;
}
div50
{
position:absolute;
margin-left:600px;
top:700px;
}
div53{
position:absolute;
margin-left:400px;
top:6300px;
}
div54{
position:absolute;
margin-left:770px;
top:6300px;
}
div55{
position:absolute;
margin-left:1140px;
top:6300px;
}
div56{
position:absolute;
margin-left:30px;
top:6700px;
}
div57{
position:absolute;
margin-left:400px;
top:6700px;
}
div58{
position:absolute;
margin-left:770px;
top:6700px;
}
div59{
position:absolute;
margin-left:1140px;
top:6700px;
}
div60{
position:absolute;
margin-left:30px;
top:6590px;
opacity:0.5;
}
div61{
color:white;
font-size:30px;
position:absolute;
margin-left:140px;
top:6590px;
font-family:verdena;
}
div62{
position:absolute;
margin-left:490px;
top:6590px;
opacity:0.5;
}
div63{
color:white;
font-size:30px;
position:absolute;
margin-left:490px;
top:6590px;
font-family:verdena;
}
div64{
position:absolute;
margin-left:850px;
top:6590px;
opacity:0.5;
}
div65{
color:white;
font-size:30px;
position:absolute;
margin-left:850px;
top:6590px;
font-family:verdena;
}
div66{
position:absolute;
margin-left:1220px;
top:6590px;
opacity:0.5;
}
div67{
color:white;
font-size:30px;
position:absolute;
margin-left:1220px;
top:6590px;
font-family:verdena;
}
div68{
position:absolute;
margin-left:30px;
top:7000px;
opacity:0.5;
}
div69{
color:white;
font-size:30px;
position:absolute;
margin-left:140px;
top:7000px;
font-family:verdena;
}
div70{
position:absolute;
margin-left:400px;
top:7000px;
opacity:0.5;
}
div71{
color:white;
font-size:30px;
position:absolute;
margin-left:500px;
top:7000px;
font-family:verdena;
}
div72{
position:absolute;
margin-left:770px;
top:7000px;
opacity:0.5;
}
div73{
color:white;
font-size:30px;
position:absolute;
margin-left:850px;
top:7000px;
font-family:verdena;
}
div74{
position:absolute;
margin-left:1140px;
top:7000px;
opacity:0.5;
}
div75{
color:white;
font-size:30px;
position:absolute;
margin-left:1220px;
top:7000px;
font-family:verdena;
}
div76{
position:absolute;
margin-left:0px;
top:7090px;
}
div77
{
position:absolute;
margin-left:200px;
top:7150px;
}
div78
{
position:absolute;
margin-left:300px;
top:7200px;
}
div79{
color:black;
font-size:20px;
position:absolute;
margin-left:280px;
top:7290px;
font-family:verdena;
}
div80{
color:black;
font-size:20px;
position:absolute;
margin-left:220px;
top:7350px;
font-family:verdena;
}
div81
{
position:absolute;
margin-left:600px;
top:7150px;
}
div82
{
position:absolute;
margin-left:660px;
top:7170px;
}
div83{
color:black;
font-size:20px;
position:absolute;
margin-left:670px;
top:7290px;
font-family:verdena;
}
div84{
color:black;
font-size:20px;
position:absolute;
margin-left:620px;
top:7320px;
font-family:verdena;
}
div85
{
position:absolute;
margin-left:1000px;
top:7150px;
}
div86
{
position:absolute;
margin-left:1050px;
top:7170px;
}
div87{
color:black;
font-size:20px;
position:absolute;
margin-left:1090px;
top:7290px;
font-family:verdena;
}
div88{
color:black;
font-size:20px;
position:absolute;
margin-left:1010px;
top:7320px;
font-family:verdena;
}
div89
{
position:absolute;
margin-left:0px;
top:7680px;
}
div90{
color:WHITE;
font-size:40px;
position:absolute;
margin-left:620px;
top:7700px;
font-family:verdena;
border-bottom: 3px solid white;
}
div91{
color:WHITE;
font-size:20px;
position:absolute;
margin-left:700px;
top:7800px;
font-family:verdena;
}
.h
{
position:absolute;
margin-left:800px;
top:7800px;
}
div93{
color:WHITE;
font-size:20px;
position:absolute;
margin-left:990px;
top:7800px;
font-family:verdena;
}
div94
{
position:absolute;
margin-left:1090px;
top:7800px;
}
div95{
color:WHITE;
font-size:20px;
position:absolute;
margin-left:700px;
top:7880px;
font-family:verdena;
}
div96
{
position:absolute;
margin-left:800px;
top:7880px;
}
div97{
color:WHITE;
font-size:20px;
position:absolute;
margin-left:990px;
top:7880px;
font-family:verdena;
}
div98
{
position:absolute;
margin-left:1120px;
top:7880px;
}
div99{
color:WHITE;
font-size:20px;
position:absolute;
margin-left:700px;
top:7960px;
font-family:verdena;
}
div100
{
position:absolute;
margin-left:850px;
top:7960px;
}
div102
{
position:absolute;
margin-left:100px;
top:7700px;
}
div103
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:7950px;
font-family:verdena;
}
div104
{
position:absolute;
margin-left:0px;
top:8230px;
}
div105{
color:white;
font-size:30px;
position:absolute;
margin-left:500px;
top:8300px;
font-family:verdena;
}
div106{
position:absolute;
margin-left:150px;
top:8350px;
}
div107{
position:absolute;
margin-left:450px;
top:8350px;
}
div108{
position:absolute;
margin-left:750px;
top:8350px;
}
div109{
position:absolute;
margin-left:1050px;
top:8350px;
}
div110{
color:white;
font-size:20px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:500px;
top:8650px;
}
div113{
position:absolute;
margin-left:100px;
top:4160px;
}
div114{
position:absolute;
margin-left:534px;
top:4220px;
}
div115{
color:black;
font-size:15px;
font-family:"lucida handwriting",cursive;
position:absolute;
margin-left:600px;
top:4250px;
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
.button1{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
font-family:"lucida handwriting",cursive;
  font-size: 20px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 15px 32px;
   color: white;

position:absolute;
margin-left:900px;
top:8160px;
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
$query="SELECT * FROM adminhome";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<!------------------------------------- Carousel ----------------------------------->
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
      <img src="<?php echo"fetchimage/".$row['carousal1'];?>" alt="Los Angeles" class="d-block"width="1520"height="600">
    </div>
    <div class="carousel-item">
      <img src="<?php echo"fetchimage/".$row['carousal2'];?>" alt="image" class="d-block"width="1520"height="600">
    </div>
    <div class="carousel-item">
      <img src="<?php echo"fetchimage/".$row['carousal3'];?>" alt="New York" class="d-block"width="1520"height="600">
     </div>
  </div>
   <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1520"height="1300"></img></div1>
<div50><img src="https://seeklogo.com/images/W/wynn-resorts-logo-2F25AD2042-seeklogo.com.png"width="300"height="200"></img></div50>



<!--------------------------------------------------Gif image----------------------------------------->
<div4><img src="https://assets.vogue.com/photos/61d7539c07d219576cfb738a/16:9/w_896,h_504,c_limit/00_promo.gif"width="1400"height="600"></img></div4>
<div111><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1400"height="600"></img></div111>
<div112><p>WHERE LUXERY<br> MEETS THE ART<br>OF EXPLORATION</p></div112>
<div5><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"height="600"width="1550"></img></div5>
<!-- Carousel -->
<div6>
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
      <img src="<?php echo"fetchimage/".$row['firstimage'];?>" alt="Los Angeles" class="d-block"height="500"width="600">
    </div>
    <div class="carousel-item">
      <img src="<?php echo"fetchimage/".$row['secondimage'];?>" class="d-block"width="600"height="500">
    </div>
    <div class="carousel-item">
      <img src="<?php echo"fetchimage/".$row['thirdimage'];?>" alt="New York" class="d-block"width="600"height="500">
    </div>
  </div>
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
</div6>
<div7><p>AN OASIS AT<br> THE EPICENTER<br> OF THE CITY</p></div7>
<div8><p><?php echo $row["websitename"];?> is steps away from the best that Bangkok has to offer, including luxury malls Emsphere, Emquartier, and Emporium. The hotel is also conveniently located near the New Queen Sirikit Convention Centre (QSNCC), Medpark Hospital, and trendy K Village.</p></div8>
<div9><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1550"height="1400"</img></div9>
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
$query="SELECT * FROM adminhome";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div10><img src="<?php echo"fetchimage/".$row['fourthimage'];?>"width="700"height="350"></img></div10>
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
<div11><p><b><?php echo $row["websitename"];?> is also the perfect venue for<br> events and meetings with a variety of<br> options across our expansive property.</b></p></div11>
<div12><p>From intimate weddings to workshops and everything in between, <?php echo $row["websitename"];?><br> will exceed your expectations with our range of event spaces and 5-star service.<br> As masters of sophistication, we pride ourselves on hosting noteworthy functions<br> that will impress your guests.</p></div12>
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
$query="SELECT * FROM adminhome";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div13><img src="<?php echo"fetchimage/".$row['fifthimage'];?>"width="700"height="350"></img></div13>
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
<div14><p><?php echo $row["websitename"];?> provides guests with a range<br> of modern services to help make the most<br> of their stay. Take a breather at the expansive<br> swimming pool overlooking Bangkok’s skyline.<br> Enjoy a cocktail at the pool bar or select from a<br> range of international wines at The Butterfly Bar<br> and Lounge.</p></div14>

<div15><img src="https://images.pexels.com/photos/2923591/pexels-photo-2923591.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"width="1520"height="600"></img></div15>

<div16><h>INSPIRED BY THE<br> JOURNEY DEFINED BY<br> A DESTINATION</h></div16>

<div17><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1520"height="900"></img></div17>
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
$query="SELECT * FROM adminhome";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div18><p>INDULGE & UNWIND</p></div18>
<div19><img src="<?php echo"fetchimage/".$row['sixthimage'];?>"width="500"height="350"></img></div19>
<div20><img src="<?php echo"fetchimage/".$row['seventhimage'];?>"width="500"height="350"></img></div20>
<div21><img src="<?php echo"fetchimage/".$row['eigthimage'];?>"width="500"height="350"></img></div21>
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

<div22><p>An exploration of nature through a refreshing new dining concept.</p></div22>
<div23><h>A 5-star stay wouldn’t be complete without a memorable dining<br> experience. Florae takes you to a garden paradise, surprising your<br> senses with intriguing new flavors and intoxicating aromas.</h></div23>

<div24><img src="https://live.staticflickr.com/3174/2690293634_8557a484b1_b.jpg"width="1520"height="700"></img></div24>

<div25><h><b><i>BOOK DIRECT BENEFITS</i></b></h></div25>

<div26><h><i><b>Best Rate Guaranteed</b></i></h></div26>

<div27><p><b>Book directly with us to avail of the best rates for your stay and<br> receive your real-time booking confirmation. We guarantee that<br> you won’t find a better rate for the same room type on the same<br> date. Should you find a lower price elsewhere, we offer an additional<br> 5% discount on the lowest publicly available price found online.</b></p></div27>

<div28><h><b><i>Early Check-in & Late Check-out</i></b></h></div28>

<div29><p><b>Are you arriving early or departing late? No problem! Request<br> an early check-in or a late check-out in your direct booking,<br> and we’ll do our best to accommodate your schedule. *Please note<br> that this is subject to availability.</b></p></div29>

<div30><h><b><i>Secure Payment</i></b></h></div30>

<div31><p><b>Your security is important to us. We use PCI-compliant payment<br> gateways and strict security protocols to ensure that your credit<br> card transactions are secure. We do not store your credit card<br> details and handle your information in accordance with industry<br> security standards.</b></p></div31>

<div32><h><b><i>No Booking Fees or Hidden Charges</i></b></h></div32>

<div33><p><b>Our prices include all taxes and service charges. There are no hidden<br> business, booking, credit card, or additional fees. The displayed price<br> on the website is what will be charged on your card.</b></p></div33>

<div34><p><b>Book your stay at <?php echo $row["websitename"];?> directly on our official website and enjoy more perks,
exclusive rates, and greater flexibility on your hotel booking.</b></p></div34>

<div35><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIYVuoXwxKo9idHC_t9aJi3I5Yk82a2iL77Q&usqp=CAU"width="1520"height="630"></img></div35>
<div36><img src="https://images.pexels.com/photos/189293/pexels-photo-189293.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"width="500"height="300"></img></div36>
<div37><img src="https://images.pexels.com/photos/12884686/pexels-photo-12884686.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"width="500"height="300"></img></div37>
<div38><img src="https://www.lottehotel.com/content/dam/lotte-hotel/city/jeju/facilities/business/5350-151125-2000-fac-ltcj.jpg.thumb.768.768.jpg"width="500"height="300"></img></div38>
<div39><img src="https://media.weddingz.in/images/8d96071e5160759a3dbeac97aa646ec4/best-5-star-wedding-hotels-in-hyderabad-for-all-types-of-budgets.jpg"width="500"height="300"></img></div39>
<div40><img src="https://farm5.staticflickr.com/4252/34048323443_d0a89c4ce3_c.jpg"width="500"height="300"></img></div40>
<div41><img src="https://media-cdn.tripadvisor.com/media/photo-s/15/90/75/af/function-rooms.jpg"width="500"height="300"></img></div41>
<div42><p>Rooms</p></div42>
<div43><p>Dine</p></div43>
<div44><p>Business Meetings</p></div44>
<div45><p>Weedings</p></div45>
<div46><p>Corporate Events</p></div46>
<div47><p>Grand Functions</p></div47>
<div48><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1520"height="1060"></img></div48>
<div49><p><i>POPULAR DESTINATIONS</i></p></div49>
<div51><p><i>Explore The Country With Us</i></p></div51>
<div52><img src="https://www.smartcityindore.org/wp-content/uploads/2020/12/main-picture-1.jpg"width="350"height="350"></img></div52>
<div53><img src="https://imgnew.outlookindia.com/uploadimage/library/16_9/16_9_5/IMAGE_1650348907.jpg"width="350"height="350"></img></div53>
<div54><img src="https://media.istockphoto.com/id/1206681110/photo/teli-bandha-lake-in-raipur-chhattisgarh.jpg?b=1&s=170667a&w=0&k=20&c=r42B_2D7c_DJt3DuEysihxLigXH7H02Ff5rYi8zR1Kc="width="350"height="350"></img></div54>
<div55><img src="https://www.gujarattourism.com/content/dam/gujrattourism/images/gandhi-circuit/mahatma-gandhi-museum-(alfred-high-school)/Mahatma-Gandhi-Museum-Rajkot-Thumbnail.jpg"width="350"height="350"></img></div55>
<div56><img src="https://www.fabhotels.com/blog/wp-content/uploads/2022/07/600X400_4-min.jpg"width="350"height="350"></img></div56>
<div57><img src="https://i0.wp.com/stanzaliving.wpcomstaging.com/wp-content/uploads/2022/04/67404-places-to-visit-in-vadodara.jpg?fit=1000%2C642&ssl=1"width="350"height="350"></img></div57>
<div58><img src="https://4.bp.blogspot.com/-FpdKVkCdtTI/VpfilDVeIvI/AAAAAAAAoNg/D9lrXTFnBbQ/s1600/DSC_0646.JPG"height="350"width="350"></img></div58>
<div59><img src="https://assets-news.housing.com/news/wp-content/uploads/2022/07/22001041/Places-To-Visit-In-Dehradun-feature-compressed.jpg"width="350"height="350"></img></div59>
<div60><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="350"height="70"></img></div60>
<div61><p><i>INDORE</i></p></div61>
<div62><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="350"height="70"></img></div62>
<div63><p><i>BHOPAL</i></p></div63>
<div64><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="350"height="70"></img></div64>
<div65><p><i>KOLHAPUR</i></p></div65>
<div66><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="350"height="70"></img></div66>
<div67><p><i>JAMNAGAR</i></p></div67>
<div68><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="350"height="70"></img></div68>
<div69><p><i>PUNE</i></p></div69>
<div70><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="350"height="70"></img></div70>
<div71><p><i>RAIPUR</i></p></div71>
<div72><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="350"height="70"></img></div72>
<div73><p><i>AURANGABAD</i></p></div73>
<div74><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="350"height="70"></img></div74>
<div75><p><i>DEHRADUN</i></p></div75>
<div76><img src="https://wallpaperaccess.com/full/1153686.jpg"width="1520"height="600"></img></div76>
<div77><img src="https://wallpaperaccess.com/full/676549.jpg"width="300"height="500"></img></div77>
<div78><img src="https://www.pngfind.com/pngs/m/5-58824_png-file-svg-food-and-drink-icon-png.png"width="100"height="100"></img></div78>
<div79><p><i>Foods & Drinks</i></p></div79>
<div80><p><i>Food and beverages means any<br> raw, cooked, or processed edible<br> substance used or intended for<br> use in whole or in part for hum-<br>an consumption, including ice,<br> water, spirituous liquors, wine,<br> mixed beverages, beer, soft dri-<br>nks, soda, and other beverages.</i></p></div80>
<div81><img src="https://wallpaperaccess.com/full/676549.jpg"width="300"height="500"></img></div81>
<div82><img src="https://thumbs.dreamstime.com/b/outdoor-restaurant-chair-umbrella-tent-logo-design-outdoor-restaurant-chair-umbrella-tent-vector-logo-design-232023038.jpg"width="170"height="170"></img></div82>
<div83><p><i>Outdoor Dinning</i></p></div83>
<div84><p><i>Outdoor dining means an area<br> set up outside the confines of<br> the commercial structure with<br> tables, chairs, and other furni<br>shings for the purpose of selli<br>ng, offering for sale, and serv<br>ing food and beverages by an<br> adjoining restaurant in which<br> the same food and beverages are<br> offered for sale, sold, and served.</i></p></div84>
<div85><img src="https://wallpaperaccess.com/full/676549.jpg"width="300"height="500"></img></div85>
<div86><img src="https://img.freepik.com/premium-vector/beach-vacation-home-logo-design-with-beach-view_630259-254.jpg?w=2000"width="170"height="170"></img></div86>
<div87><p><i>Beach View</i></p></div87>
<div88><p><i>The beach appears to be live and<br> joyful with the presence of the n-<br>atural vegetation. There are ever-<br>green plantations both along and<br> inside the beach. Images of buo-<br>yant sea weeds can be seen along<br> the shore. Palms trees are seen to<br> stand tall along the beach dancing<br> to the tune of the breeze emanatin<br>g from the waters of the sea.</i></p></div88>
<div89><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1520"height="550"></img></div89>
<div90><p><b><i>STAY CONNECTED</i></b></p></div90>
<form autocomplete="off" action="#" method="POST">
  <div91><label for="fname"><b><i>First name:</i></b></label></div91>
  <input  class="h"type="text" id="fname" name="fname"size="10">
  <div93><label for="lname"><b><i>Last name:</b></i></label></div93>
  <div94><input type="text" id="lname" name="lname"size="10"></div94>
  <div95><label for="phone"><b><i>Phone No:</b></i></label></div95>
  <div96><input type="text" id="phone" name="phone"size="10"></div96>
  <div97><label for="email"><b><i>Email Address:</b></i></label></div97>
  <div98><input type="text" id="email" name="email"size="20"></div98>
  <div99><label for="msg"><b><i>Your Message:</b></i></label></div99>
  <div100><textarea name="msg" rows="7" cols="30"></textarea></div100>
  <!-----------------------------submit button------------------------>
<button class="button1 button2"type="submit" name="submit"><b><i>Submit</i></b></button>

</form>
<div102><img src="https://seeklogo.com/images/W/wynn-resorts-logo-2F25AD2042-seeklogo.com.png"width="300"height="200"></img></div102>
<div103><p><b><i>95,370 Sukhumvit 24 Alley,<br>
Khwaeng Klongton, Khet Klongtoey,<br>
Bangkok 10110<br>
(02) 483 3999<br>
enquiry@Wynnpalacebangkok.com</i></b></p></div103>
<div104><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1520"height="500"></img></div104>
<div105><h>KINGSTON HOTELS GROUP BRANDS</h></div105>

<div106><img src="https://cdn.freebiesupply.com/logos/large/2x/w-hotels-1-logo-black-and-white.png"width="300"height="300"></img></div106>

<div107><img src="https://optimise2.assets-servd.host/super-conductor/production/uploads/project/evo-hotel/CS_EVO_532x480_Logo.jpg?w=660&h=595&auto=compress%2Cformat&fit=crop&dm=1658784648&s=22f9e3726a7d6fc595730fa86269b74a"width="300"height="300"></img></div107>

<div108><img src="https://img.myloview.com/posters/minimal-innovative-initial-sp-logo-and-ps-logo-letter-sp-ps-creative-elegant-monogram-premium-business-logo-icon-white-color-on-black-background-400-216885200.jpg"height="300"width="300"></img></div108>

<div109><img src="https://s3.us-east-1.amazonaws.com/cdn.designcrowd.com/blog/60-Hotel-Logos-For-Awesome-Vacation/beach%20hotel%20logos/hotel-royal-by-the-monochromatic-institute-dribbble.png"width="300"height="300"></img></div109>

<div110><p>© 2023 <?php echo $row["websitename"];?>. All Rights Reserved. Website Design India</p></div110>

<!-------------------------------------------------------phone image ----------------------------------->
<div113><img src="https://consideringapple.com/wp-content/uploads/2022/08/Dark-Aesthetic-Wallpaper-For-iPhone.png"width="1100"height="500"></img></div113>

<!-------------------------------------------------------phone gif image-------------------------------->
<div114><img src="https://i.gifer.com/HXLx.gif"width="230"height="377"></img></div114>

<!---------------------------------------wynn resort on mobile------------------------------------------>
<div115><p><b><?php echo $row["websitename"];?></b></p></div115>
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
https://phoneky.co.uk/thumbs/screensavers/down/places/nightpool_jy4mfq76.gif
