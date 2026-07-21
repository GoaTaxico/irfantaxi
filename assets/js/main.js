// Mobile Menu Toggle with Animation
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');
const menuIcon = mobileMenuBtn.querySelector('i');

mobileMenuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
    mobileMenu.classList.toggle('show');
    
    // Toggle icon between bars and times
    if (menuIcon.classList.contains('fa-bars')) {
        menuIcon.classList.remove('fa-bars');
        menuIcon.classList.add('fa-times');
    } else {
        menuIcon.classList.add('fa-bars');
        menuIcon.classList.remove('fa-times');
    }
});

// Close mobile menu when clicking on a link
document.querySelectorAll('#mobile-menu a').forEach(link => {
    link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        mobileMenu.classList.remove('show');
        menuIcon.classList.add('fa-bars');
        menuIcon.classList.remove('fa-times');
    });
});

// Navigation Scroll Effect
const mainNav = document.getElementById('main-nav');
let lastScrollTop = 0;

window.addEventListener('scroll', () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    // Add shadow and shrink effect on scroll
    if (scrollTop > 100) {
        mainNav.classList.add('nav-scrolled');
    } else {
        mainNav.classList.remove('nav-scrolled');
    }
    
    lastScrollTop = scrollTop;
});

// Active Link Highlighting on Scroll
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');

