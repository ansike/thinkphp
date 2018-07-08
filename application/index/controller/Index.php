<?php
namespace app\index\controller;
use think\Controller;
class Index extends Controller
{
    public function index()
    {
        dump(\think\Config::get());
        // return 'phps';
    }

    public function hello()
    {
        return $this->fetch();
    }
}
