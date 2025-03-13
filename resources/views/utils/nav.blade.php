<style>
    /* Custom animations for mobile menu */
    .slide-down {
        animation: slide-down 0.3s ease forwards;
    }

    @keyframes slide-down {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    /* Auto-hide animation for navbar */
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        transition: transform 0.3s ease-in-out;
        z-index: 50;
    }
    
    .navbar-hidden {
        transform: translateY(-100%);
    }
</style>

<!-- Navbar -->
<nav id="navbar" class="navbar bg-white py-4 px-6 shadow-sm font-secondary w-full">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="text-red-600 font-bold text-2xl"><img
                        src="https://logos-world.net/wp-content/uploads/2020/12/Stray-Kids-Emblem.png" alt=""
                        class="lg:w-20 md:w-16 w-14 py-3 h-auto hover:scale-110 transition duration-200"></a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-gray-600 hover:text-red-600 transition duration-200 font-semibold">Home</a>
                <a href="/shop" class="text-gray-600 hover:text-red-600 transition duration-200 font-semibold">Shop</a>
                <a href="/music" class="text-gray-600 hover:text-red-600 transition duration-200 font-semibold">Music</a>
            </div>

            <div class="hidden md:flex items-center space-x-4">
                <!-- <a href="#" class="text-gray-700 hover:text-red-600 font-medium transition duration-200">Log in</a> -->
                <a href="https://straykids.jype.com/"
                    class="bg-red-600 text-white px-4 py-2 rounded-full font-medium hover:bg-red-700 transition duration-200">Get
                    started</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-500 hover:text-red-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="md:hidden hidden">
            <div class="px-2 pt-4 pb-3 space-y-4 slide-down">
                <a href="/" class="block text-gray-600 hover:text-red-600 transition duration-200 py-2">Home</a>
                <a href="/shop" class="block text-gray-600 hover:text-red-600 transition duration-200 py-2">Shop</a>
                <a href="/music" class="block text-gray-600 hover:text-red-600 transition duration-200 py-2">Music</a>
                <div class="pt-2 border-t border-gray-200">
                    <!-- <a href="#"
                        class="block text-gray-700 hover:text-red-600 font-medium transition duration-200 py-2">Log
                        in</a> -->
                    <a href="https://straykids.jype.com/"
                        class="block bg-red-600 text-white px-4 py-2 mt-2 rounded-full text-center font-medium hover:bg-red-700 transition duration-200">Get
                        started</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Add spacer to prevent content from being hidden under the fixed navbar -->
<div class="h-20"></div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const navbar = document.getElementById('navbar');
        let lastScrollTop = 0;
        
        // Mobile menu toggle
        mobileMenuButton.addEventListener('click', function () {
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
            }
        });

        // Auto hide navbar on scroll
        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            // If we're scrolling down and we're past a threshold (e.g., 50px)
            if (scrollTop > lastScrollTop && scrollTop > 50) {
                navbar.classList.add('navbar-hidden');
                
                // Also hide mobile menu if it's open
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            } 
            // If we're scrolling up
            else if (scrollTop < lastScrollTop) {
                navbar.classList.remove('navbar-hidden');
            }
            
            lastScrollTop = scrollTop;
        });
    });
</script>