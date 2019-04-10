<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/4/9
 * Time: 10:33
 */

namespace app\index\service;



use  app\index\model\car as CarModel;

class car  extends  baseService
{
        function  getCar(){
            $car=CarModel::Get();
            echo $car;
        }


}