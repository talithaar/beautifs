@extends('layout.layout')

@section('main')
    <div class="bg-[#023A15] flex items-center justify-center h-72">
        <img src="{{ asset('img/vector.png') }}" alt="" class="absolute z-0 w-[200px] md:w-[220px] -ml-20">
        <h1 class="z-10 font-cormorant text-6xl md:text-7xl text-slate-50">About Us</h1>
    </div>

    <div class="bg-[#FDF5F3] p-10">
        <div class="grid grid-cols-3 lg:gap-20 py-20">
            <div class="flex justify-center items-center p-10 md:p-0">
                <img src="{{ asset('img/Group 238844.png') }}" alt="" class="hidden md:block md:w-full lg:-mt-20 xl:-mt-32">
            </div>
            <div class="flex flex-col space-y-12 leading-loose justify-center items-center text-[#023A15] text-center">
                <div class="flex flex-col justify-center items-center text-6xl md:text-6xl font-medium">
                    <h1 class="font-cormorant">Beauty is all about</h1>
                    <div>
                        <img src="{{ asset('img/vector-lg.png') }}" alt="" class="absolute z-0 w-[270px] md:w-[250px] -ml-7 lg:-ml-5 xl:-ml-5 xl:mt-0">
                        <h1 class="font-cormorant">masculine and</h1>
                    </div>
                    <div>
                        <img src="{{ asset('img/vector-lg.png') }}" alt="" class="absolute z-0 w-[270px] md:w-[250px] -ml-7 lg:-ml-10 xl:-ml-10 xl:mt-0">
                        <h1 class="font-cormorant">feminine.</h1>
                    </div>
                </div>
                <h1 class="text-xs md:text-sm whitespace-nowrap text-[#567C49] font-medium">This salon serves both men and women with pleasure </h1>
                <div>
                    <img src="{{ asset('img/sign.png') }}" alt="sign" class="mb-1.5">
                    <h1 class="text-lg whitespace-nowrap text-[#567C49] font-medium">Founder & CEO of Chloro</h1>
                </div>
            </div>
            <div class="flex justify-center items-center p-10 md:p-0">
                <img src="{{ asset('img/Group 238845.png') }}" alt="" class="hidden md:block md:w-full">
            </div>
        </div>
    </div>

    <div class="bg-[#DED4D1] px-10 py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 px-2">
            <div class="block md:hidden">
                <img src="{{ asset('img/Group 238846.png') }}" alt="">
            </div>
            <div>
                <div class="flex flex-col justify-center items-center space-y-36 lg:mb-16">
                    <div class="z-10 bg-[#023A15] px-10 py-10 lg:py-14 xl:px-20 lg:px-14 xl:py-32 lg:-mr-32 lg:mt-20 xl:mt-20">
                        <div class="relative">
                            <img src="{{ asset('img/vector-line.png') }}" alt="" class="absolute z-0 w-[130px] lg:w-[150px] left-20 lg:left-24 top-10 lg:top-14">
                            <h1 class="text-5xl lg:text-6xl text-slate-50 font-cormorant mb-10">Our Story</h1>
                        </div>
                        <p class="text-sm lg:text-base text-slate-50">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lobortis erat posuere, tincidunt sem at, sagittis dolor. Sed malesuada orci erat, ut interdum lorem rhoncus eu. Donec justo urna, mattis non maximus.
                        </p>
                    </div>
                </div>
                <div class="flex justify-evenly">
                    <div class="text-center space-y-4">
                        <h1 class="text-7xl font-cormorant text-[#023A15]">955+</h1>
                        <h1 class="text-lg text-[#319E48] font-medium">Happy Customer</h1>
                    </div>
                    <div class="text-center space-y-4">
                        <h1 class="text-7xl font-cormorant text-[#023A15]">240+</h1>
                        <h1 class="text-lg text-[#319E48] font-medium">Happy Customer</h1>
                    </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/Group 238846.png') }}" alt="" class="hidden md:block">
            </div>
        </div>
    </div>

    <div class="bg-[#023A15] py-20 px-10 lg:px-20 xl:px-44">

        <div class="flex items-center justify-center mb-10">
            <img src="{{ asset('img/vector.png') }}" alt="" class="absolute z-0 w-[200px] md:w-[240px] right-20 mt-16 lg:mt-0 lg:right-52 xl:right-[545px]">
            <h1 class="z-10 font-cormorant text-center text-6xl md:text-7xl text-slate-50">Special Service from Beautifs</h1>
        </div>
        <h1 class="text-center text-slate-50 mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin <br> lobortis sed sapien in pretium. Donec tincidunt, quam.</h1>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-7 mb-10">
            <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-20">
                <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg" alt="">
                <div class="text-center py-4 lg:py-7">
                    <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Face Scrub</h1>
                    <h1 class="text-xs lg:text-base text-[#567C49] font-medium mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <div class="flex justify-center">
                        <button class="flex items-center uppercase text-sm lg:text-base text-[#319E48] font-semibold border-b-2 border-[#319E48]">Learn More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon></button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-20">
                <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg" alt="">
                <div class="text-center py-4 lg:py-7">
                    <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Face Message</h1>
                    <h1 class="text-xs lg:text-base text-[#567C49] font-medium mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <div class="flex justify-center">
                        <button class="flex items-center uppercase text-sm lg:text-base text-[#319E48] font-semibold border-b-2 border-[#319E48]">Learn More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon></button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-20">
                <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg" alt="">
                <div class="text-center py-4 lg:py-7">
                    <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Body Message</h1>
                    <h1 class="text-xs lg:text-base text-[#567C49] font-medium mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <div class="flex justify-center">
                        <button class="flex items-center uppercase text-sm lg:text-base text-[#319E48] font-semibold border-b-2 border-[#319E48]">Learn More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon></button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-20">
                <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg" alt="">
                <div class="text-center py-4 lg:py-7">
                    <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Botox Filler</h1>
                    <h1 class="text-xs lg:text-base text-[#567C49] font-medium mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <div class="flex justify-center">
                        <button class="flex items-center uppercase text-sm lg:text-base text-[#319E48] font-semibold border-b-2 border-[#319E48]">Learn More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon></button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-20">
                <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg" alt="">
                <div class="text-center py-4 lg:py-7">
                    <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Pedicure</h1>
                    <h1 class="text-xs lg:text-base text-[#567C49] font-medium mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <div class="flex justify-center">
                        <button class="flex items-center uppercase text-sm lg:text-base text-[#319E48] font-semibold border-b-2 border-[#319E48]">Learn More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon></button>
                    </div>
                </div>
            </div>
            <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-20">
                <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg" alt="">
                <div class="text-center py-4 lg:py-7">
                    <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Face Cleaner</h1>
                    <h1 class="text-xs lg:text-base text-[#567C49] font-medium mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <div class="flex justify-center">
                        <button class="flex items-center uppercase text-sm lg:text-base text-[#319E48] font-semibold border-b-2 border-[#319E48]">Learn More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#FDF5F3] py-10 px-10 lg:px-20 xl:px-44">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 lg:gap-7 mb-10">
            <div class="relative flex flex-col justify-center items-center py-20">
                <div class="relative mb-7">
                    <img src="{{ asset('img/vector-line-lg.png') }}" alt="" class="absolute z-0 w-[230px] lg:w-[300px] right-20 lg:right-0 lg:left-0 bottom-0 lg:bottom-0">
                    <h1 class="z-10 font-cormorant text-[#023A15] text-6xl md:text-7xl">Meet Our Specialist</h1>
                </div>
                <p class="text-[#567C49] font-medium mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin lobortis sed sapien in pretium. Donec tincidunt, quam vestibulum ultricies egestas.</p>
                <div class="mr-auto">
                    <button class="flex items-center rounded-full uppercase text-slate-50 bg-[#023A15] py-4 px-10 cursor-pointer hover:bg-[#002A15]">
                        See More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon>
                    </button>
                </div>
            </div>
            <div class="relative">
                <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-16 xl:mb-24">
                    <img src="https://kccservices.co/en/public/uploads/team-member-2.jpg" alt="">
                </div>
                <div class="text-center absolute bottom-0 left-0 right-0 px-5">
                    <div class="bg-white py-4 lg:py-7">
                        <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Mellisa Lauren</h1>
                        <h1 class="text-xs lg:text-lg text-[#567C49] font-medium mb-4">Specialist</h1>
                        <div class="flex justify-center space-x-5">
                            <a href="#" class="flex items-center rounded-full p-2 text-white text-center text-xl bg-[#023A15]">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                            </a>
                            <a href="#" class="flex items-center rounded-full p-2 text-white text-center text-xl bg-[#023A15]">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                            <a href="#" class="flex items-center rounded-full p-2 text-white text-center text-xl bg-[#023A15]">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-16 xl:mb-24">
                    <img src="https://kccservices.co/en/public/uploads/team-member-2.jpg" alt="">
                </div>
                <div class="text-center absolute bottom-0 left-0 right-0 px-5">
                    <div class="bg-white py-4 lg:py-7">
                        <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Mellisa Lauren</h1>
                        <h1 class="text-xs lg:text-lg text-[#567C49] font-medium mb-4">Specialist</h1>
                        <div class="flex justify-center space-x-5">
                            <a href="#" class="flex items-center rounded-full p-2 text-white text-center text-xl bg-[#023A15]">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                            </a>
                            <a href="#" class="flex items-center rounded-full p-2 text-white text-center text-xl bg-[#023A15]">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                            <a href="#" class="flex items-center rounded-full p-2 text-white text-center text-xl bg-[#023A15]">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#023A15]/70 py-10 lg:py-32 px-10 lg:px-20 xl:px-44">
        <div class="relative mb-10">
            <img src="{{ asset('img/vector-lg.png') }}" alt="" class="absolute z-0 w-[230px] lg:w-[300px] right-0 left-0 bottom-1/2 lg:left-[40%] lg:top-0 xl:right-0 xl:left-1/4">
            <h1 class="z-10 font-cormorant text-center text-6xl md:text-7xl text-slate-50">Get the latest update about our products and services</h1>
        </div>
        <div class="flex justify-center items-center">
            <div class="relative flex justify-center items-center w-96 lg:w-[700px]">
                <button class="absolute right-2 flex justify-center items-center whitespace-nowrap rounded-full uppercase font-semibold text-sm lg:text-base text-center bg-slate-50 text-[#023A15] h-12 lg:h-16 w-32 lg:w-44 cursor-pointer hover:bg-white">
                    Subscribe <ion-icon name="arrow-forward-outline" class="ml-2 lg:ml-5 text-lg lg:text-2xl"></ion-icon>
                </button>
                <input type="email" placeholder="Your Email" class="bg-transparent border-2 rounded-full text-base lg:text-xl text-white h-16 lg:h-20 w-full pl-5 pr-40 lg:pr-48 placeholder:text-slate-100">
            </div>
        </div>
    </div>

@endsection