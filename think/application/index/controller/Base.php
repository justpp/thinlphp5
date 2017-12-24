<?php

namespace app\index\controller;

use think\Controller;
use think\Db;

class Base extends Controller
{
    public function _initialize()
    {
        parent::_initialize();
        //查询分类导航
        $navlist = Db::name('Category')->field('id,cname,enname')->where(['pid' => 0, 'status' => 1])->order('sort,addtime desc')->select();
        $this->assign('navlist', $navlist);
    }
}