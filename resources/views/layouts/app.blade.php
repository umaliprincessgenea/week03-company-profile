<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThreadCraft Apparel — Earthy, Sustainable Style</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js CDN for Responsive Mobile Drawer Navigation & Interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Tailwind Custom Beige & Warm Brown Color Theme Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        apparelBg: '#F9F6F0',       /* Soft Warm Off-White / Beige */
                        apparelCard: '#FFFFFF',     /* Pure White Card Accent */
                        apparelCardWarm: '#F2ECE1', /* Light Warm Beige */
                        apparelDark: '#2A211B',     /* Rich Deep Espresso Brown */
                        apparelMuted: '#7A6B5D',    /* Warm Taupe / Earthy Gray */
                        apparelAccent: '#9E6B47',   /* Terracotta / Warm Cognac Brown */
                        apparelAccentHover: '#7F5233',/* Darker Cognac Brown */
                        apparelBorder: '#E5DCCB',   /* Warm Sand Border */
                    },
                    fontFamily: {
                        sans: [
                            '-apple-system', 
                            'BlinkMacSystemFont', 
                            '"SF Pro Display"',
                            '"SF Pro Text"',
                            '"Segoe UI"', 
                            'Roboto', 
                            'sans-serif'
                        ],
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(24px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        }
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards',
                        'fade-in-slow': 'fadeIn 1.2s ease-in-out forwards',
                    }
                }
            }
        }
    </script>
    
    <style>
        html { scroll-behavior: smooth; }
        body { 
            background-color: #F9F6F0; 
            color: #2A211B;
            -webkit-font-smoothing: antialiased;
        }
        .delay-100 { animation-delay: 100ms; }
        .delay-200 { animation-delay: 200ms; }
        .delay-300 { animation-delay: 300ms; }
    </style>
</head>
<body class="flex flex-col min-h-screen selection:bg-apparelAccent selection:text-white">

    @include('components.navbar')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>