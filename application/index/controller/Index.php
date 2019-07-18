<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
       # return 'hello dache';
          echo  'hello dache';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
