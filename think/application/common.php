<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
//截取中文字符串
function cn_substr($str, $len = 20, $houzui = '...')
{
    if (mb_strlen(strip_tags($str), 'utf-8') > $len) {
        $str = mb_substr(strip_tags($str), 0, $len, 'utf-8') . $houzui;
    }
    return $str;
}

/**
 * [cUrl cURL(支持HTTP/HTTPS，GET/POST)]
 * @param     [string]     $url    [请求地址]
 * @param     [Array]      $header [HTTP Request headers array('Content-Type'=>'application/x-www-form-urlencoded')]
 * @param     [Array]      $data   [参数数据 array('name'=>'value')]
 * @param     [string]     $type   [返回数据类型，默认是string]
 * @return    [type]               [如果服务器返回xml则返回xml，不然则返回json]
 */
function cUrl($url, $header = null, $data = null, $type = 'string')
{
    //初始化curl
    $curl = curl_init();
    //设置cURL传输选项
    if (is_array($header)) {
        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//不直接输出打印
    curl_setopt($curl, CURLOPT_URL, $url);//设置请求路径
    //https请求添加这两句话，跳过证书验证
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);

    if (!empty($data)) {//post方式
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    //获取采集结果
    $output = curl_exec($curl);
    //关闭cURL链接
    curl_close($curl);

    if ($type == 'json') {
        //解析json
        $json = json_decode($output, true);
        return $json;
    } elseif ($type == 'xml') {
        #验证xml
        libxml_disable_entity_loader(true);
        #解析xml
        $xml = simplexml_load_string($output, 'SimpleXMLElement', LIBXML_NOCDATA);
        return $xml;
    } else {
        return $output;
    }

}

//图片剪切
function thumb($img, $w = 300, $h = 300, $type = 3)
{
    //传递过来的是网络图片路径/uploads/image/20171215/3a95e3bfea4a3d8f97fb9c3c2136834b.jpg
    $img_dir = ROOT_PATH . 'public' . $img;//拼接盘符路径

    //获取文件名，不带后缀：3a95e3bfea4a3d8f97fb9c3c2136834b
    $fileName = pathinfo($img, PATHINFO_FILENAME);

    /*拼接新文件中：/uploads/image/20171215/3a95e3bfea4a3d8f97fb9c3c2136834b_thumb_300_300.jpg*/
    $newName = str_replace($fileName, $fileName . "_thumb_{$w}_{$h}", $img);
    //判断缩略图是否存在，如果存在直接返回，如果不存在剪切
    if (!is_file(ROOT_PATH . 'public' . $newName)) {
        if (is_file($img_dir)) {

            $image = \think\Image::open($img_dir);//打开图片所在盘符路径
            $image->thumb($w, $h, $type)->save(ROOT_PATH . 'public' . $newName);//保存新的文件名 到盘符
            return $newName;//返回新的访问路径
        } else {
            return $img;
        }
    } else {
        return $newName;
    }
}

function getFilesByDir($dir)
{
    //读取目录
    //$vdir=APP_PATH.'index/view/cate';
    $files = scandir($dir);
    foreach ($files as $k => $f) {
        if ($f == '.' || $f == '..') {
            unset($files[$k]);
        }
    }
    return $files;
}