<?php
/**
 * class BaseController
 * @package App\Http\Controllers
 * api基类
 */
namespace App\Http\Controllers;
use Illuminate\Http\Response;

class BaseController extends Controller
{
    //生成api方法
    protected function create($data,$msg='',$code =200): Response
    {
        // 返回api结果
        $result =[
            //状态码
            'code'=>$code,
            //自定义信息
            'msg'=>$msg,
            //数据返回
            'data'=>$data
        ];

        return response($result,$code);
    }
}
