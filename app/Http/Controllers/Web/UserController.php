<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\SignupRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\User;
use Session;
session_start();
class UserController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('web.signin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('web.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(User $user,SignupRequest $request)
    {   
            try {
                $user = User::create([
                    'name'=>$request->input('name'),
                    'email'=>$request->input('email'),
                    'is_admin'=>0,
                    'password'=>bcrypt($request->input('password')),
                    'phone'=>$request->input('phone'),
                    'address'=>$request->input('address'),
                    'created_at'=>now()
                ]);
                Session::put('message','Đăng kí tài khoản thành công');
                return redirect()->route('web.signin');
            } catch (Exception $e) {
                Session::put('message','Lỗi hệ thống');
                return redirect()->back();
            }
        
    }
    public function login(Request $request)
    {
        $user = [
            'email'=>$request->email,
            'password'=>$request->password
        ];

        if(Auth::attempt($user) && Auth::user()->is_admin==0 ){
            Session::put('customer_name',Auth::user()->name);
            return redirect()->route('web.index');
        } else{ 
            Session::put('message','Email hoặc mật khẩu không chính xác');
            return redirect()->route('web.signin');
        }
        
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Session::put('customer_name',null);
        return redirect()->route('web.index');
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
