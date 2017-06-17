<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){ 
         $image=M('Image');                   
         $data=$image->order('create_time desc')->find();    //获取最后上传图片
         $this->assign('data',$data);
         $this->display();
    }

        public function upload(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->saveName = '';
        $upload->rootPath  =  './Public/Images/'; // 设置附件上传根目录
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->replace = true;
        $upload->autoSub  = false;

        // 取得成功上传的文件信息
            $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功 
            $model = M('image');
             // 保存当前数据对象
            $data['image'] = $info['photo']['name'];
            $data['create_time'] = NOW_TIME;
            $model->add($data);
            $this->success(U('Index/index'));
        }
    }

    public function b2()
    {
         $tj ="1=1";
         $no="";
         if(!empty($_GET["no"]));
         {
            $no = $_GET["no"];
            $tj = "Name like '%{$no}%'";
         }
         
        $Data =M("tour");
        $count= $Data->where($tj)->count(); // 查询满足要求的总记录数
        $Page= new \Think\Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数(3)

        $show= $Page->show();// 分页显示输出  
        // 进行分页数据查询  
        $list = $Data->where($tj)->limit($Page->firstRow.','.$Page->listRows)->select();  
        $this->assign('tour',$list);// 赋值数据集  
        $this->assign('page',$show);// 赋值分页输出  
        $this->assign('no',$no);
        $this->show(); // 输出模板 
    }

    public function add2()
    {
        // 实例化User模型
        if (IS_POST){
             if(!empty($_POST['city1'])){
                 $User = M("tour"); // 实例化User对象
                 $data['name'] = $_POST['city1'];
                 $data['city'] = $_POST['city2'];
                 if(!empty($_POST['city2'])){
                        $data['city'] = $_POST['city2'];
                  }
                 else{
                        $data['city'] = $_POST['city3'];
                  }
               $data['src'] = "sad";
               $data['text'] = $_POST['city4'];
               $User->add($data);
               $this->success(U('../Index/b2'));
            }
             else {
             $this->error('名称不能为空');
             }         
     }
     else{
             $this->error('非法请求');
         }
    }

    public function delete2()
    {
        /**/
        $Data =M("tour");
        $id = $_GET['id'];
        $Data->where("id=$id")->delete(); 
        $this->success(U('../Index/b2'));
    }


}