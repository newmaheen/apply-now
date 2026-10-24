@if(isset($visaSuccesses) && $visaSuccesses->count() > 0)
    <!-- Prominent Large Visa Success Grid (Exactly 6 cards per page: 1 JS Animated Promo + 5 Visa Cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        
        <!-- 1. SPECIAL JS-ANIMATED ATTRACTION PROMO FIRST CARD -->
        <div class="attraction-card bg-gradient-to-br from-emerald-950 via-slate-900 to-emerald-900 rounded-3xl border-2 border-emerald-500/50 shadow-2xl shadow-emerald-950/30 p-6 sm:p-8 flex flex-col justify-between text-white relative overflow-hidden">
            <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-emerald-500/20 rounded-full blur-3xl transition-all"></div>
            <div class="relative z-10">
                <span class="inline-block bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 text-xs font-bold px-4 py-1.5 rounded-full mb-4 shadow-sm" data-bn="✨ পরবর্তী সুযোগ" data-en="✨ Next Opportunity">
                    ✨ পরবর্তী সুযোগ
                </span>
                <h3 class="text-xl sm:text-3xl font-extrabold leading-snug mb-3">
                    <span data-bn="পরবর্তী ভিসার সাফল্য" data-en="Next Visa Success">পরবর্তী ভিসার সাফল্য</span> <br><span class="text-emerald-400" data-bn="আপনার জন্যই!" data-en="For You!">আপনার জন্যই!</span>
                </h3>
                <p class="text-slate-300 text-sm leading-relaxed mb-6" data-bn="আজই আপনার ইন্ডিয়ান ভিসার ফাইল সাবমিট করুন। শতভাগ নির্ভুল প্রসেসিং।" data-en="Submit your Indian visa file today. 100% accurate processing.">
                    আজই আপনার ইন্ডিয়ান ভিসার ফাইল সাবমিট করুন। শতভাগ নির্ভুল প্রসেসিং ও দ্রুত অনুমোদনের নিশ্চয়তা।
                </p>
            </div>
            <div class="relative z-10">
                <a href="https://wa.me/8801619891494?text=Ami%20India%20Visa%20korbo" target="_blank" 
                   class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-emerald-500 to-teal-500 hover:from-emerald-600 hover:to-teal-600 text-white text-sm font-bold py-3.5 px-6 rounded-xl shadow-xl transition-all transform active:scale-95">
                    <span data-bn="আজই আবেদন করুন" data-en="Apply Today">আজই আবেদন করুন</span> &rarr;
                </a>
            </div>
        </div>

        <!-- 2. DYNAMIC LARGE VISA SUCCESS CARDS (Cleaned up, no C icon) -->
        @foreach($visaSuccesses->take(5) as $visa)
            <div class="bg-white rounded-3xl border-2 border-emerald-500/20 shadow-xl shadow-emerald-950/5 hover:shadow-2xl hover:border-emerald-500/50 transition-all duration-300 overflow-hidden flex flex-col group relative">
                <!-- Glowing Emerald Accent Top Bar -->
                <div class="absolute top-0 inset-x-0 h-2 bg-gradient-to-r from-emerald-500 via-teal-400 to-emerald-600"></div>

                <!-- Large Landscape Image Box (Directly prominent) -->
                <div class="relative bg-slate-950 aspect-[16/10] w-full flex items-center justify-center overflow-hidden border-b border-emerald-100 mt-2">
                    <img src="{{ asset('storage/' . $visa->image_path) }}" alt="Visa Record" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    
                    <!-- Premium Approved Badge -->
                    <div class="absolute bottom-3 right-3 bg-gradient-to-r from-emerald-600 to-teal-600 text-white text-xs font-black px-3.5 py-1.5 rounded-full shadow-2xl border border-emerald-300/40 flex items-center gap-1">
                        <span>✓</span> Visa Approved
                    </div>
                </div>
                
                <!-- Details Body -->
                <div class="p-5 sm:p-6 pt-4 flex-1 flex flex-col justify-between bg-gradient-to-b from-white via-emerald-50/20 to-white">
                    <div>
                        <h4 class="font-bold text-slate-900 text-base mb-3 leading-snug">{{ $visa->title ?? 'Indian Visa Approved' }}</h4>
                        <div class="space-y-2 text-xs text-slate-700 mb-4 bg-white p-3.5 rounded-2xl border border-emerald-500/15 shadow-inner">
                            @if($visa->route)
                                <div class="flex justify-between items-center">
                                    <span class="text-slate-400 font-semibold" data-bn="অনুমোদিত রুট:" data-en="Approved Route:">অনুমোদিত রুট:</span>
                                    <strong class="text-emerald-950 font-bold">{{ $visa->route }}</strong>
                                </div>
                            @endif
                            @if($visa->issue_date)
                                <div class="flex justify-between items-center border-t border-slate-100 pt-1.5">
                                    <span class="text-slate-400 font-semibold" data-bn="তারিখ:" data-en="Date:">তারিখ:</span>
                                    <span class="font-bold text-slate-800">{{ \Carbon\Carbon::parse($visa->issue_date)->format('d M, Y') }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Action Button -->
                    <a href="https://wa.me/8801619891494?text=Ami%20India%20Visa%20korbo" target="_blank" 
                       class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-slate-900 via-emerald-950 to-slate-900 hover:from-emerald-600 hover:to-teal-600 text-white text-xs font-extrabold py-3 px-4 rounded-xl transition-all shadow-lg shadow-emerald-950/20">
                        <span data-bn="ইনকোয়ারি করুন" data-en="Inquire Now">ইনকোয়ারি করুন</span> &rarr;
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    @if(method_exists($visaSuccesses, 'links'))
        <div class="mt-10 sm:mt-14 flex justify-center overflow-x-auto py-2">
            <div class="inline-flex rounded-xl shadow-sm bg-white border border-slate-200 p-1.5 gap-1 pagination-links">
                {{ $visaSuccesses->onEachSide(1)->links('pagination::simple-tailwind') }}
            </div>
        </div>
    @endif
@else
    <div class="text-center py-16 bg-white rounded-3xl border border-dashed border-slate-200">
        <p class="text-slate-500 text-sm" data-bn="এখনো কোনো ভিসা কার্ড যুক্ত করা হয়নি।" data-en="No visa cards have been added yet.">এখনো কোনো ভিসা কার্ড যুক্ত করা হয়নি।</p>
    </div>
@endif