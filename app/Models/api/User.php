<?php
/*
 * @Author: Bob Chang 2233282817@qq.com
 * @Date: 2023-03-08 15:06:02
 * @LastEditors: Bob Chang 2233282817@qq.com
 * @LastEditTime: 2023-03-08 21:47:11
 * @FilePath: \api\app\Models\api\User.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace App\Models\api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable =['user_name',
    'password','status'];
}
