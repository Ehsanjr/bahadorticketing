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
    location.replace('addmessage.php');
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
    ?>
    <div class="col-md-6">
    <br />
    <br />
    <br />
    <center>
        <div class="animate__animated animate__bounce" id="successlogin">
            <p>افزودن پیام با موفقیت انجام شد</p>
        </div>
        <br />
        <button class="btn btn-warning" onclick="window.location.href='index.php';">صفحه اصلی</button>
    </center>
</div>
<?php
}
else
{
    ?>
    <div class="col-md-6">
        <br />
        <br />
        <br />
        <center>
            <div class="animate__animated animate__bounce" id="successlogin">
                <p>افزودن پیام انجام نشد</p>
            </div>
            <br />
            <button class="btn btn-warning" onclick="window.location.href='addmessage.php';">صفحه اصلی</button>
        </center>
    </div>
    <?php
}
?>