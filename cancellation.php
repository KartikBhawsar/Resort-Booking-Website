<?php include'connection.php';
if(isset($_POST['submit'])){
$name=$_POST['fname'];
$booking=$_POST['bookingno'];
$feed=$_POST['feedback'];
$feedback=implode($feed);
$message=$_POST['text'];
$sql ="DELETE FROM reservation WHERE fname='$name' and bookingno=$booking";
mysqli_query($conn,$sql);
$sql ="INSERT INTO cancelreservation(bookingno,feedback,fname,message) values ('$booking','$feedback','$name','$message')";
mysqli_query($conn,$sql);
$query="select email from reservation WHERE bookingno=$booking";
$result=mysqli_query($conn,$query);
echo "<script>alert('Reservation Cancellation Request Send Successfully');</script>";
$to_email = "$result";
$subject = "Wynn Resort";
$body = "Dear User,&nbsp Your Request for Cancellation is under process and soon you will get an update via Email.Your Refund will be processed witihin 24 hours from the time of cancellation.&nbsp Name:$name &nbsp Booking Number:$booking &nbsp Regards &nbsp Wynn Resort";
$headers = "From: kartikbhawsar2@gmail.com";
mail($to_email, $subject, $body, $headers);
header("Location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reservation Cancellation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
body {
  background-image: url("https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid.jpg");
background-repeat: no-repeat;
 background-size: 1535px 710px;
}
div1{
position:absolute;
margin-left:100px;
top:100px;
}
div2{
color:white;
font-size:30px;
font-family:verdena;
position:absolute;
margin-left:600px;
top:25px;
}
div3{
position:absolute;
margin-left:400px;
top:110px;
}
div4{
position:absolute;
margin-left:110px;
top:110px;
}
div5{
position:absolute;
margin-left:250px;
top:250px;
}
div6{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:600px;
top:130px;
}
div7{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:600px;
top:180px;
} 
div8{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:600px;
top:230px;
}
div9{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:600px;
top:380px;
}
div10{
position:absolute;
margin-left:600px;
top:420px;
}
div11{
position:absolute;
margin-left:800px;
top:130px;
}
div12{
position:absolute;
margin-left:860px;
top:180px;
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
margin-left:600px;
font-family:"lucida handwriting",cursive;
top:600px;
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
margin-left:880px;
font-family:"lucida handwriting",cursive;
top:600px;
}
</style>
</head>
<body>
<div1><img src="https://wallpaperaccess.com/full/1227835.jpg"width="1340"height="600"></img></div1>
<div2><p><b>Reservation Cancellation</b></p></div2>
<div3><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid.jpg"width="1027"height="580"></img></div3>
<div4><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid.jpg"width="290"height="580"></img></div4>
<!------------------------------------------------------------------wynn logo---------------------------------------------------->
<div5><img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/bc/Wynn_Resorts_logo.svg/220px-Wynn_Resorts_logo.svg.png"width="200"height="170"></img></div5>
<div6><p><b>Enter your Name:          </b></p></div6>
<div7><p><b>Enter your Booking Number:</b></p></div7>
<form action="cancellation.php"autocomplete="off"method="POST">
 <div8>
  <input type="radio" name="feedback[]"value="I have changed my plans">
  <label><b><i>I have changed my plans</i></b></label><br>
  <input type="radio"name="feedback[]"value="I have booked another hotel">
  <label><b><i>I have Booked Another Hotel</i></b></label><br>
  <input type="radio" name="feedback[]"value="I have cancelled My trip">
  <label><b><i>I have cancelled my trip</i></b></label><br>
  <input type="radio"name="feedback[]"value="Do not want to share">
  <label><b><i>Do not want to share</i></b></label><br>
  <input type="radio" name="feedback[]"value="other reason">
  <label><b><i>Other Reason</i></b></label><br>
</div8>
<div9><p><b>(Please Specify) </p></div9>
<div10><textarea name="text" rows="6"cols="60"></textarea></div10>
<div11><input type="text"name="fname"required></div11>
<div12><input type="text"name="bookingno"required></div12>
<button class="button1 button2"type="submit" name="submit"><i>Cancel Reservation</i></button>
</form>
<a href="http://localhost:8080/tutor/home.php"><button class="button3 button4"><i>Skip</i></button></a>
</body>
</html
