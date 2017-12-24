<?php
/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/11
 * Time: 19:25
 */

namespace app\admin\model;

use think\Model;

class ArticleNews extends Model
{
    protected $auto = [
        'description',
        'thumb'
    ];

    protected $rule = [
        'title'
    ];
    protected $message = [
        'title.message' => '标题不能为空'
    ];
    protected $insert = [
        'addtime'
    ];

    public function setAddtimeAttr($val)
    {
        return time();
    }

    public function setDescriptionAttr($val, $data)
    {
        $content = htmlspecialchars_decode($data['content']);
        if ($val == '') {
            return cn_substr($data['content'], 120);

        }
        return $val;
    }

    public function setThumbAttr($val, $data)
    {
        if ($val == '') {

            $content = htmlspecialchars_decode($data['content']);
            $cd = preg_match('/<img.*?src="(.*?)".*?>/is', $content, $matchs);
            if ($cd) {
                $imgurl = $matchs[1];


                $url = '';
                if ($imgurl) {
                    $img = cUrl($imgurl);
                    $dir = ROOT_PATH . 'public/uploads/image/' . date('Ymd') . '/';
                    if (!is_dir($dir)) {
                        mkdir($dir, '0777', true);
                    }
                    $ext = pathinfo($imgurl, PATHINFO_EXTENSION);
                    $newFile = md5(time() . rand(10000, 99999)) . 'jpg';
                    $url = '/uploads/image/' . date('Ymd') . '/' . $newFile;
                    file_put_contents($dir . $newFile, $img);
                }
                return $url;
            }
        }
        return $val;
    }
}