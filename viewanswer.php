<?php include('index.php');
$link = mysqli_connect("localhost", "root", "", "ticket");
$id_ticket = $_GET['id_ticket'];
$_SESSION['ticket_add'] = $id_ticket;
$userid = $_SESSION['id'];
if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT * FROM message where id_ticket='$id_ticket' AND user_id='$userid'";
$result = mysqli_query($link, $query);
$counter = 0;
while ($row[$counter] = mysqli_fetch_array($result)) {
    $counter++;
}
?>
<div class="col-md-6" style="70%">
    <div>
        <br /><br /><br />
        <center><button type="submit" class="btn btn-success" style="margin-right: 150px; width: 500px;"
                onclick="window.location.href='addmessage.php';">افزودن پیام جدید</button></center>
        <br />
        <form class="answerticketform">
            <?php
            for ($i = 0; $i < $counter; $i++) {
                ?>
                <br/>
                <div style="margin-right: 10px;">
                    <label>پیام شما</label>
                    <p class="usermessagebox"><?php echo $row[$i]['send_message']; ?> </p>
                </div>
                
                <div style="direction: ltr;  margin-left: 10px;">
                    <label>پیام ادمین</label>
                    <p class="adminmessagebox">
                        <?php if (!empty($row[$i]['recive_message'])) {
                            echo $row[$i]['recive_message'];
                        } else {
                            echo "ادمین هنوز پاسخی نداده است";
                        } ?>
                    </p>
                </div>
                <?php
            }
            ?>

        </form>
    </div>
</div>

</div>
</div>
<?php include('footer.php'); ?>