<?php

namespace app\index\controller;

class Cate extends Base
{
    public function index($cid)
    {
        //根据不同的频道进入不同的模板页面
        $cinfo = model('Category')->getInfoByCid($cid);
        if ($cinfo['tpl'] != '') {
            $tpl = pathinfo($cinfo['tpl'], PATHINFO_FILENAME);
        } else {
            $tpl = $cinfo['mname'];
        }

        //判读如果是列表，查询列表信息
        if ($cinfo['type'] == 1) {
            $arclist = model('Category')->getArtlist($cid, 'id,title,thumb,description,addtime,cid', 2);
            $this->assign('arclist', $arclist);
            $this->assign('pages', $arclist->render());
        }

        $this->assign('cinfo', $cinfo);
        return $this->fetch($tpl);
    }
}