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
$covidbed = $_POST['covid'];
$cabed = $_POST['ca'];
$icubed = $_POST['icu'];
$ia = $_POST['icua'];
$genbed = $_POST['gen'];
$gabed = $_POST['ga'];
$o2bed = $_POST['o2'];
$oabed = $_POST['oa'];
$ventybed = $_POST['venty'];
$vabed = $_POST['va'];

            $query = " insert into bed (ccc_Name,contact,total,ta,covid,ca,icu,icua,gen,ga,o2,oa,venty,va) values('$Name','$phone','$totalbed','$tabed','$covidbed','$cabed','$icubed','$ia','$genbed','$gabed','$o2bed','$oabed','$ventybed','$vabed')";
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