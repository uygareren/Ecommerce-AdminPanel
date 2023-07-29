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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-8">
                <form method="post" action="../functions/authcodes.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Şifre:</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="d-grid gap-2">
                        <input type="submit" name="login" value="Giriş Yap" class="btn btn-primary">
                    </div>
                </form>
                <p id="register">Don't you have any account? <a href="register.php">Register</a></p>

            </div>

        </div>

    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"></script>
</body>

</html>

