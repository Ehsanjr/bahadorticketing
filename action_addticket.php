<?php
include('index.php');
include('function.php');
if (check($_POST['title']) && check($_POST['content'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $id_user = $_SESSION['id'];
}
else {
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

$query = "INSERT INTO new_ticket (title,content,user_id) VALUES ('$title','$content','$id_user')";
if (mysqli_query($link, $query) === true) {
    $last_id = mysqli_insert_id($link);
    $query2 = "SELECT content,title,user_id from new_ticket where id='$last_id'";
    $result = mysqli_query($link, $query2);
    $row = mysqli_fetch_array($result);
    if ($row) {
        $content_message = $row['content'];
        $title_message = $row['title'];
        $user_id = $row['user_id'];
        $query3 = "INSERT INTO message (send_message,id_ticket,title_ticket,user_id) VALUES ('$content_message','$last_id','$title_message','$user_id')";
        if (mysqli_query($link, $query3) === true)
        {
            echo "ایجاد تیکت با موفقیت انجام شد";
        }
        else
        {
            echo ("ایجاد تیکت انجام نشد");
            echo("Error description: " . $link->error);
        }
    }
    else {
        echo ("ایجاد تیکت انجام نشد");
        echo("Error description: " . $link->error);
    }

    
} else {
    echo ("ایجاد تیکت انجام نشد");
    echo("Error description: " . $link->error);
}
mysqli_close($link);
?>