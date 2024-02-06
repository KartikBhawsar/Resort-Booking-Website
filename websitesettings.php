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
 $webname=$_POST['webname'];
$sql = "UPDATE websitesettings SET websitename='$webname' WHERE sno=1";
mysqli_query($conn,$sql);
}

if(isset($_POST['update2'])){
$file=$_FILES['weblogo']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['weblogo']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['weblogo']['name'])){
        $filename=$_FILES['weblogo']['name'];
        echo "imager already exist".$filename;
}
    else{
$query="UPDATE websitesettings SET websitelogo='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['weblogo']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update3'])){
 $twitter=$_POST['twitter'];
$sql = "UPDATE websitesettings SET twitterlink='$twitter' WHERE sno=1";
mysqli_query($conn,$sql);
}

if(isset($_POST['update4'])){
 $insta=$_POST['insta'];
$sql = "UPDATE websitesettings SET instalink='$insta' WHERE sno=1";
mysqli_query($conn,$sql);
}

if(isset($_POST['update5'])){
 $facebook=$_POST['facebook'];
$sql = "UPDATE websitesettings SET facebooklink='$facebook' WHERE sno=1";
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
.anotherpage{
color:white;
font-size:30px;
position:absolute;
margin-left:600px;
top:920px;
font-family:verdena;
border-bottom:3px solid white;
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
margin-left:600px;
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
position:absolute;
margin-left:100px;
top:200px;
}
div6
{
position:absolute;
margin-left:100px;
top:210px;
}
div7
{
color:white;
font-size:30px;
position:absolute;
margin-left:600px;
border-bottom:3px solid white;
top:220px;
font-family:verdena;
}
div8
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:350px;
font-family:verdena;
}
div9
{
position:absolute;
margin-left:430px;
top:350px;
}
div10
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:450px;
font-family:verdena;
}
div11
{
position:absolute;
margin-left:430px;
top:450px;
}
div12
{
color:white;
font-size:30px;
position:absolute;
margin-left:610px;
top:550px;
border-bottom:3px solid white;
font-family:verdena;
}
div13
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:650px;
font-family:verdena;
}
div14
{
color:white;
font-size:20px;
position:absolute;
margin-left:430px;
top:650px;
font-family:verdena;
}
div15
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:750px;
font-family:verdena;
}
div16
{
position:absolute;
margin-left:430px;
top:750px;
}
div17
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:850px;
font-family:verdena;
}
div18
{
position:absolute;
margin-left:430px;
top:850px;
}
div19
{
position:absolute;
margin-left:130px;
top:640px;
}
div20
{
position:absolute;
margin-left:130px;
top:740px;
}
div21
{
position:absolute;
margin-left:130px;
top:840px;
}
div22
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:1000px;
font-family:verdena;
}
div23
{
color:white;
font-size:20px;
position:absolute;
margin-left:800px;
top:1000px;
font-family:verdena;
}
div24
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:1100px;
font-family:verdena;
}
div26
{
color:white;
font-size:20px;
position:absolute;
margin-left:800px;
top:1100px;
font-family:verdena;
}
div27
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:1190px;
font-family:verdena;
}
div28
{
color:white;
font-size:20px;
position:absolute;
margin-left:900px;
top:350px;
font-family:verdena;
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
   padding: 8px 25px;
   color: white;
position:absolute;
font-family:verdena;
margin-left:740px;
top:340px;
}
.button19{
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
.button20{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 8px 25px;
   color: white;
position:absolute;
font-family:verdena;
margin-left:740px;
top:440px;
}
.button21{
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
.button22{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 8px 25px;
   color: white;
position:absolute;
font-family:verdena;
margin-left:980px;
top:640px;
}
.button23{
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
.button24{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 8px 25px;
   color: white;
position:absolute;
font-family:verdena;
margin-left:980px;
top:740px;
}
.button25{
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
.button26{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 8px 25px;
   color: white;
position:absolute;
font-family:verdena;
margin-left:980px;
top:840px;
}
.button27{
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
.button28{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 8px 25px;
   color: white;
position:absolute;
font-family:verdena;
margin-left:350px;
top:990px;
}
.button29{
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
.button30{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 8px 25px;
   color: white;
position:absolute;
font-family:verdena;
margin-left:1100px;
top:990px;
}
.button31{
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
.button32{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 8px 25px;
   color: white;
position:absolute;
font-family:verdena;
margin-left:350px;
top:1090px;
}
.button33{
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
.button34{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 8px 25px;
   color: white;
position:absolute;
font-family:verdena;
margin-left:1100px;
top:1100px;
}
.button35{
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
.button36{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 8px 25px;
   color: white;
position:absolute;
font-family:verdena;
margin-left:350px;
top:1180px;
}
.button37{
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
.button38{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 8px 25px;
   color: white;
position:absolute;
font-family:verdena;
margin-left:1090px;
top:340px;
}
</style>
<body>
<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1537"height="150"></img></div1>
<div2><img src="https://seeklogo.com/images/W/wynn-resorts-logo-2F25AD2042-seeklogo.com.png"width="180"height="130"></img></div2>
<div3><p><b>Welcome <?php echo $row["username"];?>!</b></p></div3>
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
<div4><img src="https://wallpaper.dog/large/10921233.jpg"width="1535"height="1150"></img></div4>
<div5><img src="https://t3.ftcdn.net/jpg/04/42/47/52/360_F_442475292_5ouemiiJiArGyNKSWgUpkRR8lmep6jgM.jpg"width="1300"height="1120"></img></div5>
<div6><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1300"height="1100"></img></div6>
<div7><p><b><i>Update Website Settings</i></b></p></div7>

<!-------------------------------------------------------form data------------------------------------->
<form action="websitesettings.php"autocomplete="off"method="POST">
<div8><p><b>Update Website Name   :</b></p></div8>
<div9><input type="text" name="webname"size="30"></div9>
<button class="button17 button18"type="submit"name="update1"><b>Update</b></button>

<div10><p><b>Update Website Logo   :</b></p></div10>
<div11><input type="file" name="weblogo" id="weblogo"size="30"></div11>
<button class="button19 button20"type="submit"name="update2"><b>Update</b></button>

<div12><p><b><i>Update Social Links</i></b></p></div12>
<div13><p><b>Update Twitter Link:</b></p></div13>
<div14><input type="url" name="twitter"size="40"></div14>
<button class="button21 button22"type="submit"name="update3"><b>Update</b></button>

<div15><p><b>Update Instagram Link:</b></p></div15>
<div16><input type="url" name="insta"size="58"></div16>
<button class="button23 button24"type="submit"name="update4"><b>Update</b></button>

<div17><p><b>Update Facebook Link:</b></p></div17>
<div18><input type="url" name="facebook"size="58"></div18>
<button class="button25 button26"type="submit"name="update5"><b>Update</b></button>
</form>

<!--------------------------------------------main site link------------------------------------------------->
<a href="http://localhost:8080/tutor/home.php"title="open main site"><p class="mainsite"><b>--->Open Main Site</b><---</p></a>

<!----------------------------------------------logout button----------------------------------------------->
<a href="http://localhost:8080/tutor/logout.php"title="logout"><img src="https://cdn-icons-png.flaticon.com/128/9692/9692702.png"width="30"height="30"class="logout"></img></a>


<!------------------------------------------------------------LOGO IMAGE iNSTA fACEBOOK TWITTER----------------------------------------------------------->
<div19><img src="https://cdn-icons-png.flaticon.com/128/1312/1312142.png"width="50"height="50"></img></div19>
<div20><img src="https://cdn-icons-png.flaticon.com/128/2504/2504918.png"width="50"height="50"></img></div20>
<div21><img src="https://cdn-icons-png.flaticon.com/128/733/733547.png"width="50"height="50"></img></div21>

<!-------------------------------------------------------------------------update another page------------------------------------------>
<p class="anotherpage"><b>Update Another Page</b></p>
<div22><p><b>Front Page:</b></p></div22>
<a href=""><button class="button27 button28"type="submit">Click Here</button></a>
<div23><p><b>Meetings and Venue Page:</b></p></div23>
<a href="http://localhost:8080/tutor/adminmeetings.php"><button class="button29 button30"type="submit">Click Here</button></a>
<div24><p><b>Home Page:</b></p></div24>
<a href="http://localhost:8080/tutor/adminhome.php"><button class="button31 button32"type="submit">Click Here</button></a>
<div26><p><b>Dinning Page:</b></p></div26>
<a href="http://localhost:8080/tutor/admindinning.php"><button class="button33 button34"type="submit">Click Here</button></a>
<div27><p><b>Rooms Page:</b></p></div27>
<a href="http://localhost:8080/tutor/roomsimagechange.php"><button class="button35 button36"type="submit">Click Here</button></a>
<div28><p><b>Delete Reservation:</b></p></div28>
<a href="http://localhost:8080/tutor/cancelreservation.php"><button class="button37 button38"type="submit">Delete Reservation</button></a>




</body>
</html>