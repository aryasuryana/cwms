<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
	
	echo "<script>alert('Invalid Details');</script>";

}

}

?>


<!-- desain login -->
    <html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">
        <link rel="shortcut icon" href="img/icon.jpg" type="image/png">
        <title>Login | CarWash</title>

        <!-- Bootstrap core CSS -->
        <link href="css/indexstyles.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/login.css" rel="stylesheet">
    </head>
    
    <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-signin" method="post" action="">  
            <div class="text-center mb-4">
                <img class="mb-4" src="img/icon.jpg" width="200">
                
                <p class="text-secondary">Silahkan masukan username dan password anda</p>
            </div>

            <div class="form-label-group">
                <input type="text" name="username" placeholder="username" class="form-control" placeholder="" required="">
                <label for="username" class="text-secondary shadow">username</label>
            </div>

            <div class="form-label-group">
                 <input type="password" name="password" placeholder="password" class="form-control" placeholder="" required="">
                <label for="password" class="text-secondary shadow">Password</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block fs-6 shadow" type="submit" name="login" value="Sign In">Masuk</button>
            <p class="login-register-text">Anda belum punya akun? <a href="register.php">Register</a></p>
        </form>
    </body>
</html>
