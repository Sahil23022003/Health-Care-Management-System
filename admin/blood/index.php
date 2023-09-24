<?php 

    require_once("connection.php");
    $query = " select * from blood ";
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

    <title>blood</title>



</head>

<body>
  <br>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1" ></div>
    <div class="col-sm-10" >

                              
                       <h3 class="bg-danger text-white text-center py-3">Blood Availability &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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


               
<article>
                        <table class="table table-bordered table-striped table-hover text-center">
                            <tr class="bg-success text-light font-weight-bold">
                                <td rowspan="2"><br>Hospital Name</td>
                                <td rowspan="2"><br>Mobile No. </td>
                                <td colspan="2"> A </td>
                                <td colspan="2"> B </td>
				<td colspan="2">AB</td>                                
				<td colspan="2"> O </td>
                               
                            </tr>

<tr class="bg-success text-light font-weight-bold">
                                
                                <td > A+</td>
				<td > A-</td>
                              <td > B+ </td>
				<td >  B-</td>
                              <td > AB+</td>
				<td > AB- </td>
                              <td > O+</td>
				<td > O- </td>
                            
			
                            </tr>


                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
$no = $row['id'];                               
       $Name = $row['bankName'];
            $phone = $row['contact'];
                       $Apos = $row['apos'];
$Aneg = $row['aneg'];
$Bpos= $row['bpos'];
$Bneg = $row['bneg'];
$ABpos = $row['abpos'];
$ABneg = $row['abneg'];
$Opos = $row['opos'];
$Oneg = $row['oneg'];

                           ?>
                                    <tr>
                                        <td class="align-middle"><?php echo $Name ?></td>
                                        <td class="align-middle"><?php echo $phone ?></td>
<td class="align-middle"><?php echo $Apos ?></td>
<td class="align-middle"><?php echo $Aneg ?></td>					
<td class="align-middle"><?php echo $Bpos ?></td>
<td class="align-middle"><?php echo $Bneg ?></td>					
<td class="align-middle"><?php echo $ABpos ?></td>
<td class="align-middle"><?php echo $ABneg ?></td>
<td class="align-middle"><?php echo $Opos ?></td>  
<td class="align-middle"><?php echo $Oneg ?></td>					

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