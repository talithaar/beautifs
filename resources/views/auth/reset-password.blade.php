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
    <title>reset pass</title>
    <style>
        .image {
            width: 100%;
            height: 100vh;
            background-image: file:///C:\Users\nashi\XAMPP\htdocs\BEAUTIFSs\BEAUTIFS\public\images\bg-suc.jpg;
            background-size: cover;
            background-position: center;
            font-family: 'Poppins', sans-serif;
            z-index: 10;

        }

        .image-overlay {
            width: 100%;
            height: 100vh;
            background-color: rgba(60, 85, 52, 0.5);
            z-index: 20;

        }
    </style>
</head>
<body>
    <div class="image z-10">
        <div style="opacity: 1;" class="image-overlay z-20 flex justify-center items-center">
            <div style="opacity: 1;"
                class="w-[538px]  h-[628px] drop-shadow-2xl shadow-2xl rounded-2xl z-30 m-auto bg-[#E4C56B]">
                <div class="flex flex-col gap-[30px] mx-16 mt-[30px] items-center">
                    <h1 class="text-4xl leading-relaxed underline text-white font-bold">Create new password</h1>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors :errors="$errors" />

                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <!-- Email Address -->
                        <div>
                            <label for="helper-text"
                                class="block mb-2 text-md font-light text-[#023A15]":value="__('Email')">Email</label>
                            <input id="email" type="password" id="helper-text"
                                aria-describedby="helper-text-explanation" name="email"
                                :value="old('email', $request - > email)" required autofocus
                                class="bg-[#2d5426] text-white text-md rounded-lg
                                 placeholder:text-white h-[48px] focus:outline-none block w-[418px] p-3"
                                placeholder="">
                        </div>


                        <!-- Password -->
                        <div>
                            <label for="helper-text" class="block mb-2 text-md mt-2 font-light text-[#023A15] "
                                :value="__('Password')">Enter New Password</label>
                            <input type="password" id="helper-text" aria-describedby="helper-text-explanation"
                                class="bg-[#2d5426] text-white text-md rounded-lg placeholder:text-white h-[48px]
                                focus:outline-none block w-[418px] p-3"
                                placeholder=""name="password" required>
                        </div>


                        <!-- Confirm Password -->
                        <div>
                            <label for="helper-text" class="block mb-2 mt-2 text-md font-light text-[#023A15] "
                                :value="__('Confirm Password')">Confirm
                                Password</label>
                            <input type="password" id="password_confirmation" aria-describedby="helper-text-explanation"
                                id="helper-text" name="password_confirmation" required
                                class="bg-[#2d5426] text-white text-md rounded-lg placeholder:text-white h-[48px]
                                focus:outline-none block w-[418px] p-3" placeholder="">
                        </div>

                        <div class="flex justify-center mt-6">
                            <button
                                class="bg-white rounded-full w-[153px] h-[53px] font-semibold text-lg text-[#023A15] m-auto">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
