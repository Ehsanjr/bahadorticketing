<?php
include('index.php');
include('function.php');
if (
    check($_POST['first_name']) &&
    check($_POST['last_name']) &&
    check($_POST['user_name']) &&
    check($_POST['email']) &&
    check($_POST['password']) &&
    check($_POST['repassword'])
) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
} else {
    ?>
    <script>
        window.alert("برخی از فیلدها مقداردهی نشده‌اند");
        location.replace('register.php');
    
    </script>
    <?php
    exit();
}
if ($password != $repassword) {
    ?>
    <script>
        window.alert("کلمه عبور و تکرار آن مشابه نیست");
        location.replace('register.php');
    </script>
    <?php
    exit();
}

if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    ?>
    <script>
        window.alert("پست الکترونیک وارد شده صحیح نیست");
        location.replace('register.php');
    </script>
    <?php
    exit();
}
$link = mysqli_connect("localhost", "root", "", "ticket");
if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "INSERT INTO user (first_name,last_name,user_name,email,password) VALUES ('$first_name','$last_name','$user_name','$email','$password')";
if (mysqli_query($link, $query) === true) {

    echo ("ثبت نام با موفقیت انجام شد");
} else {
    echo ("ثبت نام انجام نشد");
}

mysqli_close($link);

?>
