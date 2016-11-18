<?php if (!defined('SHUIPF_VERSION')) exit(); ?>
<div class="header">
         <div class="logo left"></div>
         <ul class="right nav">
           <li><a href="{$config_siteurl}" >首页</a></li>
           <content action="category" catid="0"  order="listorder ASC" >
            <volist name="data" id="vo">
                <li><a href="{$vo.url}">{$vo.catname}</a></li>
            </volist>
          </content>
         </ul>
</div>