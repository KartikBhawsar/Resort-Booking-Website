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
 $file=$_FILES['roomfirst']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['roomfirst']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['roomfirst']['name'])){
        $filename=$_FILES['roomfirst']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET firstroom='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['roomfirst']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update2'])){
 $file=$_FILES['roomsecond']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['roomsecond']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['roomsecond']['name'])){
        $filename=$_FILES['roomsecond']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET secondroom='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['roomsecond']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update3'])){
 $file=$_FILES['roomthird']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['roomthird']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['roomthird']['name'])){
        $filename=$_FILES['roomthird']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET thirdroom='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['roomthird']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update4'])){
 $file=$_FILES['roomfourth']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['roomfourth']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['roomfourth']['name'])){
        $filename=$_FILES['roomfourth']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET fourthroom='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['roomfourth']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update5'])){
 $file=$_FILES['roomfifth']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['roomfifth']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['roomfifth']['name'])){
        $filename=$_FILES['roomfifth']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET fifthroom='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['roomfifth']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update6'])){
 $file=$_FILES['roomsixth']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['roomsixth']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['roomsixth']['name'])){
        $filename=$_FILES['roomsixth']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET sixthroom='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['roomsixth']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update7'])){
 $file=$_FILES['roomseventh']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['roomseventh']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['roomseventh']['name'])){
        $filename=$_FILES['roomseventh']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET seventhroom='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['roomseventh']['tmp_name'],"./fetchimage/$file");
}
}
}
}


if(isset($_POST['update8'])){
 $file=$_FILES['roomeigth']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['roomeigth']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['roomeigth']['name'])){
        $filename=$_FILES['roomseigth']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET eigthroom='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['roomeigth']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update9'])){
 $file=$_FILES['metfirst']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['metfirst']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['metfirst']['name'])){
        $filename=$_FILES['metfirst']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET metfirst='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['metfirst']['tmp_name'],"./fetchimage/$file");
}
}
}
}


if(isset($_POST['update10'])){
 $file=$_FILES['metsecond']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['metsecond']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['metsecond']['name'])){
        $filename=$_FILES['metsecond']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET metsecond='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['metsecond']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update11'])){
 $file=$_FILES['metthird']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['metthird']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['metthird']['name'])){
        $filename=$_FILES['metthird']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET metthird='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['metthird']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update12'])){
 $file=$_FILES['eventfirst']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['eventfirst']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['eventfirst']['name'])){
        $filename=$_FILES['eventfirst']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET eventfirst='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['eventfirst']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update13'])){
 $file=$_FILES['eventsecond']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['eventsecond']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['eventsecond']['name'])){
        $filename=$_FILES['eventsecond']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET eventsecond='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['eventsecond']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update14'])){
 $file=$_FILES['eventthird']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['eventthird']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['eventthird']['name'])){
        $filename=$_FILES['eventthird']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET eventthird='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['eventthird']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update15'])){
 $file=$_FILES['wedfirst']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['wedfirst']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['wedfirst']['name'])){
        $filename=$_FILES['wedfirst']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET wedfirst='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['wedfirst']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update16'])){
 $file=$_FILES['wedsecond']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['wedsecond']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['wedsecond']['name'])){
        $filename=$_FILES['wedsecond']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET wedsecond='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['wedsecond']['tmp_name'],"./fetchimage/$file");
}
}
}
}

if(isset($_POST['update17'])){
 $file=$_FILES['wedthird']['name'];
$allowed_extension=array('png','jpg','jpeg');
$filename=$_FILES['wedthird']['name'];
$file_extension=pathinfo($filename,PATHINFO_EXTENSION);
if(!in_array($file_extension,$allowed_extension)){
    echo "You are allowed with only jpg,jpeg and png";
}
else{
    if(file_exists("fetchimage/".$_FILES['wedthird']['name'])){
        $filename=$_FILES['wedthird']['name'];
        echo "imager already exist".$filename;
}
    else{
$query= "UPDATE admingallery SET wedthird='$file' WHERE sno=1";
$res=mysqli_query($conn,$query);
if($res){
move_uploaded_file($_FILES['wedthird']['tmp_name'],"./fetchimage/$file");
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
margin-left:590px;
top:20px;
font-family:verdena;
}
div4
{
position:absolute;
margin-left:0px;
top:150px;
}
div6
{
color:white;
font-size:30px;
position:absolute;
margin-left:600px;
top:180px;
font-family:"lucida handwriting",cursive;
}
div7
{
position:absolute;
margin-left:450px;
top:150px;
}
div8
{
color:white;
font-size:30px;
position:absolute;
margin-left:100px;
top:280px;
font-family:verdena;
border-bottom:3px solid white;
}
div9
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:380px;
font-family:verdena;
}
div10
{
position:absolute;
margin-left:750px;
top:380px;
}
div11
{
position:absolute;
margin-left:350px;
top:340px;
}
div12
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:600px;
font-family:verdena;
}
div13
{
position:absolute;
margin-left:750px;
top:600px;
}
div14
{
position:absolute;
margin-left:350px;
top:550px;
}
div15
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:820px;
font-family:verdena;
}
div16
{
position:absolute;
margin-left:750px;
top:820px;
}
div17
{
position:absolute;
margin-left:350px;
top:760px;
}
div18
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:1050px;
font-family:verdena;
}
div19
{
position:absolute;
margin-left:750px;
top:1050px;
}
div20
{
position:absolute;
margin-left:350px;
top:1000px;
}
div21
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:1270px;
font-family:verdena;
}
div22
{
position:absolute;
margin-left:750px;
top:1270px;
}
div23
{
position:absolute;
margin-left:350px;
top:1210px;
}
div24
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:1450px;
font-family:verdena;
}
div25
{
position:absolute;
margin-left:750px;
top:1450px;
}
div26
{
position:absolute;
margin-left:350px;
top:1400px;
}
div27
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:1650px;
font-family:verdena;
}
div28
{
position:absolute;
margin-left:750px;
top:1650px;
}
div29
{
position:absolute;
margin-left:350px;
top:1600px;
}
div30
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:1860px;
font-family:verdena;
}
div31
{
position:absolute;
margin-left:750px;
top:1860px;
}
div32
{
position:absolute;
margin-left:350px;
top:1830px;
}
div33
{
color:white;
font-size:30px;
position:absolute;
margin-left:100px;
top:2030px;
font-family:verdena;
border-bottom:3px solid lightblue;
}
div34
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:2170px;
font-family:verdena;
}
div35
{
position:absolute;
margin-left:750px;
top:2170px;
}
div36
{
position:absolute;
margin-left:370px;
top:2120px;
}
div37
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:2370px;
font-family:verdena;
}
div38
{
position:absolute;
margin-left:750px;
top:2370px;
}
div39
{
position:absolute;
margin-left:370px;
top:2330px;
}
div40
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:2560px;
font-family:verdena;
}
div41
{
position:absolute;
margin-left:750px;
top:2560px;
}
div42
{
position:absolute;
margin-left:370px;
top:2520px;
}
div43
{
color:white;
font-size:30px;
position:absolute;
margin-left:100px;
top:2700px;
font-family:verdena;
border-bottom:3px solid white;
}
div44
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:2800px;
font-family:verdena;
}
div45
{
position:absolute;
margin-left:750px;
top:2800px;
}
div46
{
position:absolute;
margin-left:370px;
top:2750px;
}
div47
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:2980px;
font-family:verdena;
}
div48
{
position:absolute;
margin-left:750px;
top:2980px;
}
div49
{
position:absolute;
margin-left:370px;
top:2930px;
}
div50
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:3190px;
font-family:verdena;
}
div51
{
position:absolute;
margin-left:750px;
top:3190px;
}
div52
{
position:absolute;
margin-left:370px;
top:3130px;
}
div53
{
color:white;
font-size:30px;
position:absolute;
margin-left:100px;
top:3330px;
font-family:verdena;
border-bottom:3px solid white;
}
div54
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:3450px;
font-family:verdena;
}
div55
{
position:absolute;
margin-left:750px;
top:3450px;
}
div56
{
position:absolute;
margin-left:370px;
top:3400px;
}
div57
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:3650px;
font-family:verdena;
}
div58
{
position:absolute;
margin-left:750px;
top:3650px;
}
div59
{
position:absolute;
margin-left:370px;
top:3600px;
}
div60
{
color:white;
font-size:20px;
position:absolute;
margin-left:100px;
top:3850px;
font-family:verdena;
}
div61
{
position:absolute;
margin-left:750px;
top:3850px;
}
div62
{
position:absolute;
margin-left:370px;
top:3820px;
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
margin-left:200px;
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
margin-left:670px;
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
margin-left:810px;
top:70px;
}
.button11{
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
.button12{
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:370px;
}
.button13{
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
.button14{
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:590px;
}
.button13{
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
.button14{
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:590px;
}
.button15{
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
.button16{
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:810px;
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
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:1050px;
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
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:1260px;
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
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:1430px;
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
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:1650px;
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
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:1850px;
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
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:2160px;
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
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:2360px;
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
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:2550px;
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
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:2790px;
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
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:2980px;
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
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:3190px;
}
.button39{
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
.button40{
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:3450px;
}
.button41{
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
.button42{
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:3620px;
}
.button43{
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
.button44{
  background-color:green; 
  color: black; 
  border: 5px solid white;
   padding: 1px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1100px;
top:3840px;
}
.button45{
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
.button46{
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
.button47{
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
.button48{
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
.button49{
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
.button50{
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
.button51{
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
.button52{
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
.button53{
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
.button54{
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
.button55{
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
.button56{
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
.button57{
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
.button58{
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
.button59{
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
.button60{
  background-color:black; 
  color: black; 
  border: 5px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:1403px;
top:70px;
}






</style>
<body>
<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1537"height="150"></img></div1>
<div2><img src="https://seeklogo.com/images/W/wynn-resorts-logo-2F25AD2042-seeklogo.com.png"width="180"height="130"></img></div2>
<div3><p>Welcome  <?php echo $row["username"];?>!</p></div3>
<!----------------------------------------------button------------------------------------------------------->
<a href="http://localhost:8080/tutor/adminpanel.php"><button class="button45 button46">Gallery</button></a>
<a href="http://localhost:8080/tutor/adminbookingstatus.php"><button class="button47 button48">Booking Status</button></a>
<a href="http://localhost:8080/tutor/adminenquiry.php"><button class="button49 button50">Enquiry</button></a>
<a href="http://localhost:8080/tutor/adminrooms.php"><button class="button51 button52">Rooms</button></a>
<a href="http://localhost:8080/tutor/admincontact.php"><button class="button53 button54">Contact</button></a>
<a href="http://localhost:8080/tutor/websitesettings.php"><button class="button55 button56">Website Settings</button></a>
<a href="http://localhost:8080/tutor/analyse.php"><button class="button57 button58">Analyse</button></a>
<a href="http://localhost:8080/tutor/adminfind.php"><button class="button59 button60">Find</button></a>
<!----------------------------------------------images------------------------------------------------------->
<div4><img src="https://wallpaper.dog/large/10921233.jpg"width="1535"height="3900"></img></div4>

<!------------------------------------------------gallery images change------------------------------------------------->
<div6><p>Update Gallery images</p></div6>
<div7><img src="https://cdn-icons-png.flaticon.com/128/5309/5309792.png"width="100"height="100"></img></div7>
<div8><h>Rooms Images</h></div8>
<div33><h>Meetings and Venues Images</h></div33>
<div43><h>Events Images</h></div43>
<div53><h>Weedings Images</h></div53>

<!------------------------------------------------fetch image ---------------------------------------->
<?php
$query="SELECT * FROM admingallery";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div11><img src="<?php echo"fetchimage/".$row['firstroom'];?>" width="350px"height="150px" alt="image"></img></div11>
<div14><img src="<?php echo"fetchimage/".$row['secondroom'];?>" width="350px"height="150px" alt="image"></img></div14>
<div17><img src="<?php echo"fetchimage/".$row['thirdroom'];?>" width="350px"height="150px" alt="image"></img></div17>
<div20><img src="<?php echo"fetchimage/".$row['fourthroom'];?>" width="350px"height="150px" alt="image"></img></div20>
<div23><img src="<?php echo"fetchimage/".$row['fifthroom'];?>" width="350px"height="150px" alt="image"></img></div23>
<div26><img src="<?php echo"fetchimage/".$row['sixthroom'];?>" width="350px"height="150px" alt="image"></img></div26>
<div29><img src="<?php echo"fetchimage/".$row['seventhroom'];?>" width="350px"height="150px" alt="image"></img></div29>
<div32><img src="<?php echo"fetchimage/".$row['eigthroom'];?>" width="350px"height="150px" alt="image"></img></div32>
<div36><img src="<?php echo"fetchimage/".$row['metfirst'];?>" width="350px"height="150px" alt="image"></img></div36>
<div39><img src="<?php echo"fetchimage/".$row['metsecond'];?>" width="350px"height="150px" alt="image"></img></div39>
<div42><img src="<?php echo"fetchimage/".$row['metthird'];?>" width="350px"height="150px" alt="image"></img></div42>
<div46><img src="<?php echo"fetchimage/".$row['eventfirst'];?>" width="350px"height="150px" alt="image"></img></div46>
<div49><img src="<?php echo"fetchimage/".$row['eventsecond'];?>" width="350px"height="150px" alt="image"></img></div49>
<div52><img src="<?php echo"fetchimage/".$row['eventthird'];?>" width="350px"height="150px" alt="image"></img></div52>
<div56><img src="<?php echo"fetchimage/".$row['wedfirst'];?>" width="350px"height="150px" alt="image"></img></div56>
<div59><img src="<?php echo"fetchimage/".$row['wedsecond'];?>" width="350px"height="150px" alt="image"></img></div59>
<div62><img src="<?php echo"fetchimage/".$row['wedthird'];?>" width="350px"height="150px" alt="image"></img></div62>


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
   

<!--------------------------------------------------gallery form--------------------------------------------------------->
<form autocomplete="off"action="#"method="POST"enctype="multipart/form-data">
   <div9><label for="roomfirst"><b><i>Update First room image</i></b>:</label></div9>
   <div10><input type="file" id="roomfirst" name="roomfirst"size="80"accept=".jpg,.jpeg,.png"></div10>
   <div12><label for="roomsecond"><b><i>Update Second room image</i></b>:</label></div12>
   <div13><input type="file" id="roomsecond" name="roomsecond"size="80"accept=".jpg,.jpeg,.png"></div13>
   <div15><label for="roomthird"><b><i>Update Third room image</i></b>:</label></div15>
   <div16><input type="file" id="roomthird" name="roomthird"size="80"accept=".jpg,.jpeg,.png"></div16>
   <div18><label for="roomfourth"><b><i>Update Fourth room image</i></b>:</label></div18>
   <div19><input type="file" id="roomfourth" name="roomfourth"size="80"accept=".jpg,.jpeg,.png"></div19>
   <div21><label for="roomfifth"><b><i>Update Fifth room image</i></b>:</label></div21>
   <div22><input type="file" id="roomfifth" name="roomfifth"size="80"accept=".jpg,.jpeg,.png"></div22>
   <div24><label for="roomsixth"><b><i>Update Sixth room image</i></b>:</label></div24>
   <div25><input type="file" id="roomsixth" name="roomsixth"size="80"accept=".jpg,.jpeg,.png"></div25>
   <div27><label for="roomseventh"><b><i>Update Seventh room image</i></b>:</label></div27>
   <div28><input type="file" id="roomseventh" name="roomseventh"size="80"accept=".jpg,.jpeg,.png"></div28>
   <div30><label for="roomeigth"><b><i>Update Eight room image</i></b>:</label></div30>
   <div31><input type="file" id="roomeight" name="roomeigth"size="80"accept=".jpg,.jpeg,.png"></div31>
   <div34><label for="metfirst"><b><i>Update First Meeting image</i></b>:</label></div34>
   <div35><input type="file" id="metfirst" name="metfirst"size="80"accept=".jpg,.jpeg,.png"></div35>
   <div37><label for="metsecond"><b><i>Update Second Meeting image</i></b>:</label></div37>
   <div38><input type="file" id="metsecond" name="metsecond"size="80"accept=".jpg,.jpeg,.png"></div38>
   <div40><label for="metthird"><b><i>Update Third Meeting image</i></b>:</label></div40>
   <div41><input type="file" id="metthird" name="metthird"size="80"accept=".jpg,.jpeg,.png"></div41>
    <div44><label for="eventfirst"><b><i>Update First Event  image</i></b>:</label></div44>
   <div45><input type="file" id="eventfirst" name="eventfirst"size="80"accept=".jpg,.jpeg,.png"></div45>
   <div47><label for="eventsecond"><b><i>Update Second Event  image</i></b>:</label></div47>
   <div48><input type="file" id="eventsecond" name="eventsecond"size="80"accept=".jpg,.jpeg,.png"></div48>
   <div50><label for="eventthird"><b><i>Update Third Event  image</i></b>:</label></div50>
   <div51><input type="file" id="eventthird" name="eventthird"size="80"accept=".jpg,.jpeg,.png"></div51>
   <div54><label for="wedfirst"><b><i>Update First Wedding  image</i></b>:</label></div54>
   <div55><input type="file" id="wedfirst" name="wedfirst"size="80"accept=".jpg,.jpeg,.png"></div55>
   <div57><label for="wedsecond"><b><i>Update Second Wedding  image</i></b>:</label></div57>
   <div58><input type="file" id="wedsecond" name="wedsecond"size="80"accept=".jpg,.jpeg,.png"></div58>
   <div60><label for="wedthird"><b><i>Update Third Wedding  image</i></b>:</label></div60>
   <div61><input type="file" id="wedthird" name="wedthird"size="80"accept=".jpg,.jpeg,.png"></div61>















<!-------------------------------------------upload button-------------------------------------------------->
<button class="button11 button12"type="submit"name="update1">Update</button>
<button class="button13 button14"type="submit"name="update2">Update</button>
<button class="button15 button16"type="submit"name="update3">Update</button>
<button class="button17 button18"type="submit"name="update4">Update</button>
<button class="button19 button20"type="submit"name="update5">Update</button>
<button class="button21 button22"type="submit"name="update6">Update</button>
<button class="button23 button24"type="submit"name="update7">Update</button>
<button class="button25 button26"type="submit"name="update8">Update</button>
<!-------------------------------------meeting buttons----------------------------->
<button class="button27 button28"type="submit"name="update9">Update</button>
<button class="button29 button30"type="submit"name="update10">Update</button>
<button class="button31 button32"type="submit"name="update11">Update</button>
<!-------------------------------------event buttons----------------------------->
<button class="button33 button34"type="submit"name="update12">Update</button>
<button class="button35 button36"type="submit"name="update13">Update</button>
<button class="button37 button38"type="submit"name="update14">Update</button>
<!-------------------------------------weeding buttons----------------------------->
<button class="button39 button40"type="submit"name="update15">Update</button>
<button class="button41 button42"type="submit"name="update16">Update</button>
<button class="button43 button44"type="submit"name="update17">Update</button>

</form>
<!--------------------------------------------main site link------------------------------------------------->
<a href="http://localhost:8080/tutor/home.php"title="open main site"><p class="mainsite">--->Open Main Site<---</p></a>

<!----------------------------------------------logout button----------------------------------------------->
<a href="http://localhost:8080/tutor/logout.php"title="logout"><img src="https://cdn-icons-png.flaticon.com/128/9692/9692702.png"width="30"height="30"class="logout">
</body>
</html>