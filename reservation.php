<?php include'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Reservation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
function myFunction() {
   header("Location:details.php");
}
function successful(){
 echo '<div class="alert alert-success">
    <strong>Reservation Successful</strong>
  </div>';
}
</script>
<style>
body{
background-image:url("https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
background-repeat: no-repeat;
background-size: 1690px 1000px;
}
div1{
position:absolute;
margin-left:0px;
top:0px;
opacity:0.6;
}
div2{
color:white;
font-size:40px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:600px;
top:50px;
}
div3{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:340px;
top:140px;
}
div4{
position:absolute;
margin-left:450px;
top:140px;
}
div5{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:650px;
top:140px;
}
div6{
position:absolute;
margin-left:750px;
top:140px;
}
div9{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:950px;
top:140px;
}
div10{
position:absolute;
margin-left:1060px;
top:140px;
}
div11{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:350px;
top:220px;
}
div12{
position:absolute;
margin-left:480px;
top:220px;
}
div13{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:650px;
top:220px;
}
div14{
position:absolute;
margin-left:700px;
top:220px;
}
div15{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:970px;
top:220px;
}
div16{
position:absolute;
margin-left:1070px;
top:220px;
}
div17{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:980px;
top:300px;
}
div18{
position:absolute;
margin-left:1080px;
top:300px;
}
div19{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:350px;
top:300px;
}
div20{
position:absolute;
margin-left:430px;
top:300px;
}
div21{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:660px;
top:300px;
}
div22{
position:absolute;
margin-left:830px;
top:300px;
}
div23{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:200px;
top:370px;
}
div24{
position:absolute;
margin-left:380px;
top:370px;
}
div25{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:500px;
top:370px;
}
div26{
position:absolute;
margin-left:700px;
top:370px;
}
div27{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:800px;
top:370px;
}
div28{
position:absolute;
margin-left:950px;
top:370px;
}
div29{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:1100px;
top:370px;
}
div30{
position:absolute;
margin-left:1240px;
top:370px;
}
div31{
color:white;
font-size:20px;
font-family:verdena;
//border-bottom: 3px solid white;
position:absolute;
margin-left:200px;
top:420px;
}
div32{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:200px;
top:450px;
}
div33{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:500px;
top:450px;
}
div34{
position:absolute;
margin-left:780px;
top:450px;
}
div35{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:500px;
top:480px;
}
div36{
position:absolute;
margin-left:780px;
top:480px;
}
div37{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:500px;
top:510px;
}
div38{
position:absolute;
margin-left:780px;
top:510px;
}
div39{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:500px;
top:540px;
}
div40{
position:absolute;
margin-left:780px;
top:540px;
}
div41{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:500px;
top:570px;
}
div42{
position:absolute;
margin-left:780px;
top:570px;
}
div43{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:500px;
top:600px;
}
div44{
position:absolute;
margin-left:780px;
top:600px;
}
div45{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:500px;
top:630px;
}
div46{
position:absolute;
margin-left:780px;
top:630px;
}
div47{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:500px;
top:660px;
}
div48{
position:absolute;
margin-left:780px;
top:660px;
}
div49{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:200px;
top:750px;
}
div50{
position:absolute;
margin-left:400px;
top:750px;
}
div51{
position:absolute;
margin-left:950px;
top:420px;
}
div52{
color:white;
font-size:30px;
font-family:verdena;
position:absolute;
margin-left:1020px;
top:420px;
}
div53{
position:absolute;
margin-left:880px;
top:480px;
}
div54{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:900px;
top:490px;
}
div55{
position:absolute;
margin-left:900px;
top:520px;
}
div56{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:900px;
top:550px;
}
div57{
position:absolute;
margin-left:900px;
top:580px;
}
div58{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:900px;
top:610px;
}
div59{
position:absolute;
margin-left:900px;
top:640px;
}
div60{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:1130px;
top:490px;
}
div61{
position:absolute;
margin-left:1150px;
top:510px;
}
div62{
position:absolute;
margin-left:1310px;
top:510px;
}
div63{
color:black;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:1130px;
top:620px;
}
div64{
position:absolute;
margin-left:1080px;
top:650px;
}
div65{
color:black;
font-size:15px;
font-family:verdena;
position:absolute;
margin-left:1120px;
top:660px;
}
div66{
position:absolute;
margin-left:1080px;
top:680px;
}
div67{
color:black;
font-size:15px;
font-family:verdena;
position:absolute;
margin-left:1120px;
top:690px;
}
div68{
position:absolute;
margin-left:920px;
top:700px;
}
div69{
position:absolute;
margin-left:880px;
top:830px;
}
div70{
position:absolute;
margin-left:890px;
top:840px;
}
div71{
color:black;
font-size:15px;
font-family:verdena;
position:absolute;
margin-left:1000px;
top:840px;
}
div73{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:200px;
top:840px;
}
.button1{
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
.button2{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
margin-left:300px;
font-family:"lucida handwriting",cursive;
top:910px;
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
.button4{
  background-color:black; 
  color: black; 
  border: 3px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
margin-left:470px;
font-family:"lucida handwriting",cursive;
top:910px;
}
</style>
<body>
<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1690"height="1000"></img></div1>
<div2><p><b>Make Your Reservation</b></p></div2>
<form action="details.php" autocomplete="on" method="POST"enctype="multipart/form-data"validate>
  <div3><label for="fname"><b><i>First name:</i></b></label></div3>
  <div4><input type="text" id="fname" name="fname"size="10"required autofocus minlength="2"maxlength="10"></div4>
  <div5><label for="lname"><b><i>Last name:</b></i></label></div5>
  <div6><input type="text" id="lname" name="lname"size="10"required  minlength="2"maxlength="10"></div6>
  <div9><label for="contact"><b><i>Contact No:</b></i></label></div9>
  <div10><input type="text" id="contact" name="contact"size="10"required minlength="10" ></div10>
  <div11><label for="email"><b><i>Email Address:</b></i></label></div11>
  <div12><input type="email" id="email" name="email"size="10"required></div12>
  <div13><label for="city"><b><i>City:</b></i></label></div13>
  <div14><input type="text" id="city" name="city"size="15"required minlength="0"maxlength="15"></div14>
  <div15><label for="state"><b><i>State:</b></i></label></div15>
  <div16><input type="text" id="state" name="state"size="10"required></div16>
  <div17><label for="pin"><b><i>Pin Code:</b></i></label></div17>
  <div18><input type="text" id="pin" name="pin"size="10"required minlength="6"></div18>
  <div19><label for="address1"><b><i>Address:</b></i></label></div19>
  <div20><input type="text" id="address1" name="address1"size="20"required></div20>
  <div21><label for="stays"><b><i>Total Days to stays:</b></i></label></div21>
  <div22><input type="text" id="stays" name="stays"size="10"required></div22>
  <div23><label for="adult"><b><i>Numbers Of Adults:</i></b></label></div23>
  <div24><input type="number" id="adult" name="adult" min="0" max="10"size="30"required></div24>
  <div25><label for="childrens"><b><i>Numbers Of Childrens:</i></b></label></div25>
  <div26><input type="number" id="childrens" name="childrens" min="0" max="10"size="30"required></div26>
  <div27><label for="checkin"><b><i>Check in Date:</i></b></label></div27>
  <div28><input type="date" id="checkin" name="checkin"required min="2023-05-04"max="2023-12-31"></div28>
  <div29><label for="checkout"><b><i>Check Out Date:</i></b></label></div29>
  <div30><input type="date" id="checkout" name="checkout"required min="2023-05-04"max="2023-12-31"></div30>
<div31><p><b><i>Room Preference:</i></b></p></div31>
<?php
$i=1;
$rows=mysqli_query($conn,"SELECT * FROM adminrooms");
?>
<?php foreach($rows as $row):?>

 <div32>
  <input type="checkbox" name="sr"value="<?php echo $row["sr"];?>">
  <label><b><i>SuperiorRoom</i></b></label><br>
  <input type="checkbox"name="gsr"value="<?php echo $row["gsr"];?>">
  <label><b><i>GrandSuperiorRoom</i></b></label><br>
  <input type="checkbox" name="gdr"value="<?php echo $row["gdr"];?>">
  <label><b><i>GrandDeluxe</i></b></label><br>
  <input type="checkbox"name="tr"value="<?php echo $row["tr"];?>">
  <label><b><i>TripleRoom</i></b></label><br>
  <input type="checkbox" name="pr"value="<?php echo $row["pr"];?>">
  <label><b><i>PremiumRoom</i></b></label><br>
  <input type="checkbox" name="ger"value="<?php echo $row["ger"];?>">
  <label><b><i>GrandExecutive</i></b></label><br>
  <input type="checkbox"  name="obrsr"value="<?php echo $row["obrsr"];?>">
  <label><b><i>OneBedroomSuite</i></b></label><br>
  <input type="checkbox"name="fer"value="<?php echo $row["fer"];?>">
  <label><b><i>FamilyExecutiveSuite</i></b></label><br>
</div32>
<?php endforeach;?>

<div33><p><b><i>Number of superior room:</i></b></p></div33>
<div34><input type="number" id="noofsuperiorroom" name="noofsuperiorroom" min="0" max="3"size="30"></div34>
<div35><p><b><i>Number of Grand superior room:</i></b></p></div35>
<div36><input type="number" id="noofgrandsuperiorroom" name="noofgrandsuperiorroom" min="0" max="3"size="30"></div36>
<div37><p><b><i>Number of Grand Deluxe room:</i></b></p></div37>
<div38><input type="number" id="noofgranddeluxeroom" name="noofgranddeluxeroom" min="0" max="3"size="30"></div38>
<div39><p><b><i>Number of Triple room:</i></b></p></div39>
<div40><input type="number" id="nooftripleroom" name="nooftripleroom" min="0" max="3"size="30"></div40>
<div41><p><b><i>Number of Premium room:</i></b></p></div41>
<div42><input type="number" id="noofpremiumroom" name="noofpremiumroom" min="0" max="3"size="30"></div42>
<div43><p><b><i>Number of Grand Executive :</i></b></p></div43>
<div44><input type="number" id="noofgrandexecutive" name="noofgrandexecutive" min="0" max="3"size="30"></div44>
<div45><p><b><i>Number of one Bedroom Suite :</i></b></p></div45>
<div46><input type="number" id="noofonebedroomsuite" name="noofonebedroomsuite" min="0" max="3"size="30"></div46>
<div47><p><b><i>Number of Family Executive:</i></b></p></div47>
<div48><input type="number" id="nooffamilyexecutive" name="nooffamilyexecutive" min="0" max="3"size="30"></div48>

<!-----------------------------------details-------------------->
<div49><p><b><i>Upload Any Identity:</i></b></p></div49>
<div50><input type="file" id="image" name="image" required accept=".jpg,.jpeg,.png"></div50>

<!------------------------------------card details---------------->
<div51><img src="https://cdn-icons-png.flaticon.com/128/1161/1161388.png"width="50"height="50"></img></div51>
<div52><p><b><i>Enter The Payment Details</i></b></p></div52>
<div53><img src="https://wallpaperaccess.com/full/1429575.jpg"width="600"height="450"></img></div53>
<div54><p><b><i>Card Number</i></b></p></div54>
<div55><input type="number" id="cardno" name="cardno"size="20"required minlength="16"></div55>
<div56><p><b><i>Card Holder Name</i></b></p></div56>
<div57><input type="text" id="cardname" name="cardname"size="20"required></div57>
<div58><p><b><i>Expiry Date</i></b></p></div58>
<div59><input type="text" id="carddate" name="carddate"size="15"required></div59>
<div60><p><b><i>We accept the following methods</i></b></p></div60>
<div61><img src="https://www.freepnglogos.com/uploads/visa-and-mastercard-logo-26.png"width="150"height="100"></img></div61>
<div62><img src="https://cdn-icons-png.flaticon.com/128/5968/5968341.png"width="100"height="100"></img></div62>
<div63><p><b><i>Booking with confidence</i></b></p></div63>
<div64><img src="https://cdn-icons-png.flaticon.com/128/5291/5291043.png"width="30"height="30"></img></div64>
<div65><p><b><i>Payment is not required until you arrive at the hotel</i></b></p></div65>
<div66><img src="https://cdn-icons-png.flaticon.com/128/5291/5291043.png"width="30"height="30"></img></div66>
<div67><p><b><i>Your credit card details are safe via this secured payment<br> form.</i></b></p></div67>
<div68><img src="https://t4.ftcdn.net/jpg/00/78/50/25/240_F_78502542_qyNABb75jXf1ekKvWfhOeEgb5zaCirLO.jpg"width="100"height="100"></img></div68>
<div69><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPsAAADJCAMAAADSHrQyAAAAA1BMVEWF6oQOwLjuAAAASElEQVR4nO3BMQEAAADCoPVPbQlPoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD+BsXcAAGLPH6gAAAAAElFTkSuQmCC"width="600"height="130"></img></div69>
<div70><img src="https://cdn-icons-png.flaticon.com/128/893/893081.png"width="100"height="100"></img></div70>
<div71><p><b><i>For security reasons, the same credit card used to secure the booking must<br> be presented at check-in. The name on the credit card used to secure the<br> booking must also match the name of the person checking in. If you are<br> booking for someone else, please contact the hotel reservation directly<br> before making the booking.</i></b></p></div71>

<!-----------------------------submit button------------------------>
<button class="button1 button2"type="submit" name="submit"onclick="successful()"><i>Proceed</i></button>

<!----------------------------note-------------------------------------->
<div73><p><b><i><strong>Note:</strong>Your Identification Id will Check at the arrival</i></b></p></div73>

<!----------------------------reset button------------------------------>
<button class="button3 button4"type="reset" value="Submit"><i>Reset</i></button>
</form>


</body>
</html>
