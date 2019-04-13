<?php
/**
 * Created by PhpStorm.
 * User: laird
 * Date: 2019-04-11
 * Time: 00:12
 */

namespace app\api\service;
use  app\api\model\LocOnWay as lwModel;
use think\Exception;

class LocOnWay   extends  BaseService
{

    //创建沿途地点
    public  function  setLocOnWay($locs,$manned_no){

        $locs=['东坡','卫民','大元冲','大营'];
        $sequence=100;

        $lw=new lwModel();
        foreach ($locs as $loc){

            try{

                $lw['order_no']=$manned_no;
                $lw['loc_id']=self::getLocID($loc);
                $lw['sequence']=$sequence+10;//地点序号；

                $lw->save();
        } catch (Exception $e){


            }


        }


    }

    //出发地点相同，目标地点是否在沿途上

    public function  isOnWay(){


    }


    public  function  getLocID($address){

    }






}