<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobile Shop | Login </title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login_signup.css')}}">


</head>
<body>
<div class="wrapper">
    <section class="form login">
        <h2 class="text-center">Đăng nhập hệ thống</h2>
        <form action="#" method="POST" >
           @if($errors -> any())
               <div class="alert alert-danger text-center  container">
                   Vui lòng kiểm tra dữ liệu đầu vào
               </div>
            @endif
            <div class="field input">
                <label>Email Address</label>
                <input type="text" name="email" placeholder="Enter your email" value="{{old('email')}}">
                @error('email')
                <span style="color: red; font-style: italic; font-size: 15px" >{{$message}}</span>
                @enderror
            </div>
            <div class="field input">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" >
                @error('password')
                <span style="color: red; font-style: italic ;font-size: 15px">{{$message}}</span>
                @enderror

            </div>
            <div class="field button">
                @csrf
                <input type="submit" name="submit" value="Đăng nhập">
            </div>
        </form>

        <div class="link">Bạn chưa có tài khoản? <a href="{{route('register')}}">Đăng ký ngay</a></div>
        <a class="back_home" href="{{route('home')}}">Trang chủ</a>
        <a class="back_home forgot_password" href="{{route('forgot')}}">Quên mật khẩu</a>

    </section>

</div>


</body>
</html>

