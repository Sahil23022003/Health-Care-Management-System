<?php 

    require_once("connection.php");
    $query = " select * from bed ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="CSS/main_styles.css">
<link href="CSS/fontawesome-all.css" rel="stylesheet" type="text/css">
<link href="CSS/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" a href="CSS/style.css"/>


    <title>Bed</title>



</head>
<body >

<br>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1" ></div>
    <div class="col-sm-10" style="background-color:;">

                              
                       <h3 class="bg-danger text-white text-center py-3">Bed Availability
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



<a href="../dashboard.php">back to home</a></h3>
</h3>
               
<article>
                        <table class="table table-bordered table-striped table-hover text-center">
                            <tr class="bg-success text-light font-weight-bold">
                                <td rowspan="2"><br>Hospital Name</td>
                                <td rowspan="2"><br>Mobile No. </td>
                                <td colspan="2"> Total Bed </td>
                                <td colspan="2"> Covid Bed </td>
				<td colspan="2"> I.C.U. Bed </td>                                
				<td colspan="2"> General Bed </td>
                                <td colspan="2"> Oxigen Bed </td>
				<td colspan="2"> Vhentilator Bed </td>
                            </tr>

<tr class="bg-success text-light font-weight-bold">
                                
                                <td > Total </td>
				<td > Available </td>
                              <td > Total </td>
				<td >  Available  </td>
                              <td > Total</td>
				<td > Available </td>
                              <td > Total</td>
				<td > Available </td>
                              <td > Total</td>
				<td > Available </td>
                              <td > Total</td>
				<td > Available </td>
                              
                            </tr>


                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
$no = $row['id'];                               
       $Name = $row['ccc_Name'];
            $phone = $row['contact'];
                       $totalbed = $row['total'];
$tabed = $row['ta'];
$covidbed = $row['covid'];
$cabed = $row['ca'];
$icubed = $row['icu'];
$ia = $row['icua'];
$genbed = $row['gen'];
$gabed = $row['ga'];
$o2bed = $row['o2'];
$oabed = $row['oa'];
$ventybed = $row['venty'];
$vabed = $row['va'];

                           ?>
                                    <tr>
                                        <td class="align-middle"><?php echo $Name ?></td>
                                        <td class="align-middle"><?php echo $phone ?></td>
<td class="align-middle"><?php echo $totalbed ?></td>
<td class="align-middle"><?php echo $tabed ?></td>					
<td class="align-middle"><?php echo $covidbed ?></td>
<td class="align-middle"><?php echo $cabed ?></td>					
<td class="align-middle"><?php echo $icubed ?></td>
<td class="align-middle"><?php echo $ia ?></td>
<td class="align-middle"><?php echo $genbed ?></td>  
<td class="align-middle"><?php echo $gabed ?></td>					
<td class="align-middle"><?php echo $o2bed ?></td>
<td class="align-middle"><?php echo $oabed ?></td>
<td class="align-middle"><?php echo $ventybed ?></td>
<td class="align-middle"><?php echo $vabed ?></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
</article>
       
    </div>
    

    <div class="col-sm-1" ></div>
</div>
</div>





<div class="container-fluid" style="background-color:black;">
<div class="container" style="background-color:black;">
				<div class="footer_copyright">
					<span>
<br>

				</div>

</div>
					</div>	
</div>
<script src="CSS/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/586dbdc61a.js"></script>
       </body>

</html>