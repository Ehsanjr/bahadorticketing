<?php include('index.php');
$link = mysqli_connect("localhost", "root", "", "ticket");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT title_ticket,user_id,sum(status) as sum_status,count(status) as count_status FROM message group by title_ticket,user_id";             // پرس و جوي نمايش همه محصولات فروشگاه

$result = mysqli_query($link, $query);
$counter = 0;
while ($row[$counter] = mysqli_fetch_array($result)) {
    $counter++;
}
?>

<div class="col-md-6">
    <br /><br />
    <br /><br />
    <table class="table" id="usermanagetable">
        <thead class="thead-dark">
            <tr>
                <th scope="col">نام کاربری</th>
              
                <th scope="col">عنوان</th>
                <th scope="col">وضعیت</th>
                <th scope="col">بررسی</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i=0;$i<$counter;$i++)
            {
                $count = $row[$i]['count_status'];
                $sum=$row[$i]['sum_status'];
                $user_id=$row[$i]['user_id'];
                $title=$row[$i]['title_ticket'];
                $query2 = "SELECT user_name FROM user WHERE id='$user_id'";
                $result2 = mysqli_query($link, $query2);

                $row2 = mysqli_fetch_array($result2);
                if ($row2) {
                    $user_name = $row2['user_name'];
                }



                $query3 = "SELECT id_ticket FROM message WHERE title_ticket='$title' and user_id='$user_id'";
                $result3 = mysqli_query($link, $query3);

                $row3 = mysqli_fetch_array($result3);
                if ($row3) {
                    $ticket_id=$row3['id_ticket'];
                }
                else
                {
                    exit ("khata");
                }


                $stat = "";
                if ($sum==$count)
                {
                    $stat = "بسته شده است";
                }
                else
                {
                    $stat = "در حال بررسی";
                }
            echo "
            <tr>
                <td>$user_name</td>
       
                <td>$title</td>
                <td>$stat</td>"
                ?>
                <td><a href="answerticket.php?id_ticket=<?php echo $ticket_id;?>">پاسخ</a></td>
            </tr>;
            <?php
            }
            ?>
        </tbody>
    </table>

</div>
</div>
</div>

<?php
mysqli_close($link);
 include('footer.php'); ?>