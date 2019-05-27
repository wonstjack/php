<?php
/**
 * Created by PhpStorm.
 * User: wonst
 * Date: 2019/4/10
 * Time: 11:46
 */

namespace app\common\lib;
//引入鉴权类
use Qiniu\Auth;
//引入上传类
use Qiniu\Storage\UploadManager;

/**
 * 七六图片基础类
 * @param $data
 */
class Upload
{

    /*
     * 图片上传类
     * */
    public static function image()
    {

        if (empty($_FILES['file']['tmp_name'])) {
            exception('上传的图片不合法！', 404);
        }
        //要上传的文件
        $file = $_FILES['file']['tmp_name'];
        $ext = explode('.',$_FILES['file']['name']);
        $ext = $ext['1'];
        $config = config('qiniu');
        //构建鉴权对象
        $auth = new Auth($config['ak'],$config['sk']);
        //生成上传的token
        $auth->uploadToken($config['bucket']);
        //上传到七牛后保存的文件名
        $key = date('y')."/".date('m')."/".substr(md5($file),0,5).
            date('YmdHis').rand(0,9999).'.'.$ext;
        print_r($key);

    }
}