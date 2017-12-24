<?php
/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/6
 * Time: 19:52
 */

namespace app\admin\controller;

use think\Db;

class Admin extends Base
{
    public function index()
    {

        if (request()->isPost()) {
            $username = input('username');
            $word = md5(input('word'));
            $pword = md5(input('pword'));
            $rpword = md5(input('rpword'));
            $data = ['username' => $username];
            $info = Db::name('admin')->where('username', $username)->find();
            if ($word != $info['password']) {
                $this->error('密码不正确');
            }
            if ($pword == '' || $rpword == '' || $word == '') {
                $this->error('密码不能为空');
            }
            if ($pword != $rpword) {
                $this->error('密码不一致');
            }

            $info = Db::name('admin')->where('username', $username)->find();
            if (md5($pword) == $info['password']) {
                $this->error('新密码不能与历史密码相同');
            }
            $data = ['password' => $pword];
            $id = session('userId');
            $pw = Db::name('admin')->where('id', $id)->update($data);
            if ($pw) {
                session(null);
                $this->success('修改成功', 'login/index');
            }
        } else {
            return $this->fetch();
        }

    }
}