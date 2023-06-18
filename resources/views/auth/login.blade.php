<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Sign Up</title>
    <style>
        body {
            width: 100%;
            height: 100vh;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#346240] text-white">
    <div class="flex h-full justify-center items-center">
        <div class=" w-[1145px] h-[580px]  rounded-3xl bg-[#a9c0a3]">
            <div class="flex flex-row">
                <div class="w-3/4 mx-[40px]">
                    <div class="flex flex-col mt-[40px]">
                        <div class="flex flex-col gap-5">
                            <h1 class="text-5xl font-bold text-white">Welcome Back<span class="text-[#E4C56B]">!</span>
                            </h1>
                            <p class="font-light">Don’t have an account? <a class="text-[#FFDA69] font-light"
                                    href="{{ route('register') }}">Create Now</a></p>
                        </div>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors :errors="$errors" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="flex mt-2 pb-6 flex-col gap-[10px]">
                                <label class="text-lg font-light text-white/[0.5]":value="__('Email')">Email</label>
                                <input class=" w-full h-[45px] placeholder:text-white text-lg bg-[#346240] pl-4 rounded-lg"
                                    placeholder="" type="email" name="email" :value="old('email')" required
                                    autofocus />
                            </div>

                            <!-- Password -->
                            <div class="flex flex-col gap-[10px]">
                                <label for="password":value="__('Password')"
                                    class="text-lg font-light text-white/[0.5]">Password</label>
                                <input class=" w-full h-[45px] placeholder:text-white bg-[#346240] pl-4 rounded-lg"
                                    placeholder="" type="password"name="password" required
                                    autocomplete="current-password" />
                            </div>

                            <!-- Remember Me -->
                            <div class="flex items-center mt-4 justify-between flex-row">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-400 hover:text-black-900"
                                        href="{{ route('password.request') }}">
                                        <div>
                                            <a href="forgot-password" class="text-[#FFDA69] mr-2">Forgot Password</a>
                                        </div>
                                    </a>
                                @endif
                            </div>
                                <div class="flex justify-center">
                                    <button href="" class="rounded-lg mt-4 w-[270px] h-[50px] bg-[#E4C56B]">Log
                                        in</button>
                                </div>
                        </form>
                    </div>
                </div>
                <div class="w-full relative">
                    <img class="w-full h-[580px] rounded-r-3xl" src="images/signup.jpg" alt="">
                    <div class="w-[300px] absolute top-2 right-6 h-[95px]">
                        <div class="w-[280px] flex justify-end pr-6 h-[50px]  absolute top-5 right-6  rounded-full bg-[#111111]">
                            <a class="text-lg font-bold mt-1  ml-8" href="{{ route('register') }}" >signup</a>
                            <div class=" w-[150px] pl-8  absolute left-0 bg-[#082e15] h-[50px] rounded-full">
                                <h1 class="text-2xl font-bold mt-1  mx-auto"> login </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
