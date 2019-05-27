<?php

namespace app\admin\controller;

use think\Controller;

/**
 * 后台基础类库
 * Class Base
 * @package app\admin\controller
 */
class Base extends Controller
{
    /**
     * 初始化方法
     * @return mixed|void
     */
    public function _initialize()
    {
        //判断用户是否登录
        $isLogin = $this->isLogin();
        if (!$isLogin) {
            return $this->error('您尚未登陆！', 'login/index');
        }
    }

    /**
     * 判断用户是否登录
     */
    public function isLogin()
    {
        $user = session(config('admin.session_user'), '', config('admin.session_user_scope'));
       // halt($user);
        if ($user && $user->id) {
            return true;
        }
        return false;
    }
}
