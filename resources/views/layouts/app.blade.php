<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ThreadCraft Apparel — Sustainable Style</title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- iOS Aesthetic Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        appleBg: '#F5F5F7',
                        appleTextDark: '#1D1D1F',
                        appleTextMuted: '#86868B',
                        appleAccent: '#2C3E35', /* Refined forest green accent for clothing */
                        appleAccentHover: '#1E2B25',
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
                    }
                }
            }
        }
    </script>
    
    <style>
        html { scroll-behavior: smooth; }
        body { 
            background-color: #F5F5F7; 
            color: #1D1D1F;
            -webkit-font-smoothing: antialiased;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">

    @include('components.navbar')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>