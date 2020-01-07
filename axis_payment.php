<?php

if( $_REQUEST['submit'] == "continue"){
		//print_r($_POST); 
		if( $_REQUEST['name']== "" || $_REQUEST['email']== "" || $_REQUEST['amount'] == "" ||  $_REQUEST['order_id'] == ""){
			header("location: /axis_payment/index.php?err=1");
		}else{
			
				//print_r($_POST);die;

			# Example integration with iFrame based solution

			# Step 1

			# Create the order with /order/create API call
			$ch = curl_init('https://api.juspay.in/order/create');

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    

			# You should use your API key here. This API is a test Key wont work in production.                 
			
			curl_setopt($ch, CURLOPT_USERPWD, 'ASE571D593C0REfdh7181712E11E633F77');
			curl_setopt($ch, CURLOPT_POST, 1); 


			# Set the customer_id, customer_email , amount and order_id as per details.
			# NOTE: The amount and order_id are the fields associated with the "current" order.
			$customer_id = $_REQUEST['name'];
			$customer_email = $_REQUEST['email'];
			$amount = $_REQUEST['amount'];
			$order_id = $_REQUEST['order_id'];
			# This is the URL where the customer will be redirected to. Change localhost to your domain.
			//$return_url = "http://www.bigwigmediademo.com/axis_payment/getPaymentStaus.php";
      $return_url = "/axis_payment/getPaymentStaus.php";

			curl_setopt($ch, CURLOPT_POSTFIELDS, array('customer_id' => $customer_id , 'customer_email' => $customer_email , 
									 'amount' => $amount , 'order_id' => $order_id , 'return_url' => $return_url ));
			curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);                    
			curl_setopt($ch,CURLOPT_TIMEOUT, 15); 

			$response = curl_exec($ch);
			$responseBody = json_decode ($response, true );
			echo "<center><b>Axis Payment</b></center>";
				$iframe_pay=$responseBody['payment_links']['iframe'];
			echo "<br /><br />";


			# Step 2
			# After initiating the order use Juspay's iFrame solution.

			echo "<center><iframe src=\"$iframe_pay\" width=\"520\" height=\"720\" 
				style=\"border: 2px solid #CCC;padding: 45px;height: auto;min-height: 550px;\">
				</iframe>
			</center>"  ;
		} 
	}else{
		header("location: /axis_payment/index.php");
	}
?>
