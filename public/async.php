<?php
/**
 * Created by PhpStorm.
 * User: wangfeng
 * Date: 2017/11/30
 * Time: 下午5:56
 */

// 定义应用目录
define('ENTRANCE', __DIR__);
define('APP_PATH', ENTRANCE . '/../application/');
define('BIND_MODULE', 'async');
// 加载框架引导文件
require __DIR__ . '/../thinkphp/start.php';