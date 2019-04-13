<?php
/**
 * Created by PhpStorm.
 * User: laird
 * Date: 2019-04-11
 * Time: 00:11
 */

namespace app\api\service;

use   think\facade\Request;
use    app\api\model\Manned as MannedModel;

class FreeRide   extends  BaseService
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

        try {
            $fr=new FreeRideModel();
//        $target=$vars['target_loc'];
//        $launch=$vars['launch'];
//        $launch_time=$vars['launch_time'];

            //基本信息
            $fr['free_ride_no']=$this->makeOrderNo();
            $fr['user_id']="aaa";
            $fr['status']="100";//创建订单
            $fr['status']=$vars['status'];
            $fr['target_loc']=$vars['target_loc'];
            $fr['from_loc']=$vars['from_loc'];
            $fr['start_time']=$vars['start_time'];

            //更多选项

            $fr['man_amount']=$vars['start_time'];
            $fr['luggage_amount']=$vars['luggage_amount'];
            $fr['will_pay_left']=$vars['will_pay_left'];
            $fr['will_pay_right']=$vars['will_pay_right'];
            $fr['remark']=$vars['remark'];

            $create_res=$fr->save();

            if($create_res>0) {
                return "ok";
            }else
                return  "create_fail";


        }catch(Exception $e){
            throw  $e;
        }
    }






    public static function makeFreeRideNo()
    {
        $yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
        $orderSn =
            $yCode[intval(date('Y')) - 2019] . strtoupper(dechex(date('m'))) . date(
                'd') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf(
                '%02d', rand(0, 99));
        return $orderSn;
    }





    //1
    //2.
    //3.判断搭车订单是在有效期内


    //4.比较订单状态


    //5.根据搭车订单来搜寻是否有符合的车主
    public  function SearchTargetManned($vars){

            $vars['target_loc']="广州";
            $vars['start_loc']="连州";
            $vars['start_time']="2019-03-11 19:00";
        $vars['end_time'] ="2019-01-18 19:00:00";//15天内

           $manned_model=new MannedModel();
            $manned_list=$manned_model->searchManned($vars);
            if($manned_list<0) {

                $manned_list=$manned_model->mannedSimilarTarget();

                if ($manned_list<0) {
                    $manned_list=$manned_model->mannedSimilarStart();

                }


            }








    }





    //6. 匹配订单，更新相关信息


    //7.

















}