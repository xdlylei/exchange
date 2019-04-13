<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/4/10
 * Time: 18:16
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use think\console\input\Argument;
use think\facade\Request;
use  app\api\model\FreeRide as FreeRideModel;
use  app\api\model\User     as UserModel;

//搭车页面
class FreeRide extends  BaseController
{

    //获取搭车搜索信息，进行匹配后，返回信息
    //
    public  function  searchFreeRide(){




    }

    //提交搭车请求接口
    //和载人订单进行匹配，返回匹配成功或失败，或等待
    public  function  sendFreeRideStatus(){




    }

    //搭车信息发布接口
    public  function  publishFreeRide(){

        $vars=Request::param();
        $fr=new FreeRideModel();
//        $target=$vars['target_loc'];
//        $launch=$vars['launch'];
//        $launch_time=$vars['launch_time'];


        $fr['free_ride_no']="111";
        $fr['user_id']=UserModel::getUserId();
        $fr['status']="100";
        $fr['status']=$vars['status'];
        $fr['target_loc']=$vars['target_loc'];
        $fr['from_loc']=$vars['from_loc'];
        $fr['start_time']=$vars['start_time'];
        $create_res=FreeRideModel::create();



    }






}