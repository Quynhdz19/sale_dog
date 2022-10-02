<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile Shop | Đăng ký tài khoản </title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login_signup.css')}}">


</head>
<body>
<body>
<div class="wrapper">
    <section class="form signup">
        <header>Đăng ký tài khoản</header>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="name-details">
                <div class="field input">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="First name" >
                </div>
                <div class="field input">
                    <label>Last Name</label>
                    <input type="text" name="lname" placeholder="Last name" >
                </div>
            </div>
            <div class="field input">
                <label>Email Address</label>
                <input type="text" name="email" placeholder="Enter your email" >
            </div>
            <div class="field input">
                <label>Phone number</label>
                <input type="text" name="phone" placeholder="Enter your phone" >
            </div>
            <div class="field input">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter new password" >
                <i class="fas fa-eye"></i>
            </div>
            <div class="field input">
                <label>Comfirm password</label>
                <input type="password" name="password" placeholder="Comfirm new password" >
                <i class="fas fa-eye"></i>
            </div>
            <div class="field image">
                <label>Chọn avatar</label>
                <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" >
            </div>
            <div class="field button">
                @csrf
                <input type="submit" name="submit" value="Đăng ký">
            </div>
        </form>
        <div class="link">Bạn đã có tài khoản? <a href="{{route('login')}}">Đăng nhập ngay</a></div>
        <a class="back_home" href="{{route('home')}}">Trang chủ</a>
        <a class="back_home forgot_password" href="{{route('forgot')}}">Quên mật khẩu</a>
    </section>

</div>

</body>

</body>
</html>
@extends('layouts.footer')
