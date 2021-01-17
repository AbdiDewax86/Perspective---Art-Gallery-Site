<?php
// Initialize the session
session_start();
 
// If logged out
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: phome.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Perspective</title>
    
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
    
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link href="css/perspective-custom.css" rel="stylesheet">
        
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>

        <!--Boostrap jQuery-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body id="home">
        <!-- Top Bar -->
        <nav class="navbar navbar-style darkcolortheme fixed-top font-weight-bold text-uppercase">
            <div class="container-fluid">
                <!-- Logo -->
                <a href="http://localhost:81/web-project/phome.php"><img src="PerspectiveWhite.png" style="height: 36px; width: auto;"></a>
                <a class="textlight ml-3 d-none d-md-inline-block" href="#page-top">Explore</a>
                <!-- Search -->
                <form class="d-none d-lg-inline-block form-inline mr-auto ml-md-3 my-3 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-gray-500 border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn bg-gray-700" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!--Dropdown for Mobile-->
                <button class="d-inline-block d-md-none custom-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#dropdown">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Right Menu -->
                <div class="collapse navbar-collapse" id="dropdown">
                    <ul class="nav navbar-nav">
                        <li class="nav-item py-3 mx-3"><a class="textlight" href="#page-top">Explore</a></li>
                        <li class="nav-item py-3 mx-3"><a class="textlight" href="http://localhost:81/web-project/pprofile.php">Profile</a></li>
                        <li class="nav-item py-3 mx-3"><a class="textlight" href="http://localhost:81/web-project/pupload.php">Upload</a></li>
                        <li class="nav-item py-3 mx-3"><a class="textlight" href="http://localhost:81/web-project/plogout.php">Log out</a></li>
                    </ul>
                </div>
                <!-- Right Menu on Desktop-->
                <div class="d-none d-md-inline-block">
                    <ul class="nav">
                        <li class="nav-item mx-3">Welcome, <a class="textlight" href="http://localhost:81/web-project/pprofile.php"><?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
                        <li class="nav-item mx-3"><a class="textlight" href="http://localhost:81/web-project/pupload.php">Upload</a></li>
                        <li class="nav-item mx-3"><a class="textlight" href="http://localhost:81/web-project/plogout.php">Log out</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--Featured Image as Backdrop-->
        <div>
            <a href=""><img class="featured" src="images/wasteland.jpg"></a>
        </div>

        <!--Contents-->
        <div class="container-fluid innercontent">
            <div class="row justify-content-center">
                <div class="col-xl-11 col-12 mainpage text-center sectioncolortheme px-4">
                    <!--Header-->
                    <div>
                        <h4 class="text-left py-3 px-3 textlight font-weight-bold text-uppercase">Home</h4>
                    </div>
                    
                    <hr class="pb-3">
                    <!--Featured Content-->
                    <div class="row justify-content-center">
                        <div class="col-lg-11 col-md-11 col-11">
                            <h3 class="mb-3 textlight font-weight-bold text-uppercase">Featured Artwork</h3>
                            <a href="http://localhost:81/web-project/part_wasteland.php"><img class="innercontent smallcontent mb-3" src="images/wasteland.jpg"></a>
                            <a href=""><h2 class="mb-3 textlight font-weight-bold">Wasteland</h2></a>
                        </div>
                    </div>

                    <hr>

                    <!--Other Content-->
                    <div>
                        <h4 class="text-left py-3 px-3 textlight font-weight-bold">Other Artworks</h4>
                    </div>

                    <div class="row justify-content-center gallery">
                        <div class="col-lg-3 col-6">
                            <a href="http://localhost:81/web-project/part_cryogen.php"><img class="innercontent" src="images/Cryogen.jpg"></a>
                            <a href="http://localhost:81/web-project/part_farewell.php"><img class="innercontent" src="images/farewell.jpg"></a>
                            <a href="http://localhost:81/web-project/part_goldenwind.php"><img class="innercontent" src="images/goldenwind.jpg"></a>
                            <a href="http://localhost:81/web-project/part_pony.php"><img class="innercontent" src="images/pony.png"></a>
                        </div>
                        <div class="col-lg-3 col-6">
                            <a href=""><img class="innercontent" src="images/flowers.jpg"></a>
                            <a href=""><img class="innercontent" src="images/miku.jpg"></a>
                            <a href=""><img class="innercontent" src="images/mikuowo.jpg"></a>
                            <a href=""><img class="innercontent" src="images/3l.jpg"></a>
                        </div>
                        <div class="col-lg-3 col-6">
                            <a href=""><img class="innercontent" src="images/Cryogen.jpg"></a>
                            <a href=""><img class="innercontent" src="images/farewell.jpg"></a>
                            <a href=""><img class="innercontent" src="images/goldenwind.jpg"></a>
                            <a href=""><img class="innercontent" src="images/pony.png"></a>
                        </div>
                        <div class="col-lg-3 col-6">
                            <a href=""><img class="innercontent" src="images/flowers.jpg"></a>
                            <a href=""><img class="innercontent" src="images/miku.jpg"></a>
                            <a href=""><img class="innercontent" src="images/mikuowo.jpg"></a>
                            <a href=""><img class="innercontent" src="images/3l.jpg"></a>
                        </div>
                    </div>
                    <!--
                    <div class="row justify-content-center gallery">
                        <div class="col-lg-3 col-6">
                            <a href=""><img class="innercontent" src="images/Cryogen.jpg"></a>
                        </div>
                        <div class="col-lg-3 col-6">
                            <a href=""><img class="innercontent" src="images/farewell.jpg"></a>
                        </div>
                        <div class="col-lg-3 col-6">
                            <a href=""><img class="innercontent" src="images/goldenwind.jpg"></a>
                        </div>
                        <div class="col-lg-3 col-6">
                            <a href=""><img class="innercontent" src="images/pony.png"></a>
                        </div>
                    </div>
                    <div class="row justify-content-center gallery">
                        <div class="col-lg-3 col-6">
                            <a href=""><img class="innercontent" src="images/flowers.jpg"></a>
                        </div>
                        <div class="col-lg-3 col-6">
                            <a href=""><img class="innercontent" src="images/miku.jpg"></a>
                        </div>
                        <div class="col-lg-3 col-6">
                            <a href=""><img class="innercontent" src="images/mikuowo.jpg"></a>
                        </div>
                        <div class="col-lg-3 col-6">
                            <a href=""><img class="innercontent" src="images/3l.jpg"></a>
                        </div>
                    </div>
                    -->
                </div>
            </div>
        </div>

    </body>
</html>