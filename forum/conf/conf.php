<?php
return array (
  'db' => 
  array (
    'type' => 'mysql',
    'mysql' => 
    array (
      'master' => 
      array (
        'host' => '192.168.1.179',
        'user' => 'root',
        'password' => 'Llc123?123',
        'name' => 'myForum',
        'tablepre' => 'bbs_',
        'charset' => 'utf8',
        'engine' => 'innodb',
      ),
      'slaves' => 
      array (
      ),
    ),
    'pdo_mysql' => 
    array (
      'master' => 
      array (
        'host' => '192.168.1.179',
        'user' => 'root',
        'password' => 'Llc123?123',
        'name' => 'myForum',
        'tablepre' => 'bbs_',
        'charset' => 'utf8',
        'engine' => 'innodb',
      ),
      'slaves' => 
      array (
      ),
    ),
  ),
  'cache' => 
  array (
    'enable' => true,
    'type' => 'mysql',
    'memcached' => 
    array (
      'host' => 'localhost',
      'port' => '11211',
      'cachepre' => 'bbs_',
    ),
    'redis' => 
    array (
      'host' => 'localhost',
      'port' => '6379',
      'cachepre' => 'bbs_',
    ),
    'xcache' => 
    array (
      'cachepre' => 'bbs_',
    ),
    'yac' => 
    array (
      'cachepre' => 'bbs_',
    ),
    'apc' => 
    array (
      'cachepre' => 'bbs_',
    ),
    'mysql' => 
    array (
      'cachepre' => 'bbs_',
    ),
  ),
  'tmp_path' => './tmp/',
  'log_path' => './log/',
  'view_url' => 'view/',
  'upload_url' => 'upload/',
  'upload_path' => './upload/',
  'sitename' => '冒泡圈',
  'sitebrief' => '他们都说打出十五字才是最标准的。。。',
  'timezone' => 'Asia/Shanghai',
  'lang' => 'zh-cn',
  'runlevel' => 5,
  'runlevel_reason' => 'The site is under maintenance, please visit later.',
  'cookie_domain' => '',
  'cookie_path' => '',
  'auth_key' => 'G6B5E8QXYFKZBR5TYJG7BPNHSWVNATNSBXAYK7PNTVVREMBT6QH5CFZ9DCHME3T4',
  'pagesize' => 20,
  'postlist_pagesize' => 100,
  'cache_thread_list_pages' => 10,
  'online_update_span' => 120,
  'online_hold_time' => 3600,
  'session_delay_update' => 0,
  'upload_image_width' => 927,
  'order_default' => 'lastpid',
  'attach_dir_save_rule' => 'Ym',
  'update_views_on' => 1,
  'user_create_email_on' => 0,
  'user_resetpw_on' => 1,
  'admin_bind_ip' => 0,
  'cdn_on' => 0,
  'url_rewrite_on' => 0,
  'disabled_plugin' => 0,
  'version' => '4.0.3',
  'static_version' => '?1.0',
  'installed' => 1,
);
?>