<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller

{
    public $users;
    public function index() {
        return view('layouts.login');
    }
    public function getLogin() {

        return view('layouts.login');
    }
    public function setLogin(Request $request) {
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'Email bắt buộc phải nhập',
            'email.email' => 'Xin vui lòng kiểm tra lại email',
            'password.required' => 'Mật khẩu bắt buộc phải nhập',

        ]);
        $email = $request -> email;
        $password = $request -> password;
        $passwordHasd = $this -> users -> logInUser($email);
        if (password_verify($password, $passwordHasd)) {
            return redirect() -> route('home') -> with('msg', 'Đăng nhập thành công');
        }


    }
    public function getRegister() {

        return view('layouts.register');
    }
    public function setRegister() {


    }
    public function contact() {
        return view('layouts.contact');
    }
}
