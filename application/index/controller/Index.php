<?php
namespace app\index\controller;
use think\Controller;
use think\Config;
class Index extends Controller
{
    public function index()
    {
        //读取其他位置的配置文件
        // \think\Config::parse(APP_PATH.'../config/newconf/conf.ini','ini');
        $conf = 'twice.params';
        $isExist = Config::has($conf);
        if($isExist){
            dump(Config::get($conf));
        }else{
            return $conf.'配置项不存在';
        }
        // dump(Config::get('twice.param'));
        // dump(\think\Config::has('twice.param'));
        // dump(config('?app_status'));
        // return 'phps';
    }

    public function hello()
    {
        return $this->fetch();
    }
}
