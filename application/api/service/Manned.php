<?php
/**
 * Created by PhpStorm.
 * User: laird
 * Date: 2019-04-11
 * Time: 00:12
 */

namespace app\api\service;

use  app\api\model\Manned as MannedModel;
use think\Exception;

class Manned   extends  BaseService
{


    //提交载人信息搜索接口
    public  function  MannedSearch($vars){





    }
    //提交载人信息状态接口
    public  function  sendMannedStatus(){




    }


    //载人信息发布接口
    public  function   publishManed(){

        $vars=Request::param();
        $manned=new MannedModel();


        //基本选项
         try {
           $manned['manned_no']=$this->makeMannedNo();
           $manned['driver']="aaa";
           $manned['target_loc']=$vars['target_loc'];
           $manned['target_loc']=$vars['target_loc'];
           $manned['from_loc']=$vars['from_loc'];
           $manned['start_time']=$vars['start_time'];
             $manned['status']=100;//创建

             //更多选项
           $manned['start_time']=$vars['start_time'];
           $manned['pay_left']=$vars['pay_left'];
           $manned['pay_right']=$vars['pay_right'];
           $manned['manned_amount']=$vars['manned_amount'];
           $manned['odd_amount']=$vars['manned_amount'];
           $manned['luggage_amount']=$vars['luggage_amount'];
           $manned['remark']=$vars['remark'];

           $create_res=$manned->save();
         } catch (Exception $e) {


         }

         if($create_res>0) {
             return  "ok";
         }
         else return  "create_fail";


    }

    //




    public static function makeMannedNo()
    {
        $yCode = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J');
        $orderSn =
            $yCode[intval(date('Y')) - 2019] . strtoupper(dechex(date('m'))) . date(
                'd') . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf(
                '%02d', rand(0, 99));
        return $orderSn;
    }
}