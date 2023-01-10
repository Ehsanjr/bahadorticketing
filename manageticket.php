<?php include('index.php');
$link = mysqli_connect("localhost", "root", "", "ticket");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT * FROM new_ticket";           

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
                <!-- <th scope="col">ID</th> -->
                <th scope="col">عنوان</th>
                <th scope="col">وضعیت</th>
                <th scope="col">پاسخ ادمین</th>
                <!-- <th scope="col">ویرایش</th> -->
                <th scope="col">حذف</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i=0;$i<$counter;$i++)
            {

                $tit=$row[$i]['title'];
                $query2 = "SELECT sum(status) as sum_status , count(status) as count_status FROM message where title_ticket='$tit'";           

                $result2 = mysqli_query($link, $query2);

                $row2 = mysqli_fetch_array($result2);
                if ($row2)
                {
                    $count = $row2['count_status'];
                    $sum=$row2['sum_status'];
                    $stat = "";
                    if ($sum==$count)
                    {
                        $stat = "بسته شده است";
                    }
                    else
                    {
                        $stat = "در حال بررسی";
                    }
                }
                
           echo "<tr>
                <!-- <th scope=\"row\">1</th> -->
                
                <td>$tit</td>
                <td>$stat</td>
                <td><a href=\"viewanswer.php\">پاسخ ادمین</a></td>
                <!-- <td><a><img src=\"images/edit.png\" style=\"width: 20px;\"></a></td> -->
                <td><a><img src=\"images/garbage.png\" style=\"width: 20px;\"></a></td>
            </tr>";
            
            }
            ?>
        </tbody>
    </table>

</div>
</div>
</div>

<?php
mysqli_close($link); ?>