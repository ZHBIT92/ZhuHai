<?php  
      
 function showpage($Data1,$tj1,$id1){
        
        $Data =$Data1;
        $tj=$tj;
        $id=$id1;
        $count= $Data->where($tj)->count(); // 查询满足要求的总记录数
        $Page= new \Think\Page($count,$id);// 实例化分页类 传入总记录数和每页显示的记录数
        $show= $Page->show();// 分页显示输出  
        // 进行分页数据查询  
        $list = $Data->where($tj)->limit($Page->firstRow.','.$Page->listRows)->select();  
        
        return array($list,$show);
    }