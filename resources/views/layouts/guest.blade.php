<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        .step { display: none; }
        .step.active { display: block; }
        .input-group { display: flex; flex-wrap: wrap; gap: 1rem; }
        .input-group > div { flex: 1; }
        @media (max-width: 768px) {
            .input-group { flex-direction: column; }
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
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex flex-col justify-center items-center font-[sans-serif] bg-white text-[#333] md:h-screen">
        <div class="grid md:grid-cols-2 items-center gap-y-8 max-w-7xl w-full shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] m-6 rounded-md relative overflow-hidden">
            <div class="max-md:order-1 p-4 bg-gray-50 h-full">
                <img src="https://readymadeui.com/signin-image.webp" class="lg:max-w-[90%] w-full h-full object-contain block mx-auto" alt="login-image" />
            </div>
            <div class="flex items-center p-6 max-w-md w-full h-full mx-auto">
                @yield('content')
            </div>
            <div class="absolute -top-6 -right-6 w-20 h-20 rounded-full bg-teal-400 max-sm:hidden"></div>
        </div>
    </div>

    <script>
        let currentStep = 0;
        const steps = document.querySelectorAll('.step');
        const indicators = document.querySelectorAll('.flex.items-center.justify-center.gap-6 div');

        function showStep(step) {
            steps.forEach((element, index) => {
                element.classList.toggle('active', index === step);
                indicators[index].classList.toggle('bg-teal-600', index === step);
                indicators[index].classList.toggle('bg-gray-300', index !== step);
            });
        }

        function nextStep() {
            if (currentStep < steps.length - 1) {
                currentStep++;
                showStep(currentStep);
            }
        }

        function prevStep() {
            if (currentStep > 0) {
                currentStep--;
                showStep(currentStep);
            }
        }

        function goToStep(step) {
            currentStep = step;
            showStep(currentStep);
        }

        function isNumber(event) {
            var charCode = (event.which) ? event.which : event.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }

        function toggleVisibility(id) {
            var input = document.getElementById(id);
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            showStep(currentStep);
        });

        var passwordInput = document.getElementById("password");
        var confirmPasswordInput = document.getElementById("confirm_password");
        var passwordCriteria = document.querySelectorAll(".password-criteria");

        // Function to check password criteria
        function checkPasswordCriteria() {
            var password = passwordInput.value;
            var criteriaMet = [false, false, false, false];

            // Check each criterion
            criteriaMet[0] = password.length >= 8;
            criteriaMet[1] = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(password);
            criteriaMet[2] = /[A-Z]/.test(password);
            criteriaMet[3] = /\d/.test(password);

            // Update color of each criterion
            for (var i = 0; i < criteriaMet.length; i++) {
                if (criteriaMet[i]) {
                    passwordCriteria[i].classList.remove("text-red-500");
                    passwordCriteria[i].classList.add("text-green-500");
                } else {
                    passwordCriteria[i].classList.remove("text-green-500");
                    passwordCriteria[i].classList.add("text-red-500");
                }
            }
        }

        // Event listener for input change
        passwordInput.addEventListener("input", function() {
            checkPasswordCriteria();
        });
    </script>
</body>
</html>

