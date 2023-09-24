<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['bankName']) || empty($_POST['contact']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
$Name = $_POST['bankName'];
$phone = $_POST['contact'];
$Apos = $_POST['apos'];
$Aneg = $_POST['aneg'];
$Bpos = $_POST['bpos'];
$Bneg = $_POST['bneg'];
$ABpos = $_POST['abpos'];
$ABneg= $_POST['abneg'];
$Opos = $_POST['opos'];
$Oneg = $_POST['oneg'];


            $query = " insert into blood (bankName,contact,apos,aneg,bpos,bneg,abpos,abneg,opos,oneg) values('$Name','$phone','$Apos','$Aneg','$Bpos','$Bneg','$ABpos','$ABneg','$Opos','$Oneg')";
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