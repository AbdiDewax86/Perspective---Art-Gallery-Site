<?php
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
<body class="bgcolortheme">
    <div class="profile-container container-fluid">
        <div class="row justify-content-center">
            <div class="sectioncolortheme profile-container col-md-10 col-12">
                <div class="row">
                    <div class=" mb-3 col-md-4">
                        <a href="http://localhost:81/web-project/phome.php"><img class="innercontent" src="PerspectiveWhite.png"></a>
                    </div>
                    <div class="col-md-8">
                    </div>
                    <hr class="pb-3">
                </div>
                <form class="profile-container" action="puploader.php" method="POST" enctype="multipart/form-data">
                    <div>
                        <h4>Upload an artwork</h4>
                        <br>
                        <input class="mb-3" type="file" name="image"><br>
                        <textarea 
                            class="mb-3 lightcolortheme"
      	                    id="text"
      	                    name="image_text" 
                            placeholder="Say something about your perspective ...">
                        </textarea>
                        <button type="submit" class="btn btn-light btn-block" name="upload">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>