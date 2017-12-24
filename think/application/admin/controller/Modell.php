<?php

/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/14
 * Time: 19:42
 */

namespace app\admin\controller;

use app\admin\model\Models;
use think\Db;

class Modell extends Base
{
    public function index()
    {
        $list = model('Models')->order('addtime desc')->select();
        $this->assign('list', $list);
        return $this->fetch();
    }

    public function add()
    {
        if ($this->request->isPost()) {
            $data = input('post.');
            $validate = validate('Models');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }

            $model = new Models();
            $rs = $model->save($data);
            //模型添加成功，对应的数据库添加一张表 news=>tp_article_news 主键id
            if ($rs) {
                $prefix = config('database.prefix');
                $table = $prefix . 'article_' . $model->name;
                $sql = "create table {$table}(
                     id int(10) primary key auto_increment
                    )";
                Db::execute($sql);
                $this->success('添加模型成功，跳转列表页', 'index');
            } else {
                $this->error('添加模型失败');
            }
        } else {
            return $this->fetch();
        }
    }

    public function del($id)
    {
        //删除模型记录并删除对应数据表
        $model = \app\admin\model\Models::get($id);
        //删除数据表
        $table = config('database.prefix') . 'article_' . $model->name;
        $sql = "drop table {$table}";
        Db::execute($sql);
        //删除module记录
        $rs = $model->delete();
        if ($rs) {
            $this->success('删除模型成功');
        } else {
            $this->error('删除模型失败');
        }
    }

    public function fields($id)
    {
        $info = model('Models')->find($id);

        $this->assign('info', $info);
        return $this->fetch();
    }

    public function addField($mid)
    {
        if ($this->request->isPost()) {
            //dump(input('post.'));
            $model = \app\admin\model\Models::get($mid);
            $name = input('post.name');//字段名
            $comment = input('post.detail');//提示文字
            $type = input('post.type') != 'text' ? input('post.type') . '(' . input('post.length') . ')' : input('post.type');
            $isNull = input('post.isnull');
            //添加module中fields字段
            //$fields=$model->fields;
            if ($model->field == '') {
                $model->field = [];
            }
            $data = [
                'field' => array_merge($model->field, [$name => input('post.')])
            ];
            /*echo '<pre>';
            print_r($fields);
            print_r($data);
            echo '</pre>';exit;*/
            $rs = $model->save($data);
            //找到对应的数据表添加
            if ($rs) {
                $table = config('database.prefix') . 'article_' . $model->name;
                $sql = "alter table {$table} add {$name} {$type} {$isNull};";
                Db::execute($sql);
                $this->success('添加模型字段成功', url('fields', ['id' => $mid]));
            } else {
                $this->error('添加模型字段失败', url('fields', ['id' => $mid]));
            }

        } else {
            return $this->fetch();
        }

    }

    public function modify($id)
    {

        $model = \app\admin\model\Models::get($id);

        if ($this->request->isPost()) {
            $oldTable = config('database.prefix') . 'article_' . $model->name;
            //修改module记录
            $data = input('post.');

            $rs = $model->save($data);
            if ($rs) {
                //修改表名
                $newTable = config('database.prefix') . 'article_' . $model->name;
                $sql = "alter table {$oldTable} rename {$newTable}";
                Db::execute($sql);
                $this->success('修改模型成功', 'index');
            } else {
                $this->error('修改模型失败', 'index');
            }
        } else {
            $this->assign('info', $model);
            return $this->fetch();
        }
    }

    public function delfie($name, $field, $id)
    {

        $filed = Db::name('models')->field('field')->where('id', $id)->select();
        $cc = unserialize($filed[0]['field']);
        unset($cc[$field]);
        $vv = serialize($cc);
        Db::name('models')->where('id', $id)->setField('field', $vv);

        $re = "alter table cd_article_{$name} drop {$field}";
        $rs = Db::name($name)->query($re);
        if ($rs) {
            $this->success('删除成功');
        } else {
            $this->error('失败');
        }
    }

    public function modfie($name, $field, $id)
    {
        $model = \app\admin\model\Models::get($id);
        $ac = $name;
        $cc = $model['field'][$field]['name'];

        if ($this->request->isPost()) {
            $name = input('post.name');//字段名
            $comment = input('post.detail');//提示文字
            $type = input('post.type') != 'text' ? input('post.type') . '(' . input('post.length') . ')' : input('post.type');
            $isNull = input('post.isnull');
            //添加module中fields字段
            //$fields=$model->fields;
            if ($model->field == '') {
                $model->field = [];
            }
            $data = [
                'field' => array_merge($model->field, [$name => input('post.')])
            ];

            $rs = $model->save($data);
            //delete field
            $filed = Db::name('models')->field('field')->where('id', $id)->select();
            $cc = unserialize($filed[0]['field']);
            unset($cc[$field]);
            $vv = serialize($cc);
            Db::name('models')->where('id', $id)->setField('field', $vv);
            $re = "alter table cd_article_{$ac} drop {$field}";
            Db::name($name)->query($re);
            //找到对应的数据表添加
            if ($rs) {
                $table = config('database.prefix') . 'article_' . $model->name;
                $sql = "alter table {$table} add {$name} {$type} {$isNull};";
                Db::execute($sql);
                $this->success('修改模型字段成功', url('fields', ['id' => 4]));
            } else {
                $this->error('修改模型字段失败');
            }
        } else {
            $this->assign('info', $model['field'][$field]);

            return $this->fetch();
        }
    }

}