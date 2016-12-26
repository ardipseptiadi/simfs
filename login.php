<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIMFS | Login</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen  animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">SOSI</h1>

            </div>
            <h3>Sistem Informasi Manajemen Fitness SOSI</h3>

            <form class="m-t" role="form" action="proseslogin.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
                <button name="submit" type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Lupa password?</small></a>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="assets/js/jquery-2.1.1.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
