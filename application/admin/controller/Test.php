<?php

namespace app\admin\controller;

use think\Controller;

class Test extends Controller
{

    public function add($dir)
    {
        //定义一个数组
        $files = array();
        //检测是否存在文件
        if (is_dir($dir)) {
            //打开目录
            if ($handle = opendir($dir)) {
                //返回当前文件的条目
                while (($file = readdir($handle)) !== false) {
                    //去除特殊目录
                    if ($file != "." && $file != "..") {
                        //判断子目录是否还存在子目录
                        if (is_dir($dir . "/" . $file)) {
                            //递归调用本函数，再次获取目录
                            $files[$file] = $this->add($dir . "/" . $file);
                        } else {
                            //获取目录数组
                            $files[] = $dir . "/" . $file;
                        }
                    }
                }
                //关闭文件夹
                closedir($handle);
                //返回文件夹数组
                return $files;
            }
        }
    }
    public function test(){
        $a = $this->add("c:\php");
        var_export($a);
    }




}
