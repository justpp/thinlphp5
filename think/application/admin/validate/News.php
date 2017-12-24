<?php
/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/11
 * Time: 19:46
 */

namespace app\admin\validate;

use think\Validate;

class News extends Validate
{
    protected $rule = [
        'title' => 'require'
    ];
    protected $message = [
        'title.message' => '标题不能为空'
    ];
}