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
                    <h2 class="pl-3 textlight">Profile</h2>
                    <hr class="pb-3">
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>UID</th>
                            <td colspan="5"><?php echo htmlspecialchars($_SESSION['id']); ?></td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td colspan="5"><?php echo htmlspecialchars($_SESSION['username']); ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td colspan="5"><?php echo htmlspecialchars($_SESSION['email']); ?></td>
                        </tr>
                        <!--
                        <tr>
                            <th>Password</th>
                            <td colspan="5">[Pass]</td>
                        </tr>
                        -->
                        <tr>
                            <th>Date Joined</th>
                            <td colspan="5"><?php echo htmlspecialchars($_SESSION['creationDate']); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>