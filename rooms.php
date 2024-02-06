<?php include 'connection.php';
if(isset($_POST['Submit1'])){
   echo "<script>alert('Superior Rooms Are Available');</script>";
}
if(isset($_POST['Submit2'])){
  echo "<script>alert('Grand Superior Rooms Are Available');</script>";
}
if(isset($_POST['Submit3'])){
  echo "<script>alert('Grand Deluxe Rooms Are Available');</script>";
}
if(isset($_POST['Submit4'])){
  echo "<script>alert('Triple Rooms Are Available');</script>";
}
if(isset($_POST['Submit5'])){
  echo "<script>alert('Premium Rooms Are Available');</script>";
}
if(isset($_POST['Submit6'])){
  echo "<script>alert('Grand Executive Rooms Are Available');</script>";
}
if(isset($_POST['Submit7'])){
  echo "<script>alert('One Bedroom Suite Rooms Are Available');</script>";
}
if(isset($_POST['Submit8'])){
  echo "<script>alert('Family Executive Rooms Are Available');</script>";
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
<style>
/*body{
background-image:url("https://images.pexels.com/photos/172872/pexels-photo-172872.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
background-repeat: no-repeat;
background-size: 1600px 800px;
}*/
div1{
position:absolute;
margin-left:0px;
top:650px;
}
div2{
color:white;
font-size:50px;
position:absolute;
margin-left:40px;
top:700px;
font-family:verdena;
}
div3{
color:white;
font-size:20px;
position:absolute;
margin-left:40px;
top:950px;
font-family:verdena;
border-bottom: 3px solid white;
}
div4{
color:white;
font-size:60px;
position:absolute;
margin-left:420px;
top:1150px;
font-family:verdena;
border-bottom: 3px solid white;
}
div5{
position:absolute;
margin-left:1050px;
top:650px;
}
div6{
position:absolute;
margin-left:70px;
top:1300px;
border-bottom: 3px solid white;
}
div7{
color:white;
font-size:40px;
position:absolute;
margin-left:750px;
top:1300px;
font-family:verdena;
}
div8{
color:white;
font-size:20px;
position:absolute;
margin-left:750px;
top:1390px;
font-family:verdena;
border-bottom: 3px solid white;
}
div9{
color:white;
font-size:17px;
position:absolute;
margin-left:770px;
top:1580px;
font-family:verdena;
}
div10{
position:absolute;
margin-left:850px;
top:1860px;
border-bottom: 3px solid white;
}
div11{
color:white;
font-size:40px;
position:absolute;
margin-left:150px;
top:1870px;
font-family:verdena;
}
div12{
color:white;
font-size:20px;
position:absolute;
margin-left:70px;
top:1960px;
font-family:verdena;
border-bottom: 3px solid white;
}
div13{
color:white;
font-size:17px;
position:absolute;
margin-left:100px;
top:2190px;
font-family:verdena;
}
div14{
position:absolute;
margin-left:60px;
top:2450px;
border-bottom: 3px solid white;
}
div15{
color:white;
font-size:40px;
position:absolute;
margin-left:780px;
top:2450px;
font-family:verdena;
}
div16{
color:white;
font-size:20px;
position:absolute;
margin-left:700px;
top:2510px;
font-family:verdena;
border-bottom: 3px solid white;
}
div17{
color:white;
font-size:17px;
position:absolute;
margin-left:700px;
top:2720px;
font-family:verdena;
}
div18{
position:absolute;
margin-left:850px;
top:3010px;
border-bottom: 3px solid white;
}
div19{
color:white;
font-size:40px;
position:absolute;
margin-left:250px;
top:3010px;
font-family:verdena;
}
div20{
color:white;
font-size:20px;
position:absolute;
margin-left:70px;
top:3090px;
font-family:verdena;
border-bottom: 3px solid white;
}
div21{
color:white;
font-size:17px;
position:absolute;
margin-left:80px;
top:3300px;
font-family:verdena;
}
div22{
position:absolute;
margin-left:70px;
top:3600px;
border-bottom: 3px solid white;
}
div23{
color:white;
font-size:40px;
position:absolute;
margin-left:750px;
top:3600px;
font-family:verdena;
}
div24{
color:white;
font-size:20px;
position:absolute;
margin-left:750px;
top:3700px;
font-family:verdena;
border-bottom: 3px solid white;
}
div25{
color:white;
font-size:17px;
position:absolute;
margin-left:770px;
top:3850px;
font-family:verdena;
}
div26{
position:absolute;
margin-left:850px;
top:4200px;
border-bottom: 3px solid white;
}
div27{
color:white;
font-size:40px;
position:absolute;
margin-left:190px;
top:4200px;
font-family:verdena;
}
div28{
color:white;
font-size:20px;
position:absolute;
margin-left:50px;
top:4280px;
font-family:verdena;
border-bottom: 3px solid white;
}
div29{
color:white;
font-size:17px;
position:absolute;
margin-left:100px;
top:4450px;
font-family:verdena;
}
div30{
position:absolute;
margin-left:70px;
top:4750px;
border-bottom: 3px solid white;
}
div31{
color:white;
font-size:40px;
position:absolute;
margin-left:750px;
top:4750px;
font-family:verdena;
}
div32{
color:white;
font-size:20px;
position:absolute;
margin-left:750px;
top:4850px;
font-family:verdena;
border-bottom: 3px solid white;
}
div33{
color:white;
font-size:17px;
position:absolute;
margin-left:770px;
top:5020px;
font-family:verdena;
}
div34{
position:absolute;
margin-left:850px;
top:5300px;
border-bottom: 3px solid white;
}
div35{
color:white;
font-size:40px;
position:absolute;
margin-left:190px;
top:5300px;
font-family:verdena;
}
div36{
color:white;
font-size:20px;
position:absolute;
margin-left:50px;
top:5380px;
font-family:verdena;
border-bottom: 3px solid white;
}
div37{
color:white;
font-size:17px;
position:absolute;
margin-left:100px;
top:5590px;
font-family:verdena;
}

div49{
position:absolute;
margin-left:0px;
top:5850px;
}
div50{
position:absolute;
margin-left:100px;
top:5900px;
}
div51{
color:black;
font-size:40px;
font-family:verdena;
border-bottom: 6px solid black;
position:absolute;
margin-left:650px;
top:5920px;
}
div56{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:970px;
top:1580px;
}
div57{
position:absolute;
margin-left:1000px;
top:1650px;
}
div58{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:1200px;
top:1580px;
}
div59{
position:absolute;
margin-left:1230px;
top:1650px;
}
div60{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:320px;
top:2190px;
}
div61{
position:absolute;
margin-left:340px;
top:2260px;
}
div62{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:530px;
top:2190px;
}
div63{
position:absolute;
margin-left:560px;
top:2260px;
}
div64{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:970px;
top:2720px;
}
div65{
position:absolute;
margin-left:1000px;
top:2790px;
}
div66{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:1200px;
top:2720px;
}
div67{
position:absolute;
margin-left:1230px;
top:2790px;
}
div68{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:320px;
top:3350px;
}
div69{
position:absolute;
margin-left:340px;
top:3410px;
}
div70{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:530px;
top:3350px;
}
div71{
position:absolute;
margin-left:560px;
top:3410px;
}

div72{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:970px;
top:3850px;
}
div73{
position:absolute;
margin-left:1000px;
top:3920px;
}
div74{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:1200px;
top:3850px;
}
div75{
position:absolute;
margin-left:1230px;
top:3920px;
}
div76{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:320px;
top:4470px;
}
div77{
position:absolute;
margin-left:340px;
top:4530px;
}
div78{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:530px;
top:4470px;
}
div79{
position:absolute;
margin-left:560px;
top:4530px;
}
div80{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:970px;
top:5030px;
}
div81{
position:absolute;
margin-left:1000px;
top:5100px;
}
div82{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:1200px;
top:5030px;
}
div83{
position:absolute;
margin-left:1230px;
top:5100px;
}
div84{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:390px;
top:5600px;
}
div85{
position:absolute;
margin-left:410px;
top:5680px;
}
div86{
color:white;
font-size:30px;
font-family:verdena;
border-bottom: 3px solid white;
position:absolute;
margin-left:600px;
top:5600px;
}
div87{
position:absolute;
margin-left:620px;
top:5680px;
}
div88{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6040px;
}
div89{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6070px;
}
div90{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6100px;
}
div91{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6130px;
}
div92{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6160px;
}
div93{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6190px;
}
div94{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6220px;
}
div95{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6250px;
}
div96{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6280px;
}
div97{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6310px;
}
div98{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6340px;
}
div99{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6370px;
}
div100{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6400px;
}
div101{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:250px;
top:6430px;
}
div102{
position:absolute;
margin-left:800px;
top:6100px;
}
div103{
position:absolute;
margin-left:1000px;
top:6100px;
}
div104{
position:absolute;
margin-left:1200px;
top:6100px;
}
div105{
position:absolute;
margin-left:70px;
top:1730px;
opacity:0.5;
}
div106{
color:black;
font-size:30px;
font-family:"lucida handwriting",cursive;
position:absolute;
margin-left:280px;
top:1750px;
}
div107{
position:absolute;
margin-left:850px;
top:2290px;
opacity:0.5;
}
div108{
color:black;
font-size:30px;
font-family:"lucida handwriting",cursive;
position:absolute;
margin-left:1080px;
top:2300px;
}
div109{
position:absolute;
margin-left:60px;
top:2880px;
opacity:0.5;
}
div110{
color:black;
font-size:30px;
font-family:"lucida handwriting",cursive;
position:absolute;
margin-left:280px;
top:2900px;
}
div111{
position:absolute;
margin-left:850px;
top:3440px;
opacity:0.5;
}
div112{
color:black;
font-size:30px;
font-family:"lucida handwriting",cursive;
position:absolute;
margin-left:1060px;
top:3450px;
}
div113{
position:absolute;
margin-left:70px;
top:4030px;
opacity:0.5;
}
div114{
color:black;
font-size:30px;
font-family:"lucida handwriting",cursive;
position:absolute;
margin-left:280px;
top:4040px;
}
div115{
position:absolute;
margin-left:850px;
top:4630px;
opacity:0.5;
}
div116{
color:black;
font-size:30px;
font-family:"lucida handwriting",cursive;
position:absolute;
margin-left:1060px;
top:4640px;
}
div117{
position:absolute;
margin-left:70px;
top:5180px;
opacity:0.5;
}
div118{
color:black;
font-size:30px;
font-family:"lucida handwriting",cursive;
position:absolute;
margin-left:280px;
top:5190px;
}
div119{
position:absolute;
margin-left:850px;
top:5730px;
opacity:0.5;
}
div120{
color:black;
font-size:30px;
font-family:"lucida handwriting",cursive;
position:absolute;
margin-left:1060px;
top:5740px;
}
div121{
position:absolute;
margin-left:0px;
top:6530px;
}
div122{
color:white;
font-size:30px;
position:absolute;
margin-left:510px;
top:6600px;
font-family:verdena;
border-bottom: 3px solid white;
}
div123{
position:absolute;
margin-left:150px;
top:6650px;
}
div124{
position:absolute;
margin-left:450px;
top:6650px;
}
div125{
position:absolute;
margin-left:750px;
top:6650px;
}
div126{
position:absolute;
margin-left:1050px;
top:6650px;
}
div127{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:500px;
top:6950px;
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
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:750px;
top:1710px;
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
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:100px;
top:2320px;
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
.button5{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:700px;
top:2850px;
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
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:80px;
top:3450px;
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
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:750px;
top:4000px;
}
.button10{
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
.button11{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:100px;
top:4570px;
}
.button12{
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
.button13{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:750px;
top:5140px;
}
.button14{
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
.button15{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:100px;
top:5720px;
}
.button16{
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
.button17{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:1060px;
top:1710px;
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
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:400px;
top:2320px;
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
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:1060px;
top:2850px;
}
.button22{
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
.button23{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:400px;
top:3450px;
}
.button24{
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
.button25{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:1060px;
top:4000px;
}
.button26{
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
.button27{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:400px;
top:4570px;
}
.button28{
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
.button29{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:1060px;
top:5140px;
}
.button30{
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
.button31{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 15px 32px;
   color: white;
position:absolute;
margin-left:470px;
top:5720px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
font-family:"lucida handwriting", cursive;
  overflow: hidden;
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
$query="SELECT * FROM roomsimage";
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
      <img src="<?php echo"fetchimage/".$row['carousal1'];?>" alt="image" class="d-block"width="1520"height="600">
    </div>
    <div class="carousel-item">
      <img src="<?php echo"fetchimage/".$row['carousal2'];?>" alt="Chicago" class="d-block"width="1520"height="600">
    </div>
    <div class="carousel-item">
      <img src="<?php echo"fetchimage/".$row['carousal3'];?>" alt="New York" class="d-block"width="1520"height="600">
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
<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1520"height="5200"></img></div1>

<div2><p>DISCOVER <?php echo $row["websitename"];?> RANGE OF<br> CHARMING ROOMS AND LUXURY<br> SUITES.</p></div2>
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

<div3><p>Be our guest and ease your way into an unforgettable 5-star experience. Set within two striking towers “Tower 1” which is a 9 storey building across “Tower 2” which is our main building and houses all the facilities like swimming pool, restaurant, gym & meeting rooms, our 279 guest rooms are conceptually inspired by the high peaks and lush meadows of a Silk Road expedition. Each space has been carefully designed with plush interior furnishings, relaxed cultural elements, barefoot friendly soft carpeting and state-of-the-art connectivity.</p></div3>

<div4><p>ACCOMMODATIONS</p></div4>
<?php
$query="SELECT * FROM roomsimage";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div5><img src="https://assets.hyatt.com/content/dam/hyatt/hyattdam/images/2021/01/20/0108/HYCOM-Change-Starts-Here-012020.jpg/HYCOM-Change-Starts-Here-012020.16x9.jpg?imwidth=960"width="250"height="250"></img></div5>

<div6><img src="<?php echo"fetchimage/".$row['firstroom'];?>"width="600"height="500"></img></div6>

<div7><p>SUPERIOR ROOM</p></div7>

<div8><p>Superior Rooms offer an intimate and restful stay perfect for solo travelers or partners. Rooms are situated on the corner of Tower 1 with a sweeping bird’s eye vista of the bustling street below. As our lead-in room category, every detail is well-considered to create a welcoming environment and enhance the space. These rooms also feature a workstation, perfect for business and remote-working travelers.</p></div8>

<div9>
<ul>
  <li>*  Area:4 sqm</li><br>
  <li>*  Type:king</li><br>
  <li>*  Person:2</li><br>
  <li>*  Tower:1</li>
</ul>  
</div9>

<a href="http://localhost:8080/tutor/reservation.php" target="_blank"><button class="button0 button1"><b>Book Now</b></button></a>

<div10><img src="<?php echo"fetchimage/".$row['secondroom'];?>"width="600"height="500"></img></div10>

<div11><p>GRAND SUPERIOR ROOM</p></div11>

<div12><p>Upgrade your experience to a Grand Superior Room. With more space to stretch out,<br> the Grand Superior is a great option to relax and unwind after a busy day in the city.<br> These rooms are available with a king size bed or two single size beds and feature a<br> dining table or workstation. The long cozy window sofa provides ample lounge space<br> and is perfect for gazing at the spectacular view with a drink from the 24-hour room<br> service menu.</p></div12>
<div13>
<ul>
  <li>* Area:36 sqm</li><br>
  <li>* Type:king/Twin</li><br>
  <li>* Person:3</li><br>
  <li>* Tower:1</li>
</ul>  
</div13>
<a href="http://localhost:8080/tutor/reservation.php" target="_blank"><button class="button2 button3"><b>Book Now</b></button></a>

<div14><img src="<?php echo"fetchimage/".$row['thirdroom'];?>"height="500"width="600"></img></div14>

<div15><p>GRAND DELUXE</p></div15>

<div16><p>Grand Deluxe Rooms provide our guests with the opportunity to live within even more spacious luxury to rest and recover with over forty square meters of elegant space. The dining table allows you to enjoy fresh and delicious meals from our restaurant without having to leave your room. Then lie back and cozy up to a movie, stretch out on the large window seat with a book, or treat yourself to a luxurious bubble bath. There is also ample wardrobe space and the interior bathroom window adds light and interest to the room.</p></div16>

<div17>
<ul>
  <li>* Area:48 sqm</li><br>
  <li>* Type:King</li><br>
  <li>* Person:3</li><br>
  <li>* Tower:1</li>
</ul>  
</div17>
<a href="http://localhost:8080/tutor/reservation.php" target="_blank"><button class="button4 button5"><b>Book Now</b></button></a>

<div18><img src="<?php echo"fetchimage/".$row['fourthroom'];?>"width="600"height="500"></img></div18>
<div19><p>TRIPLE ROOM</p></div19>

<div20><p>Our unique Triple Rooms are composed of a remarkable sixty square meters and<br> all the comforts of home. These rooms are perfect for a group of friends or families<br> with a choice of either three single size beds or one king size and one single size bed.<br> Another fabulous feature of the Triple Room is the partitioned living area with a large<br> L-shaped sofa and second TV for optimal entertainment and convenience. These rooms<br> also feature a dining table, stand-alone bathtub, and interior bathroom windows.</p></div20>
<div21>
<ul style="list-style-type:circle;">
  <li>* Area:60 sqm</li><br>
  <li>* Type:Three Single size beds or One King size and One Single size bed</li><br>
  <li>* Person:4</li><br>
  <li>* Tower:1</li>
</ul>  
</div21>
<a href="http://localhost:8080/tutor/reservation.php" target="_blank"><button class="button6 button7"><b>Book Now</b></button></a>

<div22><img src="<?php echo"fetchimage/".$row['fifthroom'];?>"width="600"height="500"></img></div22>

<div23><p>PREMIUM ROOM</p></div23>

<div24><p>Wake up and fall asleep to extraordinary city views, Premier Rooms feature impressive wall-length windows that leave you feeling like you’re literally on top of the world. These inviting and open spaces feature a chaise-lounge, larger workstation and interior bathroom window for added comfort and convenience.</p></div24>

<div25>
<ul>
  <li>* Area:38 sqm</li><br>
  <li>* Type:king/Twin</li><br>
  <li>* Person:3</li><br>
  <li>* Tower:2</li>
</ul>  
</div25>
<a href="http://localhost:8080/tutor/reservation.php" target="_blank"><button class="button8 button9"><b>Book Now</b></button></a>

<div26><img src="<?php echo"fetchimage/".$row['sixthroom'];?>"width="600"height="500"></img></div26>

<div27><p>GRAND EXECUTIVE</p></div27>

<div28><p>Elevate your experience to our Grand Executive room. A true cut above the rest, this<br> sleek and sophisticated room offers all the creature comforts of refined taste. The relaxing<br> armchairs and coffee table are ideal for perching in front of the floor-to-ceiling windows to<br> enjoy the view, while the separate bathtub and luxury amenities from Bangkok’s Divana Spa<br> are perfect for pampering.</p></div28>
<div29>
<ul>
  <li>* Area:48 sqm</li><br>
  <li>* Type:king/Twin</li><br>
  <li>* Person:3</li><br>
  <li>* Tower:2</li>
</ul>  
</div29>
<a href="http://localhost:8080/tutor/reservation.php" target="_blank"><button class="button10 button11"><b>Book Now</b></button></a>
<div30><img src="<?php echo"fetchimage/".$row['seventhroom'];?>"width="600"height="500"></img></div30>

<div31><p>ONE BEDROOM SUITE</p></div31>

<div32><p>Planning to stay a bit longer? Our One Bedroom Suites are designed for longer-term guests or staycationers. The kitchenette and living area come equipped with a coffee maker, microwave, dining table and washing machine. The spacious bedroom features a dressing table or workstation along with a cozy chaise-longue while the spacious bathroom features a separate bathtub and large interior window.</p></div32>

<div33>
<ul>
  <li>* Area:52 sqm</li><br>
  <li>* Type:King</li><br>
  <li>* Person:3</li><br>
  <li>* Tower:2</li>
</ul>  
</div33>
<a href="http://localhost:8080/tutor/reservation.php" target="_blank"><button class="button12 button13"><b>Book Now</b></button></a>

<div34><img src="<?php echo"fetchimage/".$row['eightroom'];?>"width="600"height="500"></img></div34>

<div35><p>FAMILY EXECUTIVE SUITE</p></div35>

<div36><p>The Family Executive Suite allows for ultimate comfort when traveling together as a family,<br> accommodating up to three guests with one king size bed and one single size bed. Within the<br> 60 square meters of these spacious suites is a partitioned living area with a second TV and<br> large L-shaped sofa along with a dining table for rainy room service days. These suites also<br> feature a dressing table, extra clothing storage space, his-and-hers bathroom sinks and a<br> luxurious separate bathtub.</p></div36>
<div37>
<ul>
  <li>* Area:60 sqm</li><br>
  <li>* Type:King & One Single Bed</li><br>
  <li>* Person:3</li><br>
  <li>* Tower:2</li>
</ul>  
</div37>
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
<a href="http://localhost:8080/tutor/reservation.php" target="_blank"><button class="button14 button15"><b>Book Now</b></button></a>
<!-----------------------------------amenities----------------------------------->
<div49><img src="https://wallpaperaccess.com/full/1153686.jpg"width="1520"height="700"></img></div49>
<div50><img src="https://wallpaperaccess.com/full/1556608.jpg"width="1300"height="600"></img></div50>
<div51><p><i><b>AMENITIES</b></i></p></div51>
<div88><h><b><i>*  Complimentary Drinking Water</i></b></h></div88>
<div89><h><b><i>*  Coffee & Tea making Facilities</i></b></h></div89>
<div90><h><b><i>*  Minibar</i></b></h></div90>
<div91><h><b><i>*  Individual air-condition control</i></b></h></div91>
<div92><h><b><i>*  Shower with thermostatic mixer control</i></b></h></div92>
<div93><h><b><i>*  Handheld bidet</i></b></h></div93>
<div94><h><b><i>*  Bathroom Toiletries</i></b></h></div94>
<div95><h><b><i>*  Bathrobes and Slippers</i></b></h></div95>
<div96><h><b><i>*  Hairdryer</i></b></h></div96>
<div97><h><b><i>*  Full-Length mirror</i></b></h></div97>
<div98><h><b><i>*  HD-LED Smart TV 55" with Netflix and YouTube</i></b></h></div98>
<div99><h><b><i>*  Free high-speed fibre optic Wi-Fi connection</i></b></h></div99>
<div100><h><b><i>*  In-room safety box</i></b></h></div100>
<div101><h><b><i>*  Iron & Ironing Board</i></b></h></div101>
<div102><img src="https://cdn-icons-png.flaticon.com/128/2607/2607259.png"width="100"height="100"></div102>
<div103><img src="https://cdn-icons-png.flaticon.com/128/1183/1183657.png"width="100"height="100"></div103>
<div104><img src="https://cdn-icons-png.flaticon.com/128/3386/3386967.png"width="100"height="100"></div104>
<!check availability buttons>
<form action=""autocomplete="off"method="post">
<!-------------------------first room availability check---------------------------->
  <div56><label for="checkin"><b><i>Check in Date:</i></b></label></div56>
  <div57><input type="date" id="checkin" name="checkin"size="10"required></div57>
  <div58><label for="checkout"><b><i>Check Out Date:</i></b></label></div58>
  <div59><input type="date" id="checkout" name="checkout"required></div59>
  <button class="button16 button17"type="submit" name="Submit1"><b>Check Availability</b></button>

<!-------------------------second room availability check--------------------------->
  <div60><label for="checkin"><b><i>Check in Date:</i></b></label></div60>
  <div61><input type="date" id="checkin" name="checkin"size="10"></div61>
  <div62><label for="checkout"><b><i>Check Out Date:</i></b></label></div62>
  <div63><input type="date" id="checkout" name="checkout"></div63>
  <button class="button18 button19"type="submit" name="Submit2"><b>Check Availability</b></button>

<!-------------------------third room availability check--------------------------->
  <div64><label for="checkin"><b><i>Check in Date:</i></b></label></div64>
  <div65><input type="date" id="checkin" name="checkin"size="10"></div65>
  <div66><label for="checkout"><b><i>Check Out Date:</i></b></label></div66>
  <div67><input type="date" id="checkout" name="checkout"></div67>
  <button class="button20 button21"type="submit" name="Submit3"><b>Check Availability</b></button>

<!-------------------------fourth room availability check--------------------------->
  <div68><label for="checkin"><b><i>Check in Date:</i></b></label></div68>
  <div69><input type="date" id="checkin" name="checkin"size="10"></div69>
  <div70><label for="checkout"><b><i>Check Out Date:</i></b></label></div70>
  <div71><input type="date" id="checkout" name="checkout"></div71>
  <button class="button22 button23"type="submit"name="Submit4"><b>Check Availability</b></button>

<!-------------------------fifth room availability check--------------------------->
  <div72><label for="checkin"><b><i>Check in Date:</i></b></label></div72>
  <div73><input type="date" id="checkin" name="checkin"size="10"></div73>
  <div74><label for="checkout"><b><i>Check Out Date:</i></b></label></div74>
  <div75><input type="date" id="checkout" name="checkout"></div75>
  <button class="button24 button25"type="submit" name="Submit5"><b>Check Availability</b></button>

<!-------------------------sixth room availability check--------------------------->
  <div76><label for="checkin"><b><i>Check in Date:</i></b></label></div76>
  <div77><input type="date" id="checkin" name="checkin"size="10"></div77>
  <div78><label for="checkout"><b><i>Check Out Date:</i></b></label></div78>
  <div79><input type="date" id="checkout" name="checkout"></div79>
  <button class="button26 button27"type="submit" name="Submit6"><b>Check Availability</b></button>

<!-------------------------seventh room availability check--------------------------->
  <div80><label for="checkin"><b><i>Check in Date:</i></b></label></div80>
  <div81><input type="date" id="checkin" name="checkin"size="10"></div81>
  <div82><label for="checkout"><b><i>Check Out Date:</i></b></label></div82>
  <div83><input type="date" id="checkout" name="checkout"></div83>
  <button class="button28 button29"type="submit"name="Submit7"><b>Check Availability</b></button>

<!----------------------------eigth room availability check--------------------------->
  <div84><label for="checkin"><b><i>Check in Date:</i></b></label></div84>
  <div85><input type="date" id="checkin" name="checkin"size="10"></div85>
  <div86><label for="checkout"><b><i>Check Out Date:</i></b></label></div86>
  <div87><input type="date" id="checkout" name="checkout"></div87>
  <button class="button30 button31"type="submit" name="Submit8"><b>Check Availability</b></button>
</form>
<!-------------------------------------------group brands----------------------------->
<?php
$query="SELECT * FROM websitesettings";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div121><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1520"height="500"></img></div121>
<div122><h>KINGSTON HOTELS GROUP BRANDS</h></div122>

<div123><img src="https://cdn.freebiesupply.com/logos/large/2x/w-hotels-1-logo-black-and-white.png"width="300"height="300"></img></div123>

<div124><img src="https://optimise2.assets-servd.host/super-conductor/production/uploads/project/evo-hotel/CS_EVO_532x480_Logo.jpg?w=660&h=595&auto=compress%2Cformat&fit=crop&dm=1658784648&s=22f9e3726a7d6fc595730fa86269b74a"width="300"height="300"></img></div124>

<div125><img src="https://img.myloview.com/posters/minimal-innovative-initial-sp-logo-and-ps-logo-letter-sp-ps-creative-elegant-monogram-premium-business-logo-icon-white-color-on-black-background-400-216885200.jpg"height="300"width="300"></img></div125>

<div126><img src="https://s3.us-east-1.amazonaws.com/cdn.designcrowd.com/blog/60-Hotel-Logos-For-Awesome-Vacation/beach%20hotel%20logos/hotel-royal-by-the-monochromatic-institute-dribbble.png"width="300"height="300"></img></div126>

<div127><p>© 2023 <?php echo $row["websitename"];?>. All Rights Reserved. Website Design India</p></div127>
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

<!-------------------------------------------price tag-------------------------------->
<div105><img src="https://wallpaperaccess.com/full/1556608.jpg"width="600"height="70"></img></div105>

<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM adminrooms");
?>
<?php foreach($rows as $row):?>
<div106><p><b>INR <?php echo $row["sr"];?></b></p></div106>
<div107><img src="https://wallpaperaccess.com/full/1556608.jpg"width="600"height="70"></img></div107>
<div108><p><b>INR <?php echo $row["gsr"];?></b></p></div108>
<div109><img src="https://wallpaperaccess.com/full/1556608.jpg"width="600"height="70"></img></div109>
<div110><p><b>INR <?php echo $row["gdr"];?></b></p></div110>
<div111><img src="https://wallpaperaccess.com/full/1556608.jpg"width="600"height="70"></img></div111>
<div112><p><b>INR <?php echo $row["tr"];?></b></p></div112>
<div113><img src="https://wallpaperaccess.com/full/1556608.jpg"width="600"height="70"></img></div113>
<div114><p><b>INR <?php echo $row["pr"];?></b></p></div114>
<div115><img src="https://wallpaperaccess.com/full/1556608.jpg"width="600"height="70"></img></div115>
<div116><p><b>INR <?php echo $row["ger"];?></b></p></div116>
<div117><img src="https://wallpaperaccess.com/full/1556608.jpg"width="600"height="70"></img></div117>
<div118><p><b>INR <?php echo $row["obrsr"];?></b></p></div118>
<div119><img src="https://wallpaperaccess.com/full/1556608.jpg"width="600"height="70"></img></div119>
<div120><p><b>INR <?php echo $row["fer"];?></b></p></div120>
<?php endforeach;?>










</body>
</html>


