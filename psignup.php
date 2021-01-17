<?php
//Include index file
require_once "pindex.php";

//Definisi awal dg empty
$username = $email = $password = $confirm_password = "";
$username_err = $email_err = $password_err = $confirm_password_err = "";

//Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Validate Password
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username";
    } else{
        $username = trim($_POST["username"]);
    }
    
    //Validate Email
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter an email address";
    } else{
        //Prepare select statement
        $sql = "SELECT id FROM observer WHERE email = ?";

        if($stmt = $mysqli->prepare($sql)){
            //Bind variable to the prepared statements as params
            $stmt->bind_param("s", $param_email);

            //Set Parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // store result
                $stmt->store_result();
                
                if($stmt->num_rows == 1){
                    $email_err = "This email is already taken.";
                } else{
                    $email = trim($_POST["email"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }

    //Validate Password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password";
    } else{
        $password = trim($_POST["password"]);
    }

    //Validate Confirm Password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm your password";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match";
        }
    }

    //Check input errors before inserting in DB
    if(empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO observer (username, email, password) VALUES (?, ?, ?)";
         
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("sss", $param_username, $param_email, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Redirect to login page
                header("location: plogin.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
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
    <title>Sign up</title>
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
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="my-5">
                    <a href="http://localhost:81/web-project/phome.php">
                        <img src="PerspectiveWhite.png" style="width: 100%; height: 100%; object-fit: contain;">
                    </a>
                </div>
                <form class="form-container" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div>
                        <h4>Have your own Perspective</h4>
                    </div>
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        <span class="help-block"><?php echo $email_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                        <span class="help-block mb-2"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm your Password">
                        <span class="help-block mb-4"><?php echo $confirm_password_err; ?></span>
                    </div>
                    <button type="submit" class="btn btn-light btn-block">Join</button>
                    <p class="mt-1">Already have an account? <a href="http://localhost:81/web-project/plogin.php">Click Here.</a></p>
                </form>
                <div class="my-2">
                    <small class="my-5">by Cumi Geprek</small>
                </div>
            </div>
        </div>
    </div>
</body>
</html>