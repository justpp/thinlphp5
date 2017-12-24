<?php
/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/13
 * Time: 10:08
 */

namespace app\admin\validate;

use think\Validate;

class Article extends Validate
{
    protected $rule = [
        'cname' => 'require'
    ];
    protected $message = [
        'cname.message' => '分类名不能为空'
    ];
}