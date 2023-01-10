<?php include('index.php'); ?>
<div class="col-md-6">
    <div>
        <br /><br /><br />
        <form class="loginform" action="action_login.php" method="post">
            <br /><br />
            <div class="form-group">
                <center><input name="user_name" class="form-control" id="forminput" placeholder="نام کاربری"></center>
            </div>
            <br />
            <div class="form-group">
                <center><input name="password" type="password" class="form-control" id="forminput" id="exampleInputPassword1"
                        placeholder="رمز عبور"></center>
            </div>
            <br /><br />
            <center><button type="submit" class="btn btn-primary">ورود</button></center>
        </form>
    </div>
</div>
</div>
</div>

<?php include('footer.php'); ?>