<?php include('header.php'); ?>
<div class="main-body">
    <div class="row">
        <div class="col-md-6" style="width: 30%;">
            <div class="sidebar">
                <div class="sidebar-head">
                    <br />
                    <h5 style="font-family: B Titr; color: yellowgreen; margin-right: 10px;">گزینه مورد نظر خود را
                        انتخاب
                        کنید</h5>
                </div>
                <hr style="color: white; margin-right:20px; margin-left: 20px;" />
                <div class="sidebar-body">
                    <ul>
                        <li class="sidebarli"><a href="index.php" class="sidebarlink">صفحه
                                اصلی</a></li>

                        <li class="sidebarli"><a class="sidebarlink" href="about.php">درباره ما</a></li>
                    </ul>
                    <?php
                    if (isset($_SESSION['login']) && $_SESSION['login'] && !isset($_SESSION['admin'])) {
                        ?>
                        <ul>
                            <hr style="color: white; margin-right:20px; margin-left: 20px;" />
                            <li class="sidebarli"><a class="sidebarlink" href="addticket.php">ثبت تیکت جدید</a></li>
                            <li class="sidebarli"><a class="sidebarlink" href="manageticket.php">مدیریت تیکت ها</a></li>
                        </ul>
                        <?php
                    }
                    ?>

                    <?php
                    if (isset($_SESSION['login']) && $_SESSION['login'] && isset($_SESSION['admin']) && $_SESSION['admin']) {
                        ?> <!--  if admin -->
                        <ul>
                            <hr style="color: white; margin-right:20px; margin-left: 20px;" />
                            <li class="sidebarli"><a class="sidebarlink" href="adminmanageticket.php">بررسی تیکت ها</a></li>
                            <!-- <li class="sidebarli"><a>مدیریت تیکت ها</a></li> -->
                        </ul>
                        <?php
                    }
                    ?>
                    <?php
                    if (isset($_SESSION['login']) && $_SESSION['login']) {
                        ?>
                        <ul>
                            <hr style="color: white; margin-right:20px; margin-left: 20px;" />
                            <li class="sidebarli"><a class="sidebarlink" href="logout.php">خروج </a></li>
                        </ul>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>