<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=640, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>苏宁智慧零售大开发战略暨合作伙伴签约大会</title>
    <link rel="stylesheet" href="../../res/suning/res/css/normalize.css">
    <link rel="stylesheet" href="../../res/suning/res/css/style.css">
    <link rel="stylesheet" href="../../res/suning/res/css/swiper.min.css">
    <link rel="stylesheet" href="../../res/suning/res/css/index2.css">
    <script src="../../res/suning/res/js/swiper.min.js"></script>
</head>
<body>
    <audio src="../../res/suning/res/2.mp3" id="audio" preload="auto" loop="loop" autoplay="autoplay"></audio>


    <section class="swiper-slide swiper-slide2 page2">
        <img src="../../res/suning/res/images/sub_text.png" class="text">
        <img src="../../res/suning/res/images/qr_code.png" class="qr_code">
        <p>
            为了更好的现场购物体验<br/>
            请先下载APP完成绑脸流程
        </p>
        <a href="https://weixin.touchworld-sh.com/res/suning/index.html" class="btn"><img
                src="../../res/suning/res/images/again.png"></a>
    </section>


<script src="../../res/suning/res/js/index2.js"></script>

<script src="https://res.wx.qq.com/open/js/jweixin-1.2.0.js" type="text/javascript" charset="utf-8"></script>
<script type="application/javascript">
    wx.config(<?php echo $js->config(array('onMenuShareTimeline', 'onMenuShareAppMessage'), false) ?>);
    // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在 页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready 函数中。
    wx.ready(function () {
        // 获取“分享到朋友圈”按钮点击状态及自定义分享内容接口
        wx.onMenuShareTimeline({
            title: '苏宁智慧零售大开发战略暨合作伙伴签约大会邀请函及大会指南', // 分享标题
            link: "https://weixin.touchworld-sh.com/suning/index",
            imgUrl: "https://weixin.touchworld-sh.com/res/suning/res/images/share.jpeg", // 分享图标
            success: function () {
            }
        });
        // 获取“分享给朋友”按钮点击状态及自定义分享内容接口
        wx.onMenuShareAppMessage({
            title: '苏宁智慧零售大开发战略暨合作伙伴签约大会邀请函及大会指南', // 分享标题
            desc: "苏宁智慧零售大开发战略暨合作伙伴签约大会邀请函及大会指南", // 分享描述
            link: "https://weixin.touchworld-sh.com/suning/index",
            imgUrl: "https://weixin.touchworld-sh.com/res/suning/res/images/share.jpeg", // 分享图标
            type: 'link', // 分享类型,music、video或link，不填默认为link
            success: function () {
            }
        });
    });
</script>
</body>
</html>
