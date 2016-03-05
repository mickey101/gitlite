<html lang="en">
<head>
    <title>Refugee Support Network</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>
    <div class="heading">
        <div class="myWrapper">
            <nav>
                <a href="imprint.php"><img src="logo.png" height="80px"  /></a>
            </nav>
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 signup">
                    <?php

                    $firstname = $lastname = $email = $password = "";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        if (empty($_POST["firstname"])) {
                            echo "Sorry! No first name provided!";
                        } else {
                            $firstname = $_POST["firstname"];
                        }

                        if (empty($_POST["lastname"])) {
                            echo "Sorry! No last name provided!";
                        } else {
                            $lastname = $_POST["lastname"];
                        }

                        if (empty($_POST["email"])) {
                            echo "Sorry! No email provided!";
                        } else {
                            $email = $_POST["email"];
                        }

                        if (empty($_POST["pass"])) {
                            echo "Sorry! No email provided";
                        } else {
                            $password = $_POST["pass"];
                        }

                        $firstname = test_input($_POST["firstname"]);
                        $lastname = test_input($_POST["lastname"]);
                        $email = test_input($_POST["email"]);
                        $pass = test_input($_POST["pass"]);
                    }

                    function test_input($data) {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    
                 
                    ?>
                    <form action="signup-validate.php" method="post">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="textare" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $firstname ?>">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="textarea" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $lastname ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $email ?>">
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="radio" id="gender" name="gender" value="F"> Female  
                            <input type="radio" id="gender" name="gender" value="M"> Male
                        </div>
                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" value="<?php echo $password ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Sign Up</button>

                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</body>
</html>
