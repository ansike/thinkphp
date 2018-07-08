<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        \think\Config::parse(APP_PATH.'../config/newconf/conf.ini','ini');
        dump(\think\Config::get());
        // return 'phps';
    }

    public function hello()
    {
        return $this->fetch();
    }
}
