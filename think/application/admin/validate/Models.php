<?php

namespace app\admin\validate;

use think\Validate;

class Models extends Validate
{
    protected $rule = [
        'name' => 'require|alphaDash|unique:models',
        'detail' => 'require',
    ];
    protected $message = [
        'name.require' => '模型名不能为空',
        'name.alphaDash' => '模型名必须是字母数字下划线',
        'name.unique' => '模型名已经存在',
        'title.require' => '模型说明不能为空'
    ];
}