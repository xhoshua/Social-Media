<?php
include ('../layouts/portal/head.php');
?>
<div class="portal" style="overflow: hidden">
<div class="container">
    <div class="row" >
        <div class="col-lg-3 col-sm-6">

            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img alt=""  width="100px" src="img_avatar.png">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="https://scripteden.com/"><?= $authUser['first_name'] ?></a>
                    </div>
                    <div class="desc"><?= $authUser['last_name'] ?></div>
                    <div class="desc"><?= $authUser['email'] ?></div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>
</div>
<?php
include ('../layouts/portal/foot.php');
?>
