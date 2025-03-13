@extends('template')
@section('content')
    <div class="w-full h-auto relative lg:-mt-32">
        <div class="hero relative flex justify-center items-center">
            <img src="https://lv2-cdn.azureedge.net/straykids/60cfe84d1cad4fc78adf4398d25917fb-38.jpg" alt=""
                class="w-full max-w-full h-auto">

            <img src="https://logos-world.net/wp-content/uploads/2020/12/Stray-Kids-Emblem.png" alt=""
                class="invert-100 absolute w-1/3 sm:w-1/4">
        </div>

        <div class="w-full text-center bg-neutral-950 py-10 text-md lg:text-2xl  px-4">
            <p class="font-primary text-neutral-50">Stray Kids everywhere all around the world</p>
            <p class="font-primary text-neutral-50 py-2">You make Stray Kids STAY</p>
        </div>
        <div class="w-full text-center bg-neutral-50 py-16 px-4">
            <p class="font-primary text-neutral-950 lg:text-6xl md:text-4xl text-3xl font-semibold">MERCHANDISE</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:mx-20 mx-10 my-10">
                <!-- Product 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative overflow-hidden group">
                        <img src="https://en.thejypshop.com/web/product/big/202412/b9464b1be6111321504de000a7b988a3.jpeg"
                            alt="HOP Album - Limited Edition"
                            class="w-full h-64 object-cover object-center transition-transform duration-500 group-hover:scale-105">

                        <div class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                            NEW
                        </div>

                        <div class="absolute top-2 right-2 bg-black text-white text-xs font-bold px-2 py-1 rounded">
                            -15%
                        </div>

                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button
                                class="bg-white text-gray-900 px-4 py-2 rounded-full font-medium hover:bg-red-600 hover:text-white transition-colors duration-200 mx-1 transform -translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                Quick View
                            </button>
                        </div>
                    </div>

                    <div class="p-4">
                        <div class="text-xs text-gray-500 mb-1">Albums</div>
                        <h3 class="text-gray-900 font-semibold text-lg mb-1">HOP Album - Limited Edition</h3>



                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-400 line-through text-sm">$35.99</span>
                                <span class="text-gray-900 font-bold">$29.99</span>
                            </div>

                            <button class="text-red-600 hover:text-red-500 focus:outline-none" onclick="addToWishlist(1)">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>
                        </div>


                    </div>
                </div>

                <!-- Product 2 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative overflow-hidden group">
                        <img src="https://m.en.thejypshop.com/web/product/small/202501/4e3a4c361ab5abe510c9400da0e9851f.png"
                            alt="Stray Kids SKZOO KEYRING MICRO Ver. - SKZ 5'CLOCK"
                            class="w-full h-64 object-cover object-center transition-transform duration-500 group-hover:scale-105">

                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button
                                class="bg-white text-gray-900 px-4 py-2 rounded-full font-medium hover:bg-red-600 hover:text-white transition-colors duration-200 mx-1 transform -translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                Quick View
                            </button>
                        </div>
                    </div>

                    <div class="p-4">
                        <div class="text-xs text-gray-500 mb-1">SKZOO</div>
                        <h3 class="text-gray-900 font-semibold text-lg mb-1">Stray Kids SKZOO KEYRING MICRO Ver. - SKZ
                            5'CLOCK</h3>


                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-900 font-bold">$12.00</span>
                            </div>

                            <button class="text-red-600 hover:text-red-500 focus:outline-none" onclick="addToWishlist(2)">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>
                        </div>


                    </div>
                </div>

                <!-- Product 3 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative overflow-hidden group">
                        <img src="https://m.en.thejypshop.com/web/product/small/202410/362491d1d19fba31131270f604fa8cf6.jpg"
                            alt="Stray Kids 2025 Season’s Greetings [The Street Kids]"
                            class="w-full h-64 object-cover object-center transition-transform duration-500 group-hover:scale-105">

                        <div class="absolute top-2 left-2 bg-red-600 text-white text-xs font-bold px-2 py-1 rounded">
                            NEW
                        </div>

                        <div
                            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button
                                class="bg-white text-gray-900 px-4 py-2 rounded-full font-medium hover:bg-red-600 hover:text-white transition-colors duration-200 mx-1 transform -translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                Quick View
                            </button>
                        </div>
                    </div>

                    <div class="p-4">
                        <div class="text-xs text-gray-500 mb-1">Season's Greetings</div>
                        <h3 class="text-gray-900 font-semibold text-lg mb-1">Stray Kids 2025 Season’s Greetings [The Street
                            Kids]</h3>
                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-900 font-bold">$45.00</span>
                            </div>

                            <button class="text-red-600 hover:text-red-500 focus:outline-none" onclick="addToWishlist(2)">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </button>
                        </div>

                    </div>
                </div>




            </div>
            <button
                class="mt-2 px-6 py-3 text-white bg-red-600 rounded-md font-semibold text-lg shadow-md transition-transform duration-300 hover:bg-red-700 hover:-translate-y-1 hover:shadow-lg">
                <a href="/shop">See More</a>
            </button>


        </div>
        <div class="w-full text-center bg-neutral-900 py-16 px-4 justify-items-center">
            <p class="font-primary text-neutral-50 lg:text-6xl md:text-4xl text-3xl font-semibold mt-1">LATEST RELEASE</p>
            <div class="relative lg:w-[600px] md:w-[500px] w-[300px] mx-auto py-10">
                <div class="relative w-full pb-[56.25%]">
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/ovHoY8UBIu8?si=A6zd8cXRuwRa7pWG" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>
            <p class="font-secondary text-white -mt-2">Stray Kids "Walkin On Water" M/V</p>
            <button
                class="mt-10 px-6 py-3 text-white bg-red-600 rounded-md font-semibold text-lg shadow-md transition-transform duration-300 hover:bg-red-700 hover:-translate-y-1 hover:shadow-lg">
                <a href="https://www.youtube.com/watch?v=ovHoY8UBIu8">Watch Now</a>
            </button>


        </div>

    </div>
@endsection