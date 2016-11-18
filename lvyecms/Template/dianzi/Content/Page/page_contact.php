<?php if (!defined('SHUIPF_VERSION')) exit(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="favicon.ico" rel="shortcut icon" />
<link rel="canonical" href="{$config_siteurl}" />
<title><if condition=" isset($SEO['title']) && !empty($SEO['title']) ">{$SEO['title']}</if>{$SEO['site_title']}</title>
<link href="{$config_siteurl}statics/dianzi/css/style.css" rel="stylesheet" type="text/css" />
<link href="{$config_siteurl}statics/dianzi/css/reset.css" rel="stylesheet" type="text/css" />
<link href="{$config_siteurl}statics/dianzi/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
<script src="{$config_siteurl}statics/dianzi/js/jquery.min.js" type="text/javascript"></script>
<script src="{$config_siteurl}statics/dianzi/js/super_slider.js" type="text/javascript"></script>
<script src="{$config_siteurl}statics/dianzi/js/idangerous.swiper.min.js" type="text/javascript"></script>
<script src="{$config_siteurl}statics/dianzi/js/main.js" type="text/javascript"></script>
<!-- <base target="_blank" /> -->
</head>
<body>
  <template file="Content/header.php"/>
  <div class="banner">
     <div class="swiper-container">
         <div class="swiper-wrapper">
             <div class="swiper-slide"><img src="{$config_siteurl}statics/dianzi/images/index_06.png" alt=></div>
             <div class="swiper-slide"><img src="{$config_siteurl}statics/dianzi/images/index_06.png" alt=></div>
             <div class="swiper-slide"><img src="{$config_siteurl}statics/dianzi/images/index_06.png" alt=></div>
         </div>
         <div class="pagination"></div>
     </div>
  </div>
  <div class="container">
        <div class="main">
         <div class="main-center about-center">
           <h1 class="title">联系我们</h1>
           <h3><span>联系方式 <span class="e">/ CONTACT</span> </span></h3>
           <div class="aboutBox clearfix">
             <div class="jieshao left ">
                <p>您好，欢迎来到旅烨网络科技客户服务中心，请
                  在此详细填写您所遇到的问题，并留下准确的Em
                  ail地址和其他联系方式，我们的工作人员会24
                  小时内尽快给你回复。 （未必填写内容）</p>
             </div>
             <img src="{$config_siteurl}statics/dianzi/images/kefu.png" alt="" class="right">
           </div>
                     <ul class="contant-list">
             <li><span>联系电话：</span>000-44554455 77667766  <span>24小时响应：</span>138-6666-8989</li>
             <li><span>传真：</span>000-22332233   <span>邮箱E-mail：</span>name@163.com</li>
             <li><span>客服QQ：</span> 300011111    9000111111</li>
             <li><span>公司地址：武汉市洪山区联合国际大厦</span></li>
             <li><span>乘车路线:</span><br>
               <p> 1.北京火车站西站 --456路车/18路车/674路车---工业园站下（步行100米到XX金融公司）</p>
               <p> 2.北京国际机场 --421路车/98路车/55路车---工业园站下（步行100米到XX金融公司）</p>
               <p> 3.怀柔汽车站 --876路车/113路车/139路车/28路车---工业园站下（步行100米到XX金融公司）</p>
               <p> 4.北京火车站北站--271路车/530路车/223路车/66路车---工业园站下（步行100米到XX金融公司）</p>
             </li>
           </ul>
           <h3><span>位置地图<span class="e">/ MAP</span> </span></h3>
           <img src="{$config_siteurl}statics/dianzi/images/map.png" alt="">
         </div>
       </div>
  </div>
<template file="Content/footer.php"/>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        var mySwiper = new Swiper ('.swiper-container', {
            autoplay: 5000,
            loop: true,
            pagination : '.pagination',
            paginationClickable :true
        });
    })
</script>