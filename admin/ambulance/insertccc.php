<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['ccc_Name']) || empty($_POST['contact']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
$Name = $_POST['ccc_Name'];
$phone = $_POST['contact'];
$totalbed = $_POST['total'];
$tabed = $_POST['ta'];


            $query = " insert into amb (ccc_Name,contact,total,ta) values('$Name','$phone','$totalbed','$tabed')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:index.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:addccc.php");
    }



?>