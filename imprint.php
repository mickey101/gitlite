<?php 
include ('header.php');
?>
<body>
    <?php
    require ('login_validate.php');
    ?>
    <div class="heading">
        <div class="myWrapper">
            <nav>
                <a href="home.php"><img src="logo.png" height="80px"  /></a>
            </nav>
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-8 main">
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 description">
                            <h2>Connecting Seekers and Providers</h2>
                            <p> We provide a platform for volunteers to provide different categories of help and for the refugees who are seeking help</p>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="container">
                        <div class="login">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" role="form">
                             <div class="form-group">
                                <!-- <label for="email-login">Email address</label> -->
                                <input type="email" class="form-control" name="Email" 
                                        id="email-login" placeholder="Email" required>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                <!-- <label for="pass-login">Password</label> -->
                                    <input type="password" class="form-control" name="Password"
                                            id="pass-login" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success" 
                                            style="margin-left: 21px;">Log In
                                    </button>
                                </div>
                                
                            </div>
                            <span class="error"><?php echo $login_err ?></span>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember my password
                                </label>
                            </div>
                        </form>
                        </div>
                        <div class="empty"></div>
                        <div class="signup">
                            <h2><strong>Not yet signed up?</strong></h2>
                            <form action="signup.php" method="post">
                                <div class="form-group">
                                    <!-- <label for="email-login">Email address</label> -->
                                    <input type="textare" class="form-control" name="firstname" id="firstname" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <!-- <label for="email-login">Email address</label> -->
                                    <input type="textarea" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <!-- <label for="email-login">Email address</label> -->
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Sign Up</button>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
include ('footer.php');
?>
