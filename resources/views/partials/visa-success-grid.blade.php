@if(isset($visaSuccesses) && $visaSuccesses->count() > 0)
    <!-- Visa Success 2-Row Grid Container with Horizontal Scroll & Auto-Slide Support -->
    <div class="w-full overflow-x-auto no-scrollbar scroll-smooth pb-4" id="visa-grid-container">
        <!-- 2 Rows Grid Layout -->
        <div class="grid grid-rows-2 grid-flow-col gap-4 sm:gap-6 min-w-max px-1">
            
            <!-- 1. SPECIAL PROMO FIRST CARD -->
            <div class="row-span-2 w-[280px] sm:w-[360px] bg-gradient-to-br from-emerald-950 via-slate-900 to-emerald-900 rounded-3xl border-2 border-emerald-500/50 shadow-2xl shadow-emerald-950/30 p-5 sm:p-8 flex flex-col justify-between text-white relative overflow-hidden group">
                <div class="absolute -right-10 -bottom-10 w-36 h-36 bg-emerald-500/20 rounded-full blur-3xl group-hover:bg-emerald-500/30 transition-all"></div>
                <div>
                    <span class="inline-block bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 text-[10px] sm:text-xs font-bold px-3.5 py-1 rounded-full mb-4" data-bn="✨ পরবর্তী সুযোগ" data-en="✨ Next Opportunity">
                        ✨ পরবর্তী সুযোগ
                    </span>
                    <h3 class="text-base sm:text-2xl font-extrabold leading-snug mb-3">
                        <span data-bn="পরবর্তী ভিসার সাফল্য" data-en="Next Visa Success">পরবর্তী ভিসার সাফল্য</span> <br class="hidden sm:block"><span class="text-emerald-400" data-bn="আপনার জন্যই!" data-en="For You!">আপনার জন্যই!</span>
                    </h3>
                    <p class="text-slate-300 text-xs sm:text-sm leading-relaxed mb-6 line-clamp-3 sm:line-clamp-none" data-bn="আজই আপনার ইন্ডিয়ান ভিসার ফাইল সাবমিট করুন। শতভাগ নির্ভুল প্রসেসিং।" data-en="Submit your Indian visa file today. 100% accurate processing.">
                        আজই আপনার ইন্ডিয়ান ভিসার ফাইল সাবমিট করুন। শতভাগ নির্ভুল প্রসেসিং ও দ্রুত অনুমোদনের নিশ্চয়তা।
                    </p>
                </div>
                <a href="https://wa.me/8801619891494?text=Ami%20India%20Visa%20korbo" target="_blank" 
                   class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-emerald-500 to-teal-500 hover:from-emerald-600 hover:to-teal-600 text-white text-xs sm:text-sm font-bold py-3 px-4 rounded-xl shadow-xl transition-all">
                    <span data-bn="আজই আবেদন করুন" data-en="Apply Today">আজই আবেদন করুন</span> &rarr;
                </a>
            </div>

            <!-- 2. DYNAMIC PREMIUM VISA SUCCESS CARDS -->
            @foreach($visaSuccesses as $visa)
                <div class="row-span-1 w-[280px] sm:w-[360px] bg-white rounded-3xl border-2 border-emerald-500/20 shadow-xl shadow-emerald-950/5 hover:shadow-2xl hover:border-emerald-500/50 transition-all duration-300 overflow-hidden flex flex-col group relative">
                    <!-- Glowing Emerald Accent Top Bar -->
                    <div class="absolute top-0 inset-x-0 h-1.5 bg-gradient-to-r from-emerald-500 via-teal-400 to-emerald-600"></div>

                    <div class="flex items-center gap-3 p-3.5 bg-gradient-to-b from-white to-emerald-50/20">
                        <!-- Landscape Image Thumbnail -->
                        <div class="relative bg-slate-950 w-24 h-16 rounded-xl overflow-hidden flex-shrink-0 border border-emerald-100">
                            <img src="{{ asset('storage/' . $visa->image_path) }}" alt="Visa Record" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div class="absolute bottom-0.5 right-0.5 bg-emerald-600 text-white text-[8px] font-bold px-1.5 py-0.5 rounded-md">
                                ✓
                            </div>
                        </div>
                        
                        <!-- Details Body (Compact for 2-row layout) -->
                        <div class="flex-1 min-w-0">
                            <h3 class="font-extrabold text-slate-900 text-xs sm:text-sm truncate group-hover:text-emerald-800 transition-colors">
                                {{ $visa->title ?? 'Indian Visa Approved' }}
                            </h3>
                            <div class="text-[11px] text-slate-600 mt-1 space-y-0.5">
                                @if($visa->route)
                                    <p class="truncate"><span class="text-slate-400" data-bn="রুট:" data-en="Route:">রুট:</span> <strong class="text-emerald-950">{{ $visa->route }}</strong></p>
                                @endif
                                @if($visa->issue_date)
                                    <p><span class="text-slate-400" data-bn="তারিখ:" data-en="Date:">তারিখ:</span> {{ $visa->issue_date->format('d M, Y') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <!-- Pagination -->
    @if(method_exists($visaSuccesses, 'links'))
        <div class="mt-8 sm:mt-10 flex justify-center overflow-x-auto py-2">
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