function highlightNavLink() {
    const scrollY = window.pageYOffset;
    
    sections.forEach(section => {
        const sectionHeight = section.offsetHeight;
        const sectionTop = section.offsetTop - 150;
        const sectionId = section.getAttribute('id');
        
        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${sectionId}`) {
                    link.classList.add('active');
                }
            });
        }
    });
}

window.addEventListener('scroll', highlightNavLink);
window.addEventListener('load', highlightNavLink);

// Fleet Gallery Filter
const fleetTabs = document.querySelectorAll('.fleet-tab');
const fleetItems = document.querySelectorAll('.fleet-item');

fleetTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const category = tab.dataset.category;
        
        // Update active tab
        fleetTabs.forEach(t => {
            t.classList.remove('active', 'bg-purple-600', 'text-white');
            t.classList.add('bg-gray-200', 'text-gray-700');
        });
        tab.classList.add('active', 'bg-purple-600', 'text-white');
        tab.classList.remove('bg-gray-200', 'text-gray-700');
        
        // Filter items
        fleetItems.forEach(item => {
            if (category === 'all' || item.classList.contains(category)) {
                item.style.display = 'block';
                setTimeout(() => {
                    item.style.opacity = '1';
                    item.style.transform = 'scale(1)';
                }, 10);
            } else {
                item.style.opacity = '0';
                item.style.transform = 'scale(0.8)';
                setTimeout(() => {
                    item.style.display = 'none';
                }, 300);
            }
        });
    });
});

// Initialize active tab
document.querySelector('.fleet-tab.active').classList.add('bg-purple-600', 'text-white');
document.querySelectorAll('.fleet-tab:not(.active)').forEach(tab => {
    tab.classList.add('bg-gray-200', 'text-gray-700');
});

// FAQ Accordion
const faqQuestions = document.querySelectorAll('.faq-question');

faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
        const faqItem = question.parentElement;
        const answer = faqItem.querySelector('.faq-answer');
        const icon = question.querySelector('i');
        
        // Close other FAQs
        document.querySelectorAll('.faq-item').forEach(item => {
            if (item !== faqItem) {
                item.querySelector('.faq-answer').classList.add('hidden');
                item.querySelector('.faq-question i').style.transform = 'rotate(0deg)';
            }
        });
        
        // Toggle current FAQ
        answer.classList.toggle('hidden');
        if (answer.classList.contains('hidden')) {
            icon.style.transform = 'rotate(0deg)';
        } else {
            icon.style.transform = 'rotate(180deg)';
        }
    });
});

// Fare Calculator
const calcDistance = document.getElementById('calc-distance');
const calcVehicle = document.getElementById('calc-vehicle');
const calcTripType = document.getElementById('calc-triptype');
const calcResult = document.getElementById('calc-result');

function calculateFare() {
    const distance = parseFloat(calcDistance.value) || 0;
    const ratePerKm = parseFloat(calcVehicle.value) || 0;
    const tripMultiplier = parseFloat(calcTripType.value) || 1;
    
    const totalFare = distance * ratePerKm * tripMultiplier;
    calcResult.textContent = `₹${totalFare.toLocaleString('en-IN')}`;
}

calcDistance.addEventListener('input', calculateFare);
calcVehicle.addEventListener('change', calculateFare);
calcTripType.addEventListener('change', calculateFare);

// Live Booking Ticker
const bookingTicker = document.getElementById('booking-ticker');
const bookings = [
    { name: 'Ravi Kumar', route: 'Airport → Calangute', time: '2 min ago' },
    { name: 'Priya Shah', route: 'Panaji → Baga Beach', time: '5 min ago' },
    { name: 'Amit Patel', route: 'Mopa Airport → Anjuna', time: '8 min ago' },
    { name: 'Sarah D\'Silva', route: 'North Goa Tour', time: '12 min ago' },
    { name: 'Vikram Singh', route: 'Colva → Palolem', time: '15 min ago' },
    { name: 'Neha Gupta', route: 'Airport Pickup', time: '18 min ago' },
    { name: 'Rahul Sharma', route: 'Dabolim → Vagator', time: '22 min ago' },
    { name: 'Anjali Desai', route: 'South Goa Tour', time: '25 min ago' },
    { name: 'Karan Mehta', route: 'Panaji → Morjim Beach', time: '28 min ago' },
    { name: 'Sneha Reddy', route: 'Airport Transfer', time: '32 min ago' },
    { name: 'Rohan Verma', route: 'Candolim → Old Goa', time: '35 min ago' },
    { name: 'Kavya Nair', route: 'Mopa → Palolem', time: '38 min ago' },
    { name: 'Arjun Joshi', route: 'Fort Aguada → Airport', time: '42 min ago' },
    { name: 'Pooja Iyer', route: 'Full Day Sightseeing', time: '45 min ago' },
    { name: 'Siddharth Kapoor', route: 'Arambol → Calangute', time: '48 min ago' },
    { name: 'Divya Menon', route: 'Dabolim Airport Pickup', time: '52 min ago' },
    { name: 'Aditya Chopra', route: 'Benaulim → Agonda', time: '55 min ago' },
    { name: 'Ritika Bhatt', route: 'Panaji City Tour', time: '58 min ago' },
    { name: 'Varun Malhotra', route: 'Baga → Anjuna Market', time: '1 hour ago' },
    { name: 'Ishita Rao', route: 'Casino Transfer', time: '1 hour ago' }
];

let currentBookingIndex = 0;

function showBookingTicker() {
    const booking = bookings[currentBookingIndex];
    document.getElementById('ticker-name').textContent = booking.name + ' just booked';
    document.getElementById('ticker-route').textContent = booking.route;
    document.getElementById('ticker-time').textContent = booking.time;
    
    bookingTicker.classList.remove('translate-x-full');
    
    setTimeout(() => {
        bookingTicker.classList.add('translate-x-full');
    }, 5000);
    
    currentBookingIndex = (currentBookingIndex + 1) % bookings.length;
}

// Show ticker every 10 seconds
setInterval(showBookingTicker, 10000);
setTimeout(showBookingTicker, 3000); // First show after 3 seconds

// Animated Counter
function animateCounter(element, target) {
    let current = 0;
    const increment = target / 100;
    const duration = 2000;
    const stepTime = duration / 100;
    
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            element.textContent = target + (element.dataset.suffix || '');
            clearInterval(timer);
        } else {
            element.textContent = Math.floor(current) + (element.dataset.suffix || '');
        }
    }, stepTime);
}

// Observe stats section for counter animation
const statsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains('counted')) {
            entry.target.classList.add('counted');
            const counters = entry.target.querySelectorAll('[data-count]');
            counters.forEach(counter => {
                const target = parseInt(counter.dataset.count);
                animateCounter(counter, target);
            });
        }
    });
}, { threshold: 0.5 });

// Observe hero stats
const heroStats = document.getElementById('hero-stats');
if (heroStats) {
    statsObserver.observe(heroStats);
}

// Sticky Booking Bar (Desktop Only)
const stickyBar = document.getElementById('sticky-booking-bar');
const closeStickyBar = document.getElementById('close-sticky-bar');
let stickyBarClosed = false;

window.addEventListener('scroll', () => {
    // Only show on desktop
    if (!stickyBarClosed && window.pageYOffset > 800 && window.innerWidth >= 768) {
        stickyBar.classList.remove('translate-y-full');
    } else {
        stickyBar.classList.add('translate-y-full');
    }
});

closeStickyBar.addEventListener('click', () => {
    stickyBarClosed = true;
    stickyBar.classList.add('translate-y-full');
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const offset = 80;
            const targetPosition = target.offsetTop - offset;
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Scroll to top button (Desktop only, hidden on mobile)
const scrollTopBtn = document.getElementById('scroll-top');

window.addEventListener('scroll', () => {
    // Only show on desktop (screen width > 768px) and when scrolled down
    if (window.pageYOffset > 300 && window.innerWidth >= 768) {
        scrollTopBtn.classList.remove('hidden');
        scrollTopBtn.classList.add('flex');
    } else {
        scrollTopBtn.classList.add('hidden');
        scrollTopBtn.classList.remove('flex');
    }
});

scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Hide scroll button on resize if mobile
window.addEventListener('resize', () => {
    if (window.innerWidth < 768) {
        scrollTopBtn.classList.add('hidden');
        scrollTopBtn.classList.remove('flex');
    }
});

// Set minimum date for booking form
const dateInput = document.querySelector('input[type="date"]');
if (dateInput) {
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('min', today);
    dateInput.value = today;
}

// Form validation and enhancement
const bookingForm = document.querySelector('form');
if (bookingForm) {
    bookingForm.addEventListener('submit', function(e) {
        const phoneInput = this.querySelector('input[name="phone"]');
        const phone = phoneInput.value.replace(/\D/g, '');
        
        if (phone.length < 10) {
            e.preventDefault();
            alert('Please enter a valid phone number with at least 10 digits.');
            phoneInput.focus();
            return false;
        }
    });
}

// Animate elements on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Observe all sections
document.querySelectorAll('section > div > div').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
});

