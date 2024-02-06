@extends('layouts.frontend')
@section('title',  $showPost->nama )
@section('content')
    <div class="antialiased">
        <div class="bg-white shadow-sm sticky top-0">
            <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8 py-1 md:py-4">
                <div class="py-6">

                    <!-- Breadcrumbs -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex items-center space-x-2 text-gray-400 text-sm">
                            <a href="/" class="hover:underline hover:text-gray-600">Home</a>
                            <span>
                                <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </span>
                            <a href="#" class="hover:underline hover:text-gray-600">{{ $showPost->nama }}</a>
                        </div>
                    </div>
                    <!-- ./ Breadcrumbs -->

                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
                        <div class="flex flex-col md:flex-row -mx-4">
                            <div class="md:flex-1 px-4">
                                <div>
                                    <div class="h-64 md:h-80 rounded-lg mb-4">
                                        <div class="h-64 md:h-80 rounded-lg  mb-4 flex items-center justify-center">
                                            <div id="mainImage"
                                                class="rounded transition-transform transform hover:scale-125">
                                                <figure><img class="rounded object-cover object-fill"
                                                        src="{{ asset('storage/' . $showPost->{'img-1'}) }}"
                                                        alt="Shoes" /></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="md:flex-1 px-4">
                                <div class="flex flex-col mb-3">
                                    <div class="flex space-x-5">
                                        @if ($showPost->{'img-1'})
                                            <a class="cursor-pointer"
                                                onclick="changeMainImage('{{ asset('storage/' . $showPost->{'img-1'}) }}')">
                                                <img alt=""
                                                    class="w-12 h-12 rounded ri ri bg-gray-500 ri ri transition-transform transform hover:scale-x-150 "
                                                    src="{{ asset('storage/' . $showPost->{'img-1'}) }}">
                                            </a>
                                        @endif
                                        @if ($showPost->{'img-2'})
                                            <a class="cursor-pointer"
                                                onclick="changeMainImage('{{ asset('storage/' . $showPost->{'img-2'}) }}')">
                                                <img alt=""
                                                    class="w-12 h-12 rounded ri ri bg-gray-500 ri ri transition-transform transform hover:scale-x-150 "
                                                    src="{{ asset('storage/' . $showPost->{'img-2'}) }}">
                                            </a>
                                        @endif
                                        @if ($showPost->{'img-3'})
                                            <a class="cursor-pointer"
                                                onclick="changeMainImage('{{ asset('storage/' . $showPost->{'img-3'}) }}')">
                                                <img alt=""
                                                    class="w-12 h-12 rounded ri ri bg-gray-500 ri ri transition-transform transform hover:scale-x-150 "
                                                    src="{{ asset('storage/' . $showPost->{'img-3'}) }}">
                                            </a>
                                        @endif
                                        @if ($showPost->{'img-4'})
                                            <a class="cursor-pointer"
                                                onclick="changeMainImage('{{ asset('storage/' . $showPost->{'img-4'}) }}')">
                                                <img alt=""
                                                    class="w-12 h-12 rounded ri ri bg-gray-500 ri ri transition-transform transform hover:scale-x-150 "
                                                    src="{{ asset('storage/' . $showPost->{'img-4'}) }}">
                                            </a>
                                        @endif
                                        @if ($showPost->{'img-5'})
                                            <a class="cursor-pointer"
                                                onclick="changeMainImage('{{ asset('storage/' . $showPost->{'img-5'}) }}')">
                                                <img alt=""
                                                    class="w-12 h-12 rounded ri ri bg-gray-500 ri ri transition-transform transform hover:scale-x-150 "
                                                    src="{{ asset('storage/' . $showPost->{'img-5'}) }}">
                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                                    {{ $showPost->nama }}</h2>
                                <div class="flex items-center space-x-4 my-4">
                                    <div class="flex-1">
                                        <p class="text-green-500 text-xl font-semibold">Rp. {{ $showPost->harga }}</p>
                                        <p class="text-gray-400 text-sm">
                                            @if ($showPost->status == 1)
                                                <p class="badge badge-success font-medium">masih tersedia</p>
                                            @else
                                                <p class="badge badge-error font-medium">sedang disewa</p>
                                            @endif
                                        </p>
                                    </div>
                                </div>

                                <p>
                                    {!! $showPost->desc !!}
                                </p>

                                <div class="flex py-4 space-x-4">
                                    <a target="blank" href="https://wa.me/6281995752666?text=Apakah+{{ $showPost->nama }}+masih+tersedia ?" class="btn btn "> <span class="font-bold">Sewa  {{ $showPost->nama }} ini</span> <img
                                            class="w-10 border-l-2 p-1 border-gray-500"
                                            src="https://i.ibb.co/d7CkTVn/image-removebg-preview-10.png"
                                            alt="image-removebg-preview-10" border="0"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('frontend.card')
        @endsection
