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
            70% { box-shadow: 0 0 0 12px rgba(16, 185, 129, 0); }
            100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
        }
        .animate-glow { animation: glowing-badge 2s infinite; }

        @keyframes smoothScroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: max-content;
            animation: smoothScroll 30s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }

        .attraction-card {
            position: relative;
            overflow: hidden;
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
        }
        .attraction-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 25px 50px -12px rgba(4, 120, 87, 0.5);
        }
        .card-glow {
            position: absolute;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(52, 211, 153, 0.35) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
            transform: translate(-50%, -50%);
            transition: width 0.3s, height 0.3s;
            z-index: 1;
        }
    </style>
</head>
<body class="font-bn bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white transition-all duration-300" id="body-tag">

    <!-- Top Utility & Language Switcher Bar -->
    <div class="bg-slate-900 text-slate-300 text-xs py-2 px-4 border-b border-slate-800 shadow-inner">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="hidden sm:flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span data-bn="হটলাইন ও ২৪/৭ হোয়াটসঅ্যাপ সাপোর্ট" data-en="Hotline & 24/7 WhatsApp Support">হটলাইন ও ২৪/৭ হোয়াটসঅ্যাপ সাপোর্ট</span>: <strong class="text-white">+880 1848-317583</strong>
            </div>
            <div class="flex items-center justify-between w-full sm:w-auto">
                <span class="sm:hidden text-[11px] text-emerald-400 font-bold">Hello Apply Visa Portal</span>
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
            <div class="flex items-center gap-2">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('Images/hello-apply.png') }}" alt="Hello Apply Logo" class="h-16 sm:h-20 md:h-28 w-auto object-contain" style="image-rendering: -webkit-optimize-contrast;">
                </a>
            </div>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
                <a href="#success-section" class="hover:text-emerald-600 transition" data-bn="সফল ভিসাসমূহ" data-en="Visa Success">সফল ভিসাসমূহ</a>
                <a href="#posts-section" class="hover:text-emerald-600 transition" data-bn="বিশেষ পোস্ট ও আপডেট" data-en="Updates & Gallery">বিশেষ পোস্ট ও আপডেট</a>
            </nav>
            <a href="https://wa.me/8801848317583?text=Hello%20Apply,%20India%20Visa%20samporke%20jante%20cai" target="_blank" 
               class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white text-xs sm:text-sm font-bold px-5 py-2.5 rounded-xl transition-all shadow-lg shadow-emerald-600/20">
                <span data-bn="সরাসরি ইনকোয়ারি" data-en="Direct Inquiry">সরাসরি ইনকোয়ারি</span>
            </a>
        </div>
    </header>

    <!-- Hero Banner -->
    <section class="relative bg-gradient-to-br from-slate-950 via-emerald-950 to-slate-900 text-white py-20 sm:py-28 px-4 overflow-hidden border-b border-emerald-900/40">
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-emerald-900/20 via-transparent to-transparent pointer-events-none"></div>
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-600/90 to-teal-600/90 text-white border border-emerald-400/40 text-[11px] sm:text-sm px-5 py-2.5 rounded-full font-bold uppercase tracking-wider mb-6 sm:mb-8 shadow-2xl animate-glow backdrop-blur-md">
                <span>🏆</span> 
                <span data-bn="১০ বছরের ভারতীয় ভিসা প্রসেসিং সফল অভিজ্ঞতা!" data-en="10 Years of Proven Indian Visa Processing Experience!">১০ বছরের ভারতীয় ভিসা প্রসেসিং সফল অভিজ্ঞতা!</span>
            </div>

            <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-5 sm:mb-7 tracking-tight">
                <span data-bn="সহজ, নির্ভুল ও ঝামেলামুক্ত" data-en="Easy, Accurate & Hassle-Free">সহজ, নির্ভুল ও ঝামেলামুক্ত</span> <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 via-amber-300 to-orange-500" data-bn="ইন্ডিয়ান ভিসা প্রসেসিং" data-en="Indian Visa Processing">ইন্ডিয়ান ভিসা প্রসেসিং</span>
            </h1>
            <p class="text-slate-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto mb-8 sm:mb-10 leading-relaxed px-2" data-bn="ট্যুরিস্ট, মেডিকেল কিংবা বিজনেস ভিসা—আপনার ফাইল তৈরি থেকে শুরু করে দ্রুত প্রসেসিং পর্যন্ত সব দায়িত্ব আমাদের।" data-en="Tourist, Medical, or Business Visa—from file preparation to fast processing, we handle everything for you.">
                ট্যুরিস্ট, মেডিকেল কিংবা বিজনেস ভিসা—আপনার ফাইল তৈরি থেকে শুরু করে দ্রুত প্রসেসিং পর্যন্ত সব দায়িত্ব আমাদের।
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-4 px-4">
                <a href="#success-section" class="bg-white/10 hover:bg-white/20 text-white font-semibold px-7 py-3.5 rounded-xl border border-white/20 transition text-sm backdrop-blur-sm shadow-lg" data-bn="আমাদের সাকসেস দেখুন" data-en="View Success Stories">
                    আমাদের সাকসেস দেখুন
                </a>
                <a href="https://wa.me/8801848317583?text=India%20Visa%20Application%20korbo" target="_blank" class="bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-bold px-8 py-3.5 rounded-xl shadow-xl shadow-orange-500/20 transition text-sm">
                    ভিসার জন্য আবেদন করুন
                </a>
            </div>
        </div>
    </section>

    <!-- 1. Visa Success Section (Realtime AJAX Pagination Fixed) -->
    <section id="success-section" class="py-16 sm:py-24 px-4 max-w-7xl mx-auto">
        <div class="text-center mb-12 sm:mb-16">
            <span class="bg-emerald-100 text-emerald-800 text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-widest border border-emerald-200" data-bn="ভিসা অ্যাপ্রুভাল রেকর্ড" data-en="Visa Approval Records">ভিসা অ্যাপ্রুভাল রেকর্ড</span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-3" data-bn="সম্প্রতি প্রাপ্ত সফল ভিসাসমূহ" data-en="Recently Approved Visas">সম্প্রতি প্রাপ্ত সফল ভিসাসমূহ</h2>
            <p class="text-slate-500 mt-2 sm:mt-3 text-xs sm:text-base max-w-xl mx-auto" data-bn="আমাদের মাধ্যমে সফলভাবে ভিসা প্রাপ্ত সম্মানিত গ্রাহকদের কিছু রেকর্ড" data-en="Some records of our honored clients who successfully received visas through us">আমাদের মাধ্যমে সফলভাবে ভিসা প্রাপ্ত সম্মানিত গ্রাহকদের কিছু রেকর্ড</p>
        </div>

        <div id="visa-success-container">
            @include('partials.visa-success-grid', ['visaSuccesses' => $visaSuccesses])
        </div>
    </section>

    <!-- 2. Portrait Posts Section -->
    <section id="posts-section" class="py-16 sm:py-24 px-4 max-w-7xl mx-auto bg-slate-100/70 rounded-[2.5rem] my-8 sm:my-16 border border-slate-200/60 shadow-inner overflow-hidden relative">
        <div class="text-center mb-12">
            <span class="bg-orange-500/10 text-orange-600 border border-orange-500/20 text-xs px-4 py-1.5 rounded-full font-bold uppercase tracking-wider" data-bn="বিশেষ গ্যালারি ও আপডেট" data-en="Special Gallery & Updates">
                বিশেষ গ্যালারি ও আপডেট
            </span>
            <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 mt-3" data-bn="আমাদের পোর্ট্রেইট পোস্ট ও ছবিসমূহ" data-en="Our Portrait Posts & Photos">আমাদের পোর্ট্রেইট পোস্ট ও ছবিসমূহ</h2>
            <p class="text-slate-500 text-xs sm:text-sm mt-1" data-bn="স্বয়ংক্রিয়ভাবে চলমান গ্যালারি প্রিভিউ" data-en="Automatically sliding live gallery preview">স্বয়ংক্রিয়ভাবে চলমান গ্যালারি প্রিভিউ</p>
        </div>

        @if(isset($posts) && $posts->count() > 0)
            <div class="w-full overflow-hidden relative py-4">
                <div class="absolute left-0 inset-y-0 w-16 bg-gradient-to-r from-slate-100/90 to-transparent z-10 pointer-events-none"></div>
                <div class="absolute right-0 inset-y-0 w-16 bg-gradient-to-l from-slate-100/90 to-transparent z-10 pointer-events-none"></div>

                <div id="posts-carousel" class="animate-marquee flex gap-4 sm:gap-6">
                    @foreach($posts as $post)
                        <div class="w-[210px] sm:w-[280px] flex-shrink-0 bg-white rounded-3xl border border-slate-200/85 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden flex flex-col group">
                            <div class="relative bg-slate-950 aspect-[3/4] flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                @if($post->category)
                                    <span class="absolute top-3 right-3 bg-gradient-to-r from-orange-500 to-amber-500 text-white text-[10px] sm:text-[11px] font-bold px-3 py-1 rounded-full shadow-lg border border-orange-300/30">
                                        {{ $post->category }}
                                    </span>
                                @endif
                            </div>
                            
                            <div class="p-3.5 sm:p-4 flex-1 flex flex-col justify-between bg-gradient-to-b from-white to-slate-50/50">
                                <div>
                                    <h3 class="font-bold text-slate-900 text-xs sm:text-sm mb-2 leading-snug line-clamp-2">{{ $post->title }}</h3>
                                    <p class="text-[10px] sm:text-[11px] text-slate-400 font-medium">
                                        <span class="date-label" data-bn="তারিখ:" data-en="Date:">তারিখ:</span> {{ $post->created_at->format('d M, Y') }}
                                    </p>
                                </div>
                                
                                <div class="mt-4 pt-3 border-t border-slate-100">
                                    <a href="https://wa.me/8801848317583?text=Hello%20HelloApply,%20ei%20update%20somporke%20jante%20cai" target="_blank" 
                                       class="w-full flex items-center justify-center gap-1.5 bg-slate-900 hover:bg-orange-600 text-white text-[11px] font-bold py-2.5 px-3 rounded-xl transition shadow">
                                        <span data-bn="বিস্তারিত জানুন" data-en="Learn More">বিস্তারিত জানুন</span> &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach($posts as $post)
                        <div class="w-[210px] sm:w-[280px] flex-shrink-0 bg-white rounded-3xl border border-slate-200/85 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden flex flex-col group">
                            <div class="relative bg-slate-950 aspect-[3/4] flex items-center justify-center overflow-hidden">
                                <img src="{{ asset('storage/' . $post->image_path) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                @if($post->category)
                                    <span class="absolute top-3 right-3 bg-gradient-to-r from-orange-500 to-amber-500 text-white text-[10px] sm:text-[11px] font-bold px-3 py-1 rounded-full shadow-lg border border-orange-300/30">
                                        {{ $post->category }}
                                    </span>
                                @endif
                            </div>
                            
                            <div class="p-3.5 sm:p-4 flex-1 flex flex-col justify-between bg-gradient-to-b from-white to-slate-50/50">
                                <div>
                                    <h3 class="font-bold text-slate-900 text-xs sm:text-sm mb-2 leading-snug line-clamp-2">{{ $post->title }}</h3>
                                    <p class="text-[10px] sm:text-[11px] text-slate-400 font-medium">
                                        <span class="date-label" data-bn="তারিখ:" data-en="Date:">তারিখ:</span> {{ $post->created_at->format('d M, Y') }}
                                    </p>
                                </div>
                                
                                <div class="mt-4 pt-3 border-t border-slate-100">
                                    <a href="https://wa.me/8801848317583?text=Hello%20HelloApply,%20ei%20update%20somporke%20jante%20cai" target="_blank" 
                                       class="w-full flex items-center justify-center gap-1.5 bg-slate-900 hover:bg-orange-600 text-white text-[11px] font-bold py-2.5 px-3 rounded-xl transition shadow">
                                        <span data-bn="বিস্তারিত জানুন" data-en="Learn More">বিস্তারিত জানুন</span> &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="text-center py-10 bg-white rounded-2xl border border-dashed border-slate-300">
                <p class="text-slate-500 text-sm" data-bn="কোনো পোর্ট্রেইট পোস্ট পাওয়া যায়নি।" data-en="No portrait posts found.">কোনো পোর্ট্রেইট পোস্ট পাওয়া যায়নি।</p>
            </div>
        @endif
    </section>

    <!-- Footer with Phone Number & Social Media Links -->
    <footer class="bg-slate-950 text-slate-400 py-12 sm:py-16 border-t border-slate-900 text-xs">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8 items-center text-center md:text-left">
            
            <!-- Brand / Logo -->
            <div class="flex flex-col items-center md:items-start gap-3">
                <img src="{{ asset('Images/hello-apply.png') }}" alt="Hello Apply Logo" class="h-12 sm:h-16 w-auto object-contain brightness-0 invert">
                <p class="text-slate-400 text-xs" data-bn="আপনার বিশ্বস্ত ইন্ডিয়ান ভিসা প্রসেসিং পার্টনার।" data-en="Your trusted Indian visa processing partner.">আপনার বিশ্বস্ত ইন্ডিয়ান ভিসা প্রসেসিং পার্টনার।</p>
            </div>

            <!-- Contact & Phone Number -->
            <div class="flex flex-col items-center gap-2">
                <h4 class="text-white font-bold text-sm mb-1" data-bn="যোগাযোগ ও হটলাইন" data-en="Contact & Hotline">যোগাযোগ ও হটলাইন</h4>
                <p class="flex items-center gap-2 text-slate-300">
                    <span>📞 হটলাইন/হোয়াটসঅ্যাপ:</span> 
                    <strong class="text-emerald-400 font-bold">+880 1848-317583</strong>
                </p>
            </div>

            <!-- Social Media Links -->
            <div class="flex flex-col items-center md:items-end gap-3">
                <h4 class="text-white font-bold text-sm" data-bn="সোশ্যাল মিডিয়া" data-en="Social Media">সোশ্যাল মিডিয়া</h4>
                <div class="flex items-center gap-3">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/8801848317583" target="_blank" class="w-9 h-9 rounded-full bg-emerald-600 text-white flex items-center justify-center font-bold hover:bg-emerald-700 transition shadow" title="WhatsApp">WA</a>
                    <!-- Facebook -->
                    <a href="https://facebook.com" target="_blank" class="w-9 h-9 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold hover:bg-blue-700 transition shadow" title="Facebook">FB</a>
                    <!-- YouTube -->
                    <a href="https://youtube.com" target="_blank" class="w-9 h-9 rounded-full bg-red-600 text-white flex items-center justify-center font-bold hover:bg-red-700 transition shadow" title="YouTube">YT</a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 border-t border-slate-900 mt-8 pt-6 text-center">
            <p>&copy; {{ date('Y') }} Hello Apply. <span data-bn="সর্বস্বত্ব সংরক্ষিত।" data-en="All rights reserved.">সর্বস্বত্ব সংরক্ষিত।</span></p>
        </div>
    </footer>

    <!-- JavaScript for Language Toggle, Attraction Card Glow & Working AJAX Pagination -->
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

            document.addEventListener('mousemove', (e) => {
                const cards = document.querySelectorAll('.attraction-card');
                cards.forEach(card => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    let glow = card.querySelector('.card-glow');
                    if (!glow) {
                        glow = document.createElement('div');
                        glow.className = 'card-glow';
                        card.appendChild(glow);
                    }
                    glow.style.left = `${x}px`;
                    glow.style.top = `${y}px`;
                });
            });
        });

        // Fully working AJAX Pagination without page reload
        document.addEventListener('click', function(e) {
            let paginationLink = e.target.closest('#visa-success-container nav a, #visa-success-container .pagination a');
            if (paginationLink && paginationLink.href) {
                e.preventDefault();
                let url = paginationLink.href;
                let container = document.getElementById('visa-success-container');
                container.style.opacity = '0.4';

                fetch(url, {
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                })
                .then(res => res.text())
                .then(html => {
                    let parser = new DOMParser();
                    let doc = parser.parseFromString(html, 'text/html');
                    let newContent = doc.getElementById('visa-success-container');
                    
                    if (newContent) {
                        container.innerHTML = newContent.innerHTML;
                    } else {
                        container.innerHTML = html;
                    }
                    
                    container.style.opacity = '1';
                    
                    const currentLang = document.getElementById('html-root').getAttribute('lang') || 'bn';
                    if (currentLang === 'en') {
                        switchLanguage('en');
                    }
                    document.getElementById('success-section').scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                })
                .catch(err => {
                    console.error(err);
                    container.style.opacity = '1';
                    window.location.href = url; // Fallback to normal navigation if fetch fails
                });
            }
        });
    </script>
</body>
</html>