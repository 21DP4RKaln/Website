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
</head>
<body>
    <div class="flex flex-col justify-center items-center font-[sans-serif] bg-white text-[#333] md:h-screen">
        <div class="grid md:grid-cols-2 items-center gap-y-8 max-w-7xl w-full shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] m-6 rounded-md relative overflow-hidden">
            <div class="max-md:order-1 p-4 bg-gray-50 h-full">
                <img src="https://readymadeui.com/signin-image.webp" class="lg:max-w-[90%] w-full h-full object-contain block mx-auto" alt="login-image" />
            </div>
            <div class="flex items-center p-6 max-w-md w-full h-full mx-auto">
                <form method="POST" action="{{ route('register') }}" class="w-full">
                    @csrf
                    <div class="step active">
                        <div class="mb-12">
                            <h3 class="text-teal-500 lg:text-3xl text-2xl font-extrabold max-md:text-center">Create an account</h3>
                        </div>
                        <div class="mt-1 text-sm text-left text-neutral-900 dark:text-neutral-600 flex justify mb-8">
                            <p>Already have an account?</p>
                            <a href="{{ route('login') }}" class="ml-2 font-medium dark:hover:text-neutral-400 focus:outline-none underline">Log in</a>
                        </div>
                        <div>
                            <label class="text-sm font-semibold block mb-3">Nickname</label>
                            <div class="relative flex items-center mb-6">
                                <input name="nickname" type="text" required class="w-full bg-transparent text-sm border-2 focus:border-teal-500 px-4 py-3.5 outline-none rounded-xl" placeholder="Enter nickname" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke-width="1.5" stroke="currentColor" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"></path>
                                </svg>
                            </div>
                            <div class="input-group mb-6">
                                <div>
                                    <label class="text-sm font-semibold block mb-3">First Name</label>
                                    <div class="relative flex items-center">
                                        <input name="first_name" type="text" required class="w-full bg-transparent text-sm border-2 focus:border-teal-500 px-4 py-3.5 outline-none rounded-xl" placeholder="Enter first name" />
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke-width="1.5" stroke="currentColor" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                                            <path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm0 2c-3.31 0-10 1.66-10 5v2h20v-2c0-3.34-6.69-5-10-5z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm font-semibold block mb-3">Last Name</label>
                                    <div class="relative flex items-center">
                                        <input name="last_name" type="text" required class="w-full bg-transparent text-sm border-2 focus:border-teal-500 px-4 py-3.5 outline-none rounded-xl" placeholder="Enter last name" />
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke-width="1.5" stroke="currentColor" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                                            <path d="M12 12c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm0 2c-3.31 0-10 1.66-10 5v2h20v-2c0-3.34-6.69-5-10-5z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Agreement statement -->
                        <div class="relative mb-6">
                            <label for="terms_agreement" class="text-sm text-neutral-900 dark:text-neutral-600">By creating an account, you agree to the <a href="#" class="dark:hover:text-neutral-400 underline">Terms of use</a> and <a href="#" class="dark:hover:text-neutral-400 underline">Privacy Policy</a>.</label>
                        </div>
                        <div class="mt-12">
                            <button type="button" class="w-full shadow-xl py-3.5 px-8 text-sm font-semibold rounded-xl bg-teal-500 hover:bg-teal-600 text-white border focus:outline-none transition-all" onclick="nextStep()">
                                Next Step
                            </button>
                            <div class="back-button">
                                <a href="/">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-0.1">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 0 1 0 12h-3"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="flex items-center justify-center gap-6 mt-12">
                                <div class="w-3 h-3 shrink-0 rounded-full bg-teal-700 cursor-pointer" onclick="goToStep(0)"></div>
                                <div class="w-3 h-3 shrink-0 rounded-full bg-gray-300 cursor-pointer" onclick="goToStep(1)"></div>
                                <div class="w-3 h-3 shrink-0 rounded-full bg-gray-300 cursor-pointer" onclick="goToStep(2)"></div>
                                <div class="w-3 h-3 shrink-0 rounded-full bg-gray-300 cursor-pointer" onclick="goToStep(3)"></div>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="mb-12">
                            <h3 class="text-teal-500 lg:text-3xl text-2xl font-extrabold max-md:text-center">Step 2</h3>
                        </div>
                        <div>
                            <label class="text-sm font-semibold block mb-3">Email</label>
                            <div class="relative flex items-center">
                                <input name="email" type="email" required class="w-full bg-transparent text-sm border-2 focus:border-teal-500 px-4 py-3.5 outline-none rounded-xl" placeholder="Enter email" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke-width="1.5" stroke="currentColor" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"></path>
                                </svg>
                            </div>
                            <!-- Opt-in for email notifications -->
                            <div class="relative mb-6">
                                <input type="checkbox" id="email_opt_in" name="email_opt_in" class="rounded dark:bg-grey-500 border-neutral-900 text-neutral-900 shadow-sm focus:ring-neutral-900 dark:focus:ring-neutral-900 dark:focus:ring-offset-neutral-900" value="1">
                                <label for="email_opt_in" class="text-sm text-neutral-900 dark:text-neutral-600">I want to receive emails about the product, feature updates, events, and marketing promotions.</label>
                            </div>
                        </div>
                        <div class="mt-12">
                            <button type="button" class="w-full shadow-xl py-3.5 px-8 text-sm font-semibold rounded-xl bg-teal-500 hover:bg-teal-600 text-white border focus:outline-none transition-all" onclick="nextStep()">
                                Next Step
                            </button>
                            <button type="button" class="w-full shadow-xl py-3.5 px-8 text-sm font-semibold rounded-xl bg-gray-500 hover:bg-gray-600 text-white border focus:outline-none transition-all mt-4" onclick="prevStep()">
                                Previous Step
                            </button>
                            <div class="flex items-center justify-center gap-6 mt-12">
                                <div class="w-3 h-3 shrink-0 rounded-full bg-gray-300 cursor-pointer" onclick="goToStep(0)"></div>
                                <div class="w-3 h-3 shrink-0 rounded-full bg-teal-700 cursor-pointer" onclick="goToStep(1)"></div>
                                <div class="w-3 h-3 shrink-0 rounded-full bg-gray-300 cursor-pointer" onclick="goToStep(2)"></div>
                                <div class="w-3 h-3 shrink-0 rounded-full bg-gray-300 cursor-pointer" onclick="goToStep(3)"></div>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="mb-12">
                            <h3 class="text-teal-500 lg:text-3xl text-2xl font-extrabold max-md:text-center">Step 3</h3>
                        </div>
                        <div>
                            <label class="text-sm font-semibold block mb-3">Phone number</label>
                            <div class="relative flex items-center mb-6">
                                <input name="phone_number" type="text" required class="w-full bg-transparent text-sm border-2 focus:border-teal-500 px-4 py-3.5 outline-none rounded-xl" placeholder="Enter phone number" onkeypress="return isNumber(event)" />
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke-width="1.5" stroke="currentColor" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-12">
                            <button type="button" class="w-full shadow-xl py-3.5 px-8 text-sm font-semibold rounded-xl bg-teal-500 hover:bg-teal-600 text-white border focus:outline-none transition-all" onclick="nextStep()">
                                Next Step
                            </button>
                            <button type="button" class="w-full shadow-xl py-3.5 px-8 text-sm font-semibold rounded-xl bg-gray-500 hover:bg-gray-600 text-white border focus:outline-none transition-all mt-4" onclick="prevStep()">
                                Previous Step
                            </button>
                            <div class="flex items-center justify-center gap-6 mt-12">
                                <div class="w-3 h-3 shrink-0 rounded-full bg-gray-300 cursor-pointer" onclick="goToStep(0)"></div>
                                <div class="w-3 h-3 shrink-0 rounded-full bg-gray-300 cursor-pointer" onclick="goToStep(1)"></div>
                                <div class="w-3 h-3 shrink-0 rounded-full bg-teal-700 cursor-pointer" onclick="goToStep(2)"></div>
                                <div class="w-3 h-3 shrink-0 rounded-full bg-gray-300 cursor-pointer" onclick="goToStep(3)"></div>
                            </div>
                        </div>
                    </div>
                    <div class="step">
                        <div class="mb-12">
                            <h3 class="text-teal-500 lg:text-3xl text-2xl font-extrabold max-md:text-center">Set Password</h3>
                        </div>
                        <div>
                            <label class="text-sm font-semibold block mb-3">Password</label>
                            <div class="relative flex items-center mb-6">
                                <input id="password" name="password" type="password" required class="w-full bg-transparent text-sm border-2 focus:border-teal-500 px-4 py-3.5 outline-none rounded-xl" placeholder="Enter password" />
                                <button type="button" class="absolute right-4" onclick="toggleVisibility('password')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px]" viewBox="0 0 24 24">
                                        <path d="M12 4.5c-7.33 0-11.74 7.06-12 7.5.26.44 4.67 7.5 12 7.5s11.74-7.06 12-7.5c-.26-.44-4.67-7.5-12-7.5zm0 13c-3.54 0-6.58-2.69-8.48-5.5C5.42 9.19 8.46 6.5 12 6.5s6.58 2.69 8.48 5.5c-1.9 2.81-4.94 5.5-8.48 5.5zm0-9c-1.38 0-2.5 1.12-2.5 2.5S11.17 13.5 12 13.5s1.5-.67 1.5-1.5S12.83 8.5 12 8.5zm0 4c-.83 0-1.5-.67-1.5-1.5S11.17 9.5 12 9.5s1.5.67 1.5 1.5S12.83 12.5 12 12.5z" />
                                    </svg>
                                </button>
                            </div>
                            <label class="text-sm font-semibold block mb-3">Confirm Password</label>
                            <div class="relative flex items-center">
                                <input id="confirm_password" name="password_confirmation" type="password" required class="w-full bg-transparent text-sm border-2 focus:border-teal-500 px-4 py-3.5 outline-none rounded-xl" placeholder="Confirm password" />
                                <button type="button" class="absolute right-4" onclick="toggleVisibility('confirm_password')">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px]" viewBox="0 0 24 24">
                                        <path d="M12 4.5c-7.33 0-11.74 7.06-12 7.5.26.44 4.67 7.5 12 7.5s11.74-7.06 12-7.5c-.26-.44-4.67-7.5-12-7.5zm0 13c-3.54 0-6.58-2.69-8.48-5.5C5.42 9.19 8.46 6.5 12 6.5s6.58 2.69 8.48 5.5c-1.9 2.81-4.94 5.5-8.48 5.5zm0-9c-1.38 0-2.5 1.12-2.5 2.5S11.17 13.5 12 13.5s1.5-.67 1.5-1.5S12.83 8.5 12 8.5zm0 4c-.83 0-1.5-.67-1.5-1.5S11.17 9.5 12 9.5s1.5.67 1.5 1.5S12.83 12.5 12 12.5z" />
                                    </svg>
                                </button>
                            </div>
                            <!-- Four points for password criteria -->
                            <div class="mt-1 flex flex-wrap text-sm mb-4 ">
                                <div class="w-1/2">
                                    <span class="password-criteria mb-4 block">• Use 8 or more characters</span>
                                    <span class="password-criteria mb-4 block">• One special character</span>
                                </div>
                                <div class="w-1/2 pl-4">
                                    <span class="password-criteria mb-4 block">• One Uppercase character</span>
                                    <span class="password-criteria mb-4 block">• One number</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-12">
                            <button type="submit" class="w-full shadow-xl py-3.5 px-8 text-sm font-semibold rounded-xl bg-teal-500 hover:bg-teal-600 text-white border focus:outline-none transition-all">
                                {{ __('Create an account') }}
                            </button>
                            <button type="button" class="w-full shadow-xl py-3.5 px-8 text-sm font-semibold rounded-xl bg-gray-500 hover:bg-gray-600 text-white border focus:outline-none transition-all mt-4" onclick="prevStep()">
                                Previous Step
                            </button>
                            <div class="flex items-center justify-center gap-6 mt-12">
                                <div class="w-3 h-3 shrink-0 rounded-full bg-gray-300 cursor-pointer" onclick="goToStep(0)"></div>
                                <div class="w-3 h-3 shrink-0 rounded-full bg-gray-300 cursor-pointer" onclick="goToStep(1)"></div>
                                <div class="w-3 h-3 shrink-0 rounded-full bg-gray-300 cursor-pointer" onclick="goToStep(2)"></div>
                                <div class="w-3 h-3 shrink-0 rounded-full bg-teal-700 cursor-pointer" onclick="goToStep(3)"></div>
                            </div>
                        </div>
                    </div>
                </form>
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

