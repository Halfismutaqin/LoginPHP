<?php

include 'proses_login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Login PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Mengatur ukuran tampilan -->
    <div class="container-sm">
        <br>
        <!-- Membuat card -->
        <div class="card">
            <div class="text-center">
                <form method="POST">
                    <div class="card-header">
                        <h4>Membuat Login Sederhana</h4>
                    </div>

                    Masukkan Username : <br>
                    <input type="text" name="username"><br>
                    Masukkan Password : <br>
                    <input type="password" name="password"><br>
                    <br>
                    <button class="btn btn-primary" type="submit" name="login">Login</button>
                </form>
                <br>
            </div>
        </div>
    </div>

</body>

</html>