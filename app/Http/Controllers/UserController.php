<?php
/*
 * @Author: Bob Chang 2233282817@qq.com
 * @Date: 2023-03-08 11:29:23
 * @LastEditors: Bob Chang 2233282817@qq.com
 * @LastEditTime: 2023-03-08 21:47:47
 * @FilePath: \api\app\Http\Controllers\UserController.php
 * @Description: 这是默认设置,请设置`customMade`, 打开koroFileHeader查看配置 进行设置: https://github.com/OBKoro1/koro1FileHeader/wiki/%E9%85%8D%E7%BD%AE
 */

namespace App\Http\Controllers;
use App\Models\api\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return response()->json([6,5,4,9]);
        // return $this->create([1,2,3],'数据获取成功',200);
        // return response([1,2,3,4]);
        // return $this->create(User::select('id','user_name','password')->get(),'数据获取成功',200);
        return $this->create(User::select('id','user_name','password')->paginate(2),'数据获取成功',200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //获取提交的数据
        $data =  $request->all();

        //数据验证
        $vali = Validator::make($data,[
            'user_name' => 'required|min:2|max:10',
            'password'  => 'required|min:6',
            'status'    => 'required|max:2'
        ]);
        if ($vali->fails()) {
            return $this->create([],$vali->errors(),400);
        }else{
            //写入数据
            $addData = User::create($data);

            //存在，说明成功了
            if ($addData) {
                return $this->create($addData,'数据添加成功',200);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //数据获取
        $data = User::select('id','user_name','password')->find($id);

        //判断id合法
        if (!is_numeric($id)) {
            return $this->create([],'id参数错误~',400);
        }

        //判断是否为空
        if(empty($data)){
            return $this->create([],'无数据~',204);
        }else{
            return $this->create($data,'数据请求成功~',200);

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
