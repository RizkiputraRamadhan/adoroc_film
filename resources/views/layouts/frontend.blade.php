<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<style>
    @keyframes carouselAnim {
        from {
            transform: translate(0, 0);
        }

        to {
            transform: translate(calc(-100% + (6*300px)));
        }
    }

    @media only screen and (max-width: 768px) {
        .container .carousel-items {
            animation: carouselAnim 60s infinite alternate linear;
        }

        @keyframes carouselAnim {
            from {
                transform: translate(0, 0);
            }

            to {
                transform: translate(calc(-100% + (5*300px)));
            }
        }
    }

    .carousel-focus:hover {
        transition: all 0.8s;
        transform: scale(1.1);
    }

    .hide-scrollbar {
        scrollbar-width: none;
        /* Firefox */
        -ms-overflow-style: none;
        /* Internet Explorer 11 */
    }

    .hide-scrollbar::-webkit-scrollbar {
        display: none;
        /* Chrome, Safari, Edge */
    }

    ::-webkit-scrollbar {
        width: 0px;
        border-bottom: 2px solid rgb(168, 168, 168);
    }
</style>

<body>

    <div class="navbar bg-gray-700 shadow-xl ">
        <div class="flex-1">
            <a href="/" class="btn btn-ghost text-xl text-white">ADAROC.COM</a>
        </div>
        <div class="flex-none gap-2">
            <div class="text-white">
                <a class="btn btn-xs" href="#kontak"><b><i class="fa-solid fa-phone-volume text-success"></i> Hubungi Kami</b></a>
                <a class="btn btn-xs" href="#alat"><b><i class="fa-solid fa-magnifying-glass text-info"></i> Cari Barang</b></a>
            </div>
        </div>
    </div>
    </div>

    @yield('content')

    <section id="kontak" class="py-6">
        <div class="grid max-w-6xl grid-cols-1 px-6 mx-auto lg:px-8 md:grid-cols-2 md:divide-x">
            <div class="py-6 md:py-0 md:px-6">
                <h1 class="text-4xl font-bold">Hubungi Kami</h1>
                <p class="pt-2 pb-4">Kami akan merespons dengan cepat pemesanan anda.</p>
                <div class="space-y-4">
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5 mr-2 sm:mr-6">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Jl. Jatijajar No. 180 Kec. Tapos Depok</span>
                    </p>
                    <p class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5 mr-2 sm:mr-6">
                            <path
                                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                            </path>
                        </svg>
                       <a href="https://wa.me/6281995752666"><span>+62 819-9575-2666</span></a>
                    </p>
                </div>
            </div>
            <form class="flex flex-col py-6 space-y-6 md:py-0 md:px-6">
                <h2 class="font-bold text-lg">Lokasi Mitra :</h2>
                <div class="map-responsive">
                    <iframe class="w-full h-48"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.8180400736787!2d106.8670674!3d-6.417421200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb00eef579d9%3A0x527abffb7efab172!2sJl.%20Kelurahan%20Jatijajar%20No.180%2C%20Jatijajar%2C%20Kec.%20Tapos%2C%20Kota%20Depok%2C%20Jawa%20Barat%2016451!5e0!3m2!1sid!2sid!4v1707135465569!5m2!1sid!2sid"
                        frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <a href="https://maps.app.goo.gl/Sruyj46U7YN5dyL38"
                    class=" px-8 py-3 text-lg text-center rounded focus:ring hover:ring focus:ri bg-violet-600 text-gray-50 focus:ri hover:ri">Jelajahi
                    Lokasi</a>
            </form>
        </div>
    </section>
    <footer class="py-6 bg-gray-100 text-gray-900">
        <div class="container px-6 mx-auto space-y-6 divide-y divide-gray-400 md:space-y-12 divide-opacity-50">
            <div class="grid grid-cols-12">
                <div class="pb-6 col-span-full md:pb-0 md:col-span-6">
                    <a rel="noopener noreferrer" href="#" class="flex justify-center space-x-3 md:justify-start">
                        <div class="flex items-center justify-center w-12 h-12 rounded-full bg-violet-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor"
                                class="flex-shrink-0 w-5 h-5 rounded-full text-gray-50">
                                <path
                                    d="M18.266 26.068l7.839-7.854 4.469 4.479c1.859 1.859 1.859 4.875 0 6.734l-1.104 1.104c-1.859 1.865-4.875 1.865-6.734 0zM30.563 2.531l-1.109-1.104c-1.859-1.859-4.875-1.859-6.734 0l-6.719 6.734-6.734-6.734c-1.859-1.859-4.875-1.859-6.734 0l-1.104 1.104c-1.859 1.859-1.859 4.875 0 6.734l6.734 6.734-6.734 6.734c-1.859 1.859-1.859 4.875 0 6.734l1.104 1.104c1.859 1.859 4.875 1.859 6.734 0l21.307-21.307c1.859-1.859 1.859-4.875 0-6.734z">
                                </path>
                            </svg>
                        </div>
                        <span class="self-center text-2xl font-semibold">ADAROC.COM</span>
                    </a>
                </div>


            </div>
            <div class="grid justify-center pt-6 lg:justify-between">
                <div class="flex flex-col self-center text-sm text-center md:block lg:col-start-1 md:space-x-6">
                    <span>©2024 Build with ♥ for ADAROC.COM
                        By <a href="">Kuli IT Tecno</a> </span>

                </div>
                <div class="flex justify-center pt-4 space-x-4 lg:pt-0 lg:col-end-13">
                    <a rel="noopener noreferrer" href="#" title="Email"
                        class="flex items-center justify-center w-10 h-10 rounded-full bg-violet-600 text-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-5 h-5">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                    </a>
                    <a rel="noopener noreferrer" href="#" title="Twitter"
                        class="flex items-center justify-center w-10 h-10 rounded-full bg-violet-600 text-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" fill="currentColor"
                            class="w-5 h-5">
                            <path
                                d="M 50.0625 10.4375 C 48.214844 11.257813 46.234375 11.808594 44.152344 12.058594 C 46.277344 10.785156 47.910156 8.769531 48.675781 6.371094 C 46.691406 7.546875 44.484375 8.402344 42.144531 8.863281 C 40.269531 6.863281 37.597656 5.617188 34.640625 5.617188 C 28.960938 5.617188 24.355469 10.21875 24.355469 15.898438 C 24.355469 16.703125 24.449219 17.488281 24.625 18.242188 C 16.078125 17.8125 8.503906 13.71875 3.429688 7.496094 C 2.542969 9.019531 2.039063 10.785156 2.039063 12.667969 C 2.039063 16.234375 3.851563 19.382813 6.613281 21.230469 C 4.925781 21.175781 3.339844 20.710938 1.953125 19.941406 C 1.953125 19.984375 1.953125 20.027344 1.953125 20.070313 C 1.953125 25.054688 5.5 29.207031 10.199219 30.15625 C 9.339844 30.390625 8.429688 30.515625 7.492188 30.515625 C 6.828125 30.515625 6.183594 30.453125 5.554688 30.328125 C 6.867188 34.410156 10.664063 37.390625 15.160156 37.472656 C 11.644531 40.230469 7.210938 41.871094 2.390625 41.871094 C 1.558594 41.871094 0.742188 41.824219 -0.0585938 41.726563 C 4.488281 44.648438 9.894531 46.347656 15.703125 46.347656 C 34.617188 46.347656 44.960938 30.679688 44.960938 17.09375 C 44.960938 16.648438 44.949219 16.199219 44.933594 15.761719 C 46.941406 14.3125 48.683594 12.5 50.0625 10.4375 Z">
                            </path>
                        </svg>
                    </a>
                    <a rel="noopener noreferrer" href="#" title="GitHub"
                        class="flex items-center justify-center w-10 h-10 rounded-full bg-violet-600 text-gray-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"
                            class="w-5 h-5">
                            <path
                                d="M10.9,2.1c-4.6,0.5-8.3,4.2-8.8,8.7c-0.5,4.7,2.2,8.9,6.3,10.5C8.7,21.4,9,21.2,9,20.8v-1.6c0,0-0.4,0.1-0.9,0.1 c-1.4,0-2-1.2-2.1-1.9c-0.1-0.4-0.3-0.7-0.6-1C5.1,16.3,5,16.3,5,16.2C5,16,5.3,16,5.4,16c0.6,0,1.1,0.7,1.3,1c0.5,0.8,1.1,1,1.4,1 c0.4,0,0.7-0.1,0.9-0.2c0.1-0.7,0.4-1.4,1-1.8c-2.3-0.5-4-1.8-4-4c0-1.1,0.5-2.2,1.2-3C7.1,8.8,7,8.3,7,7.6C7,7.2,7,6.6,7.3,6 c0,0,1.4,0,2.8,1.3C10.6,7.1,11.3,7,12,7s1.4,0.1,2,0.3C15.3,6,16.8,6,16.8,6C17,6.6,17,7.2,17,7.6c0,0.8-0.1,1.2-0.2,1.4 c0.7,0.8,1.2,1.8,1.2,3c0,2.2-1.7,3.5-4,4c0.6,0.5,1,1.4,1,2.3v2.6c0,0.3,0.3,0.6,0.7,0.5c3.7-1.5,6.3-5.1,6.3-9.3 C22,6.1,16.9,1.4,10.9,2.1z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <a href="https://wa.me/6281995752666">
        <img class="fixed bottom-4 right-4 w-20 h-auto fa-bounce"
            src="https://i.ibb.co/d7CkTVn/image-removebg-preview-10.png" alt="WhatsApp" border="0">
    </a>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="{{ asset('backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script>
        function changeMainImage(newSrc) {
            document.getElementById('mainImage').innerHTML = '<figure><img class="rounded object-cover object-fill" src="' +
                newSrc + '" alt="Shoes" /></figure>';
        }

        function showData(id, name) {
            const tabs = document.querySelectorAll('.tabs .tab');
            tabs.forEach(tab => tab.classList.remove('btn-info'));

            const clickedTab = document.getElementById('click-' + id);
            clickedTab.classList.add('btn-info');

            const dataContainers = document.getElementById('idCategories');
            const items = document.querySelectorAll('.grid a');
            localStorage.setItem('selectedCategory', id);
            items.forEach(item => {
                const categoryId = item.querySelector('#idCategories').textContent;
                if (id === '0' || categoryId === id) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            const selectedCategory = localStorage.getItem('selectedCategory');
            if (selectedCategory) {
                showData(selectedCategory, '');
            }
        });

        setTimeout(function() {
            var errorMessage = document.getElementById('errorMessage');
            if (errorMessage) {
                errorMessage.style.display = 'none';
            }
        }, 2000);
        const main_slider = $("#main-slider");
        main_slider.owlCarousel({
            rtl: false,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1
                }
            }
        });

        const slider_thumb = $("#slider-thumb");
        slider_thumb.owlCarousel({
            rtl: false,
            loop: true,
            margin: 12,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 2
                }
            }
        });

        // Custom Navigation Events
        $(".customNextBtn").click(function() {
            main_slider.trigger("next.owl.carousel");
        });
        $(".customPrevBtn").click(function() {
            main_slider.trigger("prev.owl.carousel");
        });

        $(".customNextBtn").click(function() {
            slider_thumb.trigger("next.owl.carousel");
        });
        $(".customPrevBtn").click(function() {
            slider_thumb.trigger("prev.owl.carousel");
        });
    </script>

</body>

</html>
