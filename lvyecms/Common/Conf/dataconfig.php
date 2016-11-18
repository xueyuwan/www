<?php

// +----------------------------------------------------------------------
// | LvyeCMS
// +----------------------------------------------------------------------
// | Copyright (c) 2012-2014 http://www.lvyecms.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: 旅烨集团 <web@alvye.cn>
// +----------------------------------------------------------------------
return array(
    /* 数据库设置 */
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => '127.0.0.1', // 服务器地址
    'DB_NAME' => 'lvyecms', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => 'root', // 密码
    'DB_PORT' => '3306', // 端口
    'DB_PREFIX' => 'lvyecms_', // 数据库表前缀
    'DB_DEBUG' => false,

    /* 站点安全设置 */
    "AUTHCODE" => 'qVGBSFyffmIN3pYe0W', //密钥

    /* Cookie设置 */
    "COOKIE_PREFIX" => 'gWd_', //Cookie前缀

    /* 数据缓存设置 */
    'DATA_CACHE_PREFIX' => 'Gbv_', // 缓存前缀
);
