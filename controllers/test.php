<?php
/**
 * Created by PhpStorm.
 * User: Muhammad Zubair
 * Date: 5/7/2019
 * Time: 3:27 PM
 */

class test extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $str = "home/index/45";
        var_dump(str_replace('/',DS,$str));
    }
}