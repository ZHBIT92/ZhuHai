<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
      public function index(){
        $this->display();
      }

//登录
      public function login()
     {   
        //提取表单内容
        $account=$_POST["account"];
        $pwd =$_POST["pwd"];

        $where = array('account' => $account);

        $user = M('user')->where($where)->find();

        
        if (!$user || $user['password'] != $pwd) {
            $this->error('用户名或者密码不正确');
        }

        //登录成功写入SESSION并且跳转到首页
        session('account', $account);

        $this->success('正在登录...', U('Index/index'));
      }


//注册
      public function runRegis(){
            /*if (!$this->isPost()) {
                    halt('页面不存在');
             }*/
            if ($_SESSION['verify'] != ($_POST['verify'])) {
                  $this->error('验证码错误');
             }
             if ($_POST['pwd'] != $_POST['pwded']) {
                  $this->error('两次密码不一致');
             }

             //提取POST数据
             $data = array(
               'account' => $this->_post('account'),
               'password' => $this->_post('pwd', 'md5'),
               'registime' => $_SERVER['REQUEST_TIME'],
               'userinfo' => array(
                 'username' => $this->_post('username')
                 )
               );

             $id = D('UserRelation')->insert($data);
             if ($id) {
               //插入数据成功后把用户ID写SESSION
               session('uid', $id);

               //跳转至首页
               header('Content-Type:text/html;Charset=UTF-8');
               $this->success('正在登录...', U('Index/index'));
             } else {
               $this->error('注册失败，请重试...');
             }
  }

      public function verify(){
          $Verify =new \Think\Verify();
          // 设置验证码字符为纯数字
          $Verify->codeSet = '0123456789'; 
          $Verify->entry();
      }

      public function checkVerify($code, $id = ''){
          $config = array('reset'=>true,);
          $Verify =new \Think\Verify($config);

          return $verify->check($code,$id);
      }
}