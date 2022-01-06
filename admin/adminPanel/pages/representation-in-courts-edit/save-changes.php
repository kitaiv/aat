<?

    require_once '../../../connect.php';
    $value = $_POST['content'];
    $valueToHtml = htmlspecialchars_decode($value);

    //  mysqli_query($connect, "UPDATE `variables` SET `value` = '$value' WHERE `variables`.`id` = 1");
    //  header('Location: /aat/admin/adminPanel/pages/representation-in-courts-edit');
    var_dump(mysqli_query($connect, "UPDATE `variables` SET `value` = '$valueToHtml' WHERE `variables`.`id` = 1
    "));
    var_dump($valueToHtml);
?>
