<?php
// Configuration
$business_name = "Irfan Taxi";
$phone_number = "918088943818"; // Replace with actual WhatsApp number (with country code, no + or spaces)
$email = "irfanmujavara@gmail.com";
$address = "Panaji, Goa, India";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name'] ?? '');
    $phone = htmlspecialchars($_POST['phone'] ?? '');
    $pickup = htmlspecialchars($_POST['pickup'] ?? '');
    $dropoff = htmlspecialchars($_POST['dropoff'] ?? '');
    $date = htmlspecialchars($_POST['date'] ?? '');
    $time = htmlspecialchars($_POST['time'] ?? '');
    $passengers = htmlspecialchars($_POST['passengers'] ?? '');
    
    // Create WhatsApp message
    $message = "🚖 *New Booking Request*%0A%0A";
    $message .= "👤 *Name:* $name%0A";
    $message .= "📱 *Phone:* $phone%0A";
    $message .= "📍 *Pickup:* $pickup%0A";
    $message .= "📍 *Drop-off:* $dropoff%0A";
    $message .= "📅 *Date:* $date%0A";
    $message .= "🕐 *Time:* $time%0A";
    $message .= "👥 *Passengers:* $passengers%0A%0A";
    $message .= "Looking forward to your confirmation!";
    
    // Redirect to WhatsApp
    $whatsapp_url = "https://wa.me/$phone_number?text=$message";
    header("Location: $whatsapp_url");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags -->
    <title>Irfan Taxi - Best Taxi Service in Goa | Airport Pickup, Local Tours & Outstation Rides</title>
    <meta name="description" content="Book Irfan Taxi for reliable rides in Goa. Airport transfers from ₹1,050, local tours, and outstation trips. 24/7 service. Call +91 80889 43818 or WhatsApp now!">
    <meta name="keywords" content="Goa taxi, taxi service Goa, Goa airport taxi, Dabolim airport taxi, Mopa airport taxi, Goa cab service, taxi in Goa, Goa sightseeing taxi, Irfan Taxi Goa, Panaji taxi, North Goa taxi, South Goa taxi, Calangute taxi, Baga taxi">
    <meta name="author" content="Irfan Taxi">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-GA">
    <meta name="geo.placename" content="Goa, India">
    <link rel="canonical" href="https://irfantaxi.in">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Irfan Taxi - Best Taxi Service in Goa">
    <meta property="og:description" content="Book reliable taxi service in Goa. Airport transfers, local tours & outstation trips. Available 24/7. Call +91 80889 43818">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://irfantaxi.in">
    <meta property="og:locale" content="en_IN">
    <meta property="og:image" content="https://irfantaxi.in/images/cars/sedan.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Irfan Taxi - Reliable Taxi Service in Goa">
    <meta property="og:site_name" content="Irfan Taxi">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Irfan Taxi - Best Taxi Service in Goa">
    <meta name="twitter:description" content="Reliable taxi service in Goa. Airport transfers, tours & outstation rides. Available 24/7">
    <meta name="twitter:image" content="https://irfantaxi.in/images/cars/sedan.webp">
    <meta name="twitter:image:alt" content="Irfan Taxi - Reliable Taxi Service in Goa">
    
    <!-- Mobile Meta Tags -->
    <meta name="theme-color" content="#7c3aed">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🚖</text></svg>">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17635330936"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-17635330936');
</script>
    
    <!-- Structured Data for SEO -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "TaxiService",
        "name": "Irfan Taxi",
        "description": "Reliable taxi service in Goa offering airport transfers, local tours, and outstation trips",
        "image": "https://irfantaxi.in/images/cars/sedan.webp",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Panaji",
            "addressRegion": "Goa",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "15.4909",
            "longitude": "73.8278"
        },
        "telephone": "+91-8088943818",
        "email": "irfanmujavara@gmail.com",
        "priceRange": "₹₹",
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "00:00",
            "closes": "23:59"
        },
        "url": "https://irfantaxi.in",
        "areaServed": {
            "@type": "State",
            "name": "Goa"
        },
        "serviceType": ["Airport Transfer", "Local Sightseeing", "Outstation Trips"],
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "500"
        }
    }
    </script>
    
    <!-- FAQ Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How do I book a taxi with Irfan Taxi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Just fill out the form on our website, call us at +91 80889 43818, or WhatsApp us. We'll confirm your booking right away."
                }
            },
            {
                "@type": "Question",
                "name": "Are your drivers licensed and verified?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes! All our drivers are fully licensed and police-verified with years of driving in Goa. They know the roads well and will get you to your destination safely."
                }
            },
            {
                "@type": "Question",
                "name": "Do you charge extra for luggage or night trips?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No extra charge for normal luggage. Night trips (10 PM to 6 AM) may have a small extra fee. We'll always tell you the full price before you book - no hidden charges!"
                }
            },
            {
                "@type": "Question",
                "name": "What payment methods do you accept?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We accept cash, UPI (Google Pay, PhonePe, Paytm), and bank transfers. You pay after the ride is done."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide airport pickup services?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes! We pick up from both Dabolim and Mopa airports. We track your flight, so if you're delayed, we'll wait. Our driver will meet you at arrivals with your name on a board."
                }
            }
        ]
    }
    </script>
