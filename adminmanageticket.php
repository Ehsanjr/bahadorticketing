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
                <td>$user_id</td>
       
                <td>$title</td>
                <td>$stat</td>
                <td><a href=\"answerticket.php\">پاسخ</a></td>
            </tr>";
            }
            ?>
        </tbody>
    </table>

</div>
</div>
</div>

<?php include('footer.php'); ?>