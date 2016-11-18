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
         <div class="main-center">
           <h1 class="title">案例展示</h1>
           <h3>下级分类：<a href="" class="actived">案例展示一</a><a href="">案例展示二</a><a href="">案例展示三</a></h3>
           <ul class="examplePic clearfix">
             <li><a href=""><img src="{$config_siteurl}statics/dianzi/images/index_29.png" alt=""></a></li>
             <li><a href=""><img src="{$config_siteurl}statics/dianzi/images/index_32.png" alt=""></a></li>
             <li><a href=""><img src="{$config_siteurl}statics/dianzi/images/index_37.png" alt=""></a></li>
             <li style="margin-right: 0"><a href=""><img src="{$config_siteurl}statics/dianzi/images/index_39.png" alt=""></a></li>
           </ul>
           <ul class="examplePic clearfix">
             <li><a href=""><img src="{$config_siteurl}statics/dianzi/images/index_29.png" alt=""></a></li>
             <li><a href=""><img src="{$config_siteurl}statics/dianzi/images/index_32.png" alt=""></a></li>
             <li><a href=""><img src="{$config_siteurl}statics/dianzi/images/index_37.png" alt=""></a></li>
             <li style="margin-right: 0"><a href=""><img src="{$config_siteurl}statics/dianzi/images/index_39.png" alt=""></a></li>
           </ul>
           <ul class="examplePic clearfix">
             <li><a href=""><img src="{$config_siteurl}statics/dianzi/images/index_29.png" alt=""></a></li>
             <li><a href=""><img src="{$config_siteurl}statics/dianzi/images/index_32.png" alt=""></a></li>
             <li><a href=""><img src="{$config_siteurl}statics/dianzi/images/index_37.png" alt=""></a></li>
             <li style="margin-right: 0"><a href=""><img src="{$config_siteurl}statics/dianzi/images/index_39.png" alt=""></a></li>
           </ul>
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