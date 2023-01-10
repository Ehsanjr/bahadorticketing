<?php include('index.php'); ?>
<div class="col-md-6" style="70%">
    <div>
        <br /><br /><br />
        <form action="action_addticket.php" method="post" class="addticketform">
            <br />
            <h3 style="margin-right: 10px; color: green; font-family: 'B Titr';">مشخصات تیکت را وارد کنید</h3>
            <br/><br/>
            <div class="form-group">
                <input name="title" class="form-control" id="forminput" placeholder="عنوان" style="margin-right: 10px;">
            </div>
            <br />
            <div class="form-group">
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" placeholder="شرح" rows="3" style="margin-right: 10px; width: 580px; height: 180px;"></textarea>
            </div>
            <br />
            <center><button type="submit" class="btn btn-primary">ثبت</button></center>
        </form>
    </div>
</div>
</div>
</div>
