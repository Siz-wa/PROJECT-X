
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scary Cat | Gaming Hobby</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="css/style-index.css">

</head>
<body>
<!-- CALLING THE HEADER FROM ANOTER FILE -->
    <?php include_once('header.php')?>


<!-- THE MAIN CONTENT  -->
<main>
    <div class="container-fluid  justify-content-center background-image">
        <div class="row">
            <div class="col-6 d-flex justify-content-center">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <h1 class="text-white text-center" style="font-size:50px;"><strong>LEVEL UP YOUR EXPERIENCE, PLAY NOW</strong></h1>
                        </div>
            </div>
            <div class="col-6">
                        <div class="position-absolute bottom-0 end-0">
                            
                            <a class="text-white btn btn-success btn-lg m-2 float-end" href="login.php?Play=true"><i class="fa fa-lock"></i> Sign In to Play </a>
                           
                            <a class="text-white btn btn-success btn-lg m-2 float-end" href="signUp.php"><i class="fa fa-user-circle"></i> Sign Up </a>
                        </div>
            </div>
            
        </div>
    </div>
</main>    

<!-- CALLING THE FOOTER FROM ANOTHER FILE -->
<?php include_once("footer.php")?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>