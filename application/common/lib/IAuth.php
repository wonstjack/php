<?php
/**
 * Created by PhpStorm.
 * User: wonst
 * Date: 2019/4/10
 * Time: 11:46
 */

namespace app\common\lib;
class IAuth
{
    /**
     * 设置密码
     * @param $data
     */
    public static function setPassword($data)
    {
        return md5($data .config('app.password_pre_halt'));

    }
}