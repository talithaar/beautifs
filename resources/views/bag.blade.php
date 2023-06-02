<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/cormorant-2" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Our Service</title>
</head>

<style>
    .font-cormorant {
        font-family: 'Cormorant', sans-serif;
    }

    .font-montserrat {
        font-family: 'Montserrat', sans-serif;

    }
</style>

<body class="bg-[#023A15]">
    <nav class="flex flex-wrap items-center justify-between py-4">
        <div class="ml-24">
            <img src="images/logo.svg" alt="">
        </div>

        <div class="flex gap-[70px] text-white">
            <a class="" href="">Home</a>
            <a href="">About</a>
            <a href="" class="text-white/[0.4]">Service</a>
            <a href="">Order</a>
            <a href="">Shopping Cart</a>
        </div>
        <div class="flex items-center mr-12 gap-4">
            <i class="fa-solid fa-lg fa-magnifying-glass text-white w-"></i>
            <div
                class="w-[145px] gap-2 h-[48px] ring-1 ring-white/[0.4] flex pl-1 items-center rounded-lg bg-[#AAAAAA]/[0.48]">
                <img class="w-12 h-12 flex rounded-full"
                    src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                    alt="">
                <h1 class="text-white">pengguna 1</h1>
            </div>
        </div>
    </nav>
    <!-- start content -->

    <div class="flex justify-center items-center my-32 relative text-6xl w-full h-full font-cormorant">
        <h1 class="text-white relative z-10">Shopping Bag</h1>
        <img class="absolute w-64 z-0 right-[45%]" src="images/circ.svg" alt="">
    </div>
    <!-- 2nd content -->
    <div class=" px-[130px] bg-[#FDF5F3] py-12">
        <div class="flex flex-row">
        <div class="flex flex-col">
            <div class="flex flex-row items-center gap-2">
                <img class="w-6 h-6" src="images/bag.svg" alt="">
                <h1 class="font-cormorant text-[#023A15] text-2xl font-semibold">Bag</h1>
            </div>
            <div class="flex flex-row gap-12">
                <div class="relative">
                    <img class="w-64 rounded-t-full" src="images/details.png" alt="">
                    <div
                        class="w-60 h-12 bg-white mx-auto flex justify-center items-center font-cormorant text-[#023A15] -translate-y-4">
                        <h1 class="text-2xl">Face Srub</h1>
                    </div>
                    <a href="">
                        <div
                            class="font-montserrat w-14 h-14 flex justify-center items-center rounded-full bg-[#023A15] text-2xl font-semibold text-white absolute top-0 right-0">
                            X
                        </div>
                    </a>
                </div>
                <div class="relative">
                    <img class="w-64 rounded-t-full" src="images/cares.png" alt="">
                    <div
                        class="w-60 h-12 bg-white mx-auto flex justify-center items-center font-cormorant text-[#023A15] -translate-y-7">
                        <h1 class="text-2xl">Mask</h1>
                    </div>
                    <a href="">
                        <div
                            class="font-montserrat w-14 h-14 flex justify-center items-center rounded-full bg-[#023A15] text-2xl font-semibold text-white absolute top-0 right-0">
                            X
                        </div>
                    </a>
                </div>
                <div>
                </div>
                <div class="flex flex-col font-montserrat justify-center mx-4 items-center gap-3">
                    <i class="fa fa-plus fa-2xl text-[#023A15]"></i>
                    <p class="text-[#567C49] text-xl">Add Cart</p>
                </div>
                <div>
                    <div class="flex flex-col">
                        <h1 class="font-cormorant text-[#023A15] text-xl">Order Summary</h1>
                        <hr class="outline-none  w-96 bg-[#023A15]">
                        <div class="flex flex-row font-montserrat my-2 justify-between text-[#567C49]">
                            <p class="w-28">Fase Scrub</p>
                            <p>RP 289.000,00</p>
                        </div>
                        <div class="flex flex-row font-montserrat my-2 justify-between text-[#567C49]">
                            <p class="w-28">Botox Filler</p>
                            <p>RP 988.000,00</p>
                        </div>
                        <div class="flex flex-row font-montserrat my-2 justify-between text-[#567C49]">
                            <p class="w-28">Fase Scrub</p>
                            <p>RP 37.000,00</p>
                        </div>
                        <hr class="outline-none  w-96 bg-[#023A15]">
                        <div class="flex flex-row font-montserrat my-2 justify-between text-[#567C49]">
                            <p class="w-28">Total</p>
                            <p>RP 1.314.000,00</p>
                        </div>
                        <div class="flex flex-col gap-3 items-center justify-center">
                            <div class="font-montserrat my-2 text-[#567C49]">
                                <h1>Payments</h1>
                            </div>
                            <a href="">
                                <div class="w-80 h-11 bg-[#023A15] font-montserrat font-medium uppercase hover:opacity-80 rounded-full text-white flex justify-center items-center">
                                    DEBIT CARD
                                </div>
                            </a>
                            <a href="">
                                <div class="w-80 h-11 bg-[#023A15] font-montserrat font-medium uppercase hover:opacity-80 rounded-full text-white flex justify-center items-center">
                                    CREDIT CARD
                                </div>
                            </a>
                            <a href="">
                                <div class="w-80 h-11 bg-[#023A15] font-montserrat font-medium uppercase hover:opacity-80 rounded-full text-white flex justify-center items-center">
                                    OFFLINE PAYMENT
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="font-cormorant flex items-center relative text-[#023A15]">
            <p class="text-2xl">tell us where is your</p>
            <h1 class="text-4xl relative z-10 ml-9">LOCATION</h1>
            <img class="w-48 absolute h-40 z-0 right-[67%]" src="images/circ.svg" alt="">
        </div>
    </div>
    <div>
        <a href="https://www.google.com/maps/place/Sepuluh+Nopember+Institute+of+Technology/@-7.2823507,112.7923504,17z/data=!3m1!4b1!4m6!3m5!1s0x2dd7fa1323221a93:0x306c3c99adedb258!8m2!3d-7.282356!4d112.7949253!16zL20vMDRndng5?entry=ttu">
        <img src="images/map.png" alt="">
        </a>
    </div>
    <!-- end content -->
    <div class="flex flex-col py-20 items-center justify-center bg-[#3c634a] gap-[62px]">
        <div class=" relative">
            <h1 class="text-white text-6xl  text-center w-[896px]" style="font-family: 'Cormorant', sans-serif;">
                Get the latest update about our products and services
            </h1>
            <img class="absolute bottom-12 left-[40%]" src="nyiksa.svg" alt="">
        </div>

        <div class="relative">
            <input style="font-family: 'Montserrat', sans-serif;" type="text" placeholder="Your Email"
                class="rounded-full bg-transparent placeholder:text-white w-[751px] h-[80px] pl-10 ring-1 ring-white"
                name="" id="">
            <div style="font-family: 'Montserrat', sans-serif;"
                class="bg-white text-black flex absolute justify-evenly flex-row w-[196px] h-[63px] bottom-2 right-2 rounded-full">
                <h1 class="font-semibold my-auto">SUBSCRIBE</h1>
                <i class="fa-solid fa-arrow-right flex pr-4 items-center"></i>
            </div>
        </div>
    </div>
    <footer style="font-family: 'Montserrat', sans-serif;"
        class="mt-12 text-white content-start mx-[214px] bg-[#023A15]">
        <div class="flex flex-col">
            <img class="w-[285px]" src="images/logo.svg" alt="">

            <div class="flex mt-4 flex-row gap-[145px]">
                <div class="flex flex-col gap-[50px] w-[476px]">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis sed sapien in pretium.
                    </p>

                    <div class="flex flex-row gap-[27px] items-center">
                        <a href="LINK WA"><svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.5976" cy="17.5976" r="17.5976" fill="white" />
                                <path
                                    d="M13.3147 21.3616L13.9681 21.7393C15.0699 22.3749 16.3231 22.7086 17.5986 22.706C19.0265 22.706 20.4223 22.2872 21.6096 21.5025C22.7968 20.7178 23.7222 19.6024 24.2686 18.2975C24.815 16.9925 24.958 15.5566 24.6794 14.1713C24.4008 12.786 23.7133 11.5135 22.7036 10.5148C21.6939 9.516 20.4075 8.83584 19.0071 8.56029C17.6066 8.28473 16.155 8.42616 14.8358 8.96668C13.5166 9.5072 12.3891 10.4225 11.5958 11.597C10.8025 12.7714 10.3791 14.1521 10.3791 15.5646C10.3791 16.8464 10.7193 18.0757 11.3574 19.1567L11.7382 19.803L11.1489 21.9464L13.3147 21.3616ZM8.57784 24.4914L9.79794 20.0565C8.99399 18.6933 8.57161 17.1428 8.57423 15.5646C8.57423 10.6342 12.6145 6.6377 17.5986 6.6377C22.5828 6.6377 26.623 10.6342 26.623 15.5646C26.623 20.4949 22.5828 24.4914 17.5986 24.4914C16.0038 24.494 14.4371 24.0765 13.0594 23.2818L8.57784 24.4914ZM14.3417 11.3761C14.4626 11.3671 14.5845 11.3671 14.7054 11.3725C14.7541 11.3761 14.8029 11.3814 14.8516 11.3868C14.9951 11.4029 15.153 11.4894 15.2063 11.6091C15.4752 12.2125 15.7369 12.8204 15.9896 13.4301C16.0455 13.5658 16.0121 13.7399 15.9056 13.9095C15.8324 14.0242 15.7532 14.135 15.6683 14.2416C15.5663 14.371 15.347 14.6085 15.347 14.6085C15.347 14.6085 15.2577 14.7138 15.292 14.845C15.3046 14.895 15.3461 14.9673 15.384 15.028L15.4373 15.1129C15.6683 15.494 15.9787 15.8806 16.3578 16.2448C16.4661 16.3483 16.5716 16.4546 16.6854 16.5536C17.1077 16.9223 17.586 17.2232 18.1022 17.4463L18.1067 17.4481C18.1834 17.4811 18.2222 17.499 18.3341 17.5463C18.3901 17.5695 18.4478 17.5901 18.5065 17.6052C18.5671 17.6205 18.6309 17.6176 18.6899 17.597C18.7489 17.5763 18.8003 17.5388 18.8377 17.4892C19.491 16.7063 19.5506 16.6554 19.556 16.6554V16.6572C19.6014 16.6153 19.6553 16.5835 19.7142 16.564C19.773 16.5444 19.8354 16.5376 19.8971 16.5438C19.9513 16.5474 20.0063 16.5572 20.0569 16.5795C20.5361 16.7965 21.3203 17.1348 21.3203 17.1348L21.8455 17.3678C21.9339 17.4097 22.0143 17.5088 22.017 17.6043C22.0206 17.6641 22.026 17.7606 22.0052 17.9373C21.9764 18.1685 21.906 18.4461 21.8356 18.5916C21.7874 18.6909 21.7234 18.782 21.6461 18.8612C21.555 18.9558 21.4553 19.0419 21.3483 19.1183C21.3112 19.1459 21.2736 19.1727 21.2355 19.1987C21.1232 19.2691 21.0079 19.3346 20.8898 19.3951C20.6575 19.5171 20.4008 19.5872 20.1381 19.6004C19.9711 19.6093 19.8042 19.6218 19.6363 19.6129C19.6291 19.6129 19.1237 19.5352 19.1237 19.5352C17.8407 19.2014 16.6541 18.576 15.6584 17.7088C15.4544 17.5311 15.2658 17.3401 15.0727 17.15C14.2695 16.3599 13.6631 15.5074 13.2949 14.7022C13.1064 14.307 13.0046 13.8768 12.9962 13.44C12.9925 12.898 13.1716 12.3702 13.5052 11.9402C13.571 11.8563 13.6333 11.7689 13.7407 11.668C13.8553 11.5609 13.9275 11.5037 14.006 11.4644C14.1104 11.4127 14.2243 11.3823 14.3408 11.3752L14.3417 11.3761Z"
                                    fill="#023A15" />
                            </svg>
                        </a>
                        <a href="Link Youtube"><svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="17.8651" cy="17.5976" r="17.5976" fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M16.0178 18.2037V13.131C17.8468 13.9784 19.2634 14.797 20.9388 15.6795C19.557 16.434 17.8468 17.2806 16.0178 18.2037ZM26.211 10.6082C25.8955 10.1989 25.3578 9.88034 24.7853 9.77487C23.1026 9.46026 12.6048 9.45936 10.923 9.77487C10.4639 9.8596 10.0551 10.0644 9.70391 10.3826C8.22421 11.7348 8.68788 18.9861 9.04454 20.1607C9.19452 20.6691 9.38841 21.0358 9.63259 21.2765C9.94718 21.5947 10.3779 21.8138 10.8727 21.9121C12.2582 22.1942 19.396 22.352 24.756 21.9544C25.2499 21.8697 25.687 21.6435 26.0318 21.3118C27.3999 19.965 27.3066 12.3065 26.211 10.6082Z"
                                    fill="#023A15" />
                            </svg>
                        </a>
                        <a href="LINK FACEBOOK"><svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18.1347" cy="17.5976" r="17.5976" fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19.8752 25.2949V16.6983H22.4704L22.8943 12.8776H19.8752V11.0167C19.8752 10.0329 19.9002 9.05693 21.2672 9.05693H22.6518V6.32526C22.6518 6.28419 21.4625 6.19141 20.2593 6.19141C17.7465 6.19141 16.1731 7.77432 16.1731 10.6809V12.8776H13.3965V16.6983H16.1731V25.2949H19.8752Z"
                                    fill="#023A15" />
                            </svg>
                        </a>
                        <a href="Link IG"><svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="18.4022" cy="17.5976" r="17.5976" fill="white" />
                                <path
                                    d="M18.7367 8.4864C21.1778 8.4864 21.4644 8.49716 22.4292 8.54022C23.3215 8.57969 23.8039 8.7268 24.1268 8.85238C24.5548 9.01743 24.8595 9.21118 25.1787 9.52693C25.4979 9.84268 25.6974 10.1441 25.8606 10.5675C25.9839 10.8868 26.1363 11.364 26.1762 12.2467C26.2197 13.2011 26.2306 13.4846 26.2306 15.8993C26.2306 18.3141 26.2197 18.5975 26.1762 19.552C26.1363 20.4346 25.9876 20.9118 25.8606 21.2312C25.6937 21.6546 25.4979 21.9559 25.1787 22.2717C24.8595 22.5874 24.5548 22.7848 24.1268 22.9463C23.8039 23.0682 23.3215 23.2189 22.4292 23.2584C21.4644 23.3015 21.1778 23.3122 18.7367 23.3122C16.2955 23.3122 16.009 23.3015 15.0441 23.2584C14.1518 23.2189 13.6694 23.0718 13.3466 22.9463C12.9185 22.7812 12.6139 22.5874 12.2947 22.2717C11.9755 21.9559 11.776 21.6546 11.6127 21.2312C11.4894 20.9118 11.3371 20.4346 11.2972 19.552C11.2536 18.5975 11.2428 18.3141 11.2428 15.8993C11.2428 13.4846 11.2536 13.2011 11.2972 12.2467C11.3371 11.364 11.4858 10.8868 11.6127 10.5675C11.7796 10.1441 11.9755 9.84268 12.2947 9.52693C12.6139 9.21118 12.9185 9.01384 13.3466 8.85238C13.6694 8.73039 14.1518 8.57969 15.0441 8.54022C16.009 8.49357 16.2955 8.4864 18.7367 8.4864ZM18.7367 6.85742C16.2556 6.85742 15.9437 6.86819 14.9679 6.91124C13.9958 6.9543 13.3321 7.10859 12.7517 7.33104C12.1496 7.56068 11.6418 7.87284 11.1339 8.37517C10.6261 8.8775 10.3142 9.38341 10.0784 9.97544C9.85352 10.5495 9.69755 11.2061 9.65402 12.1713C9.61049 13.1329 9.59961 13.4415 9.59961 15.8957C9.59961 18.35 9.61049 18.6585 9.65402 19.6237C9.69755 20.5853 9.85352 21.2419 10.0784 21.8196C10.3106 22.4152 10.6261 22.9175 11.1339 23.4199C11.6418 23.9222 12.1532 24.2308 12.7517 24.464C13.3321 24.6865 13.9958 24.8407 14.9716 24.8838C15.9473 24.9269 16.2556 24.9376 18.7403 24.9376C21.225 24.9376 21.5333 24.9269 22.509 24.8838C23.4811 24.8407 24.1449 24.6865 24.7289 24.464C25.331 24.2344 25.8388 23.9222 26.3467 23.4199C26.8545 22.9175 27.1664 22.4116 27.4022 21.8196C27.6271 21.2455 27.783 20.5889 27.8266 19.6237C27.8701 18.6585 27.881 18.3535 27.881 15.8957C27.881 13.4379 27.8701 13.1329 27.8266 12.1677C27.783 11.2061 27.6271 10.5495 27.4022 9.97185C27.17 9.37624 26.8545 8.87391 26.3467 8.37158C25.8388 7.86925 25.3274 7.56068 24.7289 7.32746C24.1485 7.105 23.4847 6.95071 22.509 6.90765C21.5297 6.86819 21.2177 6.85742 18.7367 6.85742Z"
                                    fill="#023A15" />
                                <path
                                    d="M18.7366 11.2524C16.1468 11.2524 14.043 13.3299 14.043 15.8954C14.043 18.4608 16.1468 20.5383 18.7366 20.5383C21.3265 20.5383 23.4303 18.4573 23.4303 15.8954C23.4303 13.3335 21.3265 11.2524 18.7366 11.2524ZM18.7366 18.9093C17.0536 18.9093 15.6897 17.5602 15.6897 15.8954C15.6897 14.2305 17.0536 12.8814 18.7366 12.8814C20.4197 12.8814 21.7835 14.2305 21.7835 15.8954C21.7835 17.5602 20.4197 18.9093 18.7366 18.9093Z"
                                    fill="#023A15" />
                                <path
                                    d="M23.615 12.153C24.22 12.153 24.7104 11.6679 24.7104 11.0694C24.7104 10.471 24.22 9.98584 23.615 9.98584C23.01 9.98584 22.5195 10.471 22.5195 11.0694C22.5195 11.6679 23.01 12.153 23.615 12.153Z"
                                    fill="#023A15" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <h1 class="text-2xl mb-2" style="font-family: 'Cormorant', sans-serif;">
                        Products
                    </h1>
                    <a href="">Skincare</a>
                    <a href="">Make Up</a>
                    <a href="">Shampoo</a>
                </div>
                <div class="flex flex-col gap-2">
                    <h1 class="text-2xl mb-2" style="font-family: 'Cormorant', sans-serif;">
                        About Us
                    </h1>
                    <a href="">Our Shop</a>
                    <a href="">Career</a>
                    <a href="">Specialist</a>
                </div>
                <div class="flex flex-col gap-2">
                    <h1 class="text-2xl mb-2" style="font-family: 'Cormorant', sans-serif;">
                        Support
                    </h1>
                    <a href="">Blog</a>
                    <a href="">Help</a>
                    <a href="">FAQs</a>
                </div>
            </div>
            <hr class="bg-white mt-24 h-[0.5px]">
        </div>
        <div class="flex justify-center">
            <h1 class="text-white">Copyright © 2023 Reyhan Dzaki Abdillah (Hapus aja) </h1>
        </div>
    </footer>
</body>

</html>
