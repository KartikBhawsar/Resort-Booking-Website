<?php include'connection.php';
$apikey="rzp_test_6dKlAbPvZrLQPt";
?>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>

<form action="thankyoupage.php" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apikey;?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $_SESSION['total']*100;?> " // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="order_CgmcjRh9ti2lP7"// Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Wynn Resort"
    data-description="A Online Resort Booking"
    data-image="https://upload.wikimedia.org/wikipedia/en/thumb/b/bc/Wynn_Resorts_logo.svg/220px-Wynn_Resorts_logo.svg.png"
    data-prefill.name="<?php echo $_SESSION['fname'];?>"
    data-prefill.email="<?php echo $_SESSION['email'];?>"
    data-prefill.contact="<?php echo $_SESSION['contact'];?>"
    data-theme.color="#ff0000"
></script>
<input type="hidden" custom="Hidden Element" name="hidden"/>
</form>
<style>
 .razorpay-payment-button{
display:none;
}
</style>
<script type="text/javascript">
  $(document).ready(function(){
      $('.razorpay-payment-button').click();
     });
</script>