<?php
	include "include/connection.php";
	
	//before login
	if(!isset($_SESSION["customer"]))
	{
		setmsg("plz login first","red");
		redirect('log_in.php');
	}
?>

<?php
	if(isset($_POST['checkout']))
	{
		//print_r($_POST)
		//session_start();
		include "instamojo.php";
		
		//Instamojo\Instamojo("api_key","auth_token","redirect_url");
	$api = new Instamojo\Instamojo("test_9c7c1f661b5deb1c6b68e40d890", "test_afb11e3f435f49551464a220a4b", 'https://test.instamojo.com/api/1.1/');

	try {
		$response = $api->paymentRequestCreate(array(
			"purpose" => "Shoping",
			"amount" => $_POST["amount"],
			"redirect_url" => "http://localhost/vishwas/Final_template_cutting/payment_gateway.php"
			));
			
			$_SESSION["txnamount"] = $_POST["amount"];
		header("location:".$response['longurl']);
		exit;
	}catch (Exception $e) {
		print('Error: ' . $e->getMessage());
	}
	}
?>