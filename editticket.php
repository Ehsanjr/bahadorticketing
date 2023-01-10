<?php include('index.php'); ?>
<div class="col-md-6" style="70%">
    <div>
        <br /><br /><br />
        <form class="editticketform">
            <br />
            <h3 style="margin-right: 10px; color: green; font-family: 'B Titr';">مشخصات جدید تیکت را وارد کنید</h3>
            <br /><br />
            <div class="form-group">
                <label style="color: white; margin-right: 10px;">آیدی :</label>
                <input class="form-control" id="forminput" placeholder="عنوان" style="margin-right: 10px;">
            </div>
            <br />
            <div class="form-group">
                <label style="color: white; margin-right: 10px;">عنوان : </label>
                <input class="form-control" id="forminput" placeholder="عنوان" style="margin-right: 10px;">
            </div>
            <br />
            <div class="form-group">
                <label style="color: white; margin-right: 10px;">شرح : </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="شرح" rows="3"
                    style="margin-right: 10px; width: 580px; height: 180px;"></textarea>
            </div>
            <br />
            <center><button type="submit" class="btn btn-primary">ویرایش</button></center>
        </form>
    </div>
</div>
</div>
</div>

<?php include('footer.php'); ?>