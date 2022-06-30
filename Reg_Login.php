<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register | Login</title>


    <script src="assets/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">

</head>
<body>
<div class="row">
    <div class="container">
        <div class="container-fluid reg_login">
            <div class="form_left">
                <form method="post" action="login_handler.php">
                    <h1>Login Here</h1>
                    <label for=""> Username</label> <br>
                    <input required name="u_name" class="form-control" type="text">  <br>
                    <label for="">Password</label> <br>
                    <input required class="form-control" name="u_pass" type="password">  <br>
                    <input name="u_login" class="btn btn-primary" type="submit">
                </form>
            </div>
            <div class="form_right">
                <form method="post" action="register_handler.php">
                    <h1>Register Here</h1>
                    <label for=""> Username</label> <br>
                    <input required name="u_name" class="form-control" type="text">  <br>
                    <label for="">Password</label> <br>
                    <input required class="form-control" name="u_pass" type="password">  <br>
                    <input name="u_register" class="btn btn-primary" type="submit">
                </form>
            </div>
        </div>
    </div>
</div>




</body>
</html>

