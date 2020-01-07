<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Fee Payment</title>
<!-- Vendor CSS -->


<style type="text/css">
  .form-strt {
    width: 49%;
    margin: 40px auto;
    padding: 28px 25px;
    border-radius: 12px;
}
.foot {
    margin-top: 9px;
}
.form-strt h3 {
        font-size: 22px;
    padding-bottom: 17px;
    padding-top: 17px;
}
.form-strt .form-control {
    margin-bottom: 13px;
}
.form-strt .btn {
    background-color: #faa61a;
}
.head {
    width: 100%;
    margin: auto;
}
.logo {
    width: 26%;
    margin: auto;
}
</style>
</head>

<body>

 
  <div class="form-strt">
 <div class="head">
     <div class="logo">Logo</div>
  </div>
	<center>
	
	<?php //print_r($_REQUEST);
		
		
	function savePaymentStatus(){
		
	}	
		
		
	print_r($_REQUEST);
	print_r($_REQUEST['status_id']);die;
	if($_REQUEST['status_id']==21){
		
		echo "<h1> Payment Sccussfully Done! </h1>";
		if(!empty($_REQUEST['order_id'])){
		echo "<h3>Your Order ID:".$_REQUEST['order_id']."</h3>";
		}
		echo "<a href='http://www.bigwigmediademo.com/axis_payment/index.php'><< back to website</a>";
	}else if($_REQUEST['status_id']==23){
	
		echo "<h1> Authentication is in progress! </h1>";
		if(!empty($_REQUEST['order_id'])){
		echo "<h3>Your Order ID:".$_REQUEST['order_id']."</h3>";
		}
		echo "<a href='http://www.bigwigmediademo.com/axis_payment/index.php'><< back to payment page</a>";

	}else if($_REQUEST['status_id']==26){
	
		echo "<h1> User did not complete authentication! </h1>";
		if(!empty($_REQUEST['order_id'])){
		echo "<h3>Your Order ID:".$_REQUEST['order_id']."</h3>";
		}
		echo "<a href='http://www.bigwigmediademo.com/axis_payment/index.php'><< back to payment page</a>";
		
	}else if($_REQUEST['status_id']==27){
	
		echo "<h1> User completed authentication, but bank refused the transaction! </h1>";
		if(!empty($_REQUEST['order_id'])){
		echo "<h3>Your Order ID:".$_REQUEST['order_id']."</h3>";
		}
		echo "<a href='http://www.bigwigmediademo.com/axis_payment/index.php'><< back to payment page</a>";

	}else if($_REQUEST['status_id']==22){
	
		echo "<h1> User input is not accepted by the underlying PG! </h1>";
		if(!empty($_REQUEST['order_id'])){
		echo "<h3>Your Order ID:".$_REQUEST['order_id']."</h3>";
		}
		echo "<a href='http://www.bigwigmediademo.com/axis_payment/index.php'><< back to payment page</a>";

		
	}else if($_REQUEST['status_id']==28){
	
		echo "<h1> Transaction status is pending from bank! </h1>";
		if(!empty($_REQUEST['order_id'])){
		echo "<h3>Your Order ID:".$_REQUEST['order_id']."</h3>";
		}
		echo "<a href='http://www.bigwigmediademo.com/axis_payment/'><< back to website</a>";
	}else{
		echo "<h1> Please try again! </h1>";
		echo "<a href='http://www.bigwigmediademo.com/axis_payment/index.php'><< back to payment page</a>";
	}
	
	?>
	

   <div class="foot">
     <div class="logo">Secured Payment By: <img class="img-fluid" src="https://axis.dashboard.expresscheckout.juspay.in/axis-logo.png"></div>
  </div>
	</center>
</div>
	
</body>
</html>
