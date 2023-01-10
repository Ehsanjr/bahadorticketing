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
        
            
                <?php
                for ($i=0;$i<$counter;$i++)
                {
                    echo "سوال کاربر";
                    echo "<br />";
                    echo $row[$i]['send_message'];
                    echo "<br />";
                    echo "پاسخ شما";
                    echo "<br />";
                    if (empty ($row[$i]['recive_message']))
                    {
                        ?>
                        <form method="post" action="action_answer.php?id_message=<?php echo $row[$i]['id']; ?>">
                        <!-- <form action="action_answer.php" method="post"> -->
                        <div class="form-group">
                <textarea name="answer" class="form-control" id="exampleFormControlTextarea1" placeholder="شرح" rows="3" style="margin-right: 10px; width: 580px; height: 180px;"></textarea>
            </div>
                    <br />
                    <!-- <center><button type="submit" class="btn btn-primary">ارسال</button></center> -->
                    <!-- <center><a type="button" class="btn btn-primary" href="action_answer.php?id_message=<?php echo $row[$i]['id'];?>">ارسال</a> -->
                    <!-- </center> -->
                    <center><button type="submit" class="btn btn-primary">ورود</button></center>
                    </form>
                    <?php
                    }
                    else
                    {
                         echo $row[$i]['recive_message'];
                    }
                    echo "<br />";
                    echo "------------";
                    echo "<br />";
                    
                    
                } 
                
            //     <label style="color: white; margin-right: 10px;">پاسخ شما : </label>
            //     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="پاسخ خود را بنویسید"
            //         style="margin-right: 10px; width: 580px; height: 180px;"></textarea>
            // </div>
            // <br />
            // <center><button type="submit" class="btn btn-primary">ارسال</button></center>
            ?>
            
        </form>
    </div>
</div>

</div>
</div>

<?php include('footer.php'); ?>