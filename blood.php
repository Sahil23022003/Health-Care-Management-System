<?php 

    require_once("connection.php");
	error_reporting(0);
    $query = " select * from blood ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  
    <!--================================ Main STYLE SHEETs====================================-->
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" type="text/css" href="css/color/color.css">
  <link rel="stylesheet" type="text/css" href="assets/testimonial/css/style.css" />
  <link rel="stylesheet" type="text/css" href="assets/testimonial/css/elastislide.css" />
  <link rel="stylesheet" type="text/css" href="css/responsive.css">

  <!--================================FONTAWESOME==========================================-->
    
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        
  <!--================================GOOGLE FONTS=========================================-->
  <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Lato:300,400,700,900'>  
    
  <!--================================SLIDER REVOLUTION =========================================-->
  
  <link rel="stylesheet" type="text/css" href="assets/revolution_slider/css/revslider.css" media="screen" />
    



    <title>BloodBank</title>



</head>
<body >


    <!--================================responsive log and menu==========================================-->
    <div class="wsmenucontent overlapblackbg"></div>
    <div class="wsmenuexpandermain slideRight">
      <a id="navToggle" class="animated-arrow slideLeft"><span></span></a>
      <a href="#" class="smallogo"><img src="images/logo.png" width="120" alt="" /></a>
    </div>
  </div>

    <?php include_once('includes/header.php');?>     
<center>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-1" ></div>
    <div class="col-sm-10" >

                              
                       <h3 class=" text-white text-center py-3"><font color="red">Blood Availability</font></h3>
               
<article>
                        <table class="table table-bordered table-striped table-hover text-center">
                            <tr class="bg-success text-light font-weight-bold">
                                <td rowspan="2"><br>Blood Bank Name</td>
                                <td rowspan="2"><br>Mobile No. </td>
                                <td > A+ </td>
                                <td > A- </td>
				<td > B+ </td>                                
				<td > B- </td>
                                <td > O+ </td>
				<td > O- </td>
				<td > AB+ </td>
				<td > AB- </td>
                            </tr>

<tr class="bg-success text-light font-weight-bold">
                                
				<td > Available </td>
                             
				<td >  Available  </td>
                          
				<td > Available </td>
                              
				<td > Available </td>
                             
				<td > Available </td>
                             
				<td > Available </td>
                              
				<td > Available </td>
				
				<td > Available </td>
                            </tr>


                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                              
$Name = $row['bankName'];
$phone = $row['contact'];

$apss = $row['apos'];

$angg = $row['aneg'];

$bpss = $row['bpos'];

$bngg = $row['bneg'];

$opss = $row['opos'];

$ongg = $row['oneg'];

$abpss = $row['abpos'];

$abngg = $row['abneg'];


                           ?>
<tr>
<td class="align-middle"><?php echo $Name ?></td>
<td class="align-middle"><?php echo $phone ?></td>

<td class="align-middle"><?php echo $apss ?></td>					

<td class="align-middle"><?php echo $angg ?></td>					

<td class="align-middle"><?php echo $bpss ?></td>

<td class="align-middle"><?php echo $bngg ?></td>					

<td class="align-middle"><?php echo $opss ?></td>

<td class="align-middle"><?php echo $ongg ?></td>

<td class="align-middle"><?php echo $abpss ?></td>

<td class="align-middle"><?php echo $abngg ?></td>
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
</center>


<?php include_once('includes/footer.php');?>
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
  <script src="js/jquery.js"></script><!-- jquery 1.11.2 -->
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/modernizr.custom.js"></script>
  
  <!--================================BOOTSTRAP===========================================-->
        
  <script src="bootstrap/js/bootstrap.min.js"></script> 
  
  <!--================================NAVIGATION===========================================-->
  
  <script type="text/javascript" src="js/menu.js"></script>
  
  <!--================================SLIDER REVOLUTION===========================================-->
    
  <script type="text/javascript" src="assets/revolution_slider/js/revolution-slider-tool.js"></script>
  <script type="text/javascript" src="assets/revolution_slider/js/revolution-slider.js"></script>
  
  <!--================================OWL CARESOUL=============================================-->
    
  <script src="js/owl.carousel.js"></script>
    <script src="js/triger.js" type="text/javascript"></script>
    
  <!--================================FunFacts Counter===========================================-->
    
  <script src="js/jquery.countTo.js"></script>
  
  <!--================================jquery cycle2=============================================-->
  
  <script src="js/jquery.cycle2.min.js" type="text/javascript"></script>  
  
  <!--================================waypoint===========================================-->
    
  <script type="text/javascript" src="js/jquery.waypoints.min.js"></script><!-- Countdown JS FILE -->
  
  <!--================================RATINGS===========================================--> 
  
  <script src="js/jquery.raty-fa.js"></script>
  <script src="js/rate.js"></script>
  
  <!--================================ testimonial ===========================================-->
  <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">  
      
      <div class="rg-image-wrapper">
        <div class="rg-image"></div>
        <div class="rg-caption-wrapper">
          <div class="rg-caption" style="display:none;">
            <p></p>
            <h5></h5>
            <div class="caption-metas">
              <p class="position"></p>
              <p class="orgnization"></p>
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </script> 
  <script type="text/javascript" src="assets/testimonial/js/jquery.tmpl.min.js"></script>
  <script type="text/javascript" src="assets/testimonial/js/jquery.elastislide.js"></script>
  <script type="text/javascript" src="assets/testimonial/js/gallery.js"></script>
  
  <!--================================custom script===========================================-->
    
  <script type="text/javascript" src="js/custom.js"></script>
       </body>

</html>