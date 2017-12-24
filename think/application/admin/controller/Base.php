<?php
/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/7
 * Time: 10:09
 */

namespace app\admin\controller;

use think\Controller;

class Base extends Controller
{
    public function _initialize()
    {
        if (!session('userName')) {
            $this->error('快登陆啊李狗蛋', 'login/index');
        }
    }
}