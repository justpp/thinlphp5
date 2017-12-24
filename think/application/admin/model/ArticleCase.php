<?php
/**
 * Created by PhpStorm.
 * User: 我
 * Date: 2017/12/12
 * Time: 9:53
 */

namespace app\admin\model;

use think\Model;

class ArticleCase extends Model
{
    protected $insert = [
        'addtime'
    ];
    protected $rule = [
        'title'
    ];
    protected $message = [
        'title.message' => '标题不能为空'
    ];
    protected $auto = [
        'content',
        'thumb'
    ];

    public function setAddtimeAttr($val)
    {
        return time();
    }

    public function setContentAttr($val, $data)
    {

        $detail = htmlspecialchars_decode($data['detail']);
        if ($val == '') {
            return cn_substr($data['detail'], 64);

        }
        return $val;
    }

    public function setThumbAttr($val, $data)
    {
        if ($val == '') {
            $detail = htmlspecialchars_decode($data['detail']);
            preg_match('/<img.*?src="(.*?)".*?>/is', $detail, $matchs);

            $imgurl = $matchs[1];
            $url = "";
            if ($imgurl) {
                $img = cUrl($imgurl);
                $dir = ROOT_PATH . 'public/uploads/image/' . date('Ymd') . '/';
                if (!is_dir($dir)) {
                    mkdir($dir, '0777', true);
                }
                $ext = pathinfo($imgurl, PATHINFO_EXTENSION);
                $newname = md5(date('Ymd') . rand(10000, 99999)) . '.' . $ext;
                $url = '/uploads/image/' . date('Ymd') . '/' . $newname;
                file_put_contents($dir . $newname, $img);

            }
            return $url;


        }
        return $val;
    }
}