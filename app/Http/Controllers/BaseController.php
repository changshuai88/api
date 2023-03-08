<?php
/*
 * @Author: Bob Chang 2233282817@qq.com
 * @Date: 2023-03-08 14:38:21
 * @LastEditors: Bob Chang 2233282817@qq.com
 * @LastEditTime: 2023-03-08 20:51:12
 * @FilePath: \api\app\Http\Controllers\BaseController.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */
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

        return response($result);
    }
}
