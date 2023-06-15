@extends('layout.layout')

@section('main')
    <div class="bg-[#023A15] flex items-center justify-center h-72">
        <img src="{{ asset('img/vector.png') }}" alt="" class="absolute z-0 w-[200px] md:w-[220px] ml-32">
        <h1 class="z-10 font-cormorant text-6xl md:text-7xl text-slate-50">Our Service</h1>
    </div>

    <div class="bg-[#FDF5F3] p-10">
        <div class="flex items-center justify-center mb-10">
            <img src="{{ asset('img/vector.png') }}" alt="" class="absolute z-0 w-[200px] md:w-[240px] right-20 mt-16 lg:mt-0 lg:right-52 xl:right-[545px]">
            <h1 class="z-10 font-cormorant text-center text-[#023A15] text-6xl md:text-7xl">Special Service from Beautifs</h1>
        </div>
        <h1 class="text-center text-slate-50 mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin <br> lobortis sed sapien in pretium. Donec tincidunt, quam.</h1>
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-7 mb-10">
            <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-20">
                <img src="https://img.freepik.com/premium-vector/beautiful-woman-with-facial-mask_165488-2968.jpg?w=740" alt="">
                <div class="text-center py-4 lg:py-7">
                    <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Face Scrub</h1>
                    <h1 class="text-xs lg:text-base text-[#567C49] font-medium mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <a href="{{ url('/service') }}" class="flex justify-center">
                        <button class="flex items-center uppercase text-sm lg:text-base text-[#319E48] font-semibold border-b-2 border-[#319E48]">Learn More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon></button>
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-20">
                <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg" alt="">
                <div class="text-center py-4 lg:py-7">
                    <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Face Message</h1>
                    <h1 class="text-xs lg:text-base text-[#567C49] font-medium mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <a href="{{ url('/service') }}" class="flex justify-center">
                        <button class="flex items-center uppercase text-sm lg:text-base text-[#319E48] font-semibold border-b-2 border-[#319E48]">Learn More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon></button>
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-20">
                <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg" alt="">
                <div class="text-center py-4 lg:py-7">
                    <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Body Message</h1>
                    <h1 class="text-xs lg:text-base text-[#567C49] font-medium mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <a href="{{ url('/service') }}" class="flex justify-center">
                        <button class="flex items-center uppercase text-sm lg:text-base text-[#319E48] font-semibold border-b-2 border-[#319E48]">Learn More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon></button>
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-20">
                <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg" alt="">
                <div class="text-center py-4 lg:py-7">
                    <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Botox Filler</h1>
                    <h1 class="text-xs lg:text-base text-[#567C49] font-medium mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <a href="{{ url('/service') }}" class="flex justify-center">
                        <button class="flex items-center uppercase text-sm lg:text-base text-[#319E48] font-semibold border-b-2 border-[#319E48]">Learn More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon></button>
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-20">
                <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg" alt="">
                <div class="text-center py-4 lg:py-7">
                    <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Pedicure</h1>
                    <h1 class="text-xs lg:text-base text-[#567C49] font-medium mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <a href="{{ url('/service') }}" class="flex justify-center">
                        <button class="flex items-center uppercase text-sm lg:text-base text-[#319E48] font-semibold border-b-2 border-[#319E48]">Learn More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon></button>
                    </a>
                </div>
            </div>
            <div class="flex flex-col justify-center bg-white rounded-t-full overflow-hidden mb-20">
                <img src="http://www.listercarterhomes.com/wp-content/uploads/2013/11/dummy-image-square.jpg" alt="">
                <div class="text-center py-4 lg:py-7">
                    <h1 class="text-2xl lg:text-4xl font-cormorant text-[#023A15] mb-2 lg:mb-4">Face Cleaner</h1>
                    <h1 class="text-xs lg:text-base text-[#567C49] font-medium mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <a href="{{ url('/service') }}" class="flex justify-center">
                        <button class="flex items-center uppercase text-sm lg:text-base text-[#319E48] font-semibold border-b-2 border-[#319E48]">Learn More <ion-icon name="arrow-forward-outline" class="ml-5 text-2xl"></ion-icon></button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#023A15]">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div>
                <img src="{{ asset('img/placeholder.png') }}" alt="">
            </div>
            <div class="flex flex-col justify-center items-center bg-[#023A15] px-20">
                <div class="relative mb-16">
                    <img src="{{ asset('img/vector-line-lg.png') }}" alt="" class="absolute z-0 w-[130px] lg:w-[250px] left-20 lg:left-0 top-10 lg:top-32">
                    <h1 class="z-10 font-cormorant text-slate-50 text-5xl md:text-6xl">
                    Review From Our Customer
                    </h1>
                </div>
                <p class="text-xs lg:text-base text-slate-50 font-normal mb-7">
                    “Saya mengambil hair coloring dan hair cut. Permasalahan yang saya hadapi adalah warna rambut saya yang sangat menguning dari sisa bleaching dan saya menginginkan warna rambut yang cukup terang namun tidak memungkinkan bagi rambut saya untuk dibleaching kembali. Solusi yang diberikan seletah berkonsultasi sangat professional, rambut saya dicoloring dengan teknik tertentu seperti highlight namun tanpa menggunakan bleaching tambahan. Hasilnya sangat memuaskan warna rambut saya yang sudah tidak merata menjadi warna ash blonde dengan detil highlight selain itu hasil hair cut pun sangat memuaskan, rambut saya jadi lebih mudah ditata.”
                </p>
                <div class="w-full flex justify-between items-center">
                    <div>
                        <h1 class="font-cormorant lg:text-2xl text-slate-50">Veronika Jane</h1>
                        <h1 class="text-base text-slate-50">Customer</h1>
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