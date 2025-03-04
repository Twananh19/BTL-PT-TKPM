<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    
    <!-- Import file CSS -->
    <link rel="stylesheet" href="{{ asset('Tra/signup_signin/style.css') }}">

    <title>Đăng nhập & Đăng ký</title>
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <!-- Form Đăng Nhập -->
            <form method="POST" action="{{ route('login') }}" class="sign-in-form">
                @csrf
                <h2 class="title">Đăng nhập</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Email" autocomplete="username">
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="password" type="password" name="password" required placeholder="Mật khẩu" autocomplete="current-password">
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span class="ms-2 text-sm text-gray-600">Ghi nhớ đăng nhập</span>
                    </label>
                </div>

                <input type="submit" value="Đăng nhập" class="btn solid">

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 mt-2" href="{{ route('password.request') }}">
                        Quên mật khẩu?
                    </a>
                @endif

                <p class="social-text">Hoặc đăng nhập bằng:</p>
                <div class="social-media">
                    <a href="#" class="social-icon"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="#" class="social-icon"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#" class="social-icon"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#" class="social-icon"><ion-icon name="logo-tiktok"></ion-icon></a>
                </div>
            </form>

            <!-- Form Đăng Ký -->
            <form method="POST" action="{{ route('register') }}" class="sign-up-form">
                @csrf
                <h2 class="title">Đăng ký</h2>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required placeholder="Tên tài khoản" autofocus autocomplete="name">
                </div>

                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required placeholder="Email" autocomplete="username">
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" required placeholder="Mật khẩu" autocomplete="new-password">
                </div>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="Xác Nhận Mật khẩu" autocomplete="new-password">
                </div>

                <input type="submit" class="btn" value="Đăng ký" />

                <p class="social-text">Hoặc đăng ký bằng:</p>
                <div class="social-media">
                    <a href="#" class="social-icon"><ion-icon name="logo-google"></ion-icon></a>
                    <a href="#" class="social-icon"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#" class="social-icon"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#" class="social-icon"><ion-icon name="logo-tiktok"></ion-icon></a>
                </div>
            </form>
        </div>
    </div>

    <!-- Panels -->
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>Chưa có tài khoản ?</h3>
                <p>Đăng ký ngay để mở khóa toàn bộ chức năng!</p>
                <button class="btn transparent" id="sign-up-btn">Đăng ký</button>
            </div>
            <!-- <img src="{{ asset('Tra/signup_signin/login.svg') }}" class="image" alt="Đăng nhập"> -->
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>Đã có tài khoản?</h3>
                <p>Đăng nhập ngay để nhận thông báo và sử dụng toàn bộ chức năng!</p>
                <button class="btn transparent" id="sign-in-btn">Đăng nhập</button>
            </div>
            <!-- <img src="{{ asset('Tra/signup_signin/reg.svg') }}" class="image" alt="Đăng ký"> -->
        </div>
    </div>
</div>

<!-- Import Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- Import file JavaScript -->
<script src="{{ asset('Tra/signup_signin/app.js') }}"></script>
</body>
</html>
