<?php
	include "include/connection.php";

	if(!isset($_SESSION["customer"]))
	{
		setmsg("plz login first");
		redirect("login.php");
	}
?>