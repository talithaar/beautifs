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
    <style>
        .image {
            width: 100%;
            height: 100vh;
            background-image: url("images/bg-suc.jpg");
            /* ini buat image email */
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
                <div class="flex flex-col gap-[32px] mx-12 mt-[28px] items-center">
                    <div>
                        <h1 class="text-5xl  text-white font-bold underline">Forgot password?</h1>
                        <h1 class="text-xl mt-6 text-white font-normal">Dont worry. We can help.</h1>
                    </div>

                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <!-- Validation Errors -->
                    <x-auth-validation-errors :errors="$errors" />


                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!-- Email Address -->
                        <div>
                            <label for="helper-text"
                                class="mb-4 text-lg flex justify-center font-bold text-[#023A15] ">Enter Your Email
                                Address</label>
                            <div class="relative w-[450px] h-83px[]">
                                <input type="text" name="input_type" :value="old('input_type')" required autofocus
                                    id="helper-text" aria-describedby="helper-text-explanation"
                                    class="bg-white text-[#231F20] rounded-lg placeholder:text-[#9f9f9f]  text-lg pl-20 h-[53px] focus:outline-none block w-[450px] p-3"
                                    placeholder="">
                                <img class="w-[48px] absolute bottom-1 left-5" src="images/email-icon.svg"
                                    alt="">
                            </div>
                        </div>
                        <div class="mt-8">
                            <button
                                class="bg-[#023A15] rounded-full w-[208px] h-[46px] flex justify-center shadow-2xl drop-shadow-2xl font-semibold text-2xl text-white m-auto">
                                SEND
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

