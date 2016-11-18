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
                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/gongsi.png" alt="" class="right">
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