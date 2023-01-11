<?php include('index.php');
$link = mysqli_connect("localhost", "root", "", "ticket");
$id_ticket = $_GET['id_ticket'];
if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT * FROM message where id_ticket='$id_ticket'";

$result = mysqli_query($link, $query);
$counter = 0;
while ($row[$counter] = mysqli_fetch_array($result)) {
    $counter++;
} ?>
<div class="col-md-6" style="70%">
    <div>
        <br /><br /><br />

        <div class="adminanswerform">
            <?php
            for ($i = 0; $i < $counter; $i++) {
                ?>
                <br />
                <div style="margin-right: 10px;">
                    <label>پیام کاربر</label>
                    <p class="usermessagebox">
                        <?php echo $row[$i]['send_message']; ?>
                    </p>
                </div>
                <?php
                if (empty($row[$i]['recive_message'])) {
                    ?>
                    <form method="post" action="action_answer.php?id_message=<?php echo $row[$i]['id']; ?>">
                        <div class="form-group">
                            <label style="margin-right: 10px;">پیام خود را وارد کنید</label>
                            <textarea name="answer" class="form-control" id="exampleFormControlTextarea1" placeholder="شرح"
                                rows="3" style="margin-right: 10px; width: 580px; height: 80px;"></textarea>
                        </div>
                        <br />
                        <center><button type="submit" class="btn btn-primary">ارسال</button></center>
                    </form>
                <?php } else {
                    ?>
                    <div style="direction: ltr;  margin-left: 10px;">
                        <label>پیام شما</label>
                        <p class="adminmessagebox">
                            <?php if (!empty($row[$i]['recive_message'])) {
                                echo $row[$i]['recive_message'];
                            } ?>
                        </p>
                    </div>
                    <br/><br/>
                    <center><button type="submit" class="btn btn-primary"
                            onclick="window.location.href='adminmanageticket.php';">بازگشت به صفحه تیکت ها</button></center>
                    <?php
                }


            }
            ?>
        </div>