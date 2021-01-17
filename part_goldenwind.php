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

    <body>
        <!-- Top Bar -->
        <nav class="navbar navbar-style darkcolortheme fixed-top font-weight-bold text-uppercase">
            <div class="container-fluid">
                <!-- Logo -->
                <a href="http://localhost:81/web-project/phome.php"><img src="PerspectiveWhite.png" style="height: 36px; width: auto;"></a>
                <a class="textlight ml-3 d-none d-md-inline-block" href="#page-top">Explore</a>
                <!-- Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-3 my-md-0 mw-100 navbar-search">
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
                        <li class="nav-item py-3 mx-3"><a class="textlight" href="http://localhost:81/web-project/psignup.php">Sign up</a></li>
                        <li class="nav-item py-3 mx-3"><a class="textlight" href="http://localhost:81/web-project/plogin.php">Sign in</a></li>
                    </ul>
                </div>
                <!-- Right Menu on Desktop-->
                <div class="d-none d-md-inline-block">
                    <ul class="nav">
                        <li class="nav-item mx-3"><a class="textlight" href="http://localhost:81/web-project/psignup.php">Sign up</a></li>
                        <li class="nav-item mx-3"><a class="textlight" href="http://localhost:81/web-project/plogin.php">Sign in</a></li>
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
                    <div class="row justify-content-center mt-3">
                        <!--Art-->
                        <div class="col-md-10 col-12 mb-3">
                            <img class="innercontent" src="images/goldenwind.jpg">
                            <h2 class="text-left pt-3 textlight font-weight-bold">Golden Wind</h2>
                            <p class="text-left">by <a href="">Cumi Geprek</a></p>
                            <hr class="pb-3">
                        </div>
                        <!--Related-->
                        <div class="col-md-2 col-12 gallery">
                            <h4 class="pt-3 textlight font-weight-bold">Related Artworks</h4>
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-6 gallery">
                                    <a href="http://localhost:81/web-project/part_cryogen.php"><img class="innercontent" src="images/Cryogen.jpg"></a>
                                    <a href="http://localhost:81/web-project/part_farewell.php"><img class="innercontent" src="images/farewell.jpg"></a>
                                    <a href="http://localhost:81/web-project/part_wasteland.php"><img class="innercontent" src="images/wasteland.jpg"></a>
                                    <a href="http://localhost:81/web-project/part_pony.php"><img class="innercontent" src="images/pony.png"></a>
                                </div>
                                <div class="col-md-12 col-6 gallery">
                                    <a href=""><img class="innercontent" src="images/flowers.jpg"></a>
                                    <a href=""><img class="innercontent" src="images/miku.jpg"></a>
                                    <a href=""><img class="innercontent" src="images/mikuowo.jpg"></a>
                                    <a href=""><img class="innercontent" src="images/3l.jpg"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>