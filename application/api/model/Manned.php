<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019/4/10
 * Time: 17:57
 */

namespace app\api\model;


class Manned  extends  BaseModel
{

    //根据目的地，出发地点，时间来搜索适合的订单

    public  function  searchManned($vars){




        $sql="select * from Manned where start_time>'2019-01-03 19:00:00' and start_time<'2019-01-18 19:00:00' and target_loc='广州' and start_loc='连州'  and status=100" ;





    }

    //终点一致的订单,并且出发点在沿途上
    public  function  mannedSimilarTarget(){


        $start_loc="连州";
        $target_loc="广州";
        $start_time="2019-01-03 19:00:00";


        $sql="select * from Manned where start_time>'2019-01-03 19:00:00' and target_loc='广州'  and status='100'";

    }


    public  function  mannedSimilarStart(){


        $start_loc="连州";
        $target_loc="广州";
        $start_time="2019-01-03 19:00:00";


        $sql="select * from Manned where start_time>'2019-01-03 19:00:00' and start_loc='连州'  and status='100'";

    }





}