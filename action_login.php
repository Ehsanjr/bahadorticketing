<?php
include('index.php');
include('function.php');
if (check($_POST['user_name']) && check($_POST['password'])) {

    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
} else {
    ?>
    <script>
        window.alert("برخی از فیلدها مقداردهی نشده‌اند");
        location.replace('register.php');
    
    </script>
    <?php
    exit();
}
$link = mysqli_connect("localhost", "root", "", "ticket");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());


$query = "SELECT * FROM user WHERE user_name='$user_name' AND password='$password'";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);
if ($row) {
    $_SESSION["login"] = true;
    $_SESSION["id"] = $row['id'];
    if ($row['is_admin']) {
        $_SESSION["admin"] = true;
    }
    echo "ورود با موفقیت انجام شد";
}
else
{
    echo "ورود انجام نشد";
}
mysqli_close($link);
?>