<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/4/9
 * Time: 11:12
 */

namespace app\api\controller;


use app\api\model\Car as CarModel;
class Car  extends  BaseController
{
    public  function  getCar(){
        $car=CarModel::get("1");
    }

}