</head>
<body class="smooth-scroll bg-gray-50">
    
    <!-- Navigation -->
    <nav id="main-nav" class="fixed w-full bg-white/95 backdrop-blur-lg shadow-lg z-50 transition-all duration-300">
        <!-- Main Navigation -->
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-600 to-indigo-600 rounded-full flex items-center justify-center text-white text-2xl shadow-lg">
                        🚖
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold gradient-text"><?php echo $business_name; ?></h1>
                        <p class="text-xs text-gray-600 font-medium">Goa's Trusted Taxi Service</p>
                    </div>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-1">
                    <a href="#home" class="nav-link px-4 py-2 rounded-lg text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200 font-medium">
                        <i class="fas fa-home text-sm mr-1"></i>Home
                    </a>
                    <a href="#services" class="nav-link px-4 py-2 rounded-lg text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200 font-medium">
                        <i class="fas fa-concierge-bell text-sm mr-1"></i>Services
                    </a>
                    <a href="#fleet" class="nav-link px-4 py-2 rounded-lg text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200 font-medium">
                        <i class="fas fa-car text-sm mr-1"></i>Fleet
                    </a>
                    <a href="#pricing" class="nav-link px-4 py-2 rounded-lg text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200 font-medium">
                        <i class="fas fa-tag text-sm mr-1"></i>Pricing
                    </a>
                    <a href="#popular-routes" class="nav-link px-4 py-2 rounded-lg text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200 font-medium">
                        <i class="fas fa-route text-sm mr-1"></i>Routes
                    </a>
                    <a href="#faq" class="nav-link px-4 py-2 rounded-lg text-gray-700 hover:text-purple-600 hover:bg-purple-50 transition-all duration-200 font-medium">
                        <i class="fas fa-question-circle text-sm mr-1"></i>FAQ
                    </a>
                    <a href="#booking" class="ml-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-2.5 rounded-full hover:shadow-xl hover:scale-105 transition-all duration-200 font-semibold">
                        <i class="fas fa-calendar-check mr-2"></i>Book Now
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-purple-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t border-gray-200 shadow-xl">
            <div class="container mx-auto px-4 py-6">
                <!-- Mobile Contact Info -->
                <div class="mb-4 pb-4 border-b border-gray-200">
                    <a href="tel:+918088943818" class="flex items-center text-gray-700 hover:text-purple-600 transition mb-2">
                        <i class="fas fa-phone-alt mr-3 text-purple-600"></i>
                        <span class="font-medium">+91 80889 43818</span>
                    </a>
                    <a href="mailto:irfanmujavara@gmail.com" class="flex items-center text-gray-700 hover:text-purple-600 transition">
                        <i class="fas fa-envelope mr-3 text-purple-600"></i>
                        <span class="font-medium">irfanmujavara@gmail.com</span>
                    </a>
                </div>
                
                <!-- Mobile Navigation Links -->
                <div class="flex flex-col space-y-2">
                    <a href="#home" class="flex items-center px-4 py-3 text-gray-700 hover:bg-purple-50 hover:text-purple-600 rounded-lg transition font-medium">
                        <i class="fas fa-home w-6 mr-3 text-purple-600"></i>Home
                    </a>
                    <a href="#services" class="flex items-center px-4 py-3 text-gray-700 hover:bg-purple-50 hover:text-purple-600 rounded-lg transition font-medium">
                        <i class="fas fa-concierge-bell w-6 mr-3 text-purple-600"></i>Services
                    </a>
                    <a href="#fleet" class="flex items-center px-4 py-3 text-gray-700 hover:bg-purple-50 hover:text-purple-600 rounded-lg transition font-medium">
                        <i class="fas fa-car w-6 mr-3 text-purple-600"></i>Our Fleet
                    </a>
                    <a href="#pricing" class="flex items-center px-4 py-3 text-gray-700 hover:bg-purple-50 hover:text-purple-600 rounded-lg transition font-medium">
                        <i class="fas fa-tag w-6 mr-3 text-purple-600"></i>Pricing
                    </a>
                    <a href="#popular-routes" class="flex items-center px-4 py-3 text-gray-700 hover:bg-purple-50 hover:text-purple-600 rounded-lg transition font-medium">
                        <i class="fas fa-route w-6 mr-3 text-purple-600"></i>Popular Routes
                    </a>
                    <a href="#faq" class="flex items-center px-4 py-3 text-gray-700 hover:bg-purple-50 hover:text-purple-600 rounded-lg transition font-medium">
                        <i class="fas fa-question-circle w-6 mr-3 text-purple-600"></i>FAQ
                    </a>
                    <a href="#booking" class="flex items-center justify-center mt-3 bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-3 rounded-full font-semibold shadow-lg">
                        <i class="fas fa-calendar-check mr-2"></i>Book Now
                    </a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-16 gradient-bg relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 py-20 relative z-10">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h2 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                        Your Trusted <span class="text-yellow-300">Taxi Partner</span> in Goa
                    </h2>
                    <p class="text-xl mb-8 text-gray-100">
                        Get the most affordable and reliable taxi service in Goa. We'll take you anywhere, anytime, at great prices!
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#booking" class="bg-yellow-400 text-purple-900 px-8 py-4 rounded-full font-semibold hover:bg-yellow-300 transition shadow-lg hover-scale">
                            <i class="fab fa-whatsapp mr-2"></i>Book on WhatsApp
                        </a>
                        <a href="tel:+918088943818" class="bg-white text-purple-900 px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition shadow-lg hover-scale">
                            <i class="fas fa-phone mr-2"></i>Call Now
                        </a>
                    </div>
                    
                    <div class="mt-12 grid grid-cols-3 gap-6" id="hero-stats">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-yellow-300" data-count="500" data-suffix="+">0+</div>
                            <div class="text-sm text-gray-200">Happy Customers</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-yellow-300">24/7</div>
                            <div class="text-sm text-gray-200">Available</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-yellow-300" data-count="100" data-suffix="%">0%</div>
                            <div class="text-sm text-gray-200">Satisfaction</div>
                        </div>
                    </div>
                </div>
                
                <div class="hidden md:block animate-float">
                    <svg viewBox="0 0 400 300" class="w-full">
                        <!-- Taxi illustration -->
                        <rect x="50" y="150" width="300" height="100" rx="10" fill="#FCD34D" stroke="#92400E" stroke-width="3"/>
                        <rect x="70" y="170" width="80" height="60" rx="5" fill="#60A5FA" opacity="0.7"/>
                        <rect x="250" y="170" width="80" height="60" rx="5" fill="#60A5FA" opacity="0.7"/>
                        <circle cx="120" cy="260" r="30" fill="#1F2937" stroke="#4B5563" stroke-width="3"/>
                        <circle cx="120" cy="260" r="15" fill="#6B7280"/>
                        <circle cx="280" cy="260" r="30" fill="#1F2937" stroke="#4B5563" stroke-width="3"/>
                        <circle cx="280" cy="260" r="15" fill="#6B7280"/>
                        <rect x="150" y="140" width="60" height="20" rx="10" fill="#EF4444"/>
                        <text x="165" y="155" font-size="14" fill="white" font-weight="bold">TAXI</text>
                        <!-- Smoke lines for motion -->
                        <line x1="30" y1="200" x2="10" y2="200" stroke="#D1D5DB" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
                        <line x1="35" y1="220" x2="15" y2="220" stroke="#D1D5DB" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
                        <line x1="25" y1="240" x2="5" y2="240" stroke="#D1D5DB" stroke-width="2" stroke-linecap="round" opacity="0.5"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Live Booking Ticker -->
    <div id="booking-ticker" class="fixed top-24 right-6 bg-white rounded-lg shadow-xl p-4 max-w-sm z-40 transform translate-x-full transition-transform duration-500">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center flex-shrink-0">
                <i class="fas fa-check text-green-600"></i>
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-semibold text-gray-800 truncate" id="ticker-name"></p>
                <p class="text-xs text-gray-600" id="ticker-route"></p>
                <p class="text-xs text-gray-500" id="ticker-time"></p>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Services</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    From airport rides to full-day tours, we've got all your transportation needs covered in Goa at great prices.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="bg-gradient-to-br from-purple-50 to-indigo-50 p-8 rounded-2xl shadow-lg hover-scale">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-plane-departure text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Airport Transfers</h3>
                    <p class="text-gray-600 mb-4">
                        Quick and easy pick-up and drop-off to and from Goa Airport. We're always on time so you never miss your flight.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Flight tracking
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Meet & greet service
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Luggage assistance
                        </li>
                    </ul>
                </div>
                
                <!-- Service 2 -->
                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-8 rounded-2xl shadow-lg hover-scale">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-map-marked-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Local Sightseeing</h3>
                    <p class="text-gray-600 mb-4">
                        Visit the beautiful beaches, churches, and attractions of Goa with our local drivers who know every corner of the state.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Customized tours
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Experienced drivers
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Flexible timings
                        </li>
                    </ul>
                </div>
                
                <!-- Service 3 -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-8 rounded-2xl shadow-lg hover-scale">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-road text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Outstation Trips</h3>
                    <p class="text-gray-600 mb-4">
                        Going to Mumbai, Pune, or Bangalore? We'll drive you there safely at honest prices.
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            One-way & round trips
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Well-maintained vehicles
                        </li>
                        <li class="flex items-center text-gray-700">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Transparent pricing
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us Section -->
    <section id="why-us" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Why Choose Irfan Taxi?</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    We're here to make your Goa trip easy and affordable. Here's what makes us different.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover-scale">
                    <div class="w-20 h-20 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-dollar-sign text-yellow-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Best Prices</h3>
                    <p class="text-gray-600">
                        Best rates in Goa with no hidden charges. What you see is what you pay!
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover-scale">
                    <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Safe & Secure</h3>
                    <p class="text-gray-600">
                        All our drivers are verified, licensed, and trained. Your safety is our priority.
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover-scale">
                    <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-clock text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">24/7 Available</h3>
                    <p class="text-gray-600">
                        Day or night, we're always ready to serve you. Call us anytime!
                    </p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-md text-center hover-scale">
                    <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-car text-purple-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Clean Vehicles</h3>
                    <p class="text-gray-600">
                        Well-maintained, AC cars that are cleaned and sanitized regularly.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Vehicle Fleet Gallery Section -->
    <section id="fleet" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Our Vehicle Fleet</h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                        Clean, well-maintained cars for every trip. All our vehicles are regularly serviced and sanitized.
                    </p>
            </div>
            
            <!-- Vehicle Tabs -->
            <div class="flex justify-center mb-12 flex-wrap gap-4">
                <button class="fleet-tab active px-6 py-3 rounded-full font-semibold transition" data-category="all">
                    All Vehicles
                </button>
                <button class="fleet-tab px-6 py-3 rounded-full font-semibold transition" data-category="sedan">
                    Sedans
                </button>
                <button class="fleet-tab px-6 py-3 rounded-full font-semibold transition" data-category="suv">
                    SUVs
                </button>
                <button class="fleet-tab px-6 py-3 rounded-full font-semibold transition" data-category="hatchback">
                    Hatchbacks
                </button>
            </div>
            
            <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6" id="fleet-grid">
                <!-- Sedans -->
                <div class="fleet-item sedan bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="images/cars/Maruti-Suzuki-Swift-Dzire.jpg.webp" alt="Maruti Swift Dzire" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Swift Dzire</h3>
                        <p class="text-sm text-gray-600">Sedan • 4 Passengers</p>
                        <p class="text-purple-600 font-semibold mt-2">₹30/km</p>
                    </div>
                </div>
                
                <div class="fleet-item sedan bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="images/cars/Honda-Amaze.png.webp" alt="Honda Amaze" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Honda Amaze</h3>
                        <p class="text-sm text-gray-600">Sedan • 4 Passengers</p>
                        <p class="text-purple-600 font-semibold mt-2">₹30/km</p>
                    </div>
                </div>
                
                <div class="fleet-item sedan bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="images/cars/Hyundai-Aura-taxi-in-Goa.jpeg.webp" alt="Hyundai Aura" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Hyundai Aura</h3>
                        <p class="text-sm text-gray-600">Sedan • 4 Passengers</p>
                        <p class="text-purple-600 font-semibold mt-2">₹30/km</p>
                    </div>
                </div>
                
                <div class="fleet-item sedan bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="images/cars/Maruti-Suzuki-Ciaz.jpg.webp" alt="Maruti Ciaz" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Maruti Ciaz</h3>
                        <p class="text-sm text-gray-600">Sedan • 4 Passengers</p>
                        <p class="text-purple-600 font-semibold mt-2">₹30/km</p>
                    </div>
                </div>
                
                <!-- SUVs -->
                <div class="fleet-item suv bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="images/cars/Maruti-Suzuki-Ertiga.jpg.webp" alt="Maruti Ertiga" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Maruti Ertiga</h3>
                        <p class="text-sm text-gray-600">SUV • 6-7 Passengers</p>
                        <p class="text-orange-600 font-semibold mt-2">₹40/km</p>
                    </div>
                </div>
                
                <div class="fleet-item suv bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="images/cars/Maruti-Suzuki-Brezza.jpeg.webp" alt="Maruti Brezza" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Maruti Brezza</h3>
                        <p class="text-sm text-gray-600">SUV • 5 Passengers</p>
                        <p class="text-orange-600 font-semibold mt-2">₹40/km</p>
                    </div>
                </div>
                
                <div class="fleet-item suv bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="images/cars/Toyota-Innova.jpg.webp" alt="Toyota Innova" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Toyota Innova</h3>
                        <p class="text-sm text-gray-600">SUV • 7 Passengers</p>
                        <p class="text-orange-600 font-semibold mt-2">₹40/km</p>
                    </div>
                </div>
                
                <div class="fleet-item suv bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="images/cars/toyota-innova-crysta.jpg.webp" alt="Innova Crysta" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Innova Crysta</h3>
                        <p class="text-sm text-gray-600">Luxury SUV • 7 Passengers</p>
                        <p class="text-orange-600 font-semibold mt-2">₹40/km</p>
                    </div>
                </div>
                
                <!-- Hatchbacks -->
                <div class="fleet-item hatchback bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="images/cars/maruti-suzuki-swift.jpeg.webp" alt="Maruti Swift" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Maruti Swift</h3>
                        <p class="text-sm text-gray-600">Hatchback • 4 Passengers</p>
                        <p class="text-green-600 font-semibold mt-2">₹30/km</p>
                    </div>
                </div>
                
                <div class="fleet-item hatchback bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="images/cars/Hyundai-i20.jpg.webp" alt="Hyundai i20" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Hyundai i20</h3>
                        <p class="text-sm text-gray-600">Hatchback • 4 Passengers</p>
                        <p class="text-green-600 font-semibold mt-2">₹30/km</p>
                    </div>
                </div>
                
                <div class="fleet-item hatchback bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="images/cars/Maruti-Baleno.jpg.webp" alt="Maruti Baleno" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Maruti Baleno</h3>
                        <p class="text-sm text-gray-600">Hatchback • 4 Passengers</p>
                        <p class="text-green-600 font-semibold mt-2">₹30/km</p>
                    </div>
                </div>
                
                <div class="fleet-item hatchback bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-xl transition">
                    <img src="images/cars/tata-tiago.jpg.webp" alt="Tata Tiago" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Tata Tiago</h3>
                        <p class="text-sm text-gray-600">Hatchback • 4 Passengers</p>
                        <p class="text-green-600 font-semibold mt-2">₹30/km</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <p class="text-gray-600">
                    <i class="fas fa-shield-alt text-green-500 mr-2"></i>
                    All vehicles are regularly sanitized and serviced for your safety and comfort
                </p>
            </div>
        </div>
    </section>
    
    <!-- Vehicle Comparison Table -->
    <section id="comparison" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Compare Our Vehicles</h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                        Not sure which car to book? Here's a quick comparison to help you pick the right one.
                    </p>
            </div>
            
            <div class="overflow-x-auto">
                <table class="w-full bg-white rounded-2xl overflow-hidden shadow-xl">
                    <thead class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white">
                        <tr>
                            <th class="px-6 py-4 text-left font-semibold">Features</th>
                            <th class="px-6 py-4 text-center font-semibold">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-car text-2xl mb-2"></i>
                                    <span>Hatchback</span>
                                </div>
                            </th>
                            <th class="px-6 py-4 text-center font-semibold">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-car-side text-2xl mb-2"></i>
                                    <span>Sedan</span>
                                </div>
                            </th>
                            <th class="px-6 py-4 text-center font-semibold">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-truck-pickup text-2xl mb-2"></i>
                                    <span>SUV</span>
                                </div>
                            </th>
                            <th class="px-6 py-4 text-center font-semibold">
                                <div class="flex flex-col items-center">
                                    <i class="fas fa-van-shuttle text-2xl mb-2"></i>
                                    <span>Tempo Traveller</span>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-700">
                                <i class="fas fa-users text-purple-600 mr-2"></i>Passenger Capacity
                            </td>
                            <td class="px-6 py-4 text-center text-gray-600">4 Passengers</td>
                            <td class="px-6 py-4 text-center text-gray-600">4 Passengers</td>
                            <td class="px-6 py-4 text-center text-gray-600">6-7 Passengers</td>
                            <td class="px-6 py-4 text-center text-gray-600">12-14 Passengers</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-700">
                                <i class="fas fa-suitcase text-purple-600 mr-2"></i>Luggage Space
                            </td>
                            <td class="px-6 py-4 text-center text-gray-600">2 Medium Bags</td>
                            <td class="px-6 py-4 text-center text-gray-600">3 Large Bags</td>
                            <td class="px-6 py-4 text-center text-gray-600">5 Large Bags</td>
                            <td class="px-6 py-4 text-center text-gray-600">10+ Large Bags</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-700">
                                <i class="fas fa-rupee-sign text-purple-600 mr-2"></i>Rate per KM
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="text-2xl font-bold text-green-600">₹30</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="text-2xl font-bold text-purple-600">₹30</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="text-2xl font-bold text-orange-600">₹40</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="text-2xl font-bold text-red-600">₹80</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-700">
                                <i class="fas fa-snowflake text-purple-600 mr-2"></i>Air Conditioning
                            </td>
                            <td class="px-6 py-4 text-center">
                                <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-700">
                                <i class="fas fa-map-marked-alt text-purple-600 mr-2"></i>Best For
                            </td>
                            <td class="px-6 py-4 text-center text-sm text-gray-600">Short trips, Solo travelers</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-600">Airport transfers, Couples</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-600">Families, Group tours</td>
                            <td class="px-6 py-4 text-center text-sm text-gray-600">Large groups, Events</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold text-gray-700">
                                <i class="fas fa-wifi text-purple-600 mr-2"></i>Music System
                            </td>
                            <td class="px-6 py-4 text-center">
                                <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <i class="fas fa-check-circle text-green-500 text-xl"></i>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50 bg-purple-50">
                            <td class="px-6 py-4 font-semibold text-gray-700">
                                <i class="fas fa-star text-purple-600 mr-2"></i>Recommended
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="text-xs bg-gray-200 text-gray-700 px-3 py-1 rounded-full">Budget</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="text-xs bg-purple-200 text-purple-700 px-3 py-1 rounded-full font-semibold">Most Popular</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="text-xs bg-orange-200 text-orange-700 px-3 py-1 rounded-full">Families</span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <span class="text-xs bg-red-200 text-red-700 px-3 py-1 rounded-full">Large Groups</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="mt-12 grid md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <i class="fas fa-shield-alt text-green-500 text-3xl mb-3"></i>
                    <h4 class="font-semibold text-gray-800 mb-2">All Insured</h4>
                    <p class="text-sm text-gray-600">Full insurance coverage on all vehicles</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <i class="fas fa-tools text-blue-500 text-3xl mb-3"></i>
                    <h4 class="font-semibold text-gray-800 mb-2">Well Maintained</h4>
                    <p class="text-sm text-gray-600">Regular servicing and quality checks</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <i class="fas fa-spray-can text-purple-500 text-3xl mb-3"></i>
                    <h4 class="font-semibold text-gray-800 mb-2">Sanitized</h4>
                    <p class="text-sm text-gray-600">Thoroughly cleaned before every trip</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Transparent Pricing</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    No surprises, no hidden fees. Just honest pricing you can count on!
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Price Card 1 -->
                <div class="bg-gradient-to-br from-purple-100 to-indigo-100 p-8 rounded-2xl shadow-lg">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Sedan</h3>
                        <div class="text-5xl font-bold text-purple-600 mb-2">₹30</div>
                        <div class="text-gray-600 mb-6">per km (round trip)</div>
                        <ul class="space-y-3 text-left mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">4 passengers</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">AC & comfortable</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Perfect for city rides</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Luggage space</span>
                            </li>
                        </ul>
                        <a href="#booking" class="block w-full bg-purple-600 text-white py-3 rounded-full font-semibold hover:bg-purple-700 transition">
                            Book Sedan
                        </a>
                    </div>
                </div>
                
                <!-- Price Card 2 (Popular) -->
                <div class="bg-gradient-to-br from-yellow-100 to-orange-100 p-8 rounded-2xl shadow-xl relative transform scale-105">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-red-500 text-white px-4 py-1 rounded-full text-sm font-semibold">
                        POPULAR
                    </div>
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">SUV</h3>
                        <div class="text-5xl font-bold text-orange-600 mb-2">₹40</div>
                        <div class="text-gray-600 mb-6">per km (round trip)</div>
                        <ul class="space-y-3 text-left mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">6-7 passengers</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Extra comfortable</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Great for families</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Extra luggage space</span>
                            </li>
                        </ul>
                        <a href="#booking" class="block w-full bg-orange-600 text-white py-3 rounded-full font-semibold hover:bg-orange-700 transition">
                            Book SUV
                        </a>
                    </div>
                </div>
                
                <!-- Price Card 3 -->
                <div class="bg-gradient-to-br from-green-100 to-emerald-100 p-8 rounded-2xl shadow-lg">
                    <div class="text-center">
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Tempo Traveller</h3>
                        <div class="text-5xl font-bold text-green-600 mb-2">₹80</div>
                        <div class="text-gray-600 mb-6">per km (round trip)</div>
                        <ul class="space-y-3 text-left mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">12-14 passengers</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Large groups</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Perfect for tours</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mr-2 mt-1"></i>
                                <span class="text-gray-700">Maximum luggage</span>
                            </li>
                        </ul>
                        <a href="#booking" class="block w-full bg-green-600 text-white py-3 rounded-full font-semibold hover:bg-green-700 transition">
                            Book Traveller
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <p class="text-gray-600 text-sm">
                    *Minimum charges apply. Rates may vary for outstation and night trips. Contact us for detailed pricing.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Popular Routes Section -->
    <section id="popular-routes" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Popular Routes & Fares</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Here are our fixed fares for popular Goa destinations. No surprises, no haggling!
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">
                <!-- Route 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <div class="flex items-center text-purple-600 mb-2">
                                <i class="fas fa-plane-departure mr-2"></i>
                                <span class="font-semibold">Dabolim Airport</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-arrow-down mr-2 text-gray-400"></i>
                                <span class="font-semibold">Calangute Beach</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-purple-600">₹1,260</div>
                            <div class="text-xs text-gray-500">~42 km</div>
                        </div>
                    </div>
                    <a href="#booking" class="block w-full text-center bg-purple-100 text-purple-700 py-2 rounded-lg font-semibold hover:bg-purple-200 transition">
                        Book Now
                    </a>
                </div>
                
                <!-- Route 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <div class="flex items-center text-purple-600 mb-2">
                                <i class="fas fa-plane-departure mr-2"></i>
                                <span class="font-semibold">Mopa Airport</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-arrow-down mr-2 text-gray-400"></i>
                                <span class="font-semibold">Baga Beach</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-purple-600">₹1,050</div>
                            <div class="text-xs text-gray-500">~35 km</div>
                        </div>
                    </div>
                    <a href="#booking" class="block w-full text-center bg-purple-100 text-purple-700 py-2 rounded-lg font-semibold hover:bg-purple-200 transition">
                        Book Now
                    </a>
                </div>
                
                <!-- Route 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <div class="flex items-center text-purple-600 mb-2">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span class="font-semibold">Panaji</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-arrow-down mr-2 text-gray-400"></i>
                                <span class="font-semibold">Anjuna Beach</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-purple-600">₹540</div>
                            <div class="text-xs text-gray-500">~18 km</div>
                        </div>
                    </div>
                    <a href="#booking" class="block w-full text-center bg-purple-100 text-purple-700 py-2 rounded-lg font-semibold hover:bg-purple-200 transition">
                        Book Now
                    </a>
                </div>
                
                <!-- Route 4 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <div class="flex items-center text-purple-600 mb-2">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                <span class="font-semibold">Palolem Beach</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-arrow-down mr-2 text-gray-400"></i>
                                <span class="font-semibold">Colva Beach</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-purple-600">₹1,140</div>
                            <div class="text-xs text-gray-500">~38 km</div>
                        </div>
                    </div>
                    <a href="#booking" class="block w-full text-center bg-purple-100 text-purple-700 py-2 rounded-lg font-semibold hover:bg-purple-200 transition">
                        Book Now
                    </a>
                </div>
                
                <!-- Route 5 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <div class="flex items-center text-purple-600 mb-2">
                                <i class="fas fa-city mr-2"></i>
                                <span class="font-semibold">Full Day North Goa</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-clock mr-2 text-gray-400"></i>
                                <span class="text-sm">8 hours • 80 km</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-orange-600">₹3,200</div>
                            <div class="text-xs text-gray-500">SUV</div>
                        </div>
                    </div>
                    <a href="#booking" class="block w-full text-center bg-orange-100 text-orange-700 py-2 rounded-lg font-semibold hover:bg-orange-200 transition">
                        Book Now
                    </a>
                </div>
                
                <!-- Route 6 -->
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition">
                    <div class="flex items-start justify-between mb-4">
                        <div>
                            <div class="flex items-center text-purple-600 mb-2">
                                <i class="fas fa-city mr-2"></i>
                                <span class="font-semibold">Full Day South Goa</span>
                            </div>
                            <div class="flex items-center text-gray-700">
                                <i class="fas fa-clock mr-2 text-gray-400"></i>
                                <span class="text-sm">8 hours • 90 km</span>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-2xl font-bold text-orange-600">₹3,600</div>
                            <div class="text-xs text-gray-500">SUV</div>
                        </div>
                    </div>
                    <a href="#booking" class="block w-full text-center bg-orange-100 text-orange-700 py-2 rounded-lg font-semibold hover:bg-orange-200 transition">
                        Book Now
                    </a>
                </div>
            </div>
            
            <!-- Fare Calculator -->
            <div class="mt-16 max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-xl">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">
                    <i class="fas fa-calculator text-purple-600 mr-2"></i>
                    Calculate Your Fare
                </h3>
                
                <div class="grid md:grid-cols-3 gap-6 mb-6">
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Distance (km)</label>
                        <input type="number" id="calc-distance" min="1" placeholder="e.g., 50" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent outline-none">
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Vehicle Type</label>
                        <select id="calc-vehicle" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent outline-none">
                            <option value="30">Hatchback (₹30/km)</option>
                            <option value="30" selected>Sedan (₹30/km)</option>
                            <option value="40">SUV (₹40/km)</option>
                            <option value="80">Tempo Traveller (₹80/km)</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-gray-700 font-semibold mb-2">Trip Type</label>
                        <select id="calc-triptype" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent outline-none">
                            <option value="1">One Way</option>
                            <option value="2">Round Trip</option>
                        </select>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-purple-100 to-indigo-100 p-6 rounded-xl text-center">
                    <div class="text-sm text-gray-600 mb-2">Estimated Fare</div>
                    <div class="text-5xl font-bold text-purple-600 mb-2" id="calc-result">₹0</div>
                    <div class="text-xs text-gray-600">*Actual fare may vary based on route and traffic conditions</div>
                </div>
                
                <div class="mt-6 text-center">
                    <a href="#booking" class="inline-block bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-8 py-3 rounded-full font-semibold hover:shadow-lg transition">
                        Proceed to Booking
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Goa Attractions Gallery -->
    <section id="attractions" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Explore Beautiful Goa</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    From beautiful beaches to old churches, we'll take you to all the best places in Goa!
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Airport Cards -->
                <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <img src="images/dabolim-airport.webp" alt="Dabolim Airport" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end p-6">
                        <h3 class="text-white font-bold text-xl mb-2">Dabolim Airport</h3>
                        <p class="text-white/90 text-sm mb-3">Fast and comfortable airport rides</p>
                        <a href="#booking" class="inline-block bg-white text-purple-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-purple-600 hover:text-white transition w-fit">
                            Book Transfer
                        </a>
                    </div>
                </div>
                
                <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300">
                    <img src="images/mopa-airport.webp" alt="Mopa Airport" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end p-6">
                        <h3 class="text-white font-bold text-xl mb-2">Mopa Airport</h3>
                        <p class="text-white/90 text-sm mb-3">New airport with easy access to all areas</p>
                        <a href="#booking" class="inline-block bg-white text-purple-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-purple-600 hover:text-white transition w-fit">
                            Book Transfer
                        </a>
                    </div>
                </div>
                
                <!-- Popular Destinations -->
                <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 bg-gradient-to-br from-blue-500 to-cyan-500">
                    <div class="absolute inset-0 flex flex-col justify-center items-center p-6 text-white">
                        <i class="fas fa-umbrella-beach text-6xl mb-4 opacity-90"></i>
                        <h3 class="font-bold text-xl mb-2 text-center">North Goa Beaches</h3>
                        <p class="text-white/90 text-sm text-center mb-3">Calangute, Baga, Anjuna, Vagator</p>
                        <a href="#popular-routes" class="inline-block bg-white text-blue-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-600 hover:text-white transition">
                            View Routes
                        </a>
                    </div>
                </div>
                
                <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 bg-gradient-to-br from-orange-500 to-red-500">
                    <div class="absolute inset-0 flex flex-col justify-center items-center p-6 text-white">
                        <i class="fas fa-sun text-6xl mb-4 opacity-90"></i>
                        <h3 class="font-bold text-xl mb-2 text-center">South Goa Beaches</h3>
                        <p class="text-white/90 text-sm text-center mb-3">Palolem, Colva, Benaulim, Agonda</p>
                        <a href="#popular-routes" class="inline-block bg-white text-orange-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-orange-600 hover:text-white transition">
                            View Routes
                        </a>
                    </div>
                </div>
                
                <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 bg-gradient-to-br from-green-500 to-emerald-500">
                    <div class="absolute inset-0 flex flex-col justify-center items-center p-6 text-white">
                        <i class="fas fa-church text-6xl mb-4 opacity-90"></i>
                        <h3 class="font-bold text-xl mb-2 text-center">Churches & Heritage</h3>
                        <p class="text-white/90 text-sm text-center mb-3">Old Goa, Basilica, Se Cathedral</p>
                        <a href="#booking" class="inline-block bg-white text-green-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-green-600 hover:text-white transition">
                            Book Tour
                        </a>
                    </div>
                </div>
                
                <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 bg-gradient-to-br from-purple-500 to-pink-500">
                    <div class="absolute inset-0 flex flex-col justify-center items-center p-6 text-white">
                        <i class="fas fa-mountain text-6xl mb-4 opacity-90"></i>
                        <h3 class="font-bold text-xl mb-2 text-center">Waterfalls & Nature</h3>
                        <p class="text-white/90 text-sm text-center mb-3">Dudhsagar, Spice Plantations</p>
                        <a href="#booking" class="inline-block bg-white text-purple-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-purple-600 hover:text-white transition">
                            Book Tour
                        </a>
                    </div>
                </div>
                
                <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 bg-gradient-to-br from-yellow-500 to-amber-500">
                    <div class="absolute inset-0 flex flex-col justify-center items-center p-6 text-white">
                        <i class="fas fa-shopping-bag text-6xl mb-4 opacity-90"></i>
                        <h3 class="font-bold text-xl mb-2 text-center">Markets & Shopping</h3>
                        <p class="text-white/90 text-sm text-center mb-3">Anjuna Flea, Mapusa, Panaji</p>
                        <a href="#booking" class="inline-block bg-white text-yellow-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-yellow-600 hover:text-white transition">
                            Book Ride
                        </a>
                    </div>
                </div>
                
                <div class="relative group overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 bg-gradient-to-br from-indigo-500 to-blue-500">
                    <div class="absolute inset-0 flex flex-col justify-center items-center p-6 text-white">
                        <i class="fas fa-glass-martini-alt text-6xl mb-4 opacity-90"></i>
                        <h3 class="font-bold text-xl mb-2 text-center">Nightlife & Casinos</h3>
                        <p class="text-white/90 text-sm text-center mb-3">Clubs, Beach Shacks, Casinos</p>
                        <a href="#booking" class="inline-block bg-white text-indigo-600 px-4 py-2 rounded-full text-sm font-semibold hover:bg-indigo-600 hover:text-white transition">
                            Book Ride
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="mt-16 bg-gradient-to-r from-purple-100 to-indigo-100 rounded-2xl p-8 text-center">
                <h3 class="text-2xl font-bold text-gray-800 mb-4">Want a Custom Tour?</h3>
                <p class="text-gray-700 mb-6 max-w-2xl mx-auto">
                    Want to plan your own route? No problem! Just tell us where you want to go, and we'll take you there.
                </p>
                <a href="https://wa.me/<?php echo $phone_number; ?>?text=Hi!%20I%27d%20like%20to%20plan%20a%20custom%20tour%20in%20Goa" 
                    class="inline-block bg-purple-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-purple-700 transition">
                    <i class="fab fa-whatsapp mr-2"></i>Plan Custom Tour
                </a>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section id="testimonials" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">What Our Customers Say</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    See what our customers have to say about their rides with us!
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "Best taxi service in Goa! The driver was on time, friendly, and the car was super clean. Plus, the price was way better than others. Totally recommend!"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-purple-200 rounded-full flex items-center justify-center mr-4">
                            <span class="text-purple-700 font-bold text-xl">R</span>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-800">Rajesh Kumar</div>
                            <div class="text-sm text-gray-600">Mumbai</div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "We booked Irfan Taxi for our family trip to Goa. The SUV was super comfortable, and the driver took us to all the best spots. Great service at a fair price!"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-blue-200 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-700 font-bold text-xl">P</span>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-800">Priya Sharma</div>
                            <div class="text-sm text-gray-600">Delhi</div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg">
                    <div class="flex mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-700 mb-6 italic">
                        "Needed a late-night airport ride and Irfan Taxi helped me out! Quick response, good driver, and fair rates. Will definitely book again!"
                    </p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-green-200 rounded-full flex items-center justify-center mr-4">
                            <span class="text-green-700 font-bold text-xl">A</span>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-800">Amit Patel</div>
                            <div class="text-sm text-gray-600">Bangalore</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section id="faq" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Frequently Asked Questions</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Got questions? Here's everything you need to know about booking a taxi with us.
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto space-y-4">
                <!-- FAQ 1 -->
                <div class="faq-item bg-gray-50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition">
                        <span class="font-semibold text-gray-800 pr-8">How do I book a taxi with Irfan Taxi?</span>
                        <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-gray-600">
                            Just fill out the form on our website, call us at +91 80889 43818, or WhatsApp us. We'll confirm your booking right away.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 2 -->
                <div class="faq-item bg-gray-50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition">
                        <span class="font-semibold text-gray-800 pr-8">Are your drivers licensed and verified?</span>
                        <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-gray-600">
                            Yes! All our drivers are fully licensed and police-verified with years of driving in Goa. They know the roads well and will get you to your destination safely.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 3 -->
                <div class="faq-item bg-gray-50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition">
                        <span class="font-semibold text-gray-800 pr-8">Do you charge extra for luggage or night trips?</span>
                        <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-gray-600">
                            No extra charge for normal luggage. Night trips (10 PM to 6 AM) may have a small extra fee. We'll always tell you the full price before you book - no hidden charges!
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 4 -->
                <div class="faq-item bg-gray-50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition">
                        <span class="font-semibold text-gray-800 pr-8">Can I book a cab for outstation trips from Goa?</span>
                        <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-gray-600">
                            Yes! We drive to Mumbai, Pune, Bangalore, and other cities. Choose one-way or round trip at good rates. Contact us for a quote.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 5 -->
                <div class="faq-item bg-gray-50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition">
                        <span class="font-semibold text-gray-800 pr-8">What payment methods do you accept?</span>
                        <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-gray-600">
                            We accept cash, UPI (Google Pay, PhonePe, Paytm), and bank transfers. You pay after the ride is done, so no worries!
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 6 -->
                <div class="faq-item bg-gray-50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition">
                        <span class="font-semibold text-gray-800 pr-8">Are your vehicles AC and well-maintained?</span>
                        <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-gray-600">
                            Yes! All our cars have AC and are regularly serviced. We clean every car before each trip to keep them fresh and comfortable.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 7 -->
                <div class="faq-item bg-gray-50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition">
                        <span class="font-semibold text-gray-800 pr-8">Do you provide airport pickup services?</span>
                        <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-gray-600">
                            Yes! We pick up from both Dabolim and Mopa airports. We track your flight, so if you're delayed, we'll wait. Our driver will meet you at arrivals with your name on a board.
                        </p>
                    </div>
                </div>
                
                <!-- FAQ 8 -->
                <div class="faq-item bg-gray-50 rounded-xl overflow-hidden">
                    <button class="faq-question w-full text-left p-6 flex justify-between items-center hover:bg-gray-100 transition">
                        <span class="font-semibold text-gray-800 pr-8">Can I cancel or modify my booking?</span>
                        <i class="fas fa-chevron-down text-purple-600 transition-transform"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-gray-600">
                            Yes, you can cancel or change your booking. Just let us know at least 2 hours before pickup - no cancellation fee. For last-minute changes, call us directly.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <p class="text-gray-600 mb-4">Still have questions?</p>
                <a href="https://wa.me/<?php echo $phone_number; ?>?text=Hi%20Irfan%20Taxi!%20I%20have%20a%20question..." 
                    class="inline-block bg-green-500 text-white px-8 py-3 rounded-full font-semibold hover:bg-green-600 transition">
                    <i class="fab fa-whatsapp mr-2"></i>Chat with Us on WhatsApp
                </a>
            </div>
        </div>
    </section>
    
    <!-- Trust Badges Section -->
    <section class="py-12 bg-gradient-to-r from-purple-600 to-indigo-600">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-white text-center">
                <div class="flex flex-col items-center">
                    <i class="fas fa-shield-alt text-4xl mb-2"></i>
                    <div class="font-semibold">100% Safe</div>
                    <div class="text-sm opacity-90">Verified Drivers</div>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-credit-card text-4xl mb-2"></i>
                    <div class="font-semibold">Flexible Payment</div>
                    <div class="text-sm opacity-90">Cash, UPI, Cards</div>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-headset text-4xl mb-2"></i>
                    <div class="font-semibold">24/7 Support</div>
                    <div class="text-sm opacity-90">Always Available</div>
                </div>
                <div class="flex flex-col items-center">
                    <i class="fas fa-certificate text-4xl mb-2"></i>
                    <div class="font-semibold">Licensed</div>
                    <div class="text-sm opacity-90">Govt. Approved</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Booking Form Section -->
    <section id="booking" class="py-20 gradient-bg relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 right-10 w-96 h-96 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 left-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-12 text-white">
                    <h2 class="text-4xl font-bold mb-4">Book Your Ride Now</h2>
                    <p class="text-xl text-gray-100">
                        Fill in your details below and we'll message you on WhatsApp to confirm your booking!
                    </p>
                </div>
                
                <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12">
                    <form method="POST" action="" class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">
                                    <i class="fas fa-user mr-2 text-purple-600"></i>Your Name *
                                </label>
                                <input type="text" name="name" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent outline-none transition"
                                    placeholder="Enter your full name">
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">
                                    <i class="fas fa-phone mr-2 text-purple-600"></i>Phone Number *
                                </label>
                                <input type="tel" name="phone" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent outline-none transition"
                                    placeholder="+91 98765 43210">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">
                                <i class="fas fa-map-marker-alt mr-2 text-purple-600"></i>Pickup Location *
                            </label>
                            <input type="text" name="pickup" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent outline-none transition"
                                placeholder="e.g., Goa Airport, Hotel name, Beach">
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">
                                <i class="fas fa-map-pin mr-2 text-purple-600"></i>Drop-off Location *
                            </label>
                            <input type="text" name="dropoff" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent outline-none transition"
                                placeholder="e.g., Beach Resort, Panaji, Railway Station">
                        </div>
                        
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">
                                    <i class="fas fa-calendar mr-2 text-purple-600"></i>Date *
                                </label>
                                <input type="date" name="date" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent outline-none transition"
                                    min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 font-semibold mb-2">
                                    <i class="fas fa-clock mr-2 text-purple-600"></i>Time *
                                </label>
                                <input type="time" name="time" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent outline-none transition">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">
                                <i class="fas fa-users mr-2 text-purple-600"></i>Number of Passengers *
                            </label>
                            <select name="passengers" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-600 focus:border-transparent outline-none transition">
                                <option value="">Select passengers</option>
                                <option value="1">1 Passenger</option>
                                <option value="2">2 Passengers</option>
                                <option value="3">3 Passengers</option>
                                <option value="4">4 Passengers</option>
                                <option value="5-7">5-7 Passengers (SUV)</option>
                                <option value="8+">8+ Passengers (Tempo Traveller)</option>
                            </select>
                        </div>
                        
                        <button type="submit" 
                            class="w-full bg-gradient-to-r from-green-500 to-green-600 text-white py-4 rounded-lg font-bold text-lg hover:from-green-600 hover:to-green-700 transition shadow-lg flex items-center justify-center hover-scale">
                            <i class="fab fa-whatsapp text-2xl mr-3"></i>
                            Book via WhatsApp Now
                        </button>
                        
                        <p class="text-center text-gray-600 text-sm">
                            <i class="fas fa-lock mr-1"></i>
                            Your info is safe with us and only used for booking confirmation
                        </p>
                    </form>
                </div>
                
                <!-- Alternative Contact Methods -->
                <div class="mt-12 grid md:grid-cols-3 gap-6">
                    <a href="https://wa.me/<?php echo $phone_number; ?>" target="_blank" 
                        class="glass-effect text-white p-6 rounded-xl text-center hover-scale">
                        <i class="fab fa-whatsapp text-4xl mb-3"></i>
                        <div class="font-semibold">WhatsApp</div>
                        <div class="text-sm opacity-90">Chat directly</div>
                    </a>
                    
                    <a href="tel:+918088943818" 
                        class="glass-effect text-white p-6 rounded-xl text-center hover-scale">
                        <i class="fas fa-phone-alt text-4xl mb-3"></i>
                        <div class="font-semibold">Call Us</div>
                        <div class="text-sm opacity-90">24/7 support</div>
                    </a>
                    
                    <a href="mailto:<?php echo $email; ?>" 
                        class="glass-effect text-white p-6 rounded-xl text-center hover-scale">
                        <i class="fas fa-envelope text-4xl mb-3"></i>
                        <div class="font-semibold">Email</div>
                        <div class="text-sm opacity-90">Send inquiry</div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <!-- About -->
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <span class="text-3xl">🚖</span>
                        <h3 class="text-2xl font-bold"><?php echo $business_name; ?></h3>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Goa's most affordable and reliable taxi service. We're here to make your trip comfortable and hassle-free.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple-600 transition">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple-600 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-purple-600 transition">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white transition">Services</a></li>
                        <li><a href="#pricing" class="text-gray-400 hover:text-white transition">Pricing</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-white transition">Reviews</a></li>
                        <li><a href="#booking" class="text-gray-400 hover:text-white transition">Book Now</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Our Services</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-chevron-right text-xs mr-2"></i>Airport Transfer</li>
                        <li><i class="fas fa-chevron-right text-xs mr-2"></i>Local Sightseeing</li>
                        <li><i class="fas fa-chevron-right text-xs mr-2"></i>Outstation Trips</li>
                        <li><i class="fas fa-chevron-right text-xs mr-2"></i>Corporate Bookings</li>
                        <li><i class="fas fa-chevron-right text-xs mr-2"></i>Wedding Transfers</li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h4 class="text-xl font-bold mb-4">Contact Us</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                            <span><?php echo $address; ?></span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-3"></i>
                            <a href="tel:+918088943818" class="hover:text-white transition">+91 80889 43818</a>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3"></i>
                            <a href="mailto:<?php echo $email; ?>" class="hover:text-white transition"><?php echo $email; ?></a>
                        </li>
                        <li class="flex items-center">
                            <i class="fab fa-whatsapp mr-3"></i>
                            <a href="https://wa.me/<?php echo $phone_number; ?>" class="hover:text-white transition">WhatsApp Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> <?php echo $business_name; ?>. All rights reserved. Made with ❤️ in Goa.</p>
                <p class="mt-2 text-sm">Taxi Service in Goa | Dabolim Airport Taxi | Mopa Airport Taxi | Goa Sightseeing Tours | North Goa Taxi | South Goa Taxi</p>
            </div>
        </div>
    </footer>
    
    <!-- Sticky Booking Bar (Desktop Only) -->
    <div id="sticky-booking-bar" class="hidden md:block fixed bottom-0 left-0 right-0 bg-white shadow-2xl border-t-4 border-purple-600 z-50 transform translate-y-full transition-transform duration-300">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between gap-4">
                <div>
                    <div class="font-bold text-gray-800 text-lg">Ready to Book Your Ride?</div>
                    <div class="text-sm text-gray-600">Get instant confirmation on WhatsApp</div>
                </div>
                <div class="flex gap-3">
                    <a href="#booking" class="bg-purple-600 text-white px-6 py-3 rounded-full font-semibold hover:bg-purple-700 transition flex items-center">
                        <i class="fas fa-calendar-check mr-2"></i>Book Now
                    </a>
                    <a href="tel:+918088943818" class="bg-green-500 text-white px-6 py-3 rounded-full font-semibold hover:bg-green-600 transition flex items-center">
                        <i class="fas fa-phone mr-2"></i>Call Us
                    </a>
                    <button id="close-sticky-bar" class="text-gray-500 hover:text-gray-700 px-3">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll to Top Button -->
    <button id="scroll-top" 
        class="fixed bottom-6 right-6 w-14 h-14 bg-purple-600 rounded-full items-center justify-center shadow-lg hover:bg-purple-700 transition z-50 hidden">
        <i class="fas fa-arrow-up text-white text-xl"></i>
    </button>
    
    <!-- Mobile Quick Action Buttons -->
    <div class="md:hidden fixed bottom-6 left-6 right-6 flex gap-3 z-40">
        <a href="tel:+918088943818" class="flex-1 bg-green-500 text-white px-4 py-3 rounded-full font-semibold hover:bg-green-600 transition flex items-center justify-center shadow-xl">
            <i class="fas fa-phone mr-2"></i>Call
        </a>
        <a href="#booking" class="flex-1 bg-purple-600 text-white px-4 py-3 rounded-full font-semibold hover:bg-purple-700 transition flex items-center justify-center shadow-xl">
            <i class="fas fa-calendar mr-2"></i>Book
        </a>
    </div>
    
    <!-- Custom JavaScript -->
    <script src="assets/js/main.js"></script>
</body>
</html>
