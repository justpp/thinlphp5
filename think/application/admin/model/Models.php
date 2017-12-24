<?php
/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/14
 * Time: 20:16
 */

namespace app\admin\model;

use think\Model;

class Models extends Model
{
    protected $type = [
        'field' => 'serialize'
    ];
    protected $insert = [
        'addtime'
    ];

    public function setAddtimeAttr($val)
    {
        return time();
    }
}