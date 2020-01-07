<?php
$order_id = rand(10,10000);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Axis Payment</title>
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
     <div class="logo">Axis Bank</div>
  </div>
	<center>

		<h3>Please fill the below form for make payment.</h3>
		<form action="axis_payment.php" method="post">
			<input type="hidden" name="order_id" value="<?php echo $order_id;?>">
		<table width="100%" border="0">
 <tbody>
    <tr>
      <td width="46">Name*:</td>
      <td width="4">&nbsp;</td>
      <td width="303"><input type="name" name="name" class="form-control"  required></td>
    </tr>
    <tr>
      <td>Email*:</td>
      <td>&nbsp;</td>
      <td><input type="email" name="email" class="form-control"  required></td>
    </tr>
    <tr>
      <td>Mobile*:</td>
      <td>&nbsp;</td>
      <td><input type="mobile" name="mobile"  class="form-control"  required></td>
    </tr>
	 <tr>
      <td>Amount*:</td>
      <td>&nbsp;</td>
      <td><input type="text" name="amount"  class="form-control"  required></td>
    </tr> 
	
	 <tr align="center">
      <td colspan="3"><input type="submit" name="submit" value="continue" class="btn btn-default"></td>
    </tr>
  </tbody>
		</table>
		</form>
	

   <div class="foot">
     <div class="logo">Secured Payment By: <img class="img-fluid" src="https://axis.dashboard.expresscheckout.juspay.in/axis-logo.png"></div>
  </div>
	</center>
</div>
	
</body>
</html>
