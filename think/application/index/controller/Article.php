<?php

namespace app\index\controller;
class Article extends Base
{
    public function index($id, $cid)
    {
        //查询文章
        $cinfo = model('Category')->getInfoByCid($cid);
        $table = 'Article' . ucfirst($cinfo['mname']);
        $arcinfo = model($table)->find($id);
        //显示模板
        $tpl = 'article_' . $cinfo['mname'];
        //上一篇(当前日期前一个)
        $prev = model($table)->field('id,title,cid')->where('addtime', 'lt', $arcinfo['addtime'])->where('cid', $cid)->find();
        //下一篇
        $next = model($table)->field('id,title,cid')->where('addtime', 'gt', $arcinfo['addtime'])->where('cid', $cid)->find();


        $this->assign('arcinfo', $arcinfo);
        $this->assign('prev', $prev);
        $this->assign('next', $next);
        return $this->fetch($tpl);
    }
}