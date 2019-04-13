<?php
/**
 * Created by PhpStorm.
 * User: laird
 * Date: 2019-04-11
 * Time: 00:12
 */

namespace app\api\service;

use think\Exception;
use   think\facade\Request;
use    app\api\model\HomeLand as HomeLandModel;


class HomeLand  extends  BaseService
{

    //1.比较两个地址是否在地级市



    //2.比较两个地址是否在县级市



    //3.比较两个地址是否在同个乡



    //4.比较2个地址是否在同个村


    //5 保存家庭地址


    //6 更新家乡地址



    //7 创建家庭地址


    //8 删除地址


    //9 是否婚嫁的地址



   //    //2.把老家的信息存入数据库中，save

    public   function  setHomeLand(){

        //
        $vars=Request::param();
        $homeLand=new HomeLandModel();
        $create_res='';

        $address=self::divideAddress($vars);

        try{
        $homeLand['province']= $address['province'];
        $homeLand['up_city'] = $address['up_city'];
        $homeLand['city']    = $address['city'];
        $homeLand['town']    = $address['town'];
        $homeLand['village'] = $address['village'];

         //设置地址代码
            $homeLand['province_id']  ='44';
            $homeLand['up_city_id']  ='18';
            $homeLand['city_id']='82';
            $homeLand['town_id']='51';
            $homeLand['village_id']="345";

        $create_res=$homeLand->save();


        }catch(Exception $e){


        }
       if($create_res>0) {
           return "ok";
       }else{
           return "create_fail";
       }


    }


    //拆分地址
    public  function  divideAddress($str){



        $address='';
        $address['province']='广东省';
        $address['up_city']='清远市';
        $address['city']='连州市';
        $address['town']='瑶安乡';
        $address['village']='大营村';

        return $address;

    }




    //    //3 根据地级市编码获得信息
    //
    //
    //
    //    //4 根据县级市编码获得信息
    //
    //
    //
    //    //5 根据乡级编码获得信息
    //
    //
    //    //6 根据村编码获得信息



}