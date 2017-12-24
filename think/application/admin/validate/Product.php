<?php
/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/7
 * Time: 20:29
 */

namespace app\admin\validate;

use think\Validate;

class Product extends Validate
{
    protected $rule = [
        'title' => 'require'
    ];
    protected $message = [
        'title.require' => '标题不能为空'
    ];
}