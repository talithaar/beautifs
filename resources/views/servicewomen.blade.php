@extends('layout.layout')

@section('main')
    <div class="bg-[#023A15] flex items-center justify-center h-72">
        <img src="{{ asset('img/vector.png') }}" alt="" class="absolute z-0 w-[200px] md:w-[220px] ml-56">
        <h1 class="z-10 font-cormorant text-6xl md:text-7xl text-slate-50">Service Details</h1>
    </div>

    <div class="bg-[#FDF5F3] p-10">
        <div class="grid grid-cols-1 md:grid-cols-2 px-2">
            <div>
                <img src="{{ asset('img/Group 238847.png') }}" alt="">
            </div>
            <div class="flex flex-col justify-center items-center lg:px-20">
                <div class="relative mb-4">
                    <img src="{{ asset('img/vector-lg.png') }}" alt="" class="absolute z-0 w-[130px] lg:w-[240px] right-0 lg:left-0 top-2 lg:top-0">
                    <h1 class="z-10 font-cormorant text-[#023A15] text-5xl md:text-6xl">
                    Feminine Service
                    </h1>
                </div>
                <div class="w-full flex justify-between">
                    <h1 class="z-10 font-cormorant text-[#023A15] text-2xl md:text-3xl">
                        Description
                    </h1>
                    <div class="flex h-16">
                        <h1 class="text-sm lg:text-base text-[#567C49] font-normal mt-auto mb-7">/session</h1>
                    </div>
                </div>
                <p class="text-xs lg:text-base text-[#567C49] font-medium">
                    Feminine service merupakan sebuah jasa kecantikan yang berhubungan dengan perawatan kecantikan dan kosmetik untuk  wanita. Dimana Beautifs sebagai tempat untuk memperindah dan mempercantik tubuh dengan menyediakan perawatan yang berkaitan dengan kesehatan kulit, keindahan rambut, estetika wajah, perawatan kaki, perawatan kuku, waxing atau hair removal lainnya, dan sebagainya yang berhubungan dengan pelayanan kecantikan tubuh.
                </p>
                <hr class="w-full bg-[#023A15] h-0.5 mt-10 mb-7">
                <div class="w-full flex justify-between mb-5">
                    <h1 class="z-10 font-cormorant text-[#023A15] text-2xl md:text-3xl">
                        Our Service
                    </h1>
                </div>
                <div class="w-full grid grid-cols-2 gap-5">
                    <div class="flex space-x-3 items-center">
                        <ion-icon name="checkmark" class="text-[#319E48] text-xl"></ion-icon>
                        <h1 class="text-xs lg:text-base text-[#567C49] font-medium">Face Scrub</h1>
                    </div>
                    <div class="flex space-x-3 items-center">
                        <ion-icon name="checkmark" class="text-[#319E48] text-xl"></ion-icon>
                        <h1 class="text-xs lg:text-base text-[#567C49] font-medium">Face Cleaner</h1>
                    </div>
                    <div class="flex space-x-3 items-center">
                        <ion-icon name="checkmark" class="text-[#319E48] text-xl"></ion-icon>
                        <h1 class="text-xs lg:text-base text-[#567C49] font-medium">Face Message</h1>
                    </div>
                    <div class="flex space-x-3 items-center">
                        <ion-icon name="checkmark" class="text-[#319E48] text-xl"></ion-icon>
                        <h1 class="text-xs lg:text-base text-[#567C49] font-medium">Pedicure</h1>
                    </div>
                    <div class="flex space-x-3 items-center">
                        <ion-icon name="checkmark" class="text-[#319E48] text-xl"></ion-icon>
                        <h1 class="text-xs lg:text-base text-[#567C49] font-medium">Body Message</h1>
                    </div>
                    <div class="flex space-x-3 items-center">
                        <ion-icon name="checkmark" class="text-[#319E48] text-xl"></ion-icon>
                        <h1 class="text-xs lg:text-base text-[#567C49] font-medium">Botox Filler</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#023A15] py-10 lg:py-32 pl-10 lg:pl-20 xl:px-44">
        <div class="grid grid-cols-3 gap-3">
            <div>
                <div class="relative mb-14">
                    <img src="{{ asset('img/vector-line-lg.png') }}" alt="" class="absolute z-0 w-[270px] lg:w-[230px] bottom-0 right-0 lg:bottom-0 lg:right-7 xl:right-44">
                    <h1 class="z-10 font-cormorant text-4xl md:text-6xl text-slate-50">Our Specialist</h1>
                </div>
                <h1 class="text-slate-50 mb-14">Silahkan tentukan pricelist anda</h1>
                <button class="flex justify-center items-center whitespace-nowrap rounded-full uppercase text-sm font-semibold lg:text-base text-center text-[#023A15] bg-slate-50 h-14 px-5 cursor-pointer hover:bg-white">
                    Choose Now <ion-icon name="arrow-forward-outline" class="ml-2 lg:ml-5 text-lg lg:text-2xl"></ion-icon>
                </button>
            </div>
            <div class="w-full col-span-2">
                <div class="flex space-x-5 pb-3 overflow-x-scroll mb-3">
                    <img src="https://kccservices.co/en/public/uploads/team-member-2.jpg" alt="" width="280px" class="rounded-t-full">
                    <img src="https://kccservices.co/en/public/uploads/team-member-2.jpg" alt="" width="280px" class="rounded-t-full">
                    <img src="https://kccservices.co/en/public/uploads/team-member-2.jpg" alt="" width="280px" class="rounded-t-full">      
                    <img src="https://kccservices.co/en/public/uploads/team-member-2.jpg" alt="" width="280px" class="rounded-t-full">
                    <img src="https://kccservices.co/en/public/uploads/team-member-2.jpg" alt="" width="280px" class="rounded-t-full">
                </div>
                <div class="flex space-x-7">
                    <button>
                        <img src="{{ asset('img/left.png') }}" alt="left">
                    </button>
                    <button>
                        <img src="{{ asset('img/right.png') }}" alt="right">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#FDF5F3] p-10">
        <div class="grid grid-cols-1 md:grid-cols-2 px-2">
            <div>
                <img src="{{ asset('img/Group 238848.png') }}" alt="">
            </div>
            <div class="flex flex-col justify-center items-center lg:px-20">
                <div class="relative mb-4">
                    <img src="{{ asset('img/vector-lg.png') }}" alt="" class="absolute z-0 w-[130px] lg:w-[240px] right-0 lg:left-0 top-2 lg:top-0">
                    <h1 class="z-10 font-cormorant text-[#023A15] text-5xl md:text-6xl">
                    Masculine Service
                    </h1>
                </div>
                <div class="w-full flex justify-between">
                    <h1 class="z-10 font-cormorant text-[#023A15] text-2xl md:text-3xl">
                        Description
                    </h1>
                    <div class="flex h-16">
                        <h1 class="text-sm lg:text-base text-[#567C49] font-normal mt-auto mb-7">/session</h1>
                    </div>
                </div>
                <p class="text-xs lg:text-sm text-[#567C49] font-medium">
                    Masculine service adalah layanan yang khusus dirancang untuk pria. Layanan masculine service umumnya menawarkan perawatan tubuh yang meliputi pijat, perawatan kulit wajah, perawatan kuku, dan perawatan rambut.
                    Masculine service juga dapat menjadi tempat yang tepat bagi para pria yang ingin menikmati waktu sendiri atau menghindari keramaian. Beberapa masculine service juga menawarkan layanan eksklusif seperti perawatan kulit yang dirancang khusus untuk kulit pria, atau pijat yang fokus pada otot-otot khusus seperti otot-otot punggung dan bahu.
                </p>
                <hr class="w-full bg-[#023A15] h-0.5 mt-4 mb-7">
                <div class="w-full flex justify-between mb-5">
                    <h1 class="z-10 font-cormorant text-[#023A15] text-2xl md:text-3xl">
                        Our Service
                    </h1>
                </div>
                <div class="w-full grid grid-cols-2 gap-5">
                    <div class="flex space-x-3 items-center">
                        <ion-icon name="checkmark" class="text-[#319E48] text-xl"></ion-icon>
                        <h1 class="text-xs lg:text-base text-[#567C49] font-medium">Hair Cut</h1>
                    </div>
                    <div class="flex space-x-3 items-center">
                        <ion-icon name="checkmark" class="text-[#319E48] text-xl"></ion-icon>
                        <h1 class="text-xs lg:text-base text-[#567C49] font-medium">Beard Grooming</h1>
                    </div>
                    <div class="flex space-x-3 items-center">
                        <ion-icon name="checkmark" class="text-[#319E48] text-xl"></ion-icon>
                        <h1 class="text-xs lg:text-base text-[#567C49] font-medium">Color Hair</h1>
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