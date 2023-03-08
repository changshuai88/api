<?php

namespace App\Http\Controllers;
use App\Models\api\User;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
