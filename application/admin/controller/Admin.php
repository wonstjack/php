<?php

namespace app\admin\controller;

use think\Controller;

class Admin extends Controller
{
    /**
     * 新增后台用户
     * @return mixed
     */
    public function add()
    {
        //判断是否是POST提交
        if (request()->isPost()) {
            //打印提交的数据
            // dump(input('post.'));
            // halt() = dump();exit;
            $data = input('post.');
            //validate
            $validate = validate('AdminUser');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            $data['password'] = md5($data['password'] . 'fuck');
            $data['status'] = 1;

            try {
                $id = model('AdminUser')->add($data);
            } catch (\Exception $e) {
                $this->error($e->getMessage());
            }
            if ($id) {
                $this->success('id = ' . $id . '的用户新增成功！');
            } else {
                $this->error('GG!');
            }
        } else {
            return $this->fetch();
        }

    }

}
