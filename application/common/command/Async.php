<?php
namespace app\common\command;

use think\Console;
use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\console\input\Argument;
use think\console\input\Option;

/**
 * Created by PhpStorm.
 * User: wangfeng
 * Date: 2017/12/1
 * Time: 上午10:10
 */
class Async extends Command
{
    protected function configure()
    {
        $this->setName('async')->setDescription('Here is the remark ');
        //设置参数
        $this->addArgument('file', Argument::REQUIRED); //必传参数
        $this->addArgument('param', Argument::REQUIRED);//可选参数
    }

    protected function execute(Input $input, Output $output)
    {
//        exec('php -v > /dev/null 2>&1 &', $result);
//        $output->writeln($result);
        $async = new \app\async\controller\Async();
        $result = $async->cmdExecute();
//        $output->writeln($result);

//        Console::call('php -v');
//        var_dump($input->getArguments());
//        $output->writeln("TestCommand:");
//        sleep(10);
//        $output->writeln('输出结束........');
    }
}