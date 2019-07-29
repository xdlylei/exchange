<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/4/10
 * Time: 18:00
 */

namespace app\api\model;

use think\Model;
class User extends  BaseModel
{

    //1.获取用户信息
    public function getUser(){




    }

    //2.创建用户信息


    //3.获取身份证后4位


    //3.获取身份证后6位



     public static function  getUserId(){
        return self::get('user_id');
     }




}