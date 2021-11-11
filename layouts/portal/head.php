<?php
session_start();
if (!isset($_SESSION['auth_user'])){
    header("location: ../auth/login.php");
}
include ('C:\xampp\htdocs\Social-Media\connection.php');
$query = "SELECT * FROM users where id=:id LIMIT 1";
$stmt = $db->prepare($query);
$stmt->execute(['id' => $_SESSION['auth_user']['id']]);
$authUser = $stmt->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Media</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style>
    .drop{
        margin-left: 1670px;
    }
    .btn1{
        background-color: transparent;
        border: 0px;
        color: white;
    }
    .btn2{
        background-color: #5161ce;
        color: white;
        border: 0px;
    }

    .card {
        padding-top: 20px;
        margin: 10px 0 20px 0;
        background-color: rgba(214, 224, 226, 0.2);
        border-top-width: 0;
        border-bottom-width: 2px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        margin-top: 250px;

    }
.container{
    margin-left: 800px;
    overflow: hidden;

}
    .card .card-heading {
        padding: 0 20px;
        margin: 0;

    }

    .card .card-heading.simple {
        font-size: 20px;
        font-weight: 300;
        color: #777;
        border-bottom: 1px solid #e5e5e5;
    }

    .card .card-heading.image img {
        display: inline-block;
        width: 46px;
        height: 46px;
        margin-right: 15px;
        vertical-align: top;
        border: 0;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
    }

    .card .card-heading.image .card-heading-header {
        display: inline-block;
        vertical-align: top;
    }

    .card .card-heading.image .card-heading-header h3 {
        margin: 0;
        font-size: 14px;
        line-height: 16px;
        color: #262626;
    }

    .card .card-heading.image .card-heading-header span {
        font-size: 12px;
        color: #999999;
    }

    .card .card-body {
        padding: 0 20px;
        margin-top: 20px;

    }

    .card .card-media {
        padding: 0 20px;
        margin: 0 -14px;

    }

    .card .card-media img {
        max-width: 100%;
        max-height: 100%;
    }

    .card .card-actions {
        min-height: 30px;
        padding: 0 20px 20px 20px;
        margin: 20px 0 0 0;
    }

    .card .card-comments {
        padding: 20px;
        margin: 0;
        background-color: #f8f8f8;
    }

    .card .card-comments .comments-collapse-toggle {
        padding: 0;
        margin: 0 20px 12px 20px;
    }

    .card .card-comments .comments-collapse-toggle a,
    .card .card-comments .comments-collapse-toggle span {
        padding-right: 5px;
        overflow: hidden;
        font-size: 12px;
        color: #999;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .card-comments .media-heading {
        font-size: 13px;
        font-weight: bold;
    }

    .card.people {
        position: relative;
        display: inline-block;
        width: 170px;
        height: 300px;
        padding-top: 0;
        margin-left: 20px;
        overflow: hidden;
        vertical-align: top;
    }

    .card.people:first-child {
        margin-left: 0;
    }

    .card.people .card-top {
        position: absolute;
        top: 0;
        left: 0;
        display: inline-block;
        width: 170px;
        height: 150px;
        background-color: #ffffff;
    }

    .card.people .card-top.green {
        background-color: #53a93f;
    }

    .card.people .card-top.blue {
        background-color: #427fed;
    }

    .card.people .card-info {
        position: absolute;
        top: 150px;
        display: inline-block;
        width: 100%;
        height: 101px;
        overflow: hidden;
        background: #ffffff;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .card.people .card-info .title {
        display: block;
        margin: 8px 14px 0 14px;
        overflow: hidden;
        font-size: 16px;
        font-weight: bold;
        line-height: 18px;
        color: #404040;
    }

    .card.people .card-info .desc {
        display: block;
        margin: 8px 14px 0 14px;
        overflow: hidden;
        font-size: 12px;
        line-height: 16px;
        color: #737373;
        text-overflow: ellipsis;
    }

    .card.people .card-bottom {
        position: absolute;
        bottom: 0;
        left: 0;
        display: inline-block;
        width: 100%;
        padding: 10px 20px;
        line-height: 29px;
        text-align: center;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .card.hovercard {
        position: relative;
        padding-top: 0;
        overflow: hidden;
        text-align: center;
        background-color: rgba(214, 224, 226, 0.2);
    }

    .card.hovercard .cardheader {
        background: url("http://lorempixel.com/850/280/nature/4/");
        background-size: cover;
        height: 135px;
    }

    .card.hovercard .avatar {
        position: relative;
        top: -50px;
        margin-bottom: -50px;
    }

    .card.hovercard .avatar img {
        width: 100px;
        height: 100px;
        max-width: 100px;
        max-height: 100px;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        border: 5px solid rgba(255,255,255,0.5);
    }

    .card.hovercard .info {
        padding: 4px 8px 10px;
    }

    .card.hovercard .info .title {
        margin-bottom: 4px;
        font-size: 24px;
        line-height: 1;
        color: #262626;
        vertical-align: middle;
    }

    .card.hovercard .info .desc {
        overflow: hidden;
        font-size: 12px;
        line-height: 20px;
        color: #737373;
        text-overflow: ellipsis;
    }

    .card.hovercard .bottom {
        padding: 0 20px;
        margin-bottom: 17px;
    }

    .btn{ border-radius: 50%; width:32px; height:32px; line-height:18px;  }

    .navbar {
    margin-bottom: 0;
        border-radius: 0;
    }
    .portal{
        background-color: cornflowerblue;
height: 857px;
    }
    *{margin:0;padding:0}
    i{margin-right:10px}
    .navbar-logo{padding:15px;color:#fff}
    .navbar-mainbg{background-color:#5161ce;padding:0}
    #navbarSupportedContent{overflow:hidden;position:relative;margin-left: 100px}
    #navbarSupportedContent ul{padding:0;margin:0}
    #navbarSupportedContent ul li a i{margin-right:10px}
    #navbarSupportedContent li{list-style-type:none;float:left}
    #navbarSupportedContent ul li a{color:pink;text-decoration:none;font-size:15px;display:block;padding:20px;transition-duration:.6s;transition-timing-function:cubic-bezier(0.68,-.55,.265,1.55);position:relative}
    #navbarSupportedContent>ul>li.active>a{color:#5161ce;background-color:transparent;transition:all .7s}
    #navbarSupportedContent a:not(:only-child):after{content:"\f105";position:absolute;right:20px;top:10px;font-size:14px;font-family:"Font Awesome 5 Free";display:inline-block;padding-right:3px;vertical-align:middle;font-weight:900;transition:.5s}
    #navbarSupportedContent .active>a:not(:only-child):after{transform:rotate(90deg)}
    .hori-selector{display:inline-block;position:absolute;height:100%;top:0;left:0;transition-duration:.6s;transition-timing-function:cubic-bezier(0.68,-.55,.265,1.55);background-color:#fff;border-top-left-radius:15px;border-top-right-radius:15px;margin-top:10px}
    .hori-selector .left,.hori-selector .right{position:absolute;width:25px;height:25px;background-color:#fff;bottom:10px}
    .hori-selector .right{right:-25px}
    .hori-selector .left{left:-25px}
    .hori-selector .left:before,.hori-selector .right:before{content:'';position:absolute;width:50px;height:50px;border-radius:50%;background-color:#5161ce}
    .hori-selector .right:before{bottom:0;right:-25px}
    .hori-selector .left:before{bottom:0;left:-25px}
    @media (max-width:991px){#navbarSupportedContent ul li a{padding:12px 30px}
        .hori-selector{margin-top:0;margin-left:10px;border-radius:25px 0 0 25px}
        .hori-selector .left,.hori-selector .right{right:10px}
        .hori-selector .left{top:-25px;left:auto}
        .hori-selector .right{bottom:-25px}
        .hori-selector .left:before{left:-25px;top:-25px}
        .hori-selector .right:before{bottom:-25px;left:-25px}}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
            <li class="nav-item active">
                    <form  method="post" action="../auth/authenticate.php" >

                        <button name="Profile" title="Profile"  type="submit"  style="border: 0px;background-color: transparent">
                            <a class="nav-link" href="javascript:void(0);">
                    <i class="fa fa-address-book"></i>Profile
                            </a>
                </button>

                </form>

            </li>
            <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);../portal/home.php">
                    <i  id="home_page" class="fa fa-clone"></i>Home<Page></Page>
                        </a>
            </li>

        </ul>
            <div class="drop">
             <button class="btn1"  style="height: 50px" type="button" data-toggle="dropdown"><i class="fa fa-bars"></i> Settings
                <span class="caret"></span></button>

             <ul class="dropdown-menu dropdown-menu-right" style="background: transparent">

                <li >
                    <form  method="post" action="../auth/authenticate.php" >

                            <button class="btn2" name="Submit_Logout" title="Logout"  type="submit" style="width: 160px">Logout</button>

                    </form>
                </li>
            </ul>
            </div>
        </div>


</nav>
<script>
    function test(){
        var tabsNewAnim = $('#navbarSupportedContent');
        var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
        var activeItemNewAnim = tabsNewAnim.find('.active');
        var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
        var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
        var itemPosNewAnimTop = activeItemNewAnim.position();
        var itemPosNewAnimLeft = activeItemNewAnim.position();
        $(".hori-selector").css({
            "top":itemPosNewAnimTop.top + "px",
            "left":itemPosNewAnimLeft.left + "px",
            "height": activeWidthNewAnimHeight + "px",
            "width": activeWidthNewAnimWidth + "px"
        });
        $("#navbarSupportedContent").on("click","li",function(e){
            $('#navbarSupportedContent ul li').removeClass("active");
            $(this).addClass('active');
            var activeWidthNewAnimHeight = $(this).innerHeight();
            var activeWidthNewAnimWidth = $(this).innerWidth();
            var itemPosNewAnimTop = $(this).position();
            var itemPosNewAnimLeft = $(this).position();
            $(".hori-selector").css({
                "top":itemPosNewAnimTop.top + "px",
                "left":itemPosNewAnimLeft.left + "px",
                "height": activeWidthNewAnimHeight + "px",
                "width": activeWidthNewAnimWidth + "px"
            });
        });
    }
    $(document).ready(function(){
        setTimeout(function(){ test(); });
    });

    $(window).on('resize', function(){
        setTimeout(function(){ test(); }, 500);
    });
    $(".navbar-toggler").click(function(){
        setTimeout(function(){ test(); });

    });

</script>
<main>