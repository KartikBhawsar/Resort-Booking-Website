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
 $file=$_FILES['carousal1']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['carousal1']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['carousal1']['name'])){
        $filename=$_FILES['carousal1']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE adminhome SET carousal1='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['carousal1']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update2'])){
 $file=$_FILES['carousal2']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['carousal2']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['carousal2']['name'])){
        $filename=$_FILES['carousal2']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE adminhome SET carousal2='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['carousal2']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update3'])){
 $file=$_FILES['carousal3']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['carousal3']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['carousal3']['name'])){
        $filename=$_FILES['carousal3']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE adminhome SET carousal3='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['carousal3']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update4'])){
 $file=$_FILES['room1']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['room1']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['room1']['name'])){
        $filename=$_FILES['room1']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE adminhome SET firstimage='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['room1']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update5'])){
 $file=$_FILES['room2']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['room2']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['room2']['name'])){
        $filename=$_FILES['room2']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE adminhome SET secondimage='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['room2']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update6'])){
 $file=$_FILES['room3']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['room3']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['room3']['name'])){
        $filename=$_FILES['room3']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE adminhome SET thirdimage='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['room3']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update7'])){
 $file=$_FILES['room4']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['room4']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['room4']['name'])){
        $filename=$_FILES['room4']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE adminhome SET fourthimage='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['room4']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update8'])){
 $file=$_FILES['room5']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['room5']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['room5']['name'])){
        $filename=$_FILES['room5']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE adminhome SET fifthimage='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['room5']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update9'])){
 $file=$_FILES['room6']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['room6']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['room6']['name'])){
        $filename=$_FILES['room6']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE adminhome SET sixthimage='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['room6']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update10'])){
 $file=$_FILES['room7']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['room7']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['room7']['name'])){
        $filename=$_FILES['room7']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE adminhome SET seventhimage='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['room7']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update11'])){
 $file=$_FILES['room8']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['room8']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['room8']['name'])){
        $filename=$_FILES['room8']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE adminhome SET eigthimage='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['room8']['tmp_name'],"./fetchimage/$file");
}
}
}
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
color:white;
font-size:30px;
position:absolute;
margin-left:550px;
top:180px;
font-family:verdena;
border-bottom:3px solid white;
}
div6
{
position:absolute;
margin-left:100px;
top:300px;
}
div7
{
color:white;
font-size:30px;
position:absolute;
margin-left:590px;
top:330px;
font-family:verdena;
border-bottom:3px solid white;
}
div8
{
position:absolute;
margin-left:100px;
top:290px;
}
div9
{
color:white;
font-size:25px;
position:absolute;
margin-left:200px;
top:500px;
font-family:verdena;
}
div10
{
position:absolute;
margin-left:700px;
top:650px;
}
div11
{
position:absolute;
margin-left:150px;
top:580px;
}
div12
{
color:white;
font-size:25px;
position:absolute;
margin-left:200px;
top:850px;
font-family:verdena;
}
div13
{
position:absolute;
margin-left:700px;
top:1000px;
}
div14
{
position:absolute;
margin-left:150px;
top:930px;
}
div15
{
color:white;
font-size:25px;
position:absolute;
margin-left:200px;
top:1200px;
font-family:verdena;
}
div16
{
position:absolute;
margin-left:700px;
top:1350px;
}
div17
{
position:absolute;
margin-left:150px;
top:1300px;
}
.u1
{
color:white;
font-size:30px;
position:absolute;
margin-left:700px;
top:1600px;
font-family:verdena;
border-bottom:3px solid white;
}
div18
{
color:white;
font-size:25px;
position:absolute;
margin-left:200px;
top:1650px;
font-family:verdena;
}
div19
{
position:absolute;
margin-left:700px;
top:1750px;
}
div20
{
position:absolute;
margin-left:200px;
top:1720px;
}
div21
{
color:white;
font-size:25px;
position:absolute;
margin-left:200px;
top:1950px;
font-family:verdena;
}
div22
{
position:absolute;
margin-left:700px;
top:2100px;
}
div23
{
position:absolute;
margin-left:200px;
top:2000px;
}
div24
{
color:white;
font-size:25px;
position:absolute;
margin-left:200px;
top:2300px;
font-family:verdena;
}
div25
{
position:absolute;
margin-left:700px;
top:2400px;
}
div26
{
position:absolute;
margin-left:200px;
top:2350px;
}
div27
{
color:white;
font-size:25px;
position:absolute;
margin-left:200px;
top:2600px;
font-family:verdena;
}
div28
{
position:absolute;
margin-left:700px;
top:2700px;
}
div29
{
position:absolute;
margin-left:200px;
top:2650px;
}
div30
{
color:white;
font-size:25px;
position:absolute;
margin-left:200px;
top:2900px;
font-family:verdena;
}
div31
{
position:absolute;
margin-left:700px;
top:3000px;
}
div32
{
position:absolute;
margin-left:200px;
top:2960px;
}
div33
{
color:white;
font-size:25px;
position:absolute;
margin-left:200px;
top:3200px;
font-family:verdena;
}
div34
{
position:absolute;
margin-left:700px;
top:3300px;
}
div35
{
position:absolute;
margin-left:200px;
top:3250px;
}
div36
{
color:white;
font-size:25px;
position:absolute;
margin-left:200px;
top:3500px;
font-family:verdena;
}
div37
{
position:absolute;
margin-left:700px;
top:3600px;
}
div38
{
position:absolute;
margin-left:200px;
top:3550px;
}
div39
{
color:white;
font-size:25px;
position:absolute;
margin-left:200px;
top:3800px;
font-family:verdena;
}
div40
{
position:absolute;
margin-left:700px;
top:3900px;
}
div41
{
position:absolute;
margin-left:200px;
top:3850px;
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
  padding: 5px 25px;
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
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:640px;
}
.button19{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
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
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:1000px;
}
.button21{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
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
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:1350px;
}
.button23{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
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
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:1750px;
}
.button25{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
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
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:2100px;
}
.button27{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
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
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:2400px;
}
.button29{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
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
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:2700px;
}
.button31{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
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
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:3000px;
}
.button33{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
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
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:3300px;
}
.button35{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
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
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:3600px;
}
.button37{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 5px 25px;
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
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1000px;
top:3900px;
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
<div4><img src="https://wallpaper.dog/large/10921233.jpg"width="1535"height="4000"></img></div4>
<!--------------------------------------------main site link------------------------------------------------->
<a href="http://localhost:8080/tutor/home.php"title="open main site"><p class="mainsite"><b>--->Open Main Site<---</b></p></a>

<!----------------------------------------------logout button----------------------------------------------->
<a href="http://localhost:8080/tutor/logout.php"title="logout"><img src="https://cdn-icons-png.flaticon.com/128/9692/9692702.png"width="30"height="30"class="logout"></img></a>
<div5><p><b><i>Update Home Images </i></b></p></div5>
<div6><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid.jpg"width="1300"height="3800"></img></div6>
<div7><p><b>Update Carousal Image</b></p></div7>
<div8><img src="https://wallpapers.com/images/featured/7sn5o1woonmklx1h.jpg"width="1300"height="4"></img></div8>
<p class="u1"><b>Update Images</b></p>


<!--------------------------------------------------form for upload images and data-------------------------------------->
<form autocomplete="off"action="#"method="POST"enctype="multipart/form-data">
   <div9><label for="carousal1"><b><i>Update First Carousal image</i></b>:</label></div9>
   <div10><input type="file" id="carousal1" name="carousal1"size="80"accept=".jpg,.jpeg,.png"></div10>
   <div12><label for="carousal2"><b><i>Update Second Carousal image</i></b>:</label></div12>
   <div13><input type="file" id="carousal2" name="carousal2"size="80"accept=".jpg,.jpeg,.png"></div13>
   <div15><label for="carousal3"><b><i>Update Third Carousal image</i></b>:</label></div15>
   <div16><input type="file" id="carousal3" name="carousal3"size="80"accept=".jpg,.jpeg,.png"></div16>
   <div18><label for="room1"><b><i>first image</i></b>:</label></div18>
   <div19><input type="file" id="room1" name="room1"size="80"accept=".jpg,.jpeg,.png"></div19>
   <div21><label for="room2"><b><i> Second image</i></b>:</label></div21>
   <div22><input type="file" id="room2" name="room2"size="80"accept=".jpg,.jpeg,.png"></div22>
   <div24><label for="room3"><b><i>Third image</i></b>:</label></div24>
   <div25><input type="file" id="room3" name="room3"size="80"accept=".jpg,.jpeg,.png"></div25>
   <div27><label for="room4"><b><i>fourth image</i></b>:</label></div27>
   <div28><input type="file" id="room4" name="room4"size="80"accept=".jpg,.jpeg,.png"></div28>
   <div30><label for="room5"><b><i>fifth image</i></b>:</label></div30>
   <div31><input type="file" id="room5" name="room5"size="80"accept=".jpg,.jpeg,.png"></div31>
   <div33><label for="room6"><b><i>sixth Room image</i></b>:</label></div33>
   <div34><input type="file" id="room6" name="room6"size="80"accept=".jpg,.jpeg,.png"></div34>
   <div36><label for="room7"><b><i>seventh Room image</i></b>:</label></div36>
   <div37><input type="file" id="room7" name="room7"size="80"accept=".jpg,.jpeg,.png"></div37>
   <div39><label for="room8"><b><i>eigth image</i></b>:</label></div39>
   <div40><input type="file" id="room8" name="room8"size="80"accept=".jpg,.jpeg,.png"></div40>
   
   
<!----------------------------------------------------------------------update button------------------------------------->
<button class="button17 button18"type="submit"name="update1">Update</button>
<button class="button19 button20"type="submit"name="update2">Update</button>
<button class="button21 button22"type="submit"name="update3">Update</button>
<button class="button23 button24"type="submit"name="update4">Update</button>
<button class="button25 button26"type="submit"name="update5">Update</button>
<button class="button27 button28"type="submit"name="update6">Update</button>
<button class="button29 button30"type="submit"name="update7">Update</button>
<button class="button31 button32"type="submit"name="update8">Update</button>
<button class="button33 button34"type="submit"name="update9">Update</button>
<button class="button35 button36"type="submit"name="update10">Update</button>
<button class="button37 button38"type="submit"name="update11">Update</button>
</form>
<!-----------------------------------------------------------------------------fetch image ------------------------------------------------------->
<?php
$query="SELECT * FROM adminhome";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div11><img src="<?php echo"fetchimage/".$row['carousal1'];?>" width="450px"height="200px" alt="image"></img></div11>
<div14><img src="<?php echo"fetchimage/".$row['carousal2'];?>" width="450px"height="200px" alt="image"></img></div14>
<div17><img src="<?php echo"fetchimage/".$row['carousal3'];?>" width="450px"height="200px" alt="image"></img></div17>
<div20><img src="<?php echo"fetchimage/".$row['firstimage'];?>" width="450px"height="200px" alt="image"></img></div20>
<div23><img src="<?php echo"fetchimage/".$row['secondimage'];?>" width="450px"height="200px" alt="image"></img></div23>
<div26><img src="<?php echo"fetchimage/".$row['thirdimage'];?>" width="450px"height="200px" alt="image"></img></div26>
<div29><img src="<?php echo"fetchimage/".$row['fourthimage'];?>" width="450px"height="200px" alt="image"></img></div29>
<div32><img src="<?php echo"fetchimage/".$row['fifthimage'];?>" width="450px"height="200px" alt="image"></img></div32>
<div35><img src="<?php echo"fetchimage/".$row['sixthimage'];?>" width="450px"height="200px" alt="image"></img></div35>
<div38><img src="<?php echo"fetchimage/".$row['seventhimage'];?>" width="450px"height="200px" alt="image"></img></div38>
<div41><img src="<?php echo"fetchimage/".$row['eigthimage'];?>" width="450px"height="200px" alt="image"></img></div41>
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