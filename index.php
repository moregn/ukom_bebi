<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Bebi Andika</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body background="background.jpg">
    <div class="container">
        <div class="content">
            <div class="card" style="margin-top: 11rem;">
                <div class="row">
                    <div class="col m-4">
                        <h2>Login Dashboard</h2>
                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan']=="gagal"){
                                echo"<div class='alert alert-danger'>Wrong Username/Password!!</div>";
                            }
                        }
                        ?>
                        
                    <form action="proses_login.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <P class="mt-3">Belum punya akun?  <a href="register.php" class="btn btn-warning text-white">Daftar</a></p>
                    </div>
                    <div class="col">
                        <img src="logo_smk.jpg" width= "450" alt="">
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>