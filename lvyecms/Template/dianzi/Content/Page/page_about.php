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
               <h1 class="title">关于我们</h1>
               <h3><span>企业发展 <span class="e">/ ABOUT</span> </span></h3>
               <div class="aboutBox clearfix">
                 <div class="jieshao left ">
                    <p>金融科技公司 始创於八十年代，提供金融服务。随着讯息及科技的发展，积极地提升其专业水平，提供更高效率的 金融服务。
                      金融集团的附属公司与策略伙伴组合成的营运体系，是一个提供国际性综合金融服务及资讯科技的国际性机构，业务遍及亚洲丶美洲及欧洲。
                      集团与世界各地的专业策略夥伴结盟，提供的金融服务可含括全球的主要金融中心提供全面性的优质服务。更透过其特有的电子交易平台，
                      冲破地域的限制，使客户更能时刻掌握世界的动态而有助作出运筹帷幄的决定。</p>
                   <p>资讯是现代生活重要的一部份，为不同行业的公司量身策划及建立各种类的讯息平台，提供的资讯不只限於财经，更涉及娱乐丶文化及日常生活的讯息，
                     让使用者更能利用该等平台取得与日常生活息息相关讯息。</p>
                 </div>
                 <img src="{$config_siteurl}statics/dianzi/images/gongsi.png" alt="" class="right">
               </div>
               <h3><span>主营业务 <span class="e">/ WORK</span> </span></h3>
               <ul class="about-work clearfix">
                 <li><a href="">1 高新技术企业以及国家火炬计划软件产业基地骨干企业</a></li>
                 <li><a href="">2 高新技术企业以及国家火炬计划软件产业基地骨干企业</a></li>
                 <li><a href="">3 完善的信息安全、产品研发质量控制体系保证了公司服务市场</a></li>
                 <li><a href="">4 完善的信息安全、产品研发质量控制体系保证了公司服务市场</a></li>
                 <li><a href="">1 高新技术企业以及国家火炬计划软件产业基地骨干企业</a></li>
                 <li><a href="">2 高新技术企业以及国家火炬计划软件产业基地骨干企业</a></li>
                 <li><a href="">3 完善的信息安全、产品研发质量控制体系保证了公司服务市场</a></li>
                 <li><a href="">4 完善的信息安全、产品研发质量控制体系保证了公司服务市场</a></li>
               </ul>

               <h3><span>企业相册 <span class="e">/ OFFICE</span> </span></h3>
               <ul class="about-pic clearfix">
                 <li><a href=""></a></li>
                 <li><a href=""></a></li>
                 <li><a href=""></a></li>
                 <li><a href=""></a></li>
                 <li><a href=""></a></li>
                 <li><a href=""></a></li>
                 <li><a href=""></a></li>
                 <li><a href=""></a></li>
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