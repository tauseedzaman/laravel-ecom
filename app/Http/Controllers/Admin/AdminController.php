<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;


 class AdminController extends Controller
                {
                /**
                 * Display a listing of the resource.
                 *
                 * @return \Illuminate\Http\Response
                 */
                public function index(Request $request)
                {
                    if($request->session()->has('ADMIN_LOGIN')){
                        return redirect('admin/dashboard');
                    }else{
                        return view('admin.login');
                    }
                    return view('admin.login');
                }

                public function auth(Request $request)
                {
                    $email=$request->post('email');
                    $password=$request->post('password');

                    $result=Admin::where(['email'=>$email,'password'=>$password])->get();
                    if(isset($result['0']->id)){
                        $request->session()->put('ADMIN_LOGIN',true);
                        $request->session()->put('ADMIN_ID',$result['0']->id);
                        return redirect('admin/dashboard');
                    
                   }else{
                    $request->session()->flash('error','Please Enter valid login details');
                    return redirect('admin');
                   }
                }
                public function dashboard()
                {
                    return view('admin.dashboard');
                }

                }
