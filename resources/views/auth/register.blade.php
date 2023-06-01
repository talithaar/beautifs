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


<!-- Validation Errors -->
    <x-auth-validation-errors  :errors="$errors"/>

<body class="bg-[#346240] text-white">
    <div class="flex h-full justify-center items-center">
        <div class=" w-[1145px] h-[580px]  rounded-3xl bg-[#a9c0a3]">
            <div class="flex flex-row">
                <div class="w-1/2 mx-[32px]">
                    <div class="flex flex-col mt-[39px]">
                        <div class="flex flex-col gap-5">
                            <h1 class="text-4xl font-bold  text-white">Create new account<span
                                    class="text-[#E4C56B]">.</span></h1>
                            <p class="">Already A Member? <a class="text-[#567C49] font-semibold underline"
                                    href="{{ route('login') }}">Log
                                    In</a></p>
                        </div>


                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="flex flex-col gap-[24px]">
                                <div class="flex flex-row gap-[49px] mt-5">
                                    <div class="relative w-[216px] h-[56px]">
                                        <input
                                            class=" w-[216px] h-[56px] placeholder:text-white bg-[#346240] pl-4 pt-4 rounded-lg"
                                            placeholder="" type="text"name="name" :value="old('name')" required
                                            autofocus>
                                        <p class="absolute top-1 text-sm font-light left-4 text-black/[0.5]">First Name
                                        </p>
                                    </div>
                                    <div class="relative w-[216px] h-[56px]">
                                        <input
                                            class=" w-[216px] h-[56px] placeholder:text-white bg-[#346240] pl-4 pt-4 rounded-lg"
                                            placeholder="" type="text">
                                        <p class="absolute top-1 text-sm font-light left-4 text-black/[0.5]">Last Name
                                        </p>
                                    </div>
                                </div>


                                <!-- Email Address -->
                                <div class="flex flex-row gap-[49px]">
                                    <div class="relative w-[216px] h-[56px]">
                                        <input
                                            class=" w-[481px] h-[56px] placeholder:text-white bg-[#346240] pl-4 pt-4 rounded-lg"
                                            placeholder="" type="email" name="email" :value="old('email')"
                                            required />
                                        <p class="absolute top-1 text-sm font-light left-4 text-black/[0.5]">Email</p>
                                    </div>
                                </div>

                                <!-- Password -->
                                <div class="relative w-[216px] h-[56px]">
                                    <input
                                        class=" w-[481px] h-[56px] placeholder:text-white bg-[#346240] pl-4 pt-4 rounded-lg"
                                        placeholder="" type="password" name="password" required
                                        autocomplete="new-password" />
                                    <label for=""
                                        class="absolute top-1 text-sm font-light left-4 text-black/[0.5]">Password</label>
                                </div>



                                <!-- Confirm Password -->
                                <div class="relative w-[216px] h-[56px]">


                                    <input
                                        class=" w-[481px] h-[56px] placeholder:text-white bg-[#346240] pl-4 pt-4 rounded-lg"
                                        placeholder="" type="password" name="password_confirmation"
                                        :value="__('Confirm Password')" required />
                                    <label for=""
                                        class="absolute top-1 text-sm font-light left-4 text-black/[0.5]">Confirm
                                        Password</label>
                                </div>

                                <div class="flex justify-center">
                                    <button href=""
                                        class="rounded-lg mt-4 w-[231px] h-[56px] bg-[#E4C56B]">Create
                                        Account</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
                <div class="w-full relative">
                    <img class="w-full h-[580px] rounded-r-3xl" src="images/signup.jpg" alt="">
                    <div class="absolute top-7 right-6 flex justify-end w-[280px] rounded-full h-[50px] bg-[#111111]">
                        <a class="text-lg font-bold mt-2 mx-auto" href="{{ route('login') }}">login</a>
                        <div class="w-[170px] rounded-full bg-[#082e15]">
                            <h1 class="text-2xl font-bold mt-1 ml-7">signup</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
