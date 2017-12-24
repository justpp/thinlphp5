<?php
/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/7
 * Time: 20:42
 */

namespace app\admin\model;

use think\Model;

class ArticleProduct extends Model
{
    protected $type = [
        'imgs' => 'serialize'
    ];
    protected $insert = [
        'addtime'
    ];

    public function setAddtimeAttr($val)
    {
        return time();
    }
}