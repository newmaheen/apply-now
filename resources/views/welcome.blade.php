<!DOCTYPE html>
<html lang="bn">
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
<body class="bg-slate-50 text-slate-800">

    <!-- Navbar -->
    <header class="bg-white border-b sticky top-0 z-50 shadow-sm">
        <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">
            <span class="text-2xl font-black text-emerald-600 tracking-tight">Apply<span class="text-orange-500">Now</span></span>
            <a href="https://wa.me/8801619891494?text=Hello%20ApplyNow,%20India%20Visa%20samporke%20jante%20cai" target="_blank" 
               class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-sm font-semibold px-4 py-2 rounded-lg transition-all shadow">
                সরাসরি ইনকোয়ারি
            </a>
        </div>
    </header>

    <!-- Travel India Hero Banner -->
    <section class="relative bg-gradient-to-br from-slate-900 via-emerald-950 to-slate-900 text-white py-20 px-4">
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <span class="inline-block bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 text-xs px-3 py-1 rounded-full font-semibold uppercase tracking-wider mb-4">
                🇮🇳 Travel India with Apply Now
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold leading-tight mb-4">
                সহজ, নির্ভুল ও ঝামেলামুক্ত <br><span class="text-orange-400">ইন্ডিয়ান ভিসা প্রসেসিং</span>
            </h1>
            <p class="text-slate-300 text-base md:text-lg max-w-2xl mx-auto mb-8">
                ট্যুরিস্ট, মেডিকেল কিংবা বিজনেস ভিসা—আপনার ফাইল তৈরি থেকে শুরু করে দ্রুত প্রসেসিং পর্যন্ত সব দায়িত্ব আমাদের।
            </p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="#success-section" class="bg-white/10 hover:bg-white/20 text-white font-medium px-6 py-3 rounded-xl border border-white/20 transition">
                    আমাদের সাকসেস দেখুন
                </a>
                <a href="https://wa.me/8801619891494?text=India%20Visa%20Application%20korbo" target="_blank" class="bg-orange-500 hover:bg-orange-600 text-white font-bold px-7 py-3 rounded-xl shadow-lg transition">
                    ভিসার জন্য আবেদন করুন
                </a>
            </div>
        </div>
    </section>

    <!-- Success Visas Section -->
    <section id="success-section" class="py-16 px-4 max-w-6xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-slate-900">সম্প্রতি প্রাপ্ত সফল ভিসাসমূহ</h2>
            <p class="text-slate-500 mt-2 text-sm md:text-base">আমাদের মাধ্যমে পাওয়া সাম্প্রতিক কিছু সফল ভিসা রেকর্ড</p>
        </div>

        @if($visaSuccesses->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($visaSuccesses as $visa)
                    <div class="bg-white rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition-all overflow-hidden flex flex-col">
                        <div class="relative bg-slate-100 aspect-[4/3] flex items-center justify-center p-2">
                            <img src="{{ asset('storage/' . $visa->image_path) }}" alt="Visa Record" class="w-full h-full object-contain rounded-lg">
                            <span class="absolute top-4 right-4 bg-emerald-600 text-white text-[11px] font-bold px-2.5 py-1 rounded-full shadow">Approved ✓</span>
                        </div>
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <h3 class="font-bold text-slate-800 text-lg mb-2">{{ $visa->title ?? 'Indian Visa Approved' }}</h3>
                                <div class="space-y-1 text-xs text-slate-600">
                                    @if($visa->route)
                                        <p><span class="text-slate-400">অনুমোদিত রুট:</span> <strong class="text-slate-700">{{ $visa->route }}</strong></p>
                                    @endif
                                    @if($visa->issue_date)
                                        <p><span class="text-slate-400">ইস্যুর তারিখ:</span> {{ $visa->issue_date->format('d M, Y') }}</p>
                                    @endif
                                    <!-- @if($visa->expiry_date)
                                        <p><span class="text-slate-400">মেয়াদ উত্তীর্ণ:</span> {{ $visa->expiry_date->format('d M, Y') }}</p>
                                    @endif -->
                                </div>
                            </div>
                            <div class="mt-5 pt-4 border-t border-slate-100">
                                <a href="https://wa.me/8801619891494?text=Ami%20India%20Visa%20korbo" target="_blank" 
                                   class="w-full flex items-center justify-center gap-2 bg-slate-900 hover:bg-emerald-600 text-white text-xs font-semibold py-2.5 px-4 rounded-xl transition-all">
                                    <span>এই বিষয়ে ইনকোয়ারি করুন</span> &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12 bg-white rounded-2xl border border-dashed border-slate-300">
                <p class="text-slate-500">এখনো কোনো ভিসা কার্ড যুক্ত করা হয়নি। অ্যাডমিন প্যানেল থেকে যোগ করুন।</p>
            </div>
        @endif
    </section>

    <footer class="bg-white border-t border-slate-200 py-6 text-center text-xs text-slate-500">
        &copy; {{ date('Y') }} Apply Now. সর্বস্বত্ব সংরক্ষিত।
    </footer>

</body>
</html>