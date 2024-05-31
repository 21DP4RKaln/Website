<x-guest-layout>
@extends('layouts.guest')

@section('content')
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
@endsection


</x-guest-layout>
