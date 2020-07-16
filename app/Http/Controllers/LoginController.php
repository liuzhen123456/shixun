<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;

class LoginController extends Controller
{
    //登录
    public function login(){
        return view('login.login');
    }
    public function login_do(Request $request){
        $request=$request->except('_token');
        $user_name=$request['user_name'];
        $user_pwd=$request['user_pwd'];
        //dump($request);
        $userInfo=User::where('user_name',$user_name)->first();
        if(!$userInfo){
            echo '请输入正确的账号密码';die;
        }
        if($userInfo){
            if($user_pwd!=$userInfo['user_pwd']){
                echo '请输入正确的账号密码1';die;
            }
        }
        session(['userInfo'=>$userInfo]);
        return redirect('user/index');
    }
    //注册
    public function reg(){
        return view('login.reg');
    }
    public function reg_do(Request $request){
        $request=$request->except('_token');
        $user_name=$request['user_name'];
        $user_pwd=$request['user_pwd'];
        $user_tel=$request['user_tel'];
        if($user_name==""){
            echo '用户名不能为空';die;
        }
        if($user_pwd==""){
            echo '密码不能为空';die;
        }
        if($user_tel==""){
            echo '电话不能为空';die;
        }
        $user_rep=User::where('user_name',$user_name)->first();
        if($user_rep){
            echo '用户名已存在';die;
        }
        $res=User::insert($request);
        if($res){
            return redirect(url('login'));
        }
        //dump($res);die;
    }
}
