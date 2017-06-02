<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
	public function __construct(){
		parent::__construct();
		echo 'Admin';
	}

function checkNamePwd($username,$password) {
             $Info=$this->getByUsername($username);
             if($Info!=null){
                    if($password==$Info['password']){
                        return $Info;
                    }
                    else{
                        return false;
                    }
            }else {
                    return false;
            }
}