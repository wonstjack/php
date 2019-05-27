<?php
/**
 * Created by PhpStorm.
 * User: wonst
 * Date: 2019/4/9
 * Time: 13:15
 */
namespace app\common\validate;
use think\Validate;
class AdminUser extends Validate{
    protected $rule = [
        'username' => 'require|max:20',
        'password' => 'require|max:20',//必须有值，最大值为20
];
}