<?php include('index.php');
include("function.php");
$id_message = $_GET['id_message'];
if (check($_POST['answer'])) {
    $answer = $_POST['answer'];
}
else
{
    exit ("barkhi dorost meghdardehi nashode and");
}
$link = mysqli_connect("localhost", "root", "", "ticket");
$k = 1;
if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());
$query = "UPDATE message SET recive_message='$answer',status='$k' WHERE id='$id_message'";
if (mysqli_query($link, $query) === true) {
    ?>
    <div class="col-md-6">
        <br />
        <br />
        <br />
        <center>
            <div class="animate__animated animate__bounce" id="successlogin">
                <p>پاسخ ثبت شد</p>
            </div>
            <br />
            <button class="btn btn-warning" onclick="window.location.href='adminmanageticket.php';">صفحه بررسی تیکت ها</button>
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
                <p>پاسخ ثبت نشد</p>
            </div>
            <br />
            <button class="btn btn-warning" onclick="window.location.href='adminmanageticket.php';">صفحه بررسی تیکت ها</button>
        </center>
    </div>
    <?php
    echo $link->error;
}
?>