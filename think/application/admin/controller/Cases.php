<?php

namespace app\admin\controller;

use app\admin\model\ArticleCase;
use think\Controller;
use think\Db;

class Cases extends Controller
{
    public function index()
    {
        $list = Db::name('articleCase')->order('addtime')->paginate(3);
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $validate = validate('News');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $md = new ArticleCase();
            $re = $md->save($data);
            if ($re) {
                $this->success('成功', 'index');
            } else {
                $this->error('添加失败');
            }

        }
        return $this->fetch();
    }

    public function modfi($id = '')
    {
        // dump($id);exit;
        $list = ArticleCase::get($id);
        // dump($list);exit;
        if (request()->isPost()) {
            $data = input('post.');
            dump($data);
            $rs = $list->save($data);
            if ($rs) {
                $this->success('修改成功', 'index');
            } else {
                $this->error('修改失败');
            }

        } else {
            $this->assign('list', $list);
            return $this->fetch();
        }

    }

    public function del($id = '')
    {
        $re = ArticleCase::destroy($id);
        if ($re) {
            $this->success('成功');

        } else {
            $this->error('sb');
        }
    }

}