@if(isset($visaSuccesses) && $visaSuccesses->count() > 0)
    <!-- Mind-blowing Visa Success Grid: PC-তে প্রমোশনাল কার্ড সহ মোট ৬টি কার্ড, মোবাইল ২ কলাম -->
    <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-6 lg:gap-8">
        
        <!-- 1. SPECIAL PROMO FIRST CARD -->
        <div class="bg-gradient-to-br from-emerald-950 via-slate-900 to-emerald-900 rounded-2xl sm:rounded-3xl border-2 border-emerald-500/50 shadow-xl shadow-emerald-950/20 p-4 sm:p-7 flex flex-col justify-between text-white relative overflow-hidden group">
            <div class="absolute -right-10 -bottom-10 w-32 h-32 bg-emerald-500/20 rounded-full blur-2xl group-hover:bg-emerald-500/30 transition-all"></div>
            <div>
                <span class="inline-block bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 text-[9px] sm:text-[11px] font-bold px-2.5 py-0.5 sm:py-1 rounded-full mb-3" data-bn="✨ পরবর্তী সুযোগ" data-en="✨ Next Opportunity">
                    ✨ পরবর্তী সুযোগ
                </span>
                <h3 class="text-sm sm:text-2xl font-extrabold leading-snug mb-2 sm:mb-3">
                    <span data-bn="পরবর্তী ভিসার সাফল্য" data-en="Next Visa Success">পরবর্তী ভিসার সাফল্য</span> <br class="hidden sm:block"><span class="text-emerald-400" data-bn="আপনার জন্যই!" data-en="For You!">আপনার জন্যই!</span>
                </h3>
                <p class="text-slate-300 text-[11px] sm:text-sm leading-relaxed mb-4 sm:mb-6 line-clamp-3 sm:line-clamp-none" data-bn="আজই আপনার ইন্ডিয়ান ভিসার ফাইল সাবমিট করুন। শতভাগ নির্ভুল প্রসেসিং।" data-en="Submit your Indian visa file today. 100% accurate processing.">
                    আজই আপনার ইন্ডিয়ান ভিসার ফাইল সাবমিট করুন। শতভাগ নির্ভুল প্রসেসিং ও দ্রুত অনুমোদনের নিশ্চয়তা।
                </p>
            </div>
            <a href="https://wa.me/8801619891494?text=Ami%20India%20Visa%20korbo" target="_blank" 
               class="w-full flex items-center justify-center gap-1.5 bg-gradient-to-r from-emerald-500 to-emerald-600 hover:from-emerald-600 hover:to-emerald-700 text-white text-[10px] sm:text-xs font-bold py-2.5 sm:py-3 px-3 sm:px-4 rounded-xl shadow-lg transition-all">
                <span data-bn="আজই আবেদন করুন" data-en="Apply Today">আজই আবেদন করুন</span> &rarr;
            </a>
        </div>

        <!-- 2. MIND-BLOWING PREMIUM VISA SUCCESS CARDS -->
        @foreach($visaSuccesses->take(5) as $visa)
            <div class="bg-white/90 backdrop-blur-md rounded-2xl sm:rounded-3xl border-2 border-emerald-500/20 shadow-xl shadow-emerald-950/5 hover:shadow-2xl hover:border-emerald-500/60 transition-all duration-300 overflow-hidden flex flex-col group relative">
                <!-- Glowing Emerald Accent Top Bar -->
                <div class="absolute top-0 inset-x-0 h-1.5 bg-gradient-to-r from-emerald-500 via-teal-400 to-emerald-600"></div>

                <!-- Landscape Image Box with Glossy Container -->
                <div class="relative bg-slate-950 aspect-[16/10] w-full flex items-center justify-center overflow-hidden border-b border-emerald-100">
                    <img src="{{ asset('storage/' . $visa->image_path) }}" alt="Visa Record" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    
                    <!-- Premium Approved Badge -->
                    <div class="absolute top-2 right-2 sm:top-3 sm:right-3 bg-gradient-to-r from-emerald-600 to-teal-600 text-white text-[9px] sm:text-[11px] font-black px-3 py-1 rounded-full shadow-2xl border border-emerald-300/40 flex items-center gap-1 animate-pulse">
                        <span>✓</span> Approved
                    </div>
                </div>
                
                <!-- Details Body -->
                <div class="p-3.5 sm:p-6 flex-1 flex flex-col justify-between bg-gradient-to-b from-white via-emerald-50/20 to-white">
                    <div>
                        <h3 class="font-extrabold text-slate-900 text-xs sm:text-base mb-2 sm:mb-3 leading-snug line-clamp-2 group-hover:text-emerald-800 transition-colors">
                            {{ $visa->title ?? 'Indian Visa Approved' }}
                        </h3>
                        
                        <div class="space-y-1.5 text-[10px] sm:text-xs text-slate-700 mb-3 sm:mb-5 bg-white p-2.5 sm:p-3.5 rounded-xl sm:rounded-2xl border border-emerald-500/15 shadow-inner">
                            @if($visa->route)
                                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center gap-0.5 sm:gap-2">
                                    <span class="text-slate-400 font-semibold shrink-0" data-bn="অনুমোদিত রুট:" data-en="Approved Route:">অনুমোদিত রুট:</span>
                                    <strong class="text-emerald-950 sm:text-right truncate font-bold">{{ $visa->route }}</strong>
                                </div>
                            @endif
                            @if($visa->issue_date)
                                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center border-t border-slate-100 pt-1">
                                    <span class="text-slate-400 font-semibold" data-bn="তারিখ:" data-en="Date:">তারিখ:</span>
                                    <span class="font-bold text-slate-800">{{ $visa->issue_date->format('d M, Y') }}</span>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <!-- Action Button -->
                    <a href="https://wa.me/8801619891494?text=Ami%20India%20Visa%20korbo" target="_blank" 
                       class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-slate-900 via-emerald-950 to-slate-900 hover:from-emerald-600 hover:to-teal-600 text-white text-[10px] sm:text-xs font-extrabold py-2.5 sm:py-3 px-3 sm:px-4 rounded-xl transition-all shadow-lg shadow-emerald-950/20">
                        <span data-bn="ইনকোয়ারি করুন" data-en="Inquire Now">ইনকোয়ারি করুন</span> &rarr;
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    @if(method_exists($visaSuccesses, 'links'))
        <div class="mt-8 sm:mt-12 flex justify-center overflow-x-auto py-2">
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