<?php
include('index.php');
include('function.php');
$id_ticket = $_SESSION['ticket_add'];
$id_user = $_SESSION['id'];
if (check ($_POST['add_message']))
{
    $message = $_POST['add_message'];
}
else
{
    ?>
    <script>
    window.alert("برخی از فیلدها مقداردهی نشده‌اند");
    location.replace('index.php');
    <?php
}
$link = mysqli_connect("localhost", "root", "", "ticket");
if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());


$query = "SELECT title FROM new_ticket WHERE id='$id_ticket'";
$result = mysqli_query($link, $query);

$row = mysqli_fetch_array($result);
if ($row) {
    $title_ticket = $row['title'];
}
else
{
    exit("khata");
}
$query2 = "INSERT INTO message (send_message,id_ticket,title_ticket,user_id) VALUES ('$message','$id_ticket','$title_ticket','$id_user')";
if (mysqli_query($link, $query2) === true) {
    echo "پیام با موفقیت اضافه شد";
}
else
{
    exit("khata 2");
}
?>