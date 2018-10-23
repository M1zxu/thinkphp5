<?php
/**
 * Created by PhpStorm.
 * User: huaxiaofeng
 * Date: 2018/10/23
 * Time: 4:54 PM
 */
namespace app\index\model;
use think\model;

class User extends Model
{
    //自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        parent::initialize();
    }

    public function test(){
        $user = model('User');

    }





}