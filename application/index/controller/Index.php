<?php
namespace app\index\controller;
use think\Controller;
use think\Config;
class Index extends Controller
{
    public function index()
    {
        //类方法
        // Config::set('site_common','hello');
        // $confs = [
        //     'site_common' => 'php中文网',
        //     'site_name' => 'www.php.cn'
        // ];
        // Config::set('twice',$confs);

        //助手函数
        // config('site_common','hello');
        // $confs = [
        //     'site_common' => 'php中文网',
        //     'site_name' => 'www.php.cn'
        // ];
        // config('twice',$confs);
        dump(Config::get());
    }

    public function hello()
    {
        return $this->fetch();
    }
}
