<?php
	include "include/connection.php";
	
	unset($_SESSION["customer"]);
	setmsg("you are successfully logout","green");
	redirect("index.php");
?>