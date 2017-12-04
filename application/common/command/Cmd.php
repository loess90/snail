<?php
/**
 * Created by PhpStorm.
 * User: wangfeng
 * Date: 2017/12/1
 * Time: 下午5:17
 */

namespace app\common\command;


class Cmd
{
    public static function cliAsyncExecute($option = [])
    {
        if ($option) {
            if (!isset($option['entrance']) || !isset($option['file'])) return ;
            $bin = IS_CLI ? $_SERVER['_'] : config('php');
            if (!$bin)  throw new Exception('无法执行命令行模式');
            $cmd = $bin . ' ' . $option['entrance'] . ' ' . $option['file'] . ' > /dev/null 2>&1';
            if (isset($option['async']) && $option['async']) $cmd .= ' &';
            if (isset($option['debug']) && $option['debug']) die(($cmd));
            exec($cmd);
        }
    }
}