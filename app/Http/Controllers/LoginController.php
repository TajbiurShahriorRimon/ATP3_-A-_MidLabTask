<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function verify(UserRequest $request){
        //echo 'sdf';

        /*$result = DB::table('user')
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->first();*/

        $result = DB::select('select * from user where email = ? and password = ?', [$request->email, $request->password]);
        foreach ($result as $result1){
            //echo $result1->user_type;
        }

        if(count($result) > 0){
            //echo $request->email;
            $request->session()->put('email', $request->email);
            $request->session()->put('user_name', $result1->user_type);
            $request->session()->put('user_type', $result1->user_type);
            //set session or cookie

            if ($result1->user_type == 'Admins') {
                return redirect('/admin/index');
            }
            if ($result1->user_type == 'Customers') {
                return redirect('/customer/index');
            }
            if ($result1->user_type == 'Vendors') {
                return redirect('/vendor/index');
            }
            if ($result1->user_type == 'Accountants') {
                return redirect('/accountant/index');
            }
        }
        else{
            echo "<script>alert('Password did not match')</script>";
            $request->session()->flash('msg', 'Invalid username or password!');
            //return redirect('/login');
            return redirect('/login/index');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "hfsf";
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
