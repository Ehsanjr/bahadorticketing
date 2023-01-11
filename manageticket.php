<?php include('index.php');
$link = mysqli_connect("localhost", "root", "", "ticket");
$userid = $_SESSION['id'];
if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT * FROM new_ticket where user_id='$userid'";           

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
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i=0;$i<$counter;$i++)
            {

                $tit=$row[$i]['title'];
                $ticket_id = $row[$i]['id'];
                $query2 = "SELECT sum(status) as sum_status , count(status) as count_status FROM message where title_ticket='$tit' And user_id='$userid'";           

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
              
                
                <td>$tit</td>
                <td>$stat</td>";
                ?>
                <td><a href="viewanswer.php?id_ticket=<?php echo $ticket_id;?>">پاسخ ادمین</a></td>
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
mysqli_close($link); ?>