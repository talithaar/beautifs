@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <ul class="w-[400px] h-[56px] bg-[#d89376] flex flex-row gap-2 items-center justify-center text-white text-[12px]
         text-center font-semibold">
            <img class="w-[30px]" src="images/warning.svg" alt="">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
