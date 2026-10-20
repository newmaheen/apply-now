<!DOCTYPE html>
<html lang="bn" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Apply - ভারতের ভিসা প্রসেসিং সার্ভিস</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Hind Siliguri', sans-serif; }
        /* Hide scrollbar for Chrome, Safari and Opera */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        /* Hide scrollbar for IE, Edge and Firefox */
        .no-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white">

    <!-- Navbar -->
    <header class="bg-white/90 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 h-24 flex items-center justify-between">
            <!-- Logo Section (Boro kora hoyeche) -->
            <div class="flex items-center gap-2">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('Images/hello-apply.png') }}" alt="Hello Apply Logo" class="h-24 md:h-32 w-auto object-contain" style="image-rendering: -webkit-optimize-contrast;">
                </a>
            </div>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
                <a href="#success-section" class="hover:text-emerald-600 transition">সফল ভিসাসমূহ</a>
                <a href="#posts-section" class="hover:text-emerald-600 transition">বিশেষ পোস্ট ও আপডেট</a>
            </nav>
            <a href="https://wa.me/8801619891494?text=Hello%20Apply,%20India%20Visa%20samporke%20jante%20cai" target="_blank" 
               class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-all shadow-md shadow-emerald-600/20">
                <span>সরাসরি ইনকোয়ারি</span>
            </a>
        </div>
    </header>

    <!-- Travel India Hero Banner (10 Years Experience Added) -->
    <section class="relative bg-gradient-to-br from-slate-900 via-emerald-950 to-slate-900 text-white py-24 px-4 overflow-hidden">
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <span class="inline-flex items-center gap-2 bg-emerald-500/10 text-emerald-300 border border-emerald-500/20 text-xs md:text-sm px-4 py-2 rounded-full font-semibold uppercase tracking-wider mb-6 shadow-lg">
                <span>🌟</span> আমাদের রয়েছে ১০ বছরের ভারতীয় ভিসা প্রসেসিং অভিজ্ঞতা
            </span>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6 tracking-tight">
                সহজ, নির্ভুল ও ঝামেলামুক্ত <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-amber-300">ইন্ডিয়ান ভিসা প্রসেসিং</span>
            </h1>
            <p class="text-slate-300 text-base md:text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
                ট্যুরিস্ট, মেডিকেল কিংবা বিজনেস ভিসা—আপনার ফাইল তৈরি থেকে শুরু করে দ্রুত প্রসেসিং পর্যন্ত সব দায়িত্ব আমাদের।
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#success-section" class="bg-white/10 hover:bg-white/20 text-white font-medium px-7 py-3.5 rounded-xl border border-white/20 transition">
                    আমাদের সাকসেস দেখুন
                </a>
                <a href="https://wa.me/8801619891494?text=India%20Visa%20Application%20korbo" target="_blank" class="bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-bold px-8 py-3.5 rounded-xl shadow-xl transition">
                    ভিসার জন্য আবেদন করুন
                </a>
            </div>
        </div>
    </section>

    <!-- 1. Visa Success Section with AJAX Pagination (Mobile Friendly) -->
    <section id="success-section" class="py-20 px-4 max-w-7xl mx-auto">
        <div class="text-center mb-14">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">সম্প্রতি প্রাপ্ত সফল ভিসাসমূহ</h2>
            <p class="text-slate-500 mt-3 text-sm md:text-base">আমাদের মাধ্যমে সফলভাবে ভিসা প্রাপ্ত সম্মানিত গ্রাহকদের কিছু রেকর্ড</p>
        </div>

        <div id="visa-success-container">
            @include('partials.visa-success-grid', ['visaSuccesses' => $visaSuccesses])
        </div>
    </section>

    <!-- 2. Portrait Posts Carousel Section (4 per row, horizontal sliding with buttons) -->
    <section id="posts-section" class="py-20 px-4 max-w-7xl mx-auto bg-slate-100/60 rounded-3xl my-12 border border-slate-200/50">
        <div class="flex flex-col md:flex-row items-center justify-between mb-10 px-2">
            <div>
                <span class="bg-orange-500/10 text-orange-600 border border-orange-500/20 text-xs px-4 py-1.5 rounded-full font-semibold uppercase tracking-wider">
                    বিশেষ গ্যালারি ও আপডেট
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-3">আমাদের পোর্ট্রেইট পোস্ট ও ছবিসমূহ</h2>
            </div>
            <!-- Carousel Navigation Buttons -->
            <div class="flex items-center gap-3 mt-4 md:mt-0">
                <button onclick="scrollPosts('left')" class="p-3 rounded-full bg-white border border-slate-200 shadow-sm hover:bg-slate-900 hover:text-white transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button onclick="scrollPosts('right')" class="p-3 rounded-full bg-white border border-slate-200 shadow-sm hover:bg-slate-900 hover:text-white transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

        @if(isset($posts) && $posts->count() > 0)
            <!-- Horizontal Carousel Container -->
            <div id="posts-carousel" class="flex gap-6 overflow-x-auto no-scrollbar scroll-smooth pb-4 px-1">
                @foreach($posts as $post)
                    <div class="min-w-[280px] sm:min-w-[300px] lg:w-[calc(25%-18px)] flex-shrink-0 bg-white rounded-2xl border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col group">
                        <!-- Portrait Image Box -->
                        <div class="relative bg-slate-900 aspect-[3/4] flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @if($post->category)
                                <span class="absolute top-3 right-3 bg-orange-500 text-white text-[11px] font-bold px-2.5 py-1 rounded-full shadow">
                                    {{ $post->category }}
                                </span>
                            @endif
                        </div>
                        
                        <div class="p-4 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-slate-900 text-sm mb-2 leading-snug">{{ $post->title }}</h3>
                                <p class="text-[11px] text-slate-400">তারিখ: {{ $post->created_at->format('d M, Y') }}</p>
                            </div>
                            
                            <div class="mt-4 pt-3 border-t border-slate-100">
                                <a href="https://wa.me/8801619891494?text=Hello%20HelloApply,%20ei%20update%20somporke%20jante%20cai" target="_blank" 
                                   class="w-full flex items-center justify-center gap-1 bg-slate-900 hover:bg-orange-600 text-white text-[11px] font-bold py-2 px-3 rounded-xl transition">
                                    <span>বিস্তারিত</span> &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-10 bg-white rounded-2xl border border-dashed border-slate-300">
                <p class="text-slate-500 text-sm">কোনো পোর্ট্রেইট পোস্ট পাওয়া যায়নি।</p>
            </div>
        @endif
    </section>

    <!-- Footer (Boro Logo added) -->
    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800 text-center text-xs">
        <div class="max-w-7xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between gap-6">
            <img src="{{ asset('Images/hello-apply.png') }}" alt="Hello Apply Logo" class="h-16 w-auto object-contain brightness-0 invert">
            <p>&copy; {{ date('Y') }} Hello Apply. সর্বস্বত্ব সংরক্ষিত।</p>
        </div>
    </footer>

    <!-- JavaScript for Carousel & AJAX Pagination -->
    <script>
        // Carousel Scroll Function
        function scrollPosts(direction) {
            const container = document.getElementById('posts-carousel');
            const scrollAmount = 320; // Card width + gap
            if (direction === 'left') {
                container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            } else {
                container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            }
        }

        // AJAX Pagination for Visa Success cards
        document.addEventListener('click', function(e) {
            if (e.target.closest('#visa-success-container .pagination a')) {
                e.preventDefault();
                let url = e.target.closest('a').href;
                
                fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.text())
                .then(html => {
                    // Create a temporary element to parse the response
                    let parser = new DOMParser();
                    let doc = parser.parseFromString(html, 'text/html');
                    let newContainer = doc.getElementById('visa-success-container').innerHTML;
                    
                    document.getElementById('visa-success-container').innerHTML = newContainer;
                    
                    // Smooth scroll back to top of the success section
                    document.getElementById('success-section').scrollIntoView({ behavior: 'smooth' });
                })
                .catch(error => console.error('Error:', error));
            }
        });
    </script>
</body>
</html>