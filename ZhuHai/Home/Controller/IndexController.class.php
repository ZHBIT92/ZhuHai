<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    
    public function zh1(){
        $Data =M("tour");   //调用的数据表
        $id=5;                     //每页显示的记录数
        $result = showpage($Data,$tj,$id);   //用数组接受返回值
        $this->assign('tour',$result[0]);// 赋值数据集  
        $this->assign('page',$result[1]);// 赋值分页输出  
        $this->show(); // 输出模板 
    }
    public function zh2(){
        $Data =M("tour");   //调用的数据表
        $id=5;                     //每页显示的记录数
        $result = showpage($Data,$tj,$id);   //用数组接受返回值
        $this->assign('tour',$result[0]);// 赋值数据集  
        $this->assign('page',$result[1]);// 赋值分页输出  
        $this->show(); // 输出模板 
    }
    public function zh3(){
        $Data =M("tour");   //调用的数据表
        $id=5;                     //每页显示的记录数
        $result = showpage($Data,$tj,$id);   //用数组接受返回值
        $this->assign('tour',$result[0]);// 赋值数据集  
        $this->assign('page',$result[1]);// 赋值分页输出  
        $this->show(); // 输出模板 
    }
    public function zh4(){
        $Data =M("tour");   //调用的数据表
        $id=5;                     //每页显示的记录数
        $result = showpage($Data,$tj,$id);   //用数组接受返回值
        $this->assign('tour',$result[0]);// 赋值数据集  
        $this->assign('page',$result[1]);// 赋值分页输出  
        $this->show(); // 输出模板 
    }
    public function zh5(){
        $Data =M("tour");   //调用的数据表
        $id=5;                     //每页显示的记录数
        $result = showpage($Data,$tj,$id);   //用数组接受返回值
        $this->assign('tour',$result[0]);// 赋值数据集  
        $this->assign('page',$result[1]);// 赋值分页输出  
        $this->show(); // 输出模板 
    }
    
}