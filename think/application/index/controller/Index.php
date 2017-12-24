<?php

namespace app\index\controller;

class Index extends Base
{
    public function index()
    {
        //查询6条新闻
        //查询分类及子分类的文章
        /*$cids=model('Category')->getChildId(3);
        $cids[]=3;
        $condition=['cid'=>['in',$cids]];
        $newslist=model('ArticleNews')->field('id,title,thumb,description,addtime')->where($condition)->order('addtime desc')->limit(6)->select();*/

        //查询产品
        $prolist = model('Category')->getArtlist(1, 'id,title,thumb,content');
        $this->assign('prolist', $prolist);

        //查询新闻
        $newslist = model('Category')->getArtlist(3, 'id,title,thumb,description,addtime');
        $this->assign('newslist', $newslist);

        return $this->fetch();
    }
}
