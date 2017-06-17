<?php
namespace Admin\Controller;
use Think\Controller;

class InfoController extends Controller {
    public function info()
    {
        $User=M('user');           
        $account= session('account');

         $tj="account='{$account}'";           
         $image=$User->where($tj)->find(); 
         $this->assign('data',$image);
        // 实例化User模型
        if (IS_POST){
             if(!empty($_POST['uname'])){
                 $data['username'] = $_POST['uname'];
               $data['password'] = $_POST['pwd'];
               $User->where($tj)->setField($data); // 根据条件更新记录
               $this->success(U('Info/info'));
            }    
         }
         else{
            $this->display();
         }
    }

    public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->saveName = '';
        $upload->rootPath  =  './Public/Images/User/'; // 设置附件上传根目录
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->replace = true;
        $upload->autoSub  = false;

        // 取得成功上传的文件信息
            $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 
            $model = M('user');
             // 保存当前数据对象
            $data['user_image'] = $info['photo']['name'];
            $data['create_time'] = NOW_TIME;
            $account= session('account');
            $tj="account='{$account}'";
            $model->where($tj)->setField($data); // 根据条件更新记录
            $this->success(U('Info/info'));
        }
    }


}