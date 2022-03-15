<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM admin WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO admin (username, password)
                    VALUES ('$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! username Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>

<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">
        <link rel="shortcut icon" href="img/icon.jpg" type="image/png">
        <title>Register | CarWash</title>

        <!-- Bootstrap core CSS -->
        <link href="css/indexstyles.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/login.css" rel="stylesheet">
    </head>
    
    <body>
        <form class="form-signin" method="post" action="">
            <div class="text-center mb-4">
                <img class="mb-4" src="img/icon.jpg" width="200">
            </div>

            <div class="form-label-group">
             <input type="text" placeholder="Username" class="form-control" name="username" value="<?php echo $username; ?>" required>
             <label for="username"  class="text-secondary shadow">Username</label>  
                 </div>
                <div class="form-label-group">
                     <input type="password" placeholder="Password" class="form-control" name="password" value="<?php echo $_POST['password']; ?>" required>
                     <label for="pass"  class="text-secondary shadow">Password</label>
                 </div>

                <div class="form-label-group">
                     <input type="password" placeholder="Confirm Password" class="form-control" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                     <label for="pass"  class="text-secondary shadow">Repeat password</label>
 </div>
            <button class="btn btn-lg btn-primary btn-block fs-6 shadow" type="submit" name="submit">Register</button>
            <p class="login-register-text">Sudah punya akun? <a href="index.php">Login</a></p>
        </form>
    </body>
</html>