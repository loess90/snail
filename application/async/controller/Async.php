<?php
/**
 * Created by PhpStorm.
 * User: wangfeng
 * Date: 2017/11/30
 * Time: 下午6:03
 */

namespace app\async\controller;

use app\common\command\cmd;
use think\Request;

class Async
{
    public function index()
    {
        //命令行和浏览器都可以执行
        $option = [
            'entrance' => ENTRANCE . DIRECTORY_SEPARATOR . BIND_MODULE . EXT, //模块入口文件
            'file' => '/async/wait', //控制/方法/参数/值
            'async' => true, //是否异步，true 是，false 否
            'debug' => false, //查看执行命令
        ];
        Cmd::cliAsyncExecute($option);
        $this->cmdExecute();
    }

    public function cmdExecute($option = [])
    {
        echo '我就看看你有没有等待，等待......';
    }

    public function wait()
    {
        file_put_contents(__DIR__.'/aa' . THINK_START_TIME. '.txt', '测试是否被执行');
        sleep(10);
    }
}