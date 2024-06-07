<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        ::selection {
            background: #2D2F36;
        }
        ::-webkit-selection {
            background: #2D2F36;
        }
        ::-moz-selection {
            background: #2D2F36;
        }
        body {
            background: white;
            font-family: 'Inter UI', sans-serif;
            margin: 0;
            padding: 20px;
        }
        .page {
            background: #e2e2e5;
            display: flex;
            flex-direction: column;
            height: calc(100% - 40px);
            position: absolute;
            place-content: center;
            width: calc(100% - 40px);
        }
        @media (max-width: 767px) {
            .page {
                height: auto;
                margin-bottom: 20px;
                padding-bottom: 20px;
            }
        }
        .container {
            display: flex;
            height: 320px;
            margin: 0 auto;
            width: 640px;
        }
        @media (max-width: 767px) {
            .container {
                flex-direction: column;
                height: 630px;
                width: 320px;
            }
        }
        .left {
            background: white;
            height: calc(100% - 40px);
            top: 20px;
            position: relative;
            width: 50%;
        }
        @media (max-width: 767px) {
            .left {
                height: 100%;
                left: 20px;
                width: calc(100% - 40px);
                max-height: 270px;
            }
        }
        .login {
            font-size: 50px;
            font-weight: 900;
            margin: 50px 40px 40px;
        }
        .eula {
            color: #999;
            font-size: 14px;
            line-height: 1.5;
            margin: 40px;
        }
        .right {
            background: #474A59;
            box-shadow: 0px 0px 40px 16px rgba(0,0,0,0.22);
            color: #14b8a6;
            position: relative;
            width: 50%;
        }
        @media (max-width: 767px) {
            .right {
                flex-shrink: 0;
                height: 100%;
                width: 100%;
                max-height: 350px;
            }
        }
        svg {
            position: absolute;
            width: 320px;
        }
        path {
            fill: none;
            stroke: url(#linearGradient);
            stroke-width: 4;
            stroke-dasharray: 240 1386;
        }
        .form {
            margin: 40px;
            position: absolute;
        }
        label {
            color:  #c2c2c5;
            display: block;
            font-size: 14px;
            height: 16px;
            margin-top: 20px;
            margin-bottom: 5px;
        }
        input {
            background: transparent;
            border: 0;
            color: #f2f2f2;
            font-size: 20px;
            height: 30px;
            line-height: 30px;
            outline: none !important;
            width: 100%;
        }
        input::-moz-focus-inner { 
            border: 0; 
        }
        button {
            background: transparent;
            border: 0;
            color: #f2f2f2;
            font-size: 20px;
            height: 30px;
            line-height: 30px;
            outline: none !important;
            width: 100%;
            cursor: pointer;
        }
        button::-moz-focus-inner { 
            border: 0; 
        }

        .form-checkbox {
            width: 20px;
            height: 20px;
        }

        #submit {
            color: #707075;
            margin-top: 40px;
            transition: color 300ms;
        }
        #submit:focus {
            color: #f2f2f2;
        }
        #submit:active {
            color: #d0d0d2;
        }
        .back-button {
            display: flex;
            align-items: left;
            justify-content: left;
            margin-top: 20px;
            cursor: pointer;
            color: #14b8a6;
            text-decoration: none;
        }
        .back-button svg {
            width: 24px; 
            height: 24px;
        }
    </style>
</head>

<body>
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                 @endforeach
            </ul>
        </div>
    @endif
    <div class="page">
        <div class="container">
            <div class="left">
                <div class="login">{{ __('Login') }}</div>
                <div class="eula">By logging in you agree to the ridiculously long terms that you didn't bother to read
                <div>   
                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember"></div> 
                    <span class="ml-2">{{ __('Remember me') }}</span>
                </div>
            </div>
            <div class="right">
                <svg viewBox="0 0 320 300">
                    <defs>
                        <linearGradient id="linearGradient" x1="13" y1="193.5" x2="307" y2="193.5" gradientUnits="userSpaceOnUse">
                            <stop style="stop-color:#10b981;" offset="0" />
                            <stop style="stop-color:#14b8a6;" offset="1" />
                        </linearGradient>
                    </defs>
                    <path d="m 40,120 240,0 c 0,0 25,0.8 25,35 0,34.2 -25,35 -25,35 h -240 c 0,0 -25,4 -25,38.5 0,34.5 25,38.5 25,38.5 h 215 c 0,0 20,-1 20,-25 0,-24 -20,-25 -20,-25 h -190 c 0,0 -20,1.7 -20,25 0,24 20,25 20,25 h 168.571" />
                </svg>
                <div class="form">
                    @if (session('status'))
                        <div>
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div>
                            <label for="email">{{ __('Email') }}</label>
                            <input type="email" id="email" name="email" required autofocus>
                        </div>

                        <div>
                            <label for="password">{{ __('Password') }}</label>
                            <input type="password" id="password" name="password" required>
                        </div>

                        <div>
                            <button type="submit" id="submit">{{ __('Log in') }}</button>
                        </div>
                    </form>

                    <div class="back-button">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-0.1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
    <script>
        var current = null;
        document.querySelector('#email').addEventListener('focus', function(e) {
            if (current) current.pause();
            current = anime({
                targets: 'path',
                strokeDashoffset: {
                    value: 0,
                    duration: 700,
                    easing: 'easeOutQuart'
                },
                strokeDasharray: {
                    value: '240 1386',
                    duration: 700,
                    easing: 'easeOutQuart'
                }
            });
        });
        document.querySelector('#password').addEventListener('focus', function(e) {
            if (current) current.pause();
            current = anime({
                targets: 'path',
                strokeDashoffset: {
                    value: -336,
                    duration: 700,
                    easing: 'easeOutQuart'
                },
                strokeDasharray: {
                    value: '240 1386',
                    duration: 700,
                    easing: 'easeOutQuart'
                }
            });
        });
        document.querySelector('#submit').addEventListener('focus', function(e) {
            if (current) current.pause();
            current = anime({
                targets: 'path',
                strokeDashoffset: {
                    value: -730,
                    duration: 700,
                    easing: 'easeOutQuart'
                },
                strokeDasharray: {
                    value: '530 1386',
                    duration: 700,
                    easing: 'easeOutQuart'
                }
            });
        });

        function toggleVisibility(id) {
            var input = document.getElementById(id);
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }
    </script>
</body>
</html>

