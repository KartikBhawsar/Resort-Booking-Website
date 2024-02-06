<?php include'connection.php';
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$contact=$_SESSION['contact'];
$email=$_SESSION['email'];
$city=$_SESSION['city'];
$state=$_SESSION['state'];
$pin=$_SESSION['pin'];
$address=$_SESSION['address'];
$totaldays=$_SESSION['totaldays'];
$adult=$_SESSION['adult'];
$childrens=$_SESSION['childrens'];
$checkin=$_SESSION['checkin'];
$checkout=$_SESSION['checkout'];
$nsr=$_SESSION['nsr'];
$ngsr=$_SESSION['ngsr'];
$ngdr=$_SESSION['ngdr'];
$ntr=$_SESSION['ntr'];
$npr=$_SESSION['npr'];
$nger=$_SESSION['nger'];
$nobsr=$_SESSION['nobsr'];
$nfer=$_SESSION['nfer'];
$cardno=$_SESSION['cardno'];
$cardname=$_SESSION['cardname'];
$carddate=$_SESSION['carddate'];
$total=$_SESSION['total'];
$bookingtime=$_SESSION['time'];
$room=$_SESSION["rooms"];
$sql ="INSERT INTO reservation(fname,lname,contact,email,city,state,pin,address,totalstaysdays,adult,childrens,checkin,checkout,noofsuperiorroom,noofgrandsuperiorroom,noofgranddeluxeroom,nooftripleroom,noofpremiumroom,noofgrandexecutiveroom,noofonebedroomsuite,nooffamilyexecutive,cardno,cardname,carddate,total,timeofbooking,typeofroom)values('$fname','$lname','$contact','$email','$city','$state','$pin','$address','$totaldays','$adult','$childrens','$checkin','$checkout','$nsr','$ngsr','$ngdr','$ntr','$npr','$nger','$nobsr','$nfer','$cardno','$cardname','$carddate','$total','$bookingtime','$room')";
mysqli_query($conn,$sql);
$_SESSION['bookingno']=mysqli_insert_id($conn);
$bookingno=$_SESSION['bookingno'];
 echo "<script>alert('Reservation Successfull.');</script>";
$to_email = "$email";
$subject = "Wynn Resort";
$body = "Thank You for Showing Interest in Wynn Resort.Your Reservation in Resort is Successfully Completed,Your Booking Number is $bookingno .The Arrival Date is $checkin, For more Information you can visit us http://localhost:8080/tutor/home.php";
$headers = "From: kartikbhawsar2@gmail.com";
mail($to_email, $subject, $body, $headers);
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<title>User Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
body{
background-image:url("https://images.pexels.com/photos/258154/pexels-photo-258154.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1");
background-repeat: no-repeat;
background-size: 1600px 900px;
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
position:absolute;
margin-left:350px;
top:30px;
}
div3{
color:white;
font-size:25px;
font-family:verdena;
position:absolute;
margin-left:350px;
top:200px;
}
div4{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:350px;
top:300px;
}
div5{
color:white;
font-size:20px;
font-family:verdena;
position:absolute;
margin-left:350px;
top:400px;
}
div6{
position:absolute;
margin-left:950px;
top:400px;
}
.button1{
  background-color: #4CAF50; /* Green */
  border:white;
  color: white;
  padding: 10px 25px;
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
  border: 3px solid white;
   padding: 10px 25px;
   color: white;
position:absolute;
margin-left:700px;
top:550px;
}
</style>
<body>
<div1><img src="https://w0.peakpx.com/wallpaper/196/143/HD-wallpaper-black-dark-plain-solid-thumbnail.jpg"width="1520"height="900"></img></div1>
<div2><p><b>Thanking You For Showing Interest in Wynn Resort</b></p></div2>
<div3><p><b>Your Booking Number: <?php echo  $_SESSION["bookingno"];?></b></p></div3>
<div4><p><b>Note:   You will get this Booking Number on Your Email.Please Note Your Booking Number For future reference.</b></p></div4>
<div5><p><b>You can also check your booking in my booking page Click on link:</b></p></div5>
<div6><a href="mybooking.php"title="booking page"><b>Mybooking page</b></a></div6>
<a href="http://localhost:8080/tutor/feedback.php"><button class="button1 button2">Proceed</button></a>

</body>
</html>