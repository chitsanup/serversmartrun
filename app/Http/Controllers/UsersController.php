<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
//เรียกใช้ model

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index ส่วนใหญ่ get data ทั้งหมด
        $data = Users::get();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        //ใช้ Add data
        $data = new Users();
        $data->fill($request->all()); //อันนี้เพิ่มทั้งหมด
        //$data->name = "name" //อันนี้เพิ่มทีละฟิล ส่วนใหญ่ไว้ลักไก่
        $save = $data->save();
        return "save";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //อันนี้ไว้โชว์ ทีละอัน
        $data = Users::find($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //เอาไว้ update data 
        $data = Users::find($id);
        $data -> fill($request->all());
        $update = $data->save();
        return "Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //ลบ data
        $data = Users::find($id);
        $data->delete();
        return $data;
    }
}
