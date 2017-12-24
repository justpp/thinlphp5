<?php
/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/11
 * Time: 19:28
 */

namespace app\admin\controller;

use app\admin\model\ArticleNews;
use think\Controller;


class News extends Controller
{
    public function index($cid = 0)
    {
        $condition = '';
        if ($cid) {
            //获得该分类及该分类子分类下面所有的文章
            $cids = model('Category')->getChildId($cid);
            $cids[] = $cid;
            $condition['a.cid'] = ['in', $cids];
        }
        $list = model('ArticleNews')->alias('a')->field('a.id,a.title,a.addtime,a.thumb,a.cid,a.description,a.content')->where($condition)->paginate(15);
        /*$list=Db::name('ArticleNews')->alias('a')
            ->field('a.id,a.title,a.addtime,a.thumb,c.cname')
            ->join('__CATEGORY__ c','a.cid=c.id')
            ->where($condition)->paginate(15);*/
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
            $md = new ArticleNews();
            $re = $md->save($data);
            if ($re) {
                $this->success('成功', url('product/index', ['cid' => 2]));
            } else {
                $this->error('添加失败');
            }

        }
        $cateOpt = model('Category')->getCateOpt(input('cid'));
        $this->assign('cateOpt', $cateOpt);
        return $this->fetch();
    }

    public function modfi($id = '')
    {
        // dump($id);exit;
        $list = ArticleNews::get($id);
        // dump($list);exit;
        if (request()->isPost()) {
            $data = input('post.');

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
        $re = ArticleNews::destroy($id);
        if ($re) {
            $this->success('成功');

        } else {
            $this->error('sb');
        }
    }
}