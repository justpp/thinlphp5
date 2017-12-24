<?php
/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/7
 * Time: 10:25
 */

namespace app\admin\controller;

use app\admin\model\Category;
use think\Db;

class Article extends Base
{
    public function index()
    {
//        $list=Db::name('category')->order('sort,addtime desc')->paginate(5);
//        $this->assign('list',$list);
        $catetr = model('category')->getCateTree();
        $this->assign('cateTr', $catetr);
        return $this->fetch();
    }

    public function add()
    {
        if ($this->request->isPost()) {
            $data = input('post.');
            //验证数据合法性
            $validate = validate('Article');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            //执行添加操作
            $rs = model('Category')->save($data);
            if ($rs) {
                $this->success('添加成功,跳转列表页', 'index');
            } else {
                $this->error('添加失败，继续添加');
            }
        } else {
            $pid = input('pid');
            $files = getFilesByDir(APP_PATH . 'index/view/cate');
            $this->assign('files', $files);
            //显示上级分类
            $cateOpt = model('Category')->getCateOpt($pid);
            $this->assign('cateOpt', $cateOpt);
            $mlist = model('Models')->field('id,detail,name')->select();
            $this->assign('mlist', $mlist);
            return $this->fetch();
        }
    }

    public function modfi($id)
    {
        $model = \app\common\model\Category::get($id);
        if ($this->request->isPost()) {
            $rs = $model->save(input('post.'));
            if ($rs) {
                $this->success('修改成功，跳转列表页', 'index');
            } else {
                $this->error('修改失败，请重新修改');
            }
        } else {
            $files = getFilesByDir(APP_PATH . 'index/view/cate');
            $this->assign('files', $files);

            $cateOpt = $model->getCateOpt($model->pid);
            $mlist = model('Models')->field('id,detail')->select();
            $this->assign('info', $model);
            $this->assign('cateOpt', $cateOpt);
            $this->assign('mlist', $mlist);
            return $this->fetch();
        }

    }

    public function del()
    {

    }

    //ajax排序
    public function sort()
    {
        if ($this->request->isAjax()) {
            $id = input('id');
            $sort = input('sort');
            $rs = Db::name('Category')->where('id', $id)->update(['sort' => $sort]);
            if ($rs) {
                echo json_encode(['status' => 1, 'msg' => '修改排序成功']);
                exit;
            } else {
                echo json_encode(['status' => 0, 'msg' => '修改排序失败']);
                exit;
            }
        }
    }

    //ajax修改状态
    public function status()
    {
        if ($this->request->isAjax()) {
            $id = input('id');
            $status = input('status') == 1 ? 0 : 1;
            $rs = Db::name('Category')->where('id', $id)->update(['status' => $status]);
            if ($rs) {
                return json(['state' => 1, 'msg' => '修改状态成功']);
            } else {
                return json(['status' => 0, 'msg' => '修改状态失败']);
            }
        }
    }

}