<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Raleway', sans-serif;
            background-color: #e7e7e7;
        }
        .wrapper {
            width: 800px;
            height: 600px;
            position: relative;
            margin: 3% auto;
            box-shadow: 2px 18px 70px 0px #9D9D9D;
            overflow: hidden;
        }

        .login-text {
            width: 800px;
            height: 450px;
            background: linear-gradient(to left, #ab68ca, #de67a3); 
            position: absolute;
            top: -300px;
            box-sizing: border-box;
            padding: 6%;
            transition: all 0.5s ease-in-out;
            z-index: 11;
        }

        .text {
            margin-left: 20px;
            color: #fff;
            display: none;
            transition: all 0.5s ease-in-out;
            transition-delay: 0.3s;
        }

        .text a, .text a:visited {
            font-size: 36px;
            color: #fff;
            text-decoration: none;  
            font-weight: bold;
            display: block;
        }

        .text hr {
            width: 10%;
            float: left;
            background-color: #fff;
            font-size: 16px;
        }

        .text input {
            margin-top: 30px;
            height: 40px;
            width: 300px;
            border-radius: 2px;
            border: none;
            background-color: #444;
            opacity: 0.6;
            outline: none;
            color: #fff;
            padding-left: 10px;
        }

        .text input[type=text] {
            margin-top: 60px;
        }

        .text button {
            margin-top: 60px;
            height: 40px;
            width: 140px;
            outline: none;
        }

        .login-btn {
            background: #fff;
            border: none;
            border-radius: 2px;
            color: #696a86;
        }

        .signup-btn {
            background: transparent;
            border: 2px solid #fff;
            border-radius: 2px;
            color: #fff;
            margin-left: 30px;
        }

        .cta {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #696a86;
            border: 2px solid #fff;
            position: absolute;
            bottom: -30px;
            left: 370px;
            color: #fff;
            outline: none;
            cursor: pointer;
            z-index: 11;
        }

        .call-text {
            background-color: #fff;
            width: 800px;
            height: 450px;
            position: absolute;
            bottom: 0;
            padding: 10%;
            box-sizing: border-box;
            text-align: center;
        }

        .call-text h1 {
            font-size: 42px;
            margin-top: 10%;
            color: #696a86;
        }

        .call-text h1 span {
            color: #333;
            font-weight: bolder;
        }

        .call-text button {
            height: 40px;
            width: 180px;
            border: none;
            border-radius: 20px;
            background: linear-gradient(to left, #ab68ca, #de67a3); 
            color: #fff;
            font-weight: bolder;
            margin-top: 30px;
            cursor: pointer;
            outline: none;
        }

        .show-hide {
            display: block;
        }

        .expand {
            transform: translateY(300px);
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="login-text">
            <button class="cta"><i class="fas fa-chevron-down fa-1x"></i></button>
            <div class="text">
                <a href="">Register</a>
                <hr>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <br>
                    <input type="text" name="name" placeholder="Name" required>
                    <br>
                    <input type="email" name="email" placeholder="Email" required>
                    <br>
                    <input type="password" name="password" placeholder="Password" required>
                    <br>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
                    <br>
                    <button type="submit" class="signup-btn">Register</button>
                </form>
            </div>
        </div>
        <div class="call-text">
            <h1>Show us your <span>creative</span> side</h1>
            <button>Join the Community</button>
        </div>
    </div>

    <script>
        var cta = document.querySelector(".cta");
        var check = 0;

        cta.addEventListener('click', function(e){
            var text = e.target.nextElementSibling;
            var loginText = e.target.parentElement;
            text.classList.toggle('show-hide');
            loginText.classList.toggle('expand');
            if(check == 0)
            {
                cta.innerHTML = "<i class=\"fas fa-chevron-up\"></i>";
                check++;
            }
            else
            {
                cta.innerHTML = "<i class=\"fas fa-chevron-down\"></i>";
                check = 0;
            }
        });
    </script>
</body>
</html>
