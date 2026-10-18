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
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white">

    <!-- Navbar -->
    <header class="bg-white/90 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 h-20 flex items-center justify-between">
            <!-- Logo Section -->
            <div class="flex items-center gap-2">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('Images/hello-apply.png') }}" alt="Hello Apply Logo" class="h-10 md:h-12 w-auto object-contain">
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

    <!-- Travel India Hero Banner -->
    <section class="relative bg-gradient-to-br from-slate-900 via-emerald-950 to-slate-900 text-white py-24 px-4 overflow-hidden">
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <span class="inline-flex items-center gap-1.5 bg-emerald-500/10 text-emerald-300 border border-emerald-500/20 text-xs px-4 py-1.5 rounded-full font-semibold uppercase tracking-wider mb-6">
                <span>🇮🇳</span> Travel India with Hello Apply
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

    <!-- 1. Visa Success Section (Landscape - 3 per row) -->
    <section id="success-section" class="py-20 px-4 max-w-7xl mx-auto">
        <div class="text-center mb-14">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-slate-900 tracking-tight">সম্প্রতি প্রাপ্ত সফল ভিসাসমূহ</h2>
            <p class="text-slate-500 mt-3 text-sm md:text-base">আমাদের মাধ্যমে সফলভাবে ভিসা প্রাপ্ত সম্মানিত গ্রাহকদের কিছু রেকর্ড</p>
        </div>

        @if(isset($visaSuccesses) && $visaSuccesses->count() > 0)
            <!-- Landscape Card Grid: 3 columns -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($visaSuccesses as $visa)
                    <div class="bg-white rounded-3xl border border-slate-100 shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-all duration-300 overflow-hidden flex flex-col group">
                        <!-- Landscape Image Box (aspect-[16/10]) -->
                        <div class="relative bg-slate-900 aspect-[16/10] flex items-center justify-center overflow-hidden">
                            <img src="{{ asset('storage/' . $visa->image_path) }}" alt="Visa Record" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <span class="absolute top-3 right-3 bg-emerald-600 text-white text-[11px] font-bold px-2.5 py-1 rounded-full shadow-lg">Approved ✓</span>
                        </div>
                        
                        <!-- Details -->
                        <div class="p-6 flex-1 flex flex-col justify-between bg-white">
                            <div>
                                <h3 class="font-bold text-slate-900 text-base mb-3 leading-snug">{{ $visa->title ?? 'Indian Visa Approved' }}</h3>
                                <div class="space-y-1.5 text-xs text-slate-600 mb-4 bg-slate-50 p-3 rounded-2xl border border-slate-100">
                                    @if($visa->route)
                                        <div class="flex justify-between items-center">
                                            <span class="text-slate-400">অনুমোদিত রুট:</span>
                                            <strong class="text-slate-800">{{ $visa->route }}</strong>
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
                            
                            <a href="https://wa.me/8801619891494?text=Ami%20India%20Visa%20korbo" target="_blank" 
                               class="w-full flex items-center justify-center gap-2 bg-slate-900 hover:bg-emerald-600 text-white text-xs font-bold py-2.5 px-4 rounded-xl transition-all">
                                <span>এই বিষয়ে ইনকোয়ারি করুন</span> &rarr;
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            @if(method_exists($visaSuccesses, 'links'))
                <div class="mt-12">
                    {{ $visaSuccesses->links() }}
                </div>
            @endif
        @else
            <div class="text-center py-16 bg-white rounded-3xl border border-dashed border-slate-200">
                <p class="text-slate-500">এখনো কোনো ভিসা কার্ড যুক্ত করা হয়নি।</p>
            </div>
        @endif
    </section>

    <!-- 2. Portrait Posts Section (Portrait - 4 per row) -->
    <section id="posts-section" class="py-20 px-4 max-w-7xl mx-auto bg-slate-100/60 rounded-3xl my-12 border border-slate-200/50">
        <div class="text-center mb-14">
            <span class="bg-orange-500/10 text-orange-600 border border-orange-500/20 text-xs px-4 py-1.5 rounded-full font-semibold uppercase tracking-wider">
                বিশেষ গ্যালারি ও আপডেট
            </span>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mt-3">আমাদের পোর্ট্রেইট পোস্ট ও ছবিসমূহ</h2>
        </div>

        @if(isset($posts) && $posts->count() > 0)
            <!-- Portrait Card Grid: 4 columns on large screen (lg:grid-cols-4) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($posts as $post)
                    <div class="bg-white rounded-2xl border border-slate-100 shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden flex flex-col group">
                        <!-- Portrait Image Box (aspect-[3/4]) -->
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
                <p class="text-slate-500 text-sm">কোনো পোর্ট্রেইট পোস্ট পাওয়া যায়নি।</p>
            </div>
        @endif
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-10 border-t border-slate-800 text-center text-xs">
        <div class="max-w-7xl mx-auto px-4 flex flex-col sm:flex-row items-center justify-between gap-4">
            <img src="{{ asset('Images/hello-apply.png') }}" alt="Hello Apply Logo" class="h-10 w-auto object-contain brightness-0 invert">
            <p>&copy; {{ date('Y') }} Hello Apply. সর্বস্বত্ব সংরক্ষিত।</p>
        </div>
    </footer>

</body>
</html>