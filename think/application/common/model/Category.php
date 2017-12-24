<?php

namespace app\common\model;

use think\Model;

class Category extends Model
{
    protected $insert = [
        'addtime'
    ];

    public function setAddtimeAttr($val)
    {
        return time();
    }

    //获取分类表格
    public function getCateTree()
    {
        $cates = \think\Db::name('Category')
            ->alias('a')
            ->field('a.id,a.cname as name,a.pid as parent_id,a.status,a.sort,b.detail as mtitle,b.name as mname')
            ->join('__MODELS__ b', 'a.mid=b.id')
            ->order('a.sort,a.addtime desc')
            ->select();
        $cateTr = '';
        if ($cates) {
            foreach ($cates as &$c) {
                $c['addbtn'] = url('add', ['pid' => $c['id']]);
                $c['artbtn'] = url($c['mname'] . '/index', ['cid' => $c['id']]);
                $c['modifybtn'] = url('modfi', ['id' => $c['id']]);
                if ($c['status'] == 1) {
                    $c['showbtn'] = "<a href='javascript:;' class='btn btn-minier btn-success btn-show' data-status='1' data-id='{$c['id']}'><i class='fa fa-eye'></i> 显示</a>";
                } else {
                    $c['showbtn'] = "<a href='javascript:;' class='btn btn-minier btn-default btn-show' data-status='0' data-id='{$c['id']}'><i class='fa fa-eye-slash'></i> 隐藏</a>";
                }
            }
            $tree = new \tree\Tree($cates);
            $tree->icon = array('│', '└─', '└─');
            $tree->nbsp = "&nbsp;&nbsp;&nbsp;&nbsp;";
            $tpl = "<tr>
                <td>
                    <label class='position-relative'>
                        <input type='checkbox' class='ace'>
                        <span class='lbl'></span>
                    </label>
                </td>
                <td>\$spacer\$name(ID:\$id)</td>
                <td>\$mtitle</td>
                <td><input type='text' name='sort' data-id='\$id' value='\$sort' size='5'></td>
                <td>\$showbtn</td>
                <td>
                    <a href='\$addbtn'>添加子分类</a> |
                    <a href='\$artbtn'>文章</a> |
                    <a href='\$modifybtn'>修改</a> |
                    <a href=''>删除</a>
                </td>
            </tr>";
            $cateTr = $tree->get_tree(0, $tpl);
        }
        return $cateTr;
    }

    //获取分类option
    public function getCateOpt($sid = 0)
    {
        $cates = \think\Db::name('Category')->field('id,cname as name,pid as parent_id')->order('sort,addtime desc')->select();
        $tree = new \tree\Tree($cates);
        $tree->icon = array('│', '├─', '└─');
        $tree->nbsp = "&nbsp;&nbsp;&nbsp;&nbsp;";
        $tpl = "<option value=\$id \$selected>\$spacer\$name</option>";
        $cateOpt = $tree->get_tree(0, $tpl, $sid);
        return $cateOpt;
    }

    //获取分类的所有子分类(递归)
    public function getChildId($pid)
    {
        global $cids;
        $list = $this->where('pid', $pid)->field('id')->select();
        foreach ($list as $v) {
            $cids[] = $v['id'];//6 7
            /*$list2=$this->where('pid',$v['id'])->field('id')->select();
            foreach($list2 as $vv){
                $cids[]=$vv['id'];
            }*/
            $this->getChildId($v['id']);
        }
        return $cids;
    }

    //获得分类的所有子分类
    public function getChilds($pid)
    {
        $cate = Db::name('Category')->field('id,cname as name,pid as parent_id')->select();
        $tree = new \tree\Tree($cate);
        $childs = $tree->get_all_childids($pid);
        return $childs;
    }
}