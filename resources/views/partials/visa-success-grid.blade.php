@if(isset($visaSuccesses) && $visaSuccesses->count() > 0)
    <!-- Grid layout: Mobile-এ grid-cols-2 (প্রতি রো-তে ২টি করে), Desktop-এ grid-cols-3 -->
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6 lg:gap-8">
        
        <!-- 1. SPECIAL FIXED FIRST CARD (Next Opportunity) -->
        <div class="attraction-card col-span-2 sm:col-span-1 bg-gradient-to-br from-emerald-950 via-slate-900 to-emerald-900 rounded-3xl border-2 border-emerald-500/50 shadow-2xl shadow-emerald-950/30 p-5 sm:p-8 flex flex-col justify-between text-white relative overflow-hidden">
            <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-emerald-500/20 rounded-full blur-3xl transition-all"></div>
            <div class="relative z-10">
                <span class="inline-block bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 text-[10px] sm:text-xs font-bold px-3 sm:px-4 py-1 sm:py-1.5 rounded-full mb-3 sm:mb-4 shadow-sm" data-bn="✨ পরবর্তী সুযোগ" data-en="✨ Next Opportunity">
                    ✨ পরবর্তী সুযোগ
                </span>
                <h3 class="text-lg sm:text-3xl font-extrabold leading-snug mb-2 sm:mb-3">
                    <span data-bn="পরবর্তী ভিসার সাফল্য" data-en="Next Visa Success">পরবর্তী ভিসার সাফল্য</span> <br><span class="text-emerald-400" data-bn="আপনার জন্যই!" data-en="For You!">আপনার জন্যই!</span>
                </h3>
                <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-4 sm:mb-6" data-bn="আজই আপনার ইন্ডিয়ান ভিসার ফাইল সাবমিট করুন। শতভাগ নির্ভুল প্রসেসিং।" data-en="Submit your Indian visa file today. 100% accurate processing.">
                    আজই আপনার ইন্ডিয়ান ভিসার ফাইল সাবমিট করুন। শতভাগ নির্ভুল প্রসেসিং ও দ্রুত অনুমোদনের নিশ্চয়তা।
                </p>
            </div>
            <div class="relative z-10">
                <a href="https://wa.me/8801848317583?text=Ami%20India%20Visa%20korbo" target="_blank" 
                   class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-emerald-500 to-teal-500 hover:from-emerald-600 hover:to-teal-600 text-white text-xs sm:text-sm font-bold py-2.5 sm:py-3.5 px-4 sm:px-6 rounded-xl shadow-xl transition-all transform active:scale-95">
                    <span data-bn="আজই আবেদন করুন" data-en="Apply Today">আজই আবেদন করুন</span> &rarr;
                </a>
            </div>
        </div>

        <!-- 2. DYNAMIC VISA SUCCESS CARDS (5 cards per page) -->
        @foreach($visaSuccesses->take(5) as $visa)
            <div class="bg-white rounded-2xl sm:rounded-3xl border border-emerald-500/20 shadow-lg sm:shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden flex flex-col group relative">
                <div class="absolute top-0 inset-x-0 h-1.5 sm:h-2 bg-gradient-to-r from-emerald-500 via-teal-400 to-emerald-600"></div>

                <div class="relative bg-slate-950 aspect-[16/10] w-full flex items-center justify-center overflow-hidden border-b border-emerald-100 mt-1.5 sm:mt-2">
                    <img src="{{ asset('storage/' . $visa->image_path) }}" alt="Visa Record" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    
                    <div class="absolute bottom-2 right-2 sm:bottom-3 sm:right-3 bg-gradient-to-r from-emerald-600 to-teal-600 text-white text-[10px] sm:text-xs font-black px-2.5 sm:px-3.5 py-1 sm:py-1.5 rounded-full shadow-2xl border border-emerald-300/40 flex items-center gap-1">
                        <span>✓</span> Visa Approved
                    </div>
                </div>
                
                <div class="p-3 sm:p-6 pt-3 sm:pt-4 flex-1 flex flex-col justify-between bg-gradient-to-b from-white via-emerald-50/20 to-white">
                    <div>
                        <h4 class="font-bold text-slate-900 text-xs sm:text-base mb-2 sm:mb-3 leading-snug line-clamp-2">{{ $visa->title ?? 'Indian Visa Approved' }}</h4>
                        <div class="space-y-1.5 sm:space-y-2 text-[11px] sm:text-xs text-slate-700 mb-3 sm:mb-4 bg-white p-2.5 sm:p-3.5 rounded-xl sm:rounded-2xl border border-emerald-500/15 shadow-inner">
                            @if($visa->route)
                                <div class="flex justify-between items-center">
                                    <span class="text-slate-400 font-semibold" data-bn="অনুমোদিত রুট:" data-en="Approved Route:">অনুমোদিত রুট:</span>
                                    <strong class="text-emerald-950 font-bold truncate max-w-[100px] sm:max-w-none">{{ $visa->route }}</strong>
                                </div>
                            @endif
                            @if($visa->issue_date)
                                <div class="flex justify-between items-center border-t border-slate-100 pt-1 sm:pt-1.5">
                                    <span class="text-slate-400 font-semibold" data-bn="তারিখ:" data-en="Date:">তারিখ:</span>
                                    <span class="font-bold text-slate-800">{{ \Carbon\Carbon::parse($visa->issue_date)->format('d M, Y') }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <a href="https://wa.me/8801848317583?text=Ami%20India%20Visa%20korbo" target="_blank" 
                       class="w-full flex items-center justify-center gap-1 sm:gap-2 bg-gradient-to-r from-slate-900 via-emerald-950 to-slate-900 hover:from-emerald-600 hover:to-teal-600 text-white text-[11px] sm:text-xs font-extrabold py-2.5 sm:py-3 px-3 sm:px-4 rounded-xl transition-all shadow-md sm:shadow-lg shadow-emerald-950/20">
                        <span data-bn="ইনকোয়ারি করুন" data-en="Inquire Now">ইনকোয়ারি করুন</span> &rarr;
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Standard Pagination (Without AJAX) -->
    @if(method_exists($visaSuccesses, 'links'))
        <div class="mt-8 sm:mt-14 flex justify-center overflow-x-auto py-2">
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