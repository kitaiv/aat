<?
    $login = $_POST['name'];
    $pass = $_POST['password'];

    $trueLogin = 'admin';
    $truePass = 'cSqYC2sk';

    if( $login === $trueLogin && $pass === $truePass){
        session_start();
        $_SESSION['login'] = $trueLogin;
        $_SESSION['pass'] = $truePass;
        header('Location: adminPanel');
    }else{
        header('Location: index.php');
    }

?>