<?php

session_start();

if (isset($_SESSION['auth'])) {
    if (isset($_SESSION['role']) && $_SESSION['role'] != 1) {
        $_SESSION['message'] = "You cannot access the dashboard!";
        header("Location: ../index.php");
        exit();
    } else {
        $_SESSION['message'] = "You're already logged in!";
        header("Location: index.php");
        exit();
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Kayıt Sayfası</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">


</head>
<body>
    
<div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <form method="post" action="../functions/authcodes.php">
                    <div class="mb-3">
                        <label for="name" class="form-label">İsim:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Şifre:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="confirm_password" class="form-label">Şifreyi Onayla:</label>
                        <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                    </div>

                    <div class="d-grid gap-2">
                        <input type="submit" name="register" value="Kayıt Ol" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <p id="register">Zaten bir hesabınız var mı? <a href="login.php">Giriş yapın</a></p>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>

</body>
</html>
