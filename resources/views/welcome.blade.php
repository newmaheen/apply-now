<!DOCTYPE html>
<html lang="bn" class="scroll-smooth" id="html-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="page-title">Hello Apply - ভারতের ভিসা প্রসেসিং সার্ভিস</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        .font-bn { font-family: 'Hind Siliguri', sans-serif; }
        .font-en { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        @keyframes glowing-badge {
            0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(16, 185, 129, 0); }
            100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
        }
        .animate-glow { animation: glowing-badge 2s infinite; }
    </style>
</head>
<body class="font-bn bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white transition-all duration-300" id="body-tag">

    <!-- Top Utility & Language Switcher Bar -->
    <div class="bg-slate-900 text-slate-300 text-xs py-2 px-4 border-b border-slate-800">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="hidden sm:flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span data-bn="হটলাইন ও ২৪/৭ হোয়াটসঅ্যাপ সাপোর্ট" data-en="Hotline & 24/7 WhatsApp Support">হটলাইন ও ২৪/৭ হোয়াটসঅ্যাপ সাপোর্ট</span>: <strong class="text-white">+880 1619-891494</strong>
            </div>
            <div class="flex items-center justify-between w-full sm:w-auto">
                <span class="sm:hidden text-[11px] text-emerald-400 font-bold">Hello Apply Visa Portal</span>
                <!-- Bangla / English Toggle Switcher -->
                <div class="inline-flex items-center bg-slate-800 p-0.5 rounded-full border border-slate-700 shadow-inner">
                    <button onclick="switchLanguage('bn')" id="lang-btn-bn" class="px-3 py-1 rounded-full text-[11px] font-bold transition-all bg-emerald-600 text-white shadow">বাং</button>
                    <button onclick="switchLanguage('en')" id="lang-btn-en" class="px-3 py-1 rounded-full text-[11px] font-bold transition-all text-slate-400 hover:text-white">ENG</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <header class="bg-white/90 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 h-20 sm:h-24 flex items-center justify-between">
            <!-- Logo Section -->
            <div class="flex items-center gap-2">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('Images/hello-apply.png') }}" alt="Hello Apply Logo" class="h-16 sm:h-20 md:h-28 w-auto object-contain" style="image-rendering: -webkit-optimize-contrast;">
                </a>
            </div>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
                <a href="#success-section" class="hover:text-emerald-600 transition" data-bn="সফল ভিসাসমূহ" data-en="Visa Success">সফল ভিসাসমূহ</a>
                <a href="#posts-section" class="hover:text-emerald-600 transition" data-bn="বিশেষ পোস্ট ও আপডেট" data-en="Updates & Gallery">বিশেষ পোস্ট ও আপডেট</a>
            </nav>
            <a href="https://wa.me/8801619891494?text=Hello%20Apply,%20India%20Visa%20samporke%20jante%20cai" target="_blank" 
               class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-xs sm:text-sm font-semibold px-4 sm:px-5 py-2 sm:py-2.5 rounded-xl transition-all shadow-md shadow-emerald-600/20">
                <span data-bn="সরাসরি ইনকোয়ারি" data-en="Direct Inquiry">সরাসরি ইনকোয়ারি</span>
            </a>
        </div>
    </header>

    <!-- Hero Banner -->
    <section class="relative bg-gradient-to-br from-slate-900 via-emerald-950 to-slate-900 text-white py-16 sm:py-24 px-4 overflow-hidden">
        <div class="max-w-4xl mx-auto text-center relative z-10">
            
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-600 to-teal-500 text-white border border-emerald-400/30 text-[11px] sm:text-sm px-4 sm:px-5 py-2 sm:py-2.5 rounded-full font-bold uppercase tracking-wider mb-6 sm:mb-8 shadow-2xl animate-glow">
                <span>🏆</span> 
                <span data-bn="১০ বছরের ভারতীয় ভিসা প্রসেসিং সফল অভিজ্ঞতা!" data-en="10 Years of Proven Indian Visa Processing Experience!">১০ বছরের ভারতীয় ভিসা প্রসেসিং সফল অভিজ্ঞতা!</span>
            </div>

            <h1 class="text-2xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-4 sm:mb-6 tracking-tight">
                <span data-bn="সহজ, নির্ভুল ও ঝামেলামুক্ত" data-en="Easy, Accurate & Hassle-Free">সহজ, নির্ভুল ও ঝামেলামুক্ত</span> <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-amber-300" data-bn="ইন্ডিয়ান ভিসা প্রসেসিং" data-en="Indian Visa Processing">ইন্ডিয়ান ভিসা প্রসেসিং</span>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto mb-8 sm:mb-10 leading-relaxed px-2" data-bn="ট্যুরিস্ট, মেডিকেল কিংবা বিজনেস ভিসা—আপনার ফাইল তৈরি থেকে শুরু করে দ্রুত প্রসেসিং পর্যন্ত সব দায়িত্ব আমাদের।" data-en="Tourist, Medical, or Business Visa—from file preparation to fast processing, we handle everything for you.">
                ট্যুরিস্ট, মেডিকেল কিংবা বিজনেস ভিসা—আপনার ফাইল তৈরি থেকে শুরু করে দ্রুত প্রসেসিং পর্যন্ত সব দায়িত্ব আমাদের।
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-4 px-4">
                <a href="#success-section" class="bg-white/10 hover:bg-white/20 text-white font-medium px-6 py-3 rounded-xl border border-white/20 transition text-sm" data-bn="আমাদের সাকসেস দেখুন" data-en="View Success Stories">
                    আমাদের সাকসেস দেখুন
                </a>
                <a href="https://wa.me/8801619891494?text=India%20Visa%20Application%20korbo" target="_blank" class="bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-bold px-7 py-3 rounded-xl shadow-xl transition text-sm" data-bn="ভিসার জন্য আবেদন করুন" data-en="Apply For Visa">
                    ভিসার জন্য আবেদন করুন
                </a>
            </div>
        </div>
    </section>

    <!-- 1. Visa Success Section -->
    <section id="success-section" class="py-14 sm:py-20 px-4 max-w-7xl mx-auto">
        <div class="text-center mb-10 sm:mb-14">
            <h2 class="text-xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight" data-bn="সম্প্রতি প্রাপ্ত সফল ভিসাসমূহ" data-en="Recently Approved Visas">সম্প্রতি প্রাপ্ত সফল ভিসাসমূহ</h2>
            <p class="text-slate-500 mt-2 sm:mt-3 text-xs sm:text-base" data-bn="আমাদের মাধ্যমে সফলভাবে ভিসা প্রাপ্ত সম্মানিত গ্রাহকদের কিছু রেকর্ড" data-en="Some records of our honored clients who successfully received visas through us">আমাদের মাধ্যমে সফলভাবে ভিসা প্রাপ্ত সম্মানিত গ্রাহকদের কিছু রেকর্ড</p>
        </div>

        <div id="visa-success-container">
            @include('partials.visa-success-grid', ['visaSuccesses' => $visaSuccesses])
        </div>
    </section>

    <!-- 2. Portrait Posts Carousel Section (Auto-scrolling + Manual buttons) -->
    <section id="posts-section" class="py-14 sm:py-20 px-4 max-w-7xl mx-auto bg-slate-100/60 rounded-3xl my-8 sm:my-12 border border-slate-200/50">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between mb-8 sm:mb-10 px-2 gap-4">
            <div>
                <span class="bg-orange-500/10 text-orange-600 border border-orange-500/20 text-xs px-3.5 py-1 rounded-full font-semibold uppercase tracking-wider" data-bn="বিশেষ গ্যালারি ও আপডেট" data-en="Special Gallery & Updates">
                    বিশেষ গ্যালারি ও আপডেট
                </span>
                <h2 class="text-xl sm:text-3xl font-extrabold text-slate-900 mt-2 sm:mt-3" data-bn="আমাদের পোর্ট্রেইট পোস্ট ও ছবিসমূহ" data-en="Our Portrait Posts & Photos">আমাদের পোর্ট্রেইট পোস্ট ও ছবিসমূহ</h2>
            </div>
            <div class="hidden sm:flex items-center gap-3">
                <button onclick="scrollPosts('left')" class="p-2.5 sm:p-3 rounded-full bg-white border border-slate-200 shadow-sm hover:bg-slate-900 hover:text-white transition">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button onclick="scrollPosts('right')" class="p-2.5 sm:p-3 rounded-full bg-white border border-slate-200 shadow-sm hover:bg-slate-900 hover:text-white transition">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

        @if(isset($posts) && $posts->count() > 0)
            <div id="posts-carousel" class="flex gap-4 sm:gap-6 overflow-x-auto no-scrollbar scroll-smooth pb-4 px-1 snap-x snap-mandatory">
                @foreach($posts as $post)
                    <div class="min-w-[220px] sm:min-w-[280px] lg:w-[calc(25%-18px)] flex-shrink-0 bg-white rounded-2xl border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col group snap-start">
                        <div class="relative bg-slate-900 aspect-[3/4] flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @if($post->category)
                                <span class="absolute top-2.5 right-2.5 bg-orange-500 text-white text-[10px] sm:text-[11px] font-bold px-2.5 py-1 rounded-full shadow">
                                    {{ $post->category }}
                                </span>
                            @endif
                        </div>
                        
                        <div class="p-3.5 sm:p-4 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-slate-900 text-xs sm:text-sm mb-1.5 sm:mb-2 leading-snug line-clamp-2">{{ $post->title }}</h3>
                                <p class="text-[10px] sm:text-[11px] text-slate-400">
                                    <span class="date-label" data-bn="তারিখ:" data-en="Date:">তারিখ:</span> {{ $post->created_at->format('d M, Y') }}
                                </p>
                            </div>
                            
                            <div class="mt-3 sm:mt-4 pt-2.5 sm:pt-3 border-t border-slate-100">
                                <a href="https://wa.me/8801619891494?text=Hello%20HelloApply,%20ei%20update%20somporke%20jante%20cai" target="_blank" 
                                   class="w-full flex items-center justify-center gap-1 bg-slate-900 hover:bg-orange-600 text-white text-[11px] font-bold py-2 px-3 rounded-xl transition">
                                    <span data-bn="বিস্তারিত" data-en="Details">বিস্তারিত</span> &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <p class="text-center text-[11px] text-slate-400 mt-2 sm:hidden" data-bn="← ডানে-বামে স্ক্রোল করুন →" data-en="← Swipe left & right →">← ডানে-বামে স্ক্রোল করুন →</p>
        @else
            <div class="text-center py-10 bg-white rounded-2xl border border-dashed border-slate-300">
                <p class="text-slate-500 text-sm" data-bn="কোনো পোর্ট্রেইট পোস্ট পাওয়া যায়নি।" data-en="No portrait posts found.">কোনো পোর্ট্রেইট পোস্ট পাওয়া যায়নি।</p>
            </div>
        @endif
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-10 sm:py-12 border-t border-slate-800 text-center text-xs">
        <div class="max-w-7xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between gap-6">
            <img src="{{ asset('Images/hello-apply.png') }}" alt="Hello Apply Logo" class="h-12 sm:h-16 w-auto object-contain brightness-0 invert">
            <p>&copy; {{ date('Y') }} Hello Apply. <span data-bn="সর্বস্বত্ব সংরক্ষিত।" data-en="All rights reserved.">সর্বস্বত্ব সংরক্ষিত।</span></p>
        </div>
    </footer>

    <!-- JavaScript for Language Toggle, Auto-Carousel & AJAX Pagination -->
    <script>
        function switchLanguage(lang) {
            const htmlTag = document.getElementById('html-root');
            const bodyTag = document.getElementById('body-tag');
            const btnBn = document.getElementById('lang-btn-bn');
            const btnEn = document.getElementById('lang-btn-en');

            if (lang === 'en') {
                htmlTag.setAttribute('lang', 'en');
                bodyTag.classList.remove('font-bn');
                bodyTag.classList.add('font-en');
                btnEn.className = "px-3 py-1 rounded-full text-[11px] font-bold transition-all bg-emerald-600 text-white shadow";
                btnBn.className = "px-3 py-1 rounded-full text-[11px] font-bold transition-all text-slate-400 hover:text-white";
            } else {
                htmlTag.setAttribute('lang', 'bn');
                bodyTag.classList.remove('font-en');
                bodyTag.classList.add('font-bn');
                btnBn.className = "px-3 py-1 rounded-full text-[11px] font-bold transition-all bg-emerald-600 text-white shadow";
                btnEn.className = "px-3 py-1 rounded-full text-[11px] font-bold transition-all text-slate-400 hover:text-white";
            }

            document.querySelectorAll('[data-bn]').forEach(el => {
                const text = el.getAttribute(`data-${lang}`);
                if (text) {
                    if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                        el.placeholder = text;
                    } else {
                        el.innerText = text;
                    }
                }
            });

            localStorage.setItem('hello_apply_lang', lang);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const savedLang = localStorage.getItem('hello_apply_lang') || 'bn';
            if (savedLang === 'en') {
                switchLanguage('en');
            }

            // AUTO-SCROLLING FOR POSTS CAROUSEL
            const carousel = document.getElementById('posts-carousel');
            if (carousel) {
                let autoScrollInterval = setInterval(() => {
                    if (carousel.scrollLeft + carousel.clientWidth >= carousel.scrollWidth - 10) {
                        carousel.scrollTo({ left: 0, behavior: 'smooth' });
                    } else {
                        carousel.scrollBy({ left: 300, behavior: 'smooth' });
                    }
                }, 3500);

                carousel.addEventListener('mouseenter', () => clearInterval(autoScrollInterval));
            }
        });

        function scrollPosts(direction) {
            const container = document.getElementById('posts-carousel');
            const scrollAmount = 300; 
            if (direction === 'left') {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }

        // AJAX Pagination handler
        document.addEventListener('click', function(e) {
            let paginationLink = e.target.closest('#visa-success-container nav a, #visa-success-container .pagination-links a');
            
            if (paginationLink) {
                e.preventDefault();
                let url = paginationLink.href;
                
                let container = document.getElementById('visa-success-container');
                container.style.opacity = '0.4';

                fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.text())
                .then(html => {
                    let parser = new DOMParser();
                    let doc = parser.parseFromString(html, 'text/html');
                    let newContent = doc.getElementById('visa-success-container').innerHTML;
                    
                    container.innerHTML = newContent;
                    container.style.opacity = '1';
                    
                    const currentLang = document.getElementById('html-root').getAttribute('lang') || 'bn';
                    if (currentLang === 'en') {
                        switchLanguage('en');
                    }

                    document.getElementById('success-section').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                })
                .catch(error => {
                    console.error('Error:', error);
                    container.style.opacity = '1';
                });
            }
        });
    </script>
</body>
</html>