@extends('layouts.frontend')
@section('title', 'Home')
@section('content')
    <div class="container mx-auto w-full overflow-hidden relative">
        <div class="w-full h-full absolute">
            <div class="w-1/4 h-full absolute z-50 left-0"
                style="background: linear-gradient(to right, #ffffff 0%, rgba(255, 255, 255, 0) 100%);"></div>
            <div class="w-1/4 h-full absolute z-50 right-0"
                style="background: linear-gradient(to left, #ffffff 0%, rgba(255, 255, 255, 0) 100%);"></div>
        </div>

        <div class="carousel-items flex items-center justify-center"
            style="width: fit-content; animation: carouselAnim 10s infinite alternate linear;">
            @foreach ($randomPost as $row )
            <div class="carousel-focus flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-lg shadow-lg"
                style="width: 270px;">

                <!-- <button class="absolute top-0 right-0 bg-indigo-500 rounded-full px-1 py-0 font-bold text-lg">+</button> -->
                <span class="text-black font-bold text-xl mb-3">{{ $row->nama }}</span>
                <img class="w-26 rounded shadow-2xl"
                    src="{{ asset('storage/'.$row->{'img-1'}) }}" alt="Img">
                <a href="/detail/{{ $row->id }}" class="btn btn-sm mt-2 btn-success">Lihat Detailnya</a>

            </div>
            @endforeach
        </div>
    </div>

    @include('frontend.card')

@endsection
