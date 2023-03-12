<?php
/*
 * @Author: Bob Chang 2233282817@qq.com
 * @Date: 2023-03-12 15:00:59
 * @LastEditors: Bob Chang 2233282817@qq.com
 * @LastEditTime: 2023-03-12 15:21:36
 * @FilePath: \api\app\Http\Controllers\User\UserController.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use PhpParser\Node\Expr\Cast\Object_;

class UserController extends Controller
{
    //
    public function show()
    {
        $user = array('name'=>'libai');
        return Inertia::render('User/Show',[
            'user' =>$user
        ]);
    }
}
