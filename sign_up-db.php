<?php
    if(isset($_POST['submit']))
    {
        $user_email           = $_POST['user_email'];
        $user_name            = $_POST['user_name'];
        $user_password        = $_POST['user_password'];
        $user_image           = time().'_'.$_FILES['user_image'];

        $qry = "insert into user_table set user_email = '$user_email',
                                          user_name   = '$user_name',
                                        user_password = '$user_password',
                                          user_image  = '$user_image'";

        move_uploaded_file($_FILES['user_image']['tmp_name'],"images/$user_image");

        $result = mysqli_query($mysqli,$qry);

        if($result)
        {
            $_SESSION['msg'] = "<span style='color:green;'><h5>You Are Successfully Register.</h5></span>";
            header("location:product.php");
        }
        else
        {
            $_SESSION['msg'] = "<span style='color:red;'><h5>You Are Not Registered.</h5></span>";
            header("location:sign_up.php");
            exit();
        }
    }
?>