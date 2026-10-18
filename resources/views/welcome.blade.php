<!DOCTYPE html>
<html lang="bn" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Now - ভারতের ভিসা প্রসেসিং সার্ভিস</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Hind Siliguri', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white">

    <!-- Navbar -->
    <header class="bg-white/90 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50 shadow-sm">
        <div class="max-w-6xl mx-auto px-4 h-20 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="text-2xl md:text-3xl font-black text-emerald-700 tracking-tight">Apply<span class="text-orange-500">Now</span></span>
            </div>
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-slate-600">
                <a href="#success-section" class="hover:text-emerald-600 transition">সফল ভিসাসমূহ</a>
                <a href="#posts-section" class="hover:text-emerald-600 transition">পরামর্শ ও আপডেট</a>
            </nav>
            <a href="https://wa.me/8801619891494?text=Hello%20ApplyNow,%20India%20Visa%20samporke%20jante%20cai" target="_blank" 
               class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-5 py-2.5 rounded-xl transition-all shadow-md shadow-emerald-600/20">
                <span>সরাসরি ইনকোয়ারি</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </header>

    <!-- Travel India Hero Banner -->
    <section class="relative bg-gradient-to-br from-slate-900 via-emerald-950 to-slate-900 text-white py-24 px-4 overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#10b981_1px,transparent_1px)] [background-size:16px_16px]"></div>
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <span class="inline-flex items-center gap-1.5 bg-emerald-500/10 text-emerald-300 border border-emerald-500/20 text-xs px-4 py-1.5 rounded-full font-semibold uppercase tracking-wider mb-6 shadow-inner">
                <span>🇮🇳</span> Travel India with Apply Now
            </span>
            <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6 tracking-tight">
                সহজ, নির্ভুল ও ঝামেলামুক্ত <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-amber-300">ইন্ডিয়ান ভিসা প্রসেসিং</span>
            </h1>
            <p class="text-slate-300 text-base md:text-lg max-w-2xl mx-auto mb-10 leading-relaxed">
                ট্যুরিস্ট, মেডিকেল কিংবা বিজনেস ভিসা—আপনার ফাইল তৈরি থেকে শুরু করে দ্রুত প্রসেসিং পর্যন্ত সব দায়িত্ব আমাদের। শতভাগ বিশ্বস্ততার সাথে সেবা নিন।
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#success-section" class="bg-white/10 hover:bg-white/20 text-white font-medium px-7 py-3.5 rounded-xl border border-white/20 backdrop-blur-sm transition">
                    আমাদের সাকসেস দেখুন
                </a>
                <a href="https://wa.me/8801619891494?text=India%20Visa%20Application%20korbo" target="_blank" class="bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-bold px-8 py-3.5 rounded-xl shadow-xl shadow-orange-500/20 transition">
                    ভিসার জন্য আবেদন করুন
                </a>
            </div>
        </div>
    </section>

    <!-- Success Visas Section (Portrait Cards & Pagination) -->
    <section id="success-section" class="py-20 px-4 max-w-6xl mx-auto">
        <div class="text-center mb-14">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">সম্প্রতি প্রাপ্ত সফল ভিসাসমূহ</h2>
            <p class="text-slate-500 mt-3 text-sm md:text-base">আমাদের মাধ্যমে সফলভাবে ভিসা প্রাপ্ত সম্মানিত গ্রাহকদের কিছু ঝলক</p>
        </div>

        @if(isset($visaSuccesses) && $visaSuccesses->count() > 0)
            <!-- Portrait Card Grid: 3 columns (Mobile: 1, Sm: 2, Lg: 3) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($visaSuccesses as $visa)
                    <div class="bg-white rounded-3xl border border-slate-100 shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:shadow-slate-300/60 transition-all duration-300 overflow-hidden flex flex-col group">
                        <!-- Portrait Image Box -->
                        <div class="relative bg-slate-900 aspect-[3/4] flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('storage/' . $visa->image_path) }}" alt="Visa Record" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 via-transparent to-transparent"></div>
                            <span class="absolute top-4 right-4 bg-emerald-600/90 backdrop-blur-md text-white text-xs font-bold px-3 py-1.5 rounded-full shadow-lg border border-emerald-500/30 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                Approved
                            </span>
                        </div>
                        
                        <!-- Card Details -->
                        <div class="p-6 flex-1 flex flex-col justify-between bg-white">
                            <div>
                                <h3 class="font-bold text-slate-900 text-lg mb-3 leading-snug">{{ $visa->title ?? 'Indian Visa Approved' }}</h3>
                                <div class="space-y-2 text-xs text-slate-600 mb-4 bg-slate-50 p-3.5 rounded-2xl border border-slate-100">
                                    @if($visa->route)
                                        <div class="flex justify-between items-center">
                                            <span class="text-slate-400">অনুমোদিত রুট:</span>
                                            <strong class="text-slate-800 font-semibold">{{ $visa->route }}</strong>
                                        </div>
                                    @endif
                                    @if($visa->issue_date)
                                        <div class="flex justify-between items-center">
                                            <span class="text-slate-400">ইস্যুর তারিখ:</span>
                                            <span class="font-medium text-slate-700">{{ $visa->issue_date->format('d M, Y') }}</span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            
                            <div>
                                <a href="https://wa.me/8801619891494?text=Ami%20India%20Visa%20korbo" target="_blank" 
                                   class="w-full flex items-center justify-center gap-2 bg-slate-900 hover:bg-emerald-600 text-white text-xs font-bold py-3 px-4 rounded-xl transition-all shadow-md group-hover:bg-emerald-600">
                                    <span>এই বিষয়ে ইনকোয়ারি করুন</span> 
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Laravel Pagination Links -->
            @if(method_exists($visaSuccesses, 'links'))
                <div class="mt-12">
                    {{ $visaSuccesses->links() }}
                </div>
            @endif

        @else
            <div class="text-center py-16 bg-white rounded-3xl border border-dashed border-slate-200 shadow-sm">
                <svg class="w-12 h-12 text-slate-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                <p class="text-slate-500 font-medium">এখনো কোনো ভিসা কার্ড যুক্ত করা হয়নি।</p>
            </div>
        @endif
    </section>

    <!-- Posts / Notice Section -->
    <section id="posts-section" class="py-16 bg-white border-t border-slate-100">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-xs font-bold tracking-wider text-emerald-600 uppercase bg-emerald-50 px-3 py-1 rounded-full">পরামর্শ ও আপডেট</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-3">ভারতীয় ভিসা সম্পর্কিত জরুরি নির্দেশিকা</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Post Card 1 -->
                <div class="bg-slate-50 border border-slate-100 rounded-2xl p-6 hover:bg-white hover:shadow-xl transition duration-300 flex flex-col justify-between">
                    <div>
                        <span class="text-xs text-orange-500 font-semibold">ভিসা গাইডলাইন</span>
                        <h3 class="font-bold text-slate-900 text-lg mt-2 mb-3">ট্যুরিস্ট ভিসার জন্য প্রয়োজনীয় কাগজপত্র</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">পাসপোর্ট মেয়াদ, ব্যাংক স্টেটমেন্ট, ইউটিলিটি বিল এবং প্রফেশনাল সার্টিফিকেট সঠিকভাবে প্রস্তুত করার নিয়মাবলী।</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-200/60">
                        <a href="https://wa.me/8801619891494?text=Tourist%20Visa%20paperwork%20somporke%20jante%20cai" target="_blank" class="text-xs font-bold text-emerald-600 hover:text-emerald-700 flex items-center gap-1">
                            বিস্তারিত জানুন &rarr;
                        </a>
                    </div>
                </div>

                <!-- Post Card 2 -->
                <div class="bg-slate-50 border border-slate-100 rounded-2xl p-6 hover:bg-white hover:shadow-xl transition duration-300 flex flex-col justify-between">
                    <div>
                        <span class="text-xs text-orange-500 font-semibold">মেডিকেল ভিসা</span>
                        <h3 class="font-bold text-slate-900 text-lg mt-2 mb-3">মেডিকেল ভিসার সহজ প্রসেসিং ও অ্যাপয়েন্টমেন্ট</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">ভারতের হসপিটাল ইনভাইটেশন লেটার এবং ডাক্তারের প্রেসক্রিপশন দিয়ে দ্রুত মেডিকেল ভিসা পাওয়ার উপায়।</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-200/60">
                        <a href="https://wa.me/8801619891494?text=Medical%20Visa%20somporke%20jante%20cai" target="_blank" class="text-xs font-bold text-emerald-600 hover:text-emerald-700 flex items-center gap-1">
                            বিস্তারিত জানুন &rarr;
                        </a>
                    </div>
                </div>

                <!-- Post Card 3 -->
                <div class="bg-slate-50 border border-slate-100 rounded-2xl p-6 hover:bg-white hover:shadow-xl transition duration-300 flex flex-col justify-between">
                    <div>
                        <span class="text-xs text-orange-500 font-semibold">পোর্ট পরিবর্তন</span>
                        <h3 class="font-bold text-slate-900 text-lg mt-2 mb-3">ভিসা পাওয়ার পর পোর্ট চেঞ্জ বা রুট আপডেট</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">ভারতীয় ভিসার পোর্ট এন্ট্রি বা ট্রাভেল রুট পরিবর্তনের নিয়ম এবং এম্বাসি সাবমিশন সংক্রান্ত তথ্য।</p>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-200/60">
                        <a href="https://wa.me/8801619891494?text=Port%20change%20somporke%20jante%20cai" target="_blank" class="text-xs font-bold text-emerald-600 hover:text-emerald-700 flex items-center gap-1">
                            বিস্তারিত জানুন &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-10 border-t border-slate-800 text-center text-xs">
        <div class="max-w-6xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between gap-4">
            <span class="text-xl font-black text-white tracking-tight">Apply<span class="text-orange-500">Now</span></span>
            <p>&copy; {{ date('Y') }} Apply Now. সর্বস্বত্ব সংরক্ষিত।</p>
            <div class="flex gap-4">
                <a href="https://wa.me/8801619891494" target="_blank" class="hover:text-white transition">হোয়াটসঅ্যাপ চ্যাট</a>
            </div>
        </div>
    </footer>

</body>
</html>