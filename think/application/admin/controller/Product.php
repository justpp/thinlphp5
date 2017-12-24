<?php

/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/7
 * Time: 16:49
 */

namespace app\admin\controller;

use app\admin\model\ArticleProduct;
use think\Db;

class Product extends Base
{
    public function index($cid = 0)
    {
        $condations = '';
        if ($cid) {
            //获得该分类及该分类子分类下面所有的文章
            $cids = model('Category')->getChildId($cid);
            $cids[] = $cid;
            $condations['a.cid'] = ['in', $cids];
        }
        $list = Db::name('articleProduct')->where('cid', $cid)->order('addtime')->paginate(5);

        return $this->fetch('', ['list' => $list]);
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            print_r($data);
            //dump($_FILES);//接受上传数据
            //处理上传
            //1.获取表单上传数据
            /* $file=request()->file('thumb');
             if($file){
                 $info=$file->move(ROOT_PATH.'public'.DS.'uploads');
                 if($info){
                     //获取上传图片扩展名
                     //echo $info->getExtension();
                     //保存路径
                    $data['thumb']=$info->getSaveName();
                     //获取上传文件名
                     //echo $info->getFilename();
                 }else{
                     $info->getError();
                 }
             }*/
            //验证表单数据合法性
            $validate = validate('Product');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $model = new ArticleProduct();
            $re = $model->save($data);
            if ($re) {
                $this->success('添加成功', url('product/index', ['cid' => 1]));

            } else {
                $this->error('添加失败');
            }
        } else {
            $cateOpt = model('Category')->getCateOpt(input('cid'));
            $this->assign('cateOpt', $cateOpt);
            return $this->fetch();

        }

    }

    public function del($id = '')
    {
        $rs = Db::name('articleProduct')->delete($id);
        if ($rs) {
            $this->success('删除成功', 'index');
        } else {
            $this->error('删除失败');
        }
    }

    public function modfi($id = '')
    {
        $mdo = ArticleProduct::get($id);
//        $mdo=new ArticleProduct();
//        $mdo->get($id);
        if (request()->isPost()) {
            $data = input('post.');
            $re = $mdo->save($data);
            if ($re) {
                $this->success('修改成功', 'index');
            } else {
                $this->error('修改失败');

            }
        } else {
            //显示页面
            //dump($info->imgs);
            $cateOpt = model('Category')->getCateOpt($mdo->cid);
            $this->assign('cateOpt', $cateOpt);
            $this->assign('mdo', $mdo);
            return $this->fetch();
        }

    }
}