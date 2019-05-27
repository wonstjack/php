<?php
/**
 * Created by PhpStorm.
 * User: wonst
 * Date: 2019/4/9
 * Time: 13:27
 */
namespace app\common\model;
use think\Model;
class AdminUser extends Model{
    protected  $autoWriteTimestamp = true;
    /**
     * 新增
     * @param $data
     * @return mixed
     */
    public function add($data){
        if(!is_array($data)){
            exception('传递数据不合法！');
        }
        $this->allowField(true)->save($data);
        return $this->id;
    }
}