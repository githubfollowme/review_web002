﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0039) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>健康促進網</title>
    <!-- <link href="/css/css.css" rel="stylesheet"> -->
    <link href="css.css" rel="stylesheet">
    <script src="/js/jquery-1.9.1.min.js"></script>
    <script src="/js/js.js"></script>
</head>

<body>
    <div id="alerr" style="background:rgba(51,51,51,0.8); color:#FFF; min-height:100px; width:300px; position:fixed; display:none; z-index:9999; overflow:auto;">
        <pre id="ssaa"></pre>
    </div>
    <!-- <iframe name="back" style="display:none;"></iframe> -->
    <div id="all">
        <?php include "./front/header.php"; ?>
        <div id="mm">
            <div class="hal" id="lef">
                <a class="blo" href="?do=po">分類網誌</a>
                <a class="blo" href="?do=news">最新文章</a>
                <a class="blo" href="?do=pop">人氣文章</a>
                <a class="blo" href="?do=know">講座訊息</a>
                <a class="blo" href="?do=que">問卷調查</a>
            </div>
            <div class="hal" id="main">
                <div>
                    <!-- 送分的先做 -->
                    <!-- 建制動態文字廣告區 pic6 於動態文字廣告區内置入【請民衆踴躍投稿電子報,讓電子報成爲大家相互交流...的園地..且文字移動方向由右至左】 -->
                    <!-- 用這個或如下<span style="width: 72%; display:inline-block;"> -->
                    <marquee style="width: 72%; display:inline-block;">請民衆踴躍投稿電子報,讓電子報成爲大家相交流,分享的園地!詳見最新文章</marquee>
                    <!-- https://blog.xuite.net/angelheart45/jenniffer7799/406456753 -->
                    <!-- <marquee direction="right">XXXXX</marquee> -->
                    <!-- </span> -->
                    <span style="width:18%; display:inline-block;">
                        <a href="?do=login">會員登入</a>
                    </span>
                    <div class="">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <?php include "./front/footer.php"; ?>
</body>

</html>