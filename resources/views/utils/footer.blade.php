<footer class="bg-gradient-to-r from-black via-gray-900 to-black text-white py-12 relative overflow-hidden">
    <!-- Animated background elements inspired by HOP album -->
    <div class="absolute inset-0 opacity-20">
        <div class="hop-particle top-1/4 left-1/3"></div>
        <div class="hop-particle top-1/2 right-1/4 delay-500"></div>
        <div class="hop-particle bottom-1/3 left-1/2 delay-1000"></div>
    </div>

    <div class="container mx-auto px-6 md:px-12 relative z-10">
        <!-- Main content grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mb-10">
            <!-- Logo & Album section -->
            <div class="col-span-1 md:col-span-2 lg:col-span-1">
                <img src="https://logos-world.net/wp-content/uploads/2020/12/Stray-Kids-Emblem.png" alt=""
                    class="invert-100 z-50 w-1/3">

                <p class="text-gray-400 mb-4 max-w-xs">Experience Stray Kids' latest album "HOP" featuring their
                    signature blend of EDM, hip-hop, and experimental sounds.</p>
                <a href="#" class="inline-flex items-center group">
                    <span class="hop-btn">LISTEN NOW</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>

            <!-- Quick Links -->
            <div class="col-span-1">
                <h3 class="text-xl font-semibold mb-4 border-b border-red-500 pb-2 inline-block">Quick Links</h3>
                <ul class="space-y-3">
                    <li><a href="/" class="hover-underline-animation">Home</a></li>
                    <li><a href="/shop" class="hover-underline-animation">Shop</a></li>
                    <li><a href="/music" class="hover-underline-animation">Music</a></li>
                </ul>
            </div>


            <!-- Newsletter & Social -->
            <div class="col-span-1 md:col-span-2 lg:col-span-1">
                <h3 class="text-xl font-semibold mb-4 border-b border-red-500 pb-2 inline-block">Join STAY</h3>
                <p class="text-gray-400 mb-4">STAY in touch through our socials.</p>
                <div class="flex space-x-4">
                    <a href="https://x.com/Stray_Kids" class="social-link" aria-label="Twitter">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/realstraykids/" class="social-link" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/@StrayKids" class="social-link" aria-label="YouTube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="https://www.tiktok.com/@jypestraykids" class="social-link" aria-label="TikTok">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>


        <!-- Copyright and Terms -->
        <div class="flex flex-col md:flex-row justify-center items-center text-gray-400 text-sm">
            <p>&copy; 2025 JYP Entertainment. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<style>
    /* Neon Text Effect */
    .neon-text {
        text-shadow: 0 0 5px #ff0000, 0 0 10px #ff3333, 0 0 15px #ff6666;
        animation: pulsate 2s infinite alternate;
    }

    @keyframes pulsate {
        0% {
            text-shadow: 0 0 5px #ff0000, 0 0 10px #ff3333, 0 0 15px #ff6666;
        }

        100% {
            text-shadow: 0 0 10px #ff0000, 0 0 20px #ff3333, 0 0 30px #ff6666;
        }
    }

    /* HOP text effect */
    .hop-text {
        color: #ff3333;
        text-shadow: 0 0 8px rgba(255, 51, 51, 0.5);
        letter-spacing: 0.5em;
    }

    /* Listen Now button */
    .hop-btn {
        color: white;
        position: relative;
        font-weight: 600;
        letter-spacing: 0.1em;
        transition: all 0.3s ease;
    }

    .hop-btn:hover {
        color: #ff3333;
    }

    /* Hover animation for links */
    .hover-underline-animation {
        display: inline-block;
        position: relative;
        transition: color 0.3s ease;
    }

    .hover-underline-animation:after {
        content: '';
        position: absolute;
        width: 100%;
        transform: scaleX(0);
        height: 2px;
        bottom: -2px;
        left: 0;
        background-color: #ff3333;
        transform-origin: bottom right;
        transition: transform 0.3s ease-out;
    }

    .hover-underline-animation:hover {
        color: #ff3333;
    }

    .hover-underline-animation:hover:after {
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    /* Social Media Icon Styling */
    .social-link {
        font-size: 1.5rem;
        transition: all 0.3s ease-in-out;
        color: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .social-link:hover {
        color: #ff0000;
        background-color: rgba(255, 255, 255, 0.2);
        text-shadow: 0 0 8px #ff3333;
        transform: translateY(-2px);
    }

    /* Animated particles for HOP theme */
    .hop-particle {
        position: absolute;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(255, 51, 51, 0.2) 0%, rgba(255, 51, 51, 0) 70%);
        animation: float 8s infinite ease-in-out;
    }

    .delay-500 {
        animation-delay: 0.5s;
    }

    .delay-1000 {
        animation-delay: 1s;
    }

    @keyframes float {
        0% {
            transform: translateY(0) scale(1);
            opacity: 0.3;
        }

        50% {
            transform: translateY(-20px) scale(1.1);
            opacity: 0.5;
        }

        100% {
            transform: translateY(0) scale(1);
            opacity: 0.3;
        }
    }
</style>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>