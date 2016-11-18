<?php if (!defined('THINK_PATH')) exit(); if (!defined('SHUIPF_VERSION')) exit(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link href="favicon.ico" rel="shortcut icon" />
<link rel="canonical" href="<?php echo ($config_siteurl); ?>" />
<title><?php if( isset($SEO['title']) && !empty($SEO['title']) ): echo ($SEO['title']); endif; echo ($SEO['site_title']); ?></title>
<meta name="description" content="<?php echo ($SEO['description']); ?>" />
<meta name="keywords" content="<?php echo ($SEO['keyword']); ?>" />
<link href="<?php echo ($config_siteurl); ?>statics/dianzi/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ($config_siteurl); ?>statics/dianzi/css/reset.css" rel="stylesheet" type="text/css" />
<link href="<?php echo ($config_siteurl); ?>statics/dianzi/css/idangerous.swiper.css" rel="stylesheet" type="text/css" />
<script src="<?php echo ($config_siteurl); ?>statics/dianzi/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo ($config_siteurl); ?>statics/dianzi/js/super_slider.js" type="text/javascript"></script>
<script src="<?php echo ($config_siteurl); ?>statics/dianzi/js/idangerous.swiper.min.js" type="text/javascript"></script>
<script src="<?php echo ($config_siteurl); ?>statics/dianzi/js/main.js" type="text/javascript"></script>
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
<![endif]-->
<!-- <base target="_blank" /> -->
</head>
<body>
<div class="container">
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
  <div class="main">
                    <h1 class="title">关于我们</h1>
                    <h2>我们是全球领先的高端企业自助建站平台，从事网站设计已有多年，在此领域积累了相当丰富的设计和策划经验</h2>
                    <h2>曾多次为政府网站服务，并取得了良好的口碑</h2>
                    <table id="tbb2">
                         <tbody>
                         <tr>
                             <td><a href="#"><div id="tb1"></div><h2>企业发展</h2><p>WEGHJKVCDESPOY</p></a></td>
                             <td><a href="#"><div id="tb2"></div><h2>企业荣誉</h2><p>WEGHJKVCDESPOY</p></a></td>
                             <td><a href="#"><div id="tb3"></div><h2>主营业务</h2><p>WEGHJKVCDESPOY</p></a></td>
                             <td><a href="#"><div id="tb4"></div><h2>企业相册</h2><p>WEGHJKVCDESPOY</p></a></td>
                             <td><a href="#"><div id="tb5"></div><h2>联系我们</h2><p>WEGHJKVCDESPOY</p></a></td>
                         </tr>
                         </tbody>
                     </table>
                    <div class="product-center">
                         <h1 class="title">产品中心</h1>
                         <div class="tab-box  clearfix">
                             <ul class="tab-title clearfix">
                                 <li class="actived"><a href="javascript:;" >产品分类一</a></li>
                                 <li><a href="javascript:;">产品分类二</a></li>
                                 <li><a href="javascript:;">产品分类三</a></li>
                             </ul>
                             <div class="tab-content">
                                 <ul>
                                     <li style="display: block;">
                                         <div class="product-box clearfix">
                                             <div class="box1">
                                                  <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_29.png" alt="">
                                             </div>
                                             <div class="box1">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_32.png" alt="">
                                             </div>
                                             <div class="box1">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_37.png" alt="">
                                             </div>
                                             <div class="box1" style="margin-right: 0;">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_39.png" alt="">
                                             </div>
                                             <div class="box1">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_29.png" alt="">
                                             </div>
                                             <div class="box1">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_32.png" alt="">
                                             </div>
                                             <div class="box1">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_37.png" alt="">
                                             </div>
                                             <div class="box1" style="margin-right: 0;">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_39.png" alt="">
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="product-box clearfix">
                                             <div class="box1">
                                             <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_39.png" alt="">
                                             </div>
                                             <div class="box1">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_37.png" alt="">
                                             </div>
                                             <div class="box1">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_37.png" alt="">
                                             </div>
                                             <div class="box1" style="margin-right: 0;">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_39.png" alt="">
                                             </div>
                                         </div>
                                     </li>
                                     <li>
                                         <div class="product-box clearfix">
                                             <div class="box1">
                                                <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_32.png" alt="">
                                             </div>
                                             <div class="box1">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_32.png" alt="">
                                             </div>
                                             <div class="box1">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_32.png" alt="">
                                             </div>
                                             <div class="box1" style="margin-right: 0;">
                                                 <img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_39.png" alt="">
                                             </div>
                                         </div>
                                     </li>
                                 </ul>
                             </div>
                             <a href="" target="_blank" class="learnMore">查看更多</a>
                          </div>
                     </div>
                    <h1 class="title">新闻动态</h1>
                    <div class="nsbox2 clearfix">
                        <dl class="nss">
                            <dt class="dtitle"><a href="" title="80年前，PRL为何拒绝了爱因斯坦的引力波预测？" target="_blank">80年前，PRL为何拒绝了爱因斯坦的引力波预</a></dt>
                            <dd class="miaoshu">人类首次探测到引力波的新闻，最近引爆微信朋友圈。不管是物理学家，还是文艺青年，想</dd>
                            <dd><a class="moo" href="" target="_blank">MORE+</a><div class="time"><span class="user">admin</span>/ 2016-07-15</div></dd>
                        </dl>
                        <dl class="nss">
                            <dt class="dtitle"><a href="" title="80年前，PRL为何拒绝了爱因斯坦的引力波预测？" target="_blank">80年前，PRL为何拒绝了爱因斯坦的引力波预</a></dt>
                            <dd class="miaoshu">人类首次探测到引力波的新闻，最近引爆微信朋友圈。不管是物理学家，还是文艺青年，想</dd>
                            <dd><a class="moo" href="" target="_blank">MORE+</a><div class="time"><span class="user">admin</span>/ 2016-07-15</div></dd>
                        </dl>
                        <dl class="nss" style="margin-right: 0">
                            <dt class="dtitle"><a href="" title="80年前，PRL为何拒绝了爱因斯坦的引力波预测？" target="_blank">80年前，PRL为何拒绝了爱因斯坦的引力波预</a></dt>
                            <dd class="miaoshu">人类首次探测到引力波的新闻，最近引爆微信朋友圈。不管是物理学家，还是文艺青年，想</dd>
                            <dd><a class="moo" href="" target="_blank">MORE+</a><div class="time"><span class="user">admin</span>/ 2016-07-15</div></dd>
                        </dl>
                        <dl class="nss">
                            <dt class="dtitle"><a href="" title="80年前，PRL为何拒绝了爱因斯坦的引力波预测？" target="_blank">80年前，PRL为何拒绝了爱因斯坦的引力波预</a></dt>
                            <dd class="miaoshu">人类首次探测到引力波的新闻，最近引爆微信朋友圈。不管是物理学家，还是文艺青年，想</dd>
                            <dd><a class="moo" href="" target="_blank">MORE+</a><div class="time"><span class="user">admin</span>/ 2016-07-15</div></dd>
                        </dl>
                        <dl class="nss">
                            <dt class="dtitle"><a href="" title="80年前，PRL为何拒绝了爱因斯坦的引力波预测？" target="_blank">80年前，PRL为何拒绝了爱因斯坦的引力波预</a></dt>
                            <dd class="miaoshu">人类首次探测到引力波的新闻，最近引爆微信朋友圈。不管是物理学家，还是文艺青年，想</dd>
                            <dd><a class="moo" href="" target="_blank">MORE+</a><div class="time"><span class="user">admin</span>/ 2016-07-15</div></dd>
                        </dl>
                        <dl class="nss" style="margin-right: 0">
                            <dt class="dtitle"><a href="" title="80年前，PRL为何拒绝了爱因斯坦的引力波预测？" target="_blank">80年前，PRL为何拒绝了爱因斯坦的引力波预</a></dt>
                            <dd class="miaoshu">人类首次探测到引力波的新闻，最近引爆微信朋友圈。不管是物理学家，还是文艺青年，想</dd>
                            <dd><a class="moo" href="" target="_blank">MORE+</a><div class="time"><span class="user">admin</span>/ 2016-07-15</div></dd>
                        </dl>

                    </div>
                    <div class="exampleBox3">
                        <h1 class="title">客户案例</h1>
                        <div class="box3pic">
                            <div class="box">
                                <span class="prev"></span>
                                <div>
                                    <dl id="roll" class="clearfix">
                                        <dd><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_42.png"/></dd>
                                        <dd><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_44.png"/></dd>
                                        <dd><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_46.png"/></dd>
                                        <dd><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_48.png"/></dd>
                                        <dd><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_50.png"/></dd>
                                        <dd><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_42.png"/></dd>
                                        <dd><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_44.png"/></dd>
                                        <dd><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_46.png"/></dd>
                                        <dd><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_48.png"/></dd>
                                        <dd><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/index_50.png"/></dd>
                                    </dl>
                                </div>
                                <span class="next"></span>
                            </div>
                        </div>

                    </div>
                    <div class="prandBox">
                         <h1 class="title">合作品牌</h1>
                         <ul class="clearfix">
                             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/pplogo1.png" alt=""></a></li>
                             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/pplogo2.png" alt=""></a></li>
                             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/pplogo3.png" alt=""></a></li>
                             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/pplogo4.png" alt=""></a></li>
                             <li><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/pplogo5.png" alt=""></a></li>
                             <li style="margin-right: 0"><a href=""><img src="<?php echo ($config_siteurl); ?>statics/dianzi/images/pplogo6.png" alt=""></a></li>
                         </ul>
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
        $(".box").superSlider({
            prevBtn:     ".prev",//左按钮
            nextBtn:     ".next",//右按钮
            listCont:    "#roll",//滚动列表外层
            scrollWhere: "prev",//自动滚动方向next
            delayTime:   2000,//自动轮播时间间隔
            speed:       300,//滚动速度
            amount:      1,//单次滚动数量
            showNum:     6,//显示数量
            autoPlay:    true//自动播放
        });

    })
</script>