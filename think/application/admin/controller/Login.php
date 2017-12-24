<?php
/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/6
 * Time: 14:30
 */

namespace app\admin\controller;

use think\Controller;
use think\Db;

class Login extends Controller
{
    public function index()
    {

        return $this->fetch();
    }

    public function dologin()
    {
        if (request()->isPost()) {
            $username = input('post.username');
            $password = input('post.password');
            $verify = input('post.verc');

//            if($username=='' || $password==''){
//                $this->error('用户名或密码不能为空');
//            }
//            if(!captcha_check($verify)){
//                $this->error('验证码错误');
//            };
            $info = Db::name('admin')->where('username', $username)->find();
            if (!$info) {
                $this->error('用户名不存在');
            }
            if ($info['password'] != md5($password)) {
                $this->error('密码错误');
            }
            session('userId', $info['id']);
            session('userName', $info['username']);
            $this->redirect('index/index');
        } else {
            $this->error('非法操作', 'login');
        }


    }

    public function logout()
    {
        session(null);
        $this->redirect('login/index');
    }


}