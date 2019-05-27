<?php

namespace app\admin\controller;

use think\Controller;
use think\Request;
use app\common\lib\Upload;
class Image extends Base
{
    /**
     * 本地服务器图片上传
     * @return mixed
     */
    public function upload0()
    {
        $file = Request::instance()->file('file');
        //把图片上传到指定的文件夹
        $info = $file->move('upload');
        if ($info && $info->getPathname()) {
            $data = [
                'status' => 1,
                'message' => 'OK',
                'data' => '/' . $info->getPathname(),
            ];
            echo json_encode($data);
        } else {
            echo json_encode(['status' => 0, 'message' => '失败！',]);
        }
    }

    /**
     * 七牛图片上传
     * @return mixed
     */
    public function upload()
    {
       $image =  Upload::image();
    }

}
