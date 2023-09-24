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
                            <h3 class="bg-danger text-white text-center py-3">Hospital Registration</h3>
                        </div>
                        <div class="card-body">

                            <form action="insertccc.php" method="post" enctype="multipart/form-data">
                       		<input type="text" class="form-control mb-2" placeholder="Hospital Name " name="ccc_Name"><br>
				<input type="text" class="form-control mb-2" placeholder="Mobile Name" name="contact"><br>
				Total Bed : <br><br>
				<input type="text" class="form-control mb-2" placeholder="Total" name="total"><br>
                                <input type="text" class="form-control mb-2" placeholder="Available" name="ta"><br>
                                Covid Bed : <br><br>
				<input type="text" class="form-control mb-2" placeholder="Total" name="covid"><br>
                                <input type="text" class="form-control mb-2" placeholder="Available" name="ca"><br>
                                I.C.U : <br><br>
				<input type="text" class="form-control mb-2" placeholder="Total" name="icu"><br>
                                <input type="text" class="form-control mb-2" placeholder="Available" name="icua"><br>
                                General Bed : <br><br>
				<input type="text" class="form-control mb-2" placeholder="Total" name="gen"><br>
                                <input type="text" class="form-control mb-2" placeholder="Available" name="ga"><br>
                               Oxigen Bed : <br><br>
				<input type="text" class="form-control mb-2" placeholder="Total" name="o2"><br>
                                <input type="text" class="form-control mb-2" placeholder="Available" name="oa"><br>
                        Vhetalator Bed : <br><br>
				<input type="text" class="form-control mb-2" placeholder="Total" name="venty"><br>
                                <input type="text" class="form-control mb-2" placeholder="Availble" name="va"><br>
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