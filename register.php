<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Bebi Andika</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body background="background.jpg">

    <div class="container">
        <div class="conten">
            <div class="card" style="margin-top: 2rem;">
                <div class="row">
                    <div class="col m-3">
                    <h2>Register</h2>
                    <form action="prosesdaftar.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="text" name="email" class="form-control">
                        <br><button type="submit" class="btn btn-primary">Daftar</button>
                    </form>
                    <P class="mt-3">Sudah punya akun?  <a href="index.php" class="btn btn-warning text-white"> Login</a></p>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>