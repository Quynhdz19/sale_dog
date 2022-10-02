@extends('layouts.header')
<body>
<div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center
          min-vh-100">
        <div class="col-12 col-md-8 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-4">
                        <h3>Đặt lại mật khẩu?</h3>
                        <p class="mb-2">Nhập email để đặt lại mật khẩu
                        </p>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email"
                                  >
                        </div>
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary">
                                Xác nhận
                            </button>
                        </div>
                        <p>Bạn đã có tài khoản <a href="{{route('login')}}">Đăng nhập </a></p>
                        <p>Bạn chưa có tài khoản ?<a href="{{route('register')}}">Đăng ký ngay</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
