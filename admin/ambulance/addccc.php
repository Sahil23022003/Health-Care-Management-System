<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>Reg</title>
</head>
<body class="bg-warning">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card mt-5">
                        <div class="card-title">
                            <h3 class="bg-danger text-white text-center py-3">Ambulance Registration</h3>
                        </div>
                        <div class="card-body">

                            <form action="insertccc.php" method="post" enctype="multipart/form-data">
                       		<input type="text" class="form-control mb-2" placeholder="Hospital Name " name="ccc_Name"><br>
				<input type="text" class="form-control mb-2" placeholder="Mobile Name" name="contact"><br>
				 Ambulance : <br><br>
				<input type="text" class="form-control mb-2" placeholder="Total" name="total"><br>
                                <input type="text" class="form-control mb-2" placeholder="Available" name="ta"><br>
                                <br>


                                <center> <button class="btn btn-primary" name="submit">Submit</button> </center>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>