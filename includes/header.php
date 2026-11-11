<?php
if (!isset($page_title)) {
    $page_title = "FutureNxt | Empowering the Phygital Economy";
}
if (!isset($current_page)) {
    $current_page = "home";
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <?php
    // Auto-detect base path so clean URLs work on built-in PHP server, Apache, and subfolders
    $script_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
    if (in_array(basename($script_dir), ['about', 'ventures', 'affiliates', 'map', 'contact'])) {
        $script_dir = str_replace('\\', '/', dirname($script_dir));
    }
    $base_href = rtrim($script_dir, '/') . '/';
    if ($base_href === '//') { $base_href = '/'; }
    ?>
    <base href="<?php echo htmlspecialchars($base_href); ?>">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <link rel="shortcut icon" type="image/jpeg" href="assets/images/logo-white.jpg">
    
    <!-- Google Fonts: Plus Jakarta Sans (body) & Montserrat / Playfair Display (luxury accents) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Playfair+Display:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS with Custom Premium Palette -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        champagne: {
                            DEFAULT: '#C6A45C',
                            50: '#FDFBF6',
                            100: '#F9F4E7',
                            200: '#F1E4C7',
                            300: '#E4CF9F',
                            400: '#D4AF37',
                            500: '#C6A45C',
                            600: '#A9873E',
                            700: '#84662B',
                            800: '#5F471C',
                            900: '#3D2D10',
                        },
                        'rich-black': {
                            DEFAULT: '#121212',
                            50: '#2A2A2A',
                            100: '#222222',
                            200: '#1A1A1A',
                            300: '#161616',
                            DEFAULT: '#121212',
                            900: '#0B0B0B',
                        },
                        ivory: {
                            DEFAULT: '#F9F6F0',
                            50: '#FFFFFF',
                            100: '#FDFCF9',
                            200: '#F9F6F0',
                            300: '#F2ECDF',
                            400: '#E7DFC9',
                        },
                        charcoal: {
                            DEFAULT: '#2C2C2C',
                            muted: '#525252',
                            light: '#737373',
                            dark: '#1C1C1C',
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'Inter', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif'],
                        serif: ['"Playfair Display"', 'Georgia', 'serif'],
                    },
                    boxShadow: {
                        'gold-sm': '0 2px 10px -2px rgba(198, 164, 92, 0.15)',
                        'gold-md': '0 8px 30px -4px rgba(198, 164, 92, 0.25)',
                        'gold-glow': '0 0 25px rgba(198, 164, 92, 0.3)',
                        'premium': '0 10px 40px -10px rgba(18, 18, 18, 0.08)',
                    }
                }
            }
        }
    </script>

    <style>
        /* Hallmark & Premium Design Rules: Clean solid space, crisp lines, no AI slop */
        body {
            background-color: #F9F6F0;
            color: #2C2C2C;
            font-family: 'Plus Jakarta Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Gold underline accent helper */
        .gold-divider {
            position: relative;
        }
        .gold-divider::after {
            content: '';
            display: block;
            width: 48px;
            height: 2px;
            background-color: #C6A45C;
            margin-top: 12px;
        }
        .gold-divider-center::after {
            margin-left: auto;
            margin-right: auto;
        }

        /* Subtle metallic foil sheen for borders */
        .border-gold-subtle {
            border-color: rgba(198, 164, 92, 0.25);
        }
        .border-gold-hover:hover {
            border-color: rgba(198, 164, 92, 0.7);
        }

        /* Luxury scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #121212;
        }
        ::-webkit-scrollbar-thumb {
            background: #C6A45C;
            border-radius: 2px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #D4AF37;
        }
    </style>
</head>
<body class="bg-ivory text-charcoal flex flex-col min-h-screen selection:bg-champagne selection:text-rich-black">

    <!-- Main Navigation Header (Clean, Sharp, High Contrast) -->
    <header class="sticky top-0 z-50 bg-rich-black/95 backdrop-blur-md border-b border-champagne/20 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Brand Logo (White Emblem with Gold Border Accent) -->
                <a href="./" class="flex items-center space-x-3 group">
                    <div class="px-2.5 py-1 bg-white border border-champagne/40 rounded-sm shadow-gold-sm transition-all duration-300 group-hover:border-champagne">
                        <img src="assets/images/logo-white.jpg" alt="FutureNxt Logo" class="h-8 sm:h-9 w-auto object-contain">
                    </div>
                </a>

                <!-- Desktop Navigation Menu (Clean URLs without .php) -->
                <nav class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="./" class="px-3.5 py-2 text-sm font-medium tracking-wide transition-colors <?php echo ($current_page == 'home') ? 'text-champagne border-b-2 border-champagne' : 'text-ivory/80 hover:text-champagne'; ?>">
                        Home
                    </a>
                    <a href="about" class="px-3.5 py-2 text-sm font-medium tracking-wide transition-colors <?php echo ($current_page == 'about') ? 'text-champagne border-b-2 border-champagne' : 'text-ivory/80 hover:text-champagne'; ?>">
                        About Us
                    </a>
                    <a href="ventures" class="px-3.5 py-2 text-sm font-medium tracking-wide transition-colors <?php echo ($current_page == 'ventures') ? 'text-champagne border-b-2 border-champagne' : 'text-ivory/80 hover:text-champagne'; ?>">
                        Ventures
                    </a>
                    <a href="affiliates" class="px-3.5 py-2 text-sm font-medium tracking-wide transition-colors <?php echo ($current_page == 'affiliates') ? 'text-champagne border-b-2 border-champagne' : 'text-ivory/80 hover:text-champagne'; ?>">
                        Affiliate
                    </a>
                    <a href="map" class="px-3.5 py-2 text-sm font-medium tracking-wide transition-colors <?php echo ($current_page == 'map') ? 'text-champagne border-b-2 border-champagne' : 'text-ivory/80 hover:text-champagne'; ?>">
                        Presence Map
                    </a>
                    <a href="contact" class="px-3.5 py-2 text-sm font-medium tracking-wide transition-colors <?php echo ($current_page == 'contact') ? 'text-champagne border-b-2 border-champagne' : 'text-ivory/80 hover:text-champagne'; ?>">
                        Contact
                    </a>
                </nav>

                <!-- Header Actions (Sharp Gold Buttons - No Bubbly Rounding) -->
                <div class="hidden lg:flex items-center space-x-4">
                    <a href="contact" class="inline-flex items-center justify-center px-5 py-2.5 text-xs font-semibold uppercase tracking-widest bg-champagne text-rich-black border border-champagne hover:bg-transparent hover:text-champagne transition-all duration-200 rounded-sm shadow-gold-sm">
                        Connect With Us
                        <i class="fa-solid fa-arrow-right-long ml-2"></i>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" type="button" class="p-2 text-ivory hover:text-champagne focus:outline-none" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Drawer Navigation (Clean URLs without .php) -->
        <div id="mobile-menu" class="hidden md:hidden bg-rich-black-100 border-t border-champagne/20 px-4 pt-3 pb-6 space-y-2">
            <a href="./" class="block px-3 py-2.5 rounded-sm text-sm font-medium <?php echo ($current_page == 'home') ? 'bg-rich-black text-champagne border-l-2 border-champagne' : 'text-ivory/80 hover:text-champagne hover:bg-rich-black'; ?>">
                Home
            </a>
            <a href="about" class="block px-3 py-2.5 rounded-sm text-sm font-medium <?php echo ($current_page == 'about') ? 'bg-rich-black text-champagne border-l-2 border-champagne' : 'text-ivory/80 hover:text-champagne hover:bg-rich-black'; ?>">
                About Us
            </a>
            <a href="ventures" class="block px-3 py-2.5 rounded-sm text-sm font-medium <?php echo ($current_page == 'ventures') ? 'bg-rich-black text-champagne border-l-2 border-champagne' : 'text-ivory/80 hover:text-champagne hover:bg-rich-black'; ?>">
                Ventures
            </a>
            <a href="affiliates" class="block px-3 py-2.5 rounded-sm text-sm font-medium <?php echo ($current_page == 'affiliates') ? 'bg-rich-black text-champagne border-l-2 border-champagne' : 'text-ivory/80 hover:text-champagne hover:bg-rich-black'; ?>">
                Affiliate Program
            </a>
            <a href="map" class="block px-3 py-2.5 rounded-sm text-sm font-medium <?php echo ($current_page == 'map') ? 'bg-rich-black text-champagne border-l-2 border-champagne' : 'text-ivory/80 hover:text-champagne hover:bg-rich-black'; ?>">
                Presence Map
            </a>
            <a href="contact" class="block px-3 py-2.5 rounded-sm text-sm font-medium <?php echo ($current_page == 'contact') ? 'bg-rich-black text-champagne border-l-2 border-champagne' : 'text-ivory/80 hover:text-champagne hover:bg-rich-black'; ?>">
                Contact Us
            </a>
            <div class="pt-4 border-t border-champagne/10">
                <a href="contact" class="w-full text-center block py-2.5 px-4 text-xs font-semibold uppercase tracking-widest bg-champagne text-rich-black border border-champagne rounded-sm shadow-gold-sm">
                    Connect With Us
                </a>
            </div>
        </div>
    </header>

    <script>
        // Mobile menu toggle with icon switch
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        menuBtn?.addEventListener('click', function() {
            const isHidden = mobileMenu.classList.toggle('hidden');
            const icon = menuBtn.querySelector('i');
            if (icon) {
                if (isHidden) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars-staggered');
                } else {
                    icon.classList.remove('fa-bars-staggered');
                    icon.classList.add('fa-xmark');
                }
            }
        });
    </script>
