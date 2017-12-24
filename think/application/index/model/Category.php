<?php

namespace app\index\model;

use think\Model;

class Category extends Model
{
    /*查询分类及子分类下面的文章
    * $cid:分类id
    * $rows:文章数量
    * */
    public function getArtlist($cid, $field = '*', $page = '6', $order = 'addtime desc')
    {
        //查询分类及子分类的文章
        $cids = model('\app\common\model\Category')->getChildId($cid);
        $cids[] = $cid;
        //查询分类所在频道
        $minfo = model('Category')->alias('a')->field('b.name as mname')->join('__MODELS__ b', 'a.mid=b.id')->where('a.id', $cid)->find();
        $mName = 'Article' . ucfirst($minfo->mname);
        $condition = ['cid' => ['in', $cids]];
        //buildSql();显示拼接的sql语句不运行
        $list = \think\Db::name($mName)->field($field)->where($condition)->order($order)->paginate($page);
        return $list;
    }

    //根据cid查询分类信息
    public function getInfoByCid($cid)
    {
        $minfo = model('Category')->alias('a')->field('a.*,b.name as mname')->join('__MODELS__ b', 'a.mid=b.id')->where('a.id', $cid)->find();
        return $minfo;
    }
}