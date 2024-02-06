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
 $sr=$_POST['sr'];
$sql = "UPDATE adminrooms SET sr=$sr WHERE sno=1";
mysqli_query($conn,$sql);
}
if(isset($_POST['update2'])){
 $gsr=$_POST['gsr'];
$sql = "UPDATE adminrooms SET gsr=$gsr WHERE sno=1";
mysqli_query($conn,$sql);
}
if(isset($_POST['update3'])){
 $gdr=$_POST['gdr'];
$sql = "UPDATE adminrooms SET gdr=$gdr WHERE sno=1";
mysqli_query($conn,$sql);
}
if(isset($_POST['update4'])){
 $tr=$_POST['tr'];
$sql = "UPDATE adminrooms SET tr=$tr WHERE sno=1";
mysqli_query($conn,$sql);
}
if(isset($_POST['update5'])){
 $pr=$_POST['pr'];
$sql = "UPDATE adminrooms SET pr=$pr WHERE sno=1";
mysqli_query($conn,$sql);
}
if(isset($_POST['update6'])){
 $ger=$_POST['ger'];
$sql = "UPDATE adminrooms SET ger=$ger WHERE sno=1";
mysqli_query($conn,$sql);
}
if(isset($_POST['update7'])){
 $obrsr=$_POST['obrsr'];
$sql = "UPDATE adminrooms SET obrsr=$obrsr WHERE sno=1";
mysqli_query($conn,$sql);
}
if(isset($_POST['update8'])){
 $fer=$_POST['fer'];
$sql = "UPDATE adminrooms SET fer=$fer WHERE sno=1";
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
p.mainsite{
color:red;
font-size:15px;
position:absolute;
margin-left:1250px;
top:20px;
}
img.logout
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
font-family:"lucida handwriting",cursive;
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
margin-left:620px;
top:250px;
font-family:"lucida handwriting",cursive;
}
div8
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:320px;
font-family:"lucida handwriting",cursive;
}
div9
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:380px;
font-family:"lucida handwriting",cursive;
}
div10
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:440px;
font-family:"lucida handwriting",cursive;
}
div11
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:500px;
font-family:"lucida handwriting",cursive;
}
div12
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:560px;
font-family:"lucida handwriting",cursive;
}
div13
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:620px;
font-family:"lucida handwriting",cursive;
}
div14
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:680px;
font-family:"lucida handwriting",cursive;
}
div15
{
color:white;
font-size:20px;
position:absolute;
margin-left:200px;
top:740px;
font-family:"lucida handwriting",cursive;
}
div16
{
position:absolute;
margin-left:720px;
top:320px;
}
div17
{
position:absolute;
margin-left:720px;
top:380px;
}
div18
{
position:absolute;
margin-left:720px;
top:440px;
}
div19
{
position:absolute;
margin-left:720px;
top:500px;
}
div20
{
position:absolute;
margin-left:720px;
top:560px;
}
div21
{
position:absolute;
margin-left:720px;
top:620px;
}
div22
{
position:absolute;
margin-left:720px;
top:680px;
}
div23
{
position:absolute;
margin-left:720px;
top:740px;
}
div24
{
color:white;
font-size:30px;
position:absolute;
margin-left:950px;
top:400px;
font-family:verdena;
}
div25
{
color:white;
font-size:20px;
position:absolute;
margin-left:950px;
top:480px;
font-family:verdena;
}
div26
{
position:absolute;
margin-left:1060px;
top:480px;
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
  padding: 10px 25px;
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
  border: 3px solid white;
   padding: 8px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:950px;
top:300px;
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
   padding: 8px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:950px;
top:360px;
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
   padding: 8px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:950px;
top:420px;
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
   padding: 8px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:950px;
top:480px;
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
   padding: 8px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:950px;
top:540px;
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
   padding: 8px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:950px;
top:600px;
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
   padding: 8px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:950px;
top:660px;
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
   padding: 8px 20px;
   color: white;
position:absolute;
font-family:"lucida handwriting",cursive;
margin-left:950px;
top:720px;
}
.button31{
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
.button32{
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
<div3><p>Welcome Admin!</p></div3>
<!----------------------------------------------button------------------------------------------------------->
<a href="http://localhost:8080/tutor/adminpanel.php"><button class="button1 button2">Gallery</button></a>
<a href="http://localhost:8080/tutor/adminbookingstatus.php"><button class="button3 button4">Booking Status</button></a>
<a href="http://localhost:8080/tutor/adminenquiry.php"><button class="button5 button6">Enquiry</button></a>
<a href="http://localhost:8080/tutor/adminrooms.php"><button class="button7 button8">Rooms</button></a>
<a href="http://localhost:8080/tutor/admincontact.php"><button class="button9 button10">Contact</button></a>
<a href="http://localhost:8080/tutor/websitesettings.php"><button class="button11 button12">Website Settings</button></a>
<a href="http://localhost:8080/tutor/analyse.php"><button class="button13 button14">Analyse</button></a>
<a href="http://localhost:8080/tutor/adminfind.php"><button class="button31 button32">Find</button></a>
<!----------------------------------------------images------------------------------------------------------->
<div4><img src="https://wallpaper.dog/large/10921233.jpg"width="1535"height="700"></img></div4>
<div5><img src="https://t3.ftcdn.net/jpg/04/42/47/52/360_F_442475292_5ouemiiJiArGyNKSWgUpkRR8lmep6jgM.jpg"width="1300"height="640"></img></div5>
<div6><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1300"height="640"></img></div6>
<!----------------------------------------------rooms prices------------------------------------------------->
<?php
$query="SELECT * FROM adminrooms";
$result=mysqli_query($conn,$query);
?>
<?php
    if(mysqli_num_rows($result)>0){
        foreach($result as $row){
            ?>
<div7><p>Rooms prices</p></div7>
<div8><p>superior room price:          INR <?php echo $row["sr"];?></p></div8>
<div9><p>Grand superior room price:    INR <?php echo $row["gsr"];?></p></div9>
<div10><p>Grand Deluxe room price:     INR <?php echo $row["gdr"];?></p></div10>
<div11><p>Triple room price:           INR <?php echo $row["tr"];?></p></div11>
<div12><p>Premium room price:          INR <?php echo $row["pr"];?></p></div12>
<div13><p>Grand Executive room price:  INR <?php echo $row["ger"];?></p></div13>
<div14><p>One Bedroomsuite room price: INR <?php echo $row["obrsr"];?></p></div14>
<div15><p>Family Executive room price: INR <?php echo $row["fer"];?></p></div15>
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



<!---------------------------------------------rooms price input------------------------------------------->
<form action="#" method="POST"enctype="multipart/form-data>
<div16><input type="text"name="sr"></div16>
<div17><input type="text"name="gsr"></div17>
<div18><input type="text"name="gdr"></div18>
<div19><input type="text"name="tr"></div19>
<div20><input type="text"name="pr"></div20>
<div21><input type="text"name="ger"></div21>
<div22><input type="text"name="obrsr"></div22>
<div23><input type="text"name="fer"></div23>

<!--------------------------------------------submit button for rooms ---------------------------------------------->
<button class="button15 button16"type="submit"name="update1">Update</button>
<button class="button17 button18"type="submit"name="update2">Update</button>
<button class="button19 button20"type="submit"name="update3">Update</button>
<button class="button21 button22"type="submit"name="update4">Update</button>
<button class="button23 button24"type="submit"name="update5">Update</button>
<button class="button25 button26"type="submit"name="update6">Update</button>
<button class="button27 button28"type="submit"name="update7">Update</button>
<button class="button29 button30"type="submit"name="update8">Update</button>
</form>



<!--------------------------------------------main site link------------------------------------------------->
<a href="http://localhost:8080/tutor/home.php"title="open main site"><p class="mainsite">--->Open Main Site<---</p></a>

<!----------------------------------------------logout button----------------------------------------------->
<a href="http://localhost:8080/tutor/logout.php"title="logout"><img src="https://cdn-icons-png.flaticon.com/128/9692/9692702.png"width="30"height="30"class="logout"></img></a>
</body>
</html>