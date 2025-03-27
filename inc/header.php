<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the rich history and remarkable collection of The French Museum, showcasing masterpieces of 19th and 20th-century art. Immerse yourself in a journey through the evolution of artistic movements.">
    <meta name="keywords" content="French art museum, 19th century art, modern art, impressionism, symbolism, romanticism, surrealism, classic art, art history, art exhibitions, famous art collections">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'The French Museum'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.getElementById('menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            menuButton.addEventListener('click', function() {
                const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';
                menuButton.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                menuButton.querySelector('svg').classList.toggle('rotate-90');
            });
        });
    </script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <style>
        .swiper-slide {
            opacity: 0.5;
            transition: opacity 0.3s;
        }
        .swiper-slide-active {
            opacity: 1;
        }
    </style>
    <style>
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease-out, transform 0.8s ease-out;
    }
    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }
    .gold-hover {
      position: relative;
      overflow: hidden;
      cursor: pointer;
    }
    .gold-hover img {
      transition: transform 0.5s, filter 0.5s;
    }
    .gold-hover:hover img {
      transform: scale(1.05);
      filter: brightness(0.7);
    }
    .info-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      color: white;
      opacity: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      transition: opacity 0.5s;
      padding: 20px;
      text-align: center;
    }
    .gold-hover:hover .info-overlay {
      opacity: 1;
    }
    .gradient-bg {
      background: radial-gradient(circle at 30% 30%, #f4ede4, #fffaf0);
    }
  </style>
</head>
<body class="bg-[#f8f8f8] text-gray-800 font-sans antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <a href="/" class="text-2xl font-bold text-blue-600">The French Museum</a>
                
                <!-- Desktop menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="/about/" class="hover:text-blue-600">About Us</a>
                    <a href="/en/whats-on/" class="hover:text-blue-600">What's on</a>
                    <a href="/en/visit/" class="hover:text-blue-600">Visiting Information</a>
                    <a href="/en/visit/admission-opening-times-tickets/" class="hover:text-blue-600">Admission</a>
                    <a href="/en/collections/" class="hover:text-blue-600">Collections</a>
                    <a href="/contacts/" class="hover:text-blue-600">Contacts</a>
                </div>

                <!-- Mobile button -->
                <button 
                    id="menu-button"
                    class="md:hidden p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500"
                    aria-label="Menu"
                    aria-expanded="false"
                    aria-controls="mobile-menu"
                >
                    <svg 
                        class="h-6 w-6 transition-transform" 
                        xmlns="http://www.w3.org/2000/svg" 
                        fill="none" 
                        viewBox="0 0 24 24" 
                        stroke="currentColor"
                    >
                        <path 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            stroke-width="2" 
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div 
            id="mobile-menu" 
            class="md:hidden hidden absolute w-full bg-white shadow-lg py-2 z-40"
        >
            <a 
                href="/about/" 
                class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600"
            >
                About Us
            </a>
            <a 
                href="/en/whats-on/" 
                class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600"
            >
                What's on
            </a>
            <a 
                href="/en/visit/" 
                class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600"
            >
                Visiting Information
            </a>
            <a 
                href="/en/visit/admission-opening-times-tickets/" 
                class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600"
            >
                Admission
            </a>
            <a 
                href="/en/collections/" 
                class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600"
            >
                Collections
            </a>
            <a 
                href="/contacts/" 
                class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-blue-600"
            >
                Contacts
            </a>
        </div>

    </nav>