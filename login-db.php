<?php
    if(isset($_POST['submit']))
    {
        $user_name 		= $_POST['user_name'];
        $user_password  = $_POST['user_password'];
    
        $qry = "select *from user_table where user_name = '$user_name' && user_password = '$user_password'";

        /*echo $qry;
        exit();*/

        $result = mysqli_query($mysqli,$qry);
        $total_row = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

        /*echo $total_row;
        exit();*/

        if($total_row == 1)
        {
            if(isset($_POST['remember']))
            {
                setcookie("user_name",$_POST["user_name"],time()+60);
                setcookie("user_password",$_POST["user_password"],time()+60);
                echo "Cookies Set Successfully";
            }
			$_SESSION["customer"] = $row['user_id'];
            setmsg("Login success");
            redirect("index.php");
        }
        else
        {
            setmsg("Login not success");
            redirect("log_in.php");
        }
    }
?>