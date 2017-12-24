<?php

namespace app\admin\controller;

class Index extends Base
{
    public function index()
    {
        if (!session('userId')) {
            $this->error('请登录啊李狗蛋', 'login/index');

        }
        return $this->fetch();
    }
}
