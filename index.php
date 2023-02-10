<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="gb/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="gb/css/bootstrap.css"  rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
        if(isset($_SESSION["unserid"]))
        {
    ?>
        <li><a href="#"><?php echo $_SESSION["unserid"]; ?></a></li>
        <li><a href="include/logout.inc.php" class="header-login-a">Sair</a></li>
    <?php
        }
        else
        {
    ?>
        <li><a href="#">Sign Up</a></li>
        <li><a href="#">Login</a></li>
    <?php
        }
    ?>
    <div class="container text-center mt-5">
    <h1>Sign</h1>
        <div class="card">
            <div class="card-body">
                <div class="row g-3 align-items-center">
                    <div class="col-md">
                        <form action="include/signup.inc.php" method="post">
                            <input type="text" name="uid" id="uid" class="form-control" placeholder="Username">
                            <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password">
                            <input type="password" name="pwdrepeat" id="pwdrepeat" class="form-control" placeholder="Repeat Passqord">
                            <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
                        </br>
                        <button type="submit" class="btn btn-primary" name="submit" >SIGN UP</button>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </br>
    </br>
    <h1>Login</h1>
        <div class="card">
            <div class="card-body">
                <div class="row g-3 align-items-center">
                    <div class="col-md">
                        <form action="include/login.inc.php" method="post">
                            <input type="text" name="uid" id="uid" class="form-control" placeholder="Username">
                            <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Password">
                        </br>
                        <button type="submit" class="btn btn-primary" name="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="gb/js/bootstrap.min.js"></script>
    <script src="gb/js/bootstrap.js"></script>
</body>
</html>