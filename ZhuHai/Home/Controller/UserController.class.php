<?php
namespace Home\Controller;
use Think\Controller;
//use Home\Model\UserModel;
//use Think\Model;

class UserController extends Controller {
    public function index(){
          $this->display();
    }
    

    public function model(){
    	//（1）创建Model基类，传递User表,think_user
    	//$user = new Model('User','think_');
             //（2）某些小地方用别的数据库的表的时候
    	//$user = new Model('User','think_','mysql://root:@localhost/thinkphp');
    	//（3）用M表示Model时可以不用导入Model文件
    	//$user = M('User');
    	//（4）模型类操作数据库表
    	//$user = new UserModel();
             //（5）实例化模型类，免去引入命名空间等操作
             //$user = D('User');
             //（6）跨模块实例化
             //$user = D('Admin/User');
             //var_dump($user->select());

             //（7）原生实例化
             //$user = M();
             //var_dump($user->query("SELECT*FROM think_user WHERE user='蜡笔小新'"));

             //（8）字段缓存: index.php 中关闭开发模式

             $user = M('User');
             $map['id'] = array('eq','2');
             //$map['user'] = array('lick','%小%');
             var_dump($user->where($map)->select());
    }

}