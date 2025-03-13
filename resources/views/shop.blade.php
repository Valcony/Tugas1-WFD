@extends('template')
@section('content')

    <div class="w-full h-auto py-12 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Catalog Header -->
            <div class="text-center mb-12">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900">STRAY KIDS Official Store Catalog</h1>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">Exclusive items from the "HOP" album collection and more.
                </p>
            </div>

            <!-- Filter options -->
            <div class="flex flex-wrap items-center justify-between mb-8">
                <div class="w-full md:w-auto mb-4 md:mb-0">
                    <div class="inline-flex rounded-md shadow-sm">
                        <button type="button"
                            class="px-4 py-2 text-sm font-medium text-red-600 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-red-500 focus:text-red-700">
                            All Items
                        </button>
                        <button type="button"
                            class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-r border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-red-500">
                            Albums
                        </button>
                        <button type="button"
                            class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-r border-gray-200 hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-red-500">
                            Apparel
                        </button>
                        <button type="button"
                            class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-r border-gray-200 rounded-r-lg hover:bg-gray-100 hover:text-red-700 focus:z-10 focus:ring-2 focus:ring-red-500">
                            Accessories
                        </button>
                    </div>
                </div>
                <div class="w-full md:w-auto">
                    <select
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5">
                        <option selected>Sort by</option>
                        <option value="newest">Newest</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="popular">Most Popular</option>
                    </select>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <!-- Product 1 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative overflow-hidden group">
                        <img src="https://en.thejypshop.com/web/product/big/202412/b9464b1be6111321504de000a7b988a3.jpeg" alt="HOP Album - Limited Edition"
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
                        <img src="https://m.en.thejypshop.com/web/product/small/202501/4e3a4c361ab5abe510c9400da0e9851f.png" alt="Stray Kids SKZOO KEYRING MICRO Ver. - SKZ 5'CLOCK"
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
                        <h3 class="text-gray-900 font-semibold text-lg mb-1">Stray Kids SKZOO KEYRING MICRO Ver. - SKZ 5'CLOCK</h3>


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
                        <img src="https://m.en.thejypshop.com/web/product/small/202410/362491d1d19fba31131270f604fa8cf6.jpg" alt="Stray Kids 2025 Season’s Greetings [The Street Kids]"
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
                        <h3 class="text-gray-900 font-semibold text-lg mb-1">Stray Kids 2025 Season’s Greetings [The Street Kids]</h3>
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

                <!-- Product 4 -->
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg">
                    <div class="relative overflow-hidden group">
                        <img src="https://m.en.thejypshop.com/web/product/small/202501/05071a5062a95b91b8e8fe248aaa04b9.png" alt="Stray Kids SKZOO KEYRING MICRO Ver. - SKZ 5'CLOCK"
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
                        <h3 class="text-gray-900 font-semibold text-lg mb-1">Stray Kids SKZOO HOOD BLANKET - SKZ 5'CLOCK</h3>


                        <div class="flex justify-between items-center">
                            <div>
                                <span class="text-gray-900 font-bold">$56.00</span>
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
        </div>
    </div>

@endsection