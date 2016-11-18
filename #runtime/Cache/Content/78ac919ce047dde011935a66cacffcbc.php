<?php if (!defined('THINK_PATH')) exit(); if (!defined('SHUIPF_VERSION')) exit(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="favicon.ico" rel="shortcut icon" />
<link rel="canonical" href="<?php echo ($config_siteurl); ?>" />
<title><?php if( isset($SEO['title']) && !empty($SEO['title']) ): echo ($SEO['title']); endif; echo ($SEO['site_title']); ?></title>
<link href="<?php echo ($config_siteurl); ?>statics/dianzi/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ($config_siteurl); ?>statics/dianzi/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ($config_siteurl); ?>statics/dianzi/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
<script src="<?php echo ($config_siteurl); ?>statics/dianzi/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo ($config_siteurl); ?>statics/dianzi/js/super_slider.js" type="text/javascript"></script>
<script src="<?php echo ($config_siteurl); ?>statics/dianzi/js/idangerous.swiper.min.js" type="text/javascript"></script>
<script src="<?php echo ($config_siteurl); ?>statics/dianzi/js/main.js" type="text/javascript"></script>
<!-- <base target="_blank" /> -->
</head>
<body>
  <?php if (!defined('SHUIPF_VERSION')) exit(); ?>
<div class="header">
         <div class="logo left"></div>
         <ul class="right nav">
           <li><a href="<?php echo ($config_siteurl); ?>" >首页</a></li>
           <?php $content_tag = \Think\Think::instance("\Content\TagLib\Content"); if(method_exists($content_tag, "category")){ $data = $content_tag->category(array('action'=>'category','catid'=>'0','order'=>'listorder ASC','num'=>'0','page'=>'0','pagefun'=>'page','return'=>'data',)); } if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($vo["url"]); ?>"><?php echo ($vo["catname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
         </ul>
</div>
  <div class="banner">
     <div class="swiper-container">
         <div class="swiper-wrapper">
             <div class="swiper-slide"><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_06.png" alt=></div>
             <div class="swiper-slide"><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_06.png" alt=></div>
             <div class="swiper-slide"><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_06.png" alt=></div>
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
             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_29.png" alt=""></a></li>
             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_32.png" alt=""></a></li>
             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_37.png" alt=""></a></li>
             <li style="margin-right: 0"><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_39.png" alt=""></a></li>
           </ul>
           <ul class="examplePic clearfix">
             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_29.png" alt=""></a></li>
             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_32.png" alt=""></a></li>
             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_37.png" alt=""></a></li>
             <li style="margin-right: 0"><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_39.png" alt=""></a></li>
           </ul>
           <ul class="examplePic clearfix">
             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_29.png" alt=""></a></li>
             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_32.png" alt=""></a></li>
             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_37.png" alt=""></a></li>
             <li style="margin-right: 0"><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_39.png" alt=""></a></li>
           </ul>
         </div>
       </div>
  </div>
<?php if (!defined('SHUIPF_VERSION')) exit(); ?>
<div class="footer">
    <div class="footer-center clearfix">
        <ul class="contant">
            <li><h1><a href="">联系我们</a></h1></li>
            <li><a href="">电话Phone:13688952687</a></li>
            <li><a href="">传真Fax:0004546</a></li>
            <li><a href="">邮箱E-mail:8866@qq.com</a></li>
            <li><a href="">地址Adress:湖北省武汉市江夏区</a></li>
        </ul>
        <ul class="bottom">
            <li><h1><a href="">关于我们</a></h1></li>
            <li><a href="">公司介绍</a></li>
            <li><a href="">案例中心</a></li>
            <li><a href="">业务范围</a></li>
            <li><a href="">公司新闻</a></li>
        </ul>
        <ul  class="bottom">
            <li><h1><a href="">产品导航</a></h1></li>
            <li><a href="">产品类型一</a></li>
            <li><a href="">产品类型二</a></li>
            <li><a href="">产品类型三</a></li>
            <li><a href="">产品类型四</a></li>
        </ul>
        <ul  class="bottom" style="margin-right: 0">
            <li><h1><a href="">联系我们</a></h1></li>
        </ul>
    </div>
</div>
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