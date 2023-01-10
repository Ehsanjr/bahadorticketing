<?php include('index.php'); ?>
<div class="col-md-6">
    <div>
        <br /><br /><br />
        <form class="registerform" action="action_register" method="post">
            <br /><br />
            <div class="form-group">
                <center><input name="first_name" class="form-control" id="forminput" placeholder="نام "></center>
            </div>
            <br />
            <div class="form-group">
                <center><input name="last_name" class="form-control" id="forminput" placeholder="نام خانوادگی"></center>
            </div>
            <br />
            <div class="form-group">
                <center><input name="user_name" class="form-control" id="forminput" placeholder="نام کاربری"></center>
            </div>
            <br />
            <div class="form-group">
            <center><input name="email" class="form-control" id="forminput" placeholder="ایمیل"></center>
            </div>
            <br />
            <div class="form-group">
                <center><input name="password" type="password" class="form-control" id="forminput" id="exampleInputPassword1"
                        placeholder="رمز عبور"></center>
            </div>
            <br />
            <div class="form-group">
                <center><input name="repassword" type="password" class="form-control" id="forminput" id="exampleInputPassword1"
                        placeholder="تکرار رمز عبور"></center>
            </div>
            <br /><br />
            <center><button type="submit" class="btn btn-primary">ثبت نام</button></center>
        </form>
    </div>
</div>
</div>
</div>

<?php include('footer.php'); ?>