<?php
    session_start();

    $trueLogin = 'admin';
    $truePass = 'cSqYC2sk';

    if($_SESSION['login'] === $trueLogin && $_SESSION['pass'] === $truePass){
        header('Location: adminPanel');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>admin panel</title>

    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/fonts/law-icons/font/flaticon.css">

    <link rel="stylesheet" href="../assets/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/css/helpers.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <script src="../assets/js/admin.js"></script>
</head>

<div class="admin-container">
    <form action="auth.php" method="POST">
            <h4>Панель адміністратора</h4>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Веддіть логін">
                <label for="floatingInput">Логін</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Введіть пароль">
                <label for="floatingPassword">Пароль</label>
            </div>
            <button type="submit" class="btn btn-outline-dark">Увійти</button>
    </form>
</div>

</html>