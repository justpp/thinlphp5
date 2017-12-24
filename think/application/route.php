<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]' => [
        ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],


    //定义首页规则
    '/' => ['index/index', [], []],

    //定义文章规则
    'news/:id' => ['article/index?cid=3', [], ['id' => '\d+']],
    //'product/:id'=>['article/index?cid=1',[],['id'=>'\d+']],
    //'case/:id'=>['article/index?cid=2',[],['id'=>'\d+']],
    //定义列表规则
    'news' => 'cate/index?cid=3',
    'product' => 'cate/index?cid=1',
    'case' => 'cate/index?cid=2',
    'about' => 'cate/index?cid=4',
    'contact' => 'cate/index?cid=5',
];